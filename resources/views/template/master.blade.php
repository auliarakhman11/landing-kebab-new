<!DOCTYPE html>
<html lang="en">
<!--<< Header Area >>-->

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="modinatheme">
    <meta name="description" content="Kebab Yasmin - {{ $title }}">
    <!-- ======== Page title ============ -->
    <title>Yasmin Kebab - {{ $title }}</title>
    <!--<< Favcion >>-->
    <link rel="shortcut icon" href="{{ asset('img') }}/kebab-yasmin-new-2025.png">
    <!--<< Bootstrap min.css >>-->
    <link rel="stylesheet" href="{{ asset('kebab') }}/css/bootstrap.min.css">
    <!--<< Font Awesome.css >>-->
    <link rel="stylesheet" href="{{ asset('kebab') }}/css/font-awesome.css">
    <!--<< Animate.css >>-->
    <link rel="stylesheet" href="{{ asset('kebab') }}/css/animate.css">
    <!--<< Magnific Popup.css >>-->
    <link rel="stylesheet" href="{{ asset('kebab') }}/css/magnific-popup.css">
    <!--<< MeanMenu.css >>-->
    <link rel="stylesheet" href="{{ asset('kebab') }}/css/meanmenu.css">
    <!--<< Swiper Bundle.css >>-->
    <link rel="stylesheet" href="{{ asset('kebab') }}/css/swiper-bundle.min.css">
    <!--<< Nice Select.css >>-->
    <link rel="stylesheet" href="{{ asset('kebab') }}/css/nice-select.css">
    <!--<< Main.css >>-->
    <link rel="stylesheet" href="{{ asset('kebab') }}/css/main.css">
    <!--<< Style.css >>-->
    <link rel="stylesheet" href="{{ asset('kebab') }}/style.css">
</head>

<body>
    <!-- Proloader Start -->
    <div id="preloader" class="preloader">
        <div class="animation-preloader">
            <div class="spinner">
            </div>
            <div class="txt-loading">
                <span data-text-preloader="Y" class="letters-loading">
                    Y
                </span>
                <span data-text-preloader="A" class="letters-loading">
                    A
                </span>
                <span data-text-preloader="S" class="letters-loading">
                    S
                </span>
                <span data-text-preloader="M" class="letters-loading">
                    M
                </span>
                <span data-text-preloader="I" class="letters-loading">
                    I
                </span>
                <span data-text-preloader="N" class="letters-loading">
                    N
                </span>
                <span data-text-preloader="-" class="letters-loading">
                    -
                </span>
                <span data-text-preloader="K" class="letters-loading">
                    K
                </span>
                <span data-text-preloader="E" class="letters-loading">
                    E
                </span>
                <span data-text-preloader="B" class="letters-loading">
                    B
                </span>
                <span data-text-preloader="A" class="letters-loading">
                    A
                </span>
                <span data-text-preloader="B" class="letters-loading">
                    B
                </span>
            </div>
            <p class="text-center">Loading</p>
        </div>
        <div class="loader">
            <div class="row">
                <div class="col-3 loader-section section-left">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-left">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-right">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-right">
                    <div class="bg"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Offcanvas Area Start -->
    {{-- <div class="fix-area">
        <div class="offcanvas__info">
            <div class="offcanvas__wrapper">
                <div class="offcanvas__content">
                    <div class="offcanvas__top mb-5 d-flex justify-content-between align-items-center">
                        <div class="offcanvas__logo">
                            <a href="index.html">
                                <img src="{{ asset('kebab') }}/img/logo/logo.svg" alt="logo-img">
                            </a>
                        </div>
                        <div class="offcanvas__close">
                            <button>
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <p class="text d-none d-lg-block">
                        This involves interactions between a business and its customers. It's about meeting customers'
                        needs and resolving their problems. Effective customer service is crucial.
                    </p>
                    <div class="offcanvas-gallery-area d-none d-lg-block">
                        <div class="offcanvas-gallery-items">
                            <a href="{{ asset('kebab') }}/img/header/01.jpg" class="offcanvas-image img-popup">
                                <img src="{{ asset('kebab') }}/img/header/01.jpg" alt="gallery-img">
                            </a>
                            <a href="{{ asset('kebab') }}/img/header/02.jpg" class="offcanvas-image img-popup">
                                <img src="{{ asset('kebab') }}/img/header/02.jpg" alt="gallery-img">
                            </a>
                            <a href="{{ asset('kebab') }}/img/header/03.jpg" class="offcanvas-image img-popup">
                                <img src="{{ asset('kebab') }}/img/header/03.jpg" alt="gallery-img">
                            </a>
                        </div>
                        <div class="offcanvas-gallery-items">
                            <a href="{{ asset('kebab') }}/img/header/04.jpg" class="offcanvas-image img-popup">
                                <img src="{{ asset('kebab') }}/img/header/04.jpg" alt="gallery-img">
                            </a>
                            <a href="{{ asset('kebab') }}/img/header/05.jpg" class="offcanvas-image img-popup">
                                <img src="{{ asset('kebab') }}/img/header/05.jpg" alt="gallery-img">
                            </a>
                            <a href="{{ asset('kebab') }}/img/header/06.jpg" class="offcanvas-image img-popup">
                                <img src="{{ asset('kebab') }}/img/header/06.jpg" alt="gallery-img">
                            </a>
                        </div>
                    </div>
                    <div class="mobile-menu fix mb-3"></div>
                    <div class="offcanvas__contact">
                        <h4>Contact Info</h4>
                        <ul>
                            <li class="d-flex align-items-center">
                                <div class="offcanvas__contact-icon">
                                    <i class="fal fa-map-marker-alt"></i>
                                </div>
                                <div class="offcanvas__contact-text">
                                    <a target="_blank" href="#">Main Street, Melbourne, Australia</a>
                                </div>
                            </li>
                            <li class="d-flex align-items-center">
                                <div class="offcanvas__contact-icon mr-15">
                                    <i class="fal fa-envelope"></i>
                                </div>
                                <div class="offcanvas__contact-text">
                                    <a href="tel:+013-003-003-9993"><span
                                            class="mailto:info@enofik.com">info@foodking.com</span></a>
                                </div>
                            </li>
                            <li class="d-flex align-items-center">
                                <div class="offcanvas__contact-icon mr-15">
                                    <i class="fal fa-clock"></i>
                                </div>
                                <div class="offcanvas__contact-text">
                                    <a target="_blank" href="#">Mod-friday, 09am -05pm</a>
                                </div>
                            </li>
                            <li class="d-flex align-items-center">
                                <div class="offcanvas__contact-icon mr-15">
                                    <i class="far fa-phone"></i>
                                </div>
                                <div class="offcanvas__contact-text">
                                    <a href="tel:+11002345909">+11002345909</a>
                                </div>
                            </li>
                        </ul>
                        <div class="header-button mt-4">
                            <a href="shop-single.html" class="theme-btn">
                                <span class="button-content-wrapper d-flex align-items-center justify-content-center">
                                    <span class="button-icon"><i class="flaticon-delivery"></i></span>
                                    <span class="button-text">order now</span>
                                </span>
                            </a>
                        </div>
                        <div class="social-icon d-flex align-items-center">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-youtube"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="offcanvas__overlay"></div> --}}

    <!-- Header Area Start -->
    @include('template._navbar')

    {{-- content --}}
    @yield('content')

    <!-- Footer Section Start -->
    @include('template._footer')

    <!-- Back To Top Start -->
    <div class="scroll-up">
        <svg class="scroll-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!--<< All JS Plugins >>-->
    <script src="{{ asset('kebab') }}/js/jquery-3.7.1.min.js"></script>
    <!--<< Viewport Js >>-->
    <script src="{{ asset('kebab') }}/js/viewport.jquery.js"></script>
    <!--<< Bootstrap Js >>-->
    <script src="{{ asset('kebab') }}/js/bootstrap.bundle.min.js"></script>
    <!--<< Nice Select Js >>-->
    <script src="{{ asset('kebab') }}/js/jquery.nice-select.min.js"></script>
    <!--<< Waypoints Js >>-->
    <script src="{{ asset('kebab') }}/js/jquery.waypoints.js"></script>
    <!--<< Counterup Js >>-->
    <script src="{{ asset('kebab') }}/js/jquery.counterup.min.js"></script>
    <!--<< Swiper Slider Js >>-->
    <script src="{{ asset('kebab') }}/js/swiper-bundle.min.js"></script>
    <!--<< MeanMenu Js >>-->
    <script src="{{ asset('kebab') }}/js/jquery.meanmenu.min.js"></script>
    <!--<< CountDown Js >>-->
    {{-- <script src="{{ asset('kebab') }}/js/countdowncustom.js"></script> --}}
    <!--<< Magnific Popup Js >>-->
    <script src="{{ asset('kebab') }}/js/jquery.magnific-popup.min.js"></script>
    <!--<< GSAP Animation Js >>-->
    <script src="{{ asset('kebab') }}/js/animation.js"></script>
    <!--<< Wow Animation Js >>-->
    <script src="{{ asset('kebab') }}/js/wow.min.js"></script>
    <!--<< Main.js >>-->
    <script src="{{ asset('kebab') }}/js/main.js"></script>
</body>

</html>
