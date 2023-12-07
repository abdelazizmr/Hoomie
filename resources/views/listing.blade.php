<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

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

        {{-- <div class="section-title">
          <h2>Hoomies</h2>
        </div> --}}
        <section id="portfolio" class="portfolio">
        <ul id="portfolio-flters" class="d-flex justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="100">
          <li data-filter="*" class="filter-active">All</li>
          <li data-filter="*">Students</li>
          <li data-filter="*">employees</li>
          <li data-filter="*">Men</li>
          <li data-filter="*">Women</li>
          <li data-filter="*">
            <select style="width:100px" >
              <option value="city">city</option>
            </select>
          </li>
          <li data-filter="*">Budget:<input style="width:100px" type="number"></li>
        </ul>
        </section>
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

                <button class="buttonMessage">Message</button>

              </div>
            </div>
          </div>
          @endforeach

          <!-- <div class="col-lg-6 mt-4 " data-aos="zoom-in" data-aos-delay="200">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="{{ asset('img/team-2.jpg') }}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Sarah Jhonson</h4>
                <span  class="fonction">Etudiant </span>
                <p>Morroco , Rabat</p>
                <span>Room: 333</span><span> $ USD/month</span>

                <button class="buttonMessage">Message</button>

              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4" data-aos="zoom-in" data-aos-delay="300">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="{{ asset('img/team-3.jpg') }}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Mick Whatson</h4>
                <span class="fonction" >Employer</span>
                <p>Morroco , Casa Blanca</p>
                <span>Room: 333</span><span> $ USD/month</span>

                <button class="buttonMessage">Message</button>

              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4" data-aos="zoom-in" data-aos-delay="400">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="{{ asset('img/team-4.jpg') }}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Amanda Jepson</h4>
                <span class="fonction">Etudiant</span>
                <p>Morroco , Martil</p>
                <span>Room: 333</span><span> $ USD/month</span>
                <button class="buttonMessage">Message</button>

              </div>
            </div>
          </div> -->

        </div>

      </div>
    </section><!-- End hoomies Section -->



  </main><!-- End #main -->



</body>

</html>
