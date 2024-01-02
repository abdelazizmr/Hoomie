<!DOCTYPE html>
<html lang="en">


<head>

  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Roommite Matching</title>
  <style>
        /* Interests design -N */
        body {
    background: #eee
}

#regForm {
    background-color: #ffffff;
    margin: 0px auto;
    font-family: Raleway;
    padding: 40px;
    border-radius: 10px
}

#register{

  color: #344C6C;
}

h1 {
    text-align: center
}

input {
    padding: 10px;
    width: 100%;
    font-size: 17px;
    font-family: Raleway;
    border: 1px solid #aaaaaa;
    border-radius: 10px;
    -webkit-appearance: none;
}



.tab input:focus{

  border:1px solid #344C6C !important;
  outline: none;
}

input.invalid {

    border:1px solid #e03a0666;
}

.tab {
    display: none
}

button {
    background-color: #344C6C;
    color: #ffffff;
    border: none;
    border-radius: 50%;
    padding: 10px 20px;
    font-size: 17px;
    font-family: Raleway;
    cursor: pointer
}

button:hover {
    opacity: 0.8
}

button:focus{

  outline: none !important;
}

#prevBtn {
    background-color: #bbbbbb
}


.all-steps{
      text-align: center;
    margin-top: 30px;
    margin-bottom: 30px;
    width: 100%;
    display: inline-flex;
    justify-content: center;
}

.step {
       height: 40px;
    width: 40px;
    margin: 0 2px;
    background-color: #bbbbbb;
    border: none;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 15px;
    color: #344C6C;
    opacity: 0.5;
}

.step.active {
    opacity: 1
}


.step.finish {
   color: #fff;
   background: #344C6C;
   opacity: 1;

}



.all-steps {
    text-align: center;
    margin-top: 30px;
    margin-bottom: 30px
}

.thanks-message {
    display: none
}
    </style>
     <!-- Bootstrap CSS via CDN -->
     <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">

<!-- Font Awesome CSS via CDN -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">


  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link id="rtl-link" rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/bootstrap.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/vendors/ion.rangeSlider.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/font-awesome.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/feather-icon.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/animate.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/slick/slick.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/slick/slick-theme.css')}}">
  <link id="color-link" rel="stylesheet" type="text/css" href="{{asset('assets/css/demo4.css')}}">

  <link href="assets/css/style.css" rel="stylesheet">

    @stack('styles')

</head>

<body class="theme-color4 light ltr">
    <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-inner-pages">
    <div class="container d-flex align-items-center">
        <div class="logo me-auto">
            <a href="{{route('app.index')}}" class="logo-link">
                <img src="{{asset('assets/images/logo2.png')}}" class="h-logo img-fluid blur-up lazyload"
                    alt="logo" >
            </a>

        </div>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

        <nav id="navbar" class="navbar">
            <ul>
            <li><a class="nav-link scrollto " href="/listings" style="font-size: 18px">Listings</a></li>
            <li><a class="nav-link scrollto" href="/findplace" style="font-size: 18px">Places</a></li>
            <li><a class="nav-link scrollto" href="/chatify" style="font-size: 18px">Messages</a></li>
            <li><a class="nav-link scrollto" href="/#contact" style="font-size: 18px">Contact Us</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->
        <div class="menu-right">
            <ul>
                <li class="onhover-dropdown">

                    <div class="cart-media name-usr" style="color: white; margin-top:10px;">

                    <!-- @auth

                        <span>{{Auth::user()->name}}</span>
                    @endauth -->
                    <i data-feather="user"></i>
                    </div>
                    <div class="onhover-div profile-dropdown">
                        <ul>
                            @if (Route::has('login'))
                                @auth
                                        <li>
                                            <a href="{{route('dashboard.profile')}}" class="d-block">My Profile</a>
                                        </li>
                                        <li>
                                            <a href="{{route('users.index')}}" class="d-block">My Preference</a>
                                        </li>

                                    <li>
                                        <a href="{{route('logout')}}" onclick="event.preventDefault();document.getElementById('formlogout').submit();" class="d-block">Logout</a>
                                        <form id="formlogout" action="{{route('logout')}}" method="POST">
                                            @csrf
                                        </form>
                                    </li>
                            @else
                                <li>
                                    <a href="{{route('login')}}" class="d-block">Login</a>
                                </li>
                                <li>
                                    <a href="{{route('register')}}" class="d-block">Register</a>
                                </li>
                                @endauth
                            @endif
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
  </header>
  <!-- End Header -->


    @yield('content')

    <div id="qvmodal"></div>

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <div>
                <a href="{{route('app.index')}}" >
                    <img src="{{asset('assets/images/logo.png')}}" alt="logo" style=" margin-top: -8%; width:220px">
                </a>
            </div>
            <h5>Match, Chat, Share : Find Your Ideal Roommate.</h5>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>About us</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Blogs</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Who we are</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Contact Us</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>New Categories</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Find a Place</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Find a Roomate</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Social Networks</h4>
            <p>Never miss any updates or new profile we reveal, stay updated.</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

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

  <div class="bg-overlay"></div>
  <script src="{{asset('assets/js/jquery-3.5.1.min.js')}}"></script>
  <script src="{{asset('assets/js/bootstrap/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/js/feather/feather.min.js')}}"></script>
  <script src="{{asset('assets/js/lazysizes.min.js')}}"></script>
  <script src="{{asset('assets/js/slick/slick.js')}}"></script>
  <script src="{{asset('assets/js/slick/slick-animation.min.js')}}"></script>
  <script src="{{asset('assets/js/slick/custom_slick.js')}}"></script>
  <script src="{{asset('assets/js/price-filter.js')}}"></script>
  <script src="{{asset('assets/js/ion.rangeSlider.min.js')}}"></script>
  <script src="{{asset('assets/js/filter.js')}}"></script>
  <script src="{{asset('assets/js/newsletter.js')}}"></script>
  <script src="{{asset('assets/js/cart_modal_resize.js')}}"></script>
  <script src="{{asset('assets/js/bootstrap/bootstrap-notify.min.js')}}"></script>
  <script src="{{asset('assets/js/theme-setting.js')}}"></script>
  <script src="{{asset('assets/js/script.js')}}"></script>
  <script>
      $(function () {
          $('[data-bs-toggle="tooltip"]').tooltip()
      });
  </script>
<script>
        // interests design -N
        var currentTab = 0;
              document.addEventListener("DOMContentLoaded", function(event) {


              showTab(currentTab);

              });

              function showTab(n) {
              var x = document.getElementsByClassName("tab");
              x[n].style.display = "block";
              if (n == 0) {
              document.getElementById("prevBtn").style.display = "none";
              } else {
              document.getElementById("prevBtn").style.display = "inline";
              }
              if (n == (x.length - 1)) {
              document.getElementById("nextBtn").innerHTML = '<i class="fa fa-angle-double-right"></i>';
              } else {
              document.getElementById("nextBtn").innerHTML = '<i class="fa fa-angle-double-right"></i>';
              }
              fixStepIndicator(n)
              }

              function nextPrev(n) {
              var x = document.getElementsByClassName("tab");
              if (n == 1 && !validateForm()) return false;
              x[currentTab].style.display = "none";
              currentTab = currentTab + n;
              if (currentTab >= x.length) {

              document.getElementById("nextprevious").style.display = "none";
              document.getElementById("all-steps").style.display = "none";
              document.getElementById("register").style.display = "none";
              document.getElementById("text-message").style.display = "block";




              }
              showTab(currentTab);
              }

              function validateForm() {
                   var x, y, i, valid = true;
                   x = document.getElementsByClassName("tab");
                   y = x[currentTab].getElementsByTagName("input");
                   for (i = 0; i < y.length; i++) {
                       if (y[i].value == "") {
                           y[i].className += " invalid";
                           valid = false;
                       }


                   }
                   if (valid) {
                       document.getElementsByClassName("step")[currentTab].className += " finish";
                   }
                   return valid;
               }

               function fixStepIndicator(n) {
                   var i, x = document.getElementsByClassName("step");
                   for (i = 0; i < x.length; i++) {
                       x[i].className = x[i].className.replace(" active", "");
                   }
                   x[n].className += " active";
               }
    </script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    @stack('scripts')
</body>

</html>
