@extends('layouts.base')
@section('content')
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Hoomie</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon" />
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
      rel="stylesheet"
    />

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet" />
    <link
      href="assets/vendor/bootstrap/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
    href="assets/vendor/bootstrap-icons/bootstrap-icons.css"
    rel="stylesheet"
  />
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
    <link
        href="assets/vendor/glightbox/css/glightbox.min.css"
        rel="stylesheet"
    />
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet" />
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet" />
</head>
<body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top"></header>
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
      <div class="container">
        <div class="row">
          <div
            class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1"
            data-aos="fade-up"
            data-aos-delay="200"
          >
            <h1>
              Match, Chat, Share :<br />
              Find Your Ideal Roommate.
            </h1>
            <form action="{{route('form')}}" method="post" id="cityFormfirst">
              @csrf
              
           
            <div class="input-group mb-3">
                <input
                  name="city"
                  type="text"
                  class="form-control"
                  placeholder="Enter city name .."
                  aria-label="City or Zip Code"
                  aria-describedby="button-addon2"
                />
                <button class="btn btn-light" type="submit" id="button-addon2">
                  <img src="assets/img/arrow.svg" alt="Arrow" />
                </button>
              </div>
            </form>
            </div>
            <div
              class="col-lg-6 order-1 order-lg-2 hero-img"
              data-aos="zoom-in"
              data-aos-delay="200"
            >
              <img src="assets/img/n.png" class="img-fluid animated" alt="" />
            </div>
          </div>
        </div>
      </section>
      <!-- End Hero -->
      <main id="main">
        <!-- ======= Team Section ======= -->
        <section id="team" class="team section-bg">
          <div class="container" data-aos="fade-up">
            <div class="row">
              <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="100">
                <div class="member d-flex align-items-start">
                  <div class="member-info">
                    <a href="{{route('app.findplace')}}" class="get-started-btn scrollto">
                      <h4 >Find a place</h4>
                    </a>
                    <!-- End Cta Section -->
                    <!-- ======= Portfolio Section ======= -->
                  </div>
                </div>
              </div>
              <div
                class="col-lg-6 mt-4 mt-lg-0"
                data-aos="zoom-in"
                data-aos-delay="200"
              >
              <div class="member d-flex align-items-start">
                <div class="member-info">
                  <a href="{{route('app.listings')}}" class="get-started-btn scrollto">
                    <h4>Find a roomate</h4>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Team Section -->

      <!-- ======= Services Section ======= -->
      <section id="services" class="services section-bg">
        <form action="{{route('form')}}" method="post" id="cityForm">
          @csrf
          <input id="cityNameInput" type="hidden" name="city" value="">
        </form>

        <div class="container" data-aos="fade-up">
          <div class="section-title">
            <h2>View Rooms in Popular Cities in Morocco</h2>
          </div>
          <div class="row">
            <div
              class="col-xl-3 col-md-6 d-flex align-items-stretch"
              data-aos="zoom-in"
              data-aos-delay="100"
            >
              <div class="icon-box">
                <div class="card-img">
                  <img data-city="Casablanca" src="assets/img/casa.jpg" alt="" class="img-fluid cityImage"  style="height:250px;width:230px"/>
                </div>
                <h4 data-city="Casablanca" class="cityImage" >  Casablanca</h4>
              </div>
            </div>

            <div
              class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0"
              data-aos="zoom-in"
              data-aos-delay="200"
            >
              <div class="icon-box">
                <div class="card-img">
                  <img data-city="Tétouan" src="assets/img/tetouan.jpg" alt="" class="img-fluid  cityImage" style="height:250px;width:230px" />
                </div>
                <h4 data-city="Casablanca" class="cityImage" >Tétouan</h4>
              </div>
            </div>
            <div
            class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0"
            data-aos="zoom-in"
            data-aos-delay="300"
          >
            <div class="icon-box">
              <div class="card-img">
                <img data-city="Marrakech" src="assets/img/kech.jpg" alt="" class="img-fluid cityImage" style="height:250px;width:230px" />
              </div>
              <h4 data-city="Casablanca" class="cityImage" >Marrakech</h4>
            </div>
          </div>

          <div
            class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0"
            data-aos="zoom-in"
            data-aos-delay="400"
          >
            <div class="icon-box">
              <div class="card-img">
                <img data-city="Tangier" src="assets/img/tanger.jpg" alt="" class="img-fluid cityImage" style="height:250px;width:230px" />
              </div>
              <h4 data-city="Casablanca" class="cityImage" >Tanger</h4>
            </div>
          </div>
        </div>
      </div>
    </section>
  <!-- End Services Section -->

      <!-- ======= Why Us Section ======= -->
      <section id="about" class="about">
        <div class="container" data-aos="fade-up">
          <div class="section-title">
            <h2>About Us</h2>
          </div>
          <section id="why-us" class="why-us section-bg">
            <div class="container-fluid" data-aos="fade-up">
              <div class="row">
                <div
                  class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch order-2 order-lg-1"
                >
                <div class="content">
                    <p>
                      Unlock the ideal living situation with our
                      roommate-matching app. Discover compatible roommates who
                      share your interests and lifestyle effortlessly. Simplify
                      your search and embark on a harmonious living experience
                      today.
                    </p>
                    <ul>
                      <li><i class="ri-check-double-line"></i> point 1</li>
                      <li><i class="ri-check-double-line"></i> point 1</li>
                      <li><i class="ri-check-double-line"></i> point 1</li>
                    </ul>
                  </div>
                </div>

                <div
                  class="col-lg-5 align-items-stretch order-1 order-lg-2 img"
                  style="background-image: url('assets/img/why-us.png')"
                  data-aos="zoom-in"
                  data-aos-delay="150"
                >
                  &nbsp;
                </div>
              </div>
            </div>
          </section>
        </div>
    </section>
    <!-- End Why Us Section -->
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Contact</h2>
          <p>
            Get in Touch <br />Have a question, suggestion, or just want to
            say hello? We'd love to hear from you.
          </p>
        </div>
        <div class="row">
          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>
                  Avenue Moulay Hassan, BP : 209 Martil, Martil 93150, Maroc
                </p>
              </div>
              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>echCoding@gmail.com</p>
              </div>
              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+212 632 194 661</p>
              </div>
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3243.3877542867244!2d-5.277499226054853!3d35.61816627260763!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd0b44d173337dd5%3A0xffb4711fe29a3692!2sEcole%20Normale%20Sup%C3%A9rieure%20T%C3%A9touan!5e0!3m2!1sfr!2sus!4v1701503961621!5m2!1sfr!2sus"
                frameborder="0"
                style="border: 0; width: 100%; height: 290px"
                allowfullscreen
              ></iframe>
            </div>
          </div>
          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form
              action="forms/contact.php"
              method="post"
              role="form"
              class="php-email-form"
            >
            <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Your Name</label>
                  <input
                    type="text"
                    name="name"
                    class="form-control"
                    id="name"
                    required
                  />
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Your Email</label>
                  <input
                    type="email"
                    class="form-control"
                    name="email"
                    id="email"
                    required
                  />
                </div>
              </div>
              <div class="form-group">
                <label for="name">Subject</label>
                <input
                  type="text"
                  class="form-control"
                  name="subject"
                  id="subject"
                  required
                />
              </div>
              <div class="form-group">
                <label for="name">Message</label>
                <textarea
                  class="form-control"
                  name="message"
                  rows="10"
                  required
                ></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">
                  Your message has been sent. Thank you!
                </div>
              </div>
              <div class="text-center">
                <button type="submit">Send Message</button>
              </div>
            </form>
        </div>
      </div>
    </div>
  </section>

  <!-- End Contact Section -->
</main>
<!-- End #main -->
<!-- Vendor JS Files -->
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>

 <!-- Template Main JS File -->
 <script src="assets/js/main.js"></script>
 <script>
  
    // document.getElementById('submitFormLink0').addEventListener('click', function() {
    // document.getElementById('myForm0').submit()});
    // ocument.getElementById('submitFormLink1').addEventListener('click', function() {
    // document.getElementById('myForm1').submit()});
    // ocument.getElementById('submitFormLink2').addEventListener('click', function() {
    // document.getElementById('myForm2').submit()});
    // ocument.getElementById('submitFormLink3').addEventListener('click', function() {
    // document.getElementById('myForm3').submit()});
    
    document.querySelectorAll('.cityImage').forEach(function(image) {
    image.addEventListener('click', function() {
        var cityName = image.getAttribute('data-city');
        
        // Set the city name in the hidden input field
        document.getElementById('cityNameInput').value = cityName;
        
        // Submit the form
        document.getElementById('cityForm').submit();
      });
});

  </script>

 </body>
</html>

@endsection
