<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  <title>listing</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

  <!-- Google Fonts -->
  <!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet"> -->


  <link href="{{ asset('/css/listing.css') }}" rel="stylesheet">


</head>

<body>




    @extends('layouts.base')


    <!-- ======= hoomies Section ======= -->
    <section id="hoomies" class="hoomies section-bg">
      <div class="container" data-aos="fade-up">
        <form method="post" action="{{route('form')}}">
          @csrf
        
          <section id="portfolio" class="portfolio">
          <ul id="portfolio-flters" class="d-flex justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="100">
            
            <li data-filter="*">
              <select style="width:150px" name="category">
                <option value="">All Categorys</option>
                @if (isset($category) && $category != null && $category=="student")
                  <option value="student" selected>Students</option>
                  <option value="employee">employees</option>
                @elseif (isset($category) && $category != null && $category=="employee")
                  <option value="student">Students</option>
                  <option value="employee" selected>employees</option>
                @else
                  <option value="student">Students</option>
                  <option value="employee">employees</option>
                @endif

              </select>
            </li>
            <li data-filter="*">
              <select style="width:150px" name="gender">
                <option value="">All Genders</option>
                @if (isset($gender) && $gender != null && $gender=="male") 
                  <option value="male" selected>Men</option>
                  <option value="female" >Women</option>
                @elseif (isset($gender) && $gender != null && $gender=="female")
                  <option value="male" >Men</option>
                  <option value="female" selected>Women</option>
                @else
                  <option value="male" >Men</option>
                  <option value="female">Women</option>
                @endif
              </select>
            </li>
            
            <li data-filter="*">
              <select style="width:150px" name="city">
                
                  <option value="">All Cities</option>
                  @foreach ($citys as $city)
                    @if (isset($cityName) && $cityName != null && $cityName==$city->name )
                      <option value="{{ $city->name }}"  selected>{{ $city->name }}</option>
                    @else
                      <option value="{{ $city->name }}">{{ $city->name }}</option>
                    @endif
                  @endforeach
              </select>
            </li>
            <li data-filter="*">
              <input type="text" @if ((isset($budgetMin) && $budgetMin != null)) value="{{$budgetMin}}" @endif   id="numericInput"  style="width: 120px" name="budgetMin" step="10" min="1" placeholder="Min">
            </li>
            <li data-filter="*">
              <input type="text" @if ((isset($budgetMax) && $budgetMax != null)) value="{{$budgetMax}}" @endif  id="numericInput"  style="width: 120px" name="budgetMax" step="10" min="1" placeholder="Max">
            </li>
          
            <li data-filter="*" ><button type="submit" class="searcheButton">Search</button></li>
          </ul>
          </section>
        </form>
        
          {{-- @if (isset($budgetMin) && $budgetMin != null) 
            <h2>{{$budgetMin}}</h2>
            @endif --}}

        <div class="row">
          @foreach ($posts as $post)
          <div class="col-lg-6 mt-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="{{$post->user->image}}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>
                    @if ($post->user)
                        {{ $post->user->name }}
                    @else
                        User Not Found
                    @endif
                </h4>
                <span class="fonction">{{ $post->description }}</span>
                <p>{{ $post->move_in }}</p>
                <span>Room:{{ $post->budget }}</span><span> $ USD/month</span>

                <a href="{{ route('chatify.messages') }}" class="buttonMessage">Message</a>
              </div>
            </div>
          </div>
          @endforeach

          
        </div>
       
      
      </div>
    <div class="paginationListing"> {{ $posts->links() }}</div>

    </section><!-- End hoomies Section -->



  </main><!-- End #main -->



</body>
<script>
  document.getElementById("numericInput").addEventListener("keypress", function(event) {
  var key = event.keyCode;
  // Only allow numbers to be entered
  if (key < 48 || key > 57) {
    event.preventDefault();
  }
});
</script>

</html>