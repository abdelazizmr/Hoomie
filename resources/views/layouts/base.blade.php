<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="MkRqEzTGuoSx6LqJUm0OAKxSgNUYt26wTT7RMUZY">
    <link rel="manifest" href="manifest.json">
    <meta name="theme-color" content="#0274ff">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Roommite Matching">
    <meta name="msapplication-TileColor" content="#FFFFFF">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Roommite Matching">
    <meta name="keywords" content="Roommite Matching">
    <meta name="author" content="Roommite Matching">
    <link rel="preconnect" href="https://fonts.gstatic.com">

    <title>Roommite Matching</title>

    <link id="rtl-link" rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/vendors/ion.rangeSlider.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/font-awesome.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/feather-icon.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/slick/slick.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/slick/slick-theme.css')}}">
    <link id="color-link" rel="stylesheet" type="text/css" href="{{asset('assets/css/demo4.css')}}">
    <style>
        .h-logo {
            max-width: 185px !important;
        }

        .f-logo {
            max-width: 200px !important;
        }

        @media only screen and (max-width: 600px) {
            .h-logo {
                max-width: 110px !important;
            }
        }
    </style>
    <link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">
    @stack('styles')

</head>

<body class="theme-color4 light ltr">
    <style>
        header .profile-dropdown ul li {
            display: block;
            padding: 5px 20px;
            border-bottom: 1px solid #ddd;
            line-height: 35px;
        }

        header .profile-dropdown ul li:last-child {
            border-color: #fff;
        }

        header .profile-dropdown ul {
            padding: 10px 0;
            min-width: 250px;
        }

        .name-usr {
            background: #0274ff;
            padding: 8px 12px;
            color: #fff;
            font-weight: bold;
            text-transform: uppercase;
            line-height: 24px;
        }

        .name-usr span {
            margin-right: 10px;
        }

        @media (max-width:600px) {
            .h-logo {
                max-width: 150px !important;
            }

            i.sidebar-bar {
                font-size: 22px;
            }

            .mobile-menu ul li a svg {
                width: 20px;
                height: 20px;
            }

            .mobile-menu ul li a span {
                margin-top: 0px;
                font-size: 12px;
            }

            .name-usr {
                padding: 5px 12px;
            }
        }
    </style>
    <header class="header-style-2" id="home">
        <div class="main-header navbar-searchbar">
            <div class="container-fluid-lg">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="main-menu">
                            <div class="menu-left">
                                <div class="brand-logo">
                                    <a href="{{route('app.index')}}">
                                        <img src="{{asset('assets/images/new-logo.png')}}" class="h-logo img-fluid blur-up lazyload"
                                            alt="logo">
                                    </a>
                                </div>

                            </div>
                            <nav>
                                <div class="main-navbar">
                                    <div id="mainnav">
                                        <div class="toggle-nav">
                                            <i class="fa fa-bars sidebar-bar"></i>
                                        </div>
                                        <ul class="nav-menu">
                                            <li class="back-btn d-xl-none">
                                                <div class="close-btn">
                                                    Menu
                                                    <span class="mobile-back"><i class="fa fa-angle-left"></i>
                                                    </span>
                                                </div>
                                            </li>
                                            <li><a href="index.htm" class="nav-link menu-title">Home</a></li>
                                            <li><a href="shop.html" class="nav-link menu-title">Blogs</a></li>
                                            <li><a href="cart/list.html" class="nav-link menu-title">Who we are</a></li>
                                            <li><a href="contact-us.html" class="nav-link menu-title">Contact Us</a></li>

                                        </ul>
                                    </div>
                                </div>
                            </nav>
                            <div class="menu-right">
                                <ul>
                                    <li class="onhover-dropdown">
                                        <div class="cart-media name-usr" style="background-color: #0274ff; border:#0274ff">
                                           @auth
                                               <span>{{Auth::user()->name}}</span>
                                           @endauth
                                           <i data-feather="user"></i>
                                        </div>
                                        <div class="onhover-div profile-dropdown">
                                            <ul>
                                                @if (Route::has('login'))
                                                    @auth
                                                        @if (Auth::user()->utype==='ADM')
                                                            <li>
                                                                <a href="{{route('admin.index')}}" class="d-block">Dashboard</a>
                                                            </li>
                                                        @else
                                                            <li>
                                                                <a href="{{route('user.index')}}" class="d-block">My Account</a>
                                                            </li>
                                                        @endif
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
                    </div>
                </div>
            </div>
        </div>
    </header>

    @yield('content')

    <div id="qvmodal"></div>

    <footer class="footer-sm-space mt-5">
        <div class="main-footer">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="footer-contact">
                            <div class="brand-logo">
                                <a href="{{route('app.index')}}" class="footer-logo float-start">
                                    <img src="{{asset('assets/images/new-logo.png')}}" class="f-logo img-fluid blur-up lazyload"
                                        alt="logo" style=" margin-top: -30%;">
                                </a>
                            </div>
                            <ul class="contact-lists" style="clear:both;">
                                <h5>Match, Chat, Share : Find Your Ideal Roommate.</h5>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="footer-links">
                            <div class="footer-title">
                                <h3>About us</h3>
                            </div>
                            <div class="footer-content">
                                <ul>
                                    <li>
                                        <a href="index.htm" class="font-dark">Home</a>
                                    </li>
                                    <li>
                                        <a href="shop.html" class="font-dark">Blogs</a>
                                    </li>
                                    <li>
                                        <a href="about-us.html" class="font-dark">Who we are</a>
                                    </li>
                                    <li>
                                        <a href="contact-us.html" class="font-dark">Contact</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                        <div class="footer-links">
                            <div class="footer-title">
                                <h3>New Categories</h3>
                            </div>
                            <div class="footer-content">
                                <ul>
                                    <li>
                                        <a href="shop.html" class="font-dark">Find a Place</a>
                                    </li>
                                    <li>
                                        <a href="shop.html" class="font-dark">Find a Roomate</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                        <div class="footer-links">
                            <div class="footer-title">
                                <h3>Get Help</h3>
                            </div>
                            <div class="footer-content">
                                <ul>
                                    <li>
                                        <a href="#" class="font-dark">Your Account</a>
                                    </li>
                                    <li>
                                        <a href="#" class="font-dark">Checkout</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6 d-none d-sm-block">
                        <div class="footer-newsletter">
                            <h3>Let’s stay in touch</h3>
                            <div class="form-newsletter">
                                <div class="input-group mb-4" >
                                    <input type="text" class="form-control color-4" placeholder="Your Email Address">
                                    <span class="input-group-text" id="basic-addon4" style="background-color: #0274ff; border:#0274ff"><i
                                            class="fas fa-arrow-right"></i></span>
                                </div>
                                <p class="font-dark mb-0">Keep up to date with our latest news and special offers.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </footer>
    <div class="modal fade newletter-modal" id="newsletter">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content ">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <img src="{{asset('assets/images/newletter-icon.png')}}" class="img-fluid blur-up lazyload" alt="">
                    <div class="modal-title">
                        <h2 class="tt-title">Sign up for our Newsletter!</h2>
                        <p class="font-light">Never miss any updates or new profile we reveal, stay updated.</p>
                        <p class="font-light">Oh, and it's free!</p>

                        <div class="input-group mb-3">
                            <input placeholder="Email" class="form-control" type="text">
                        </div>

                        <div class="cancel-button text-center">
                            <button class="btn default-theme w-100" data-bs-dismiss="modal"
                                type="button">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="tap-to-top">
        <a href="#home">
            <i class="fas fa-chevron-up"></i>
        </a>
    </div>
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
    @stack('scripts')
</body>

</html>
