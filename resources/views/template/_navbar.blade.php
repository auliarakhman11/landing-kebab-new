<header class="section-bg">
    {{-- <div class="header-top">
            <div class="container">
                <div class="header-top-wrapper">
                    <ul>
                        <li><span>100%</span> Secure delivery without contacting the courier</li>
                        <li><i class="fas fa-truck"></i>Track Your Order</li>
                    </ul>
                    <div class="top-right">
                        <div class="search-wrp">
                            <button><i class="far fa-search"></i></button>
                            <input placeholder="Search" aria-label="Search">
                        </div>
                        <div class="social-icon d-flex align-items-center">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-vimeo-v"></i></a>
                            <a href="#"><i class="fab fa-pinterest-p"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    <div id="header-sticky" class="header-1">
        <div class="container">
            <div class="mega-menu-wrapper">
                <div class="header-main">
                    <div class="logo">
                        <a href="index.html" class="header-logo">
                            <img src="{{ asset('img') }}/kebab-yasmin-new-2025.png" width="170px;" alt="logo-img">
                        </a>
                    </div>
                    <div class="header-left">
                        <div class="mean__menu-wrapper d-none d-lg-block">
                            <div class="main-menu">
                                <nav id="mobile-menu">
                                    <ul>
                                        {{-- <li class="has-dropdown active">
                                                <a href="index.html">
                                                    Home Page
                                                    <i class="fas fa-angle-down"></i>
                                                </a>
                                                <ul class="submenu has-homemenu">
                                                    <li class="border-none">
                                                        <div class="row g-4">
                                                            <div class="col-lg-4 homemenu">
                                                                <div class="homemenu-thumb">
                                                                    <img src="{{ asset('kebab') }}/img/header/home-1.jpg"
                                                                        alt="img">
                                                                    <div class="demo-button">
                                                                        <a href="index.html" class="theme-btn">View
                                                                            Demo</a>
                                                                    </div>
                                                                </div>
                                                                <div class="homemenu-content text-center">
                                                                    <h4 class="homemenu-title">
                                                                        <a href="index.html">Home 01</a>
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4  homemenu">
                                                                <div class="homemenu-thumb mb-15">
                                                                    <img src="{{ asset('kebab') }}/img/header/home-2.jpg"
                                                                        alt="img">
                                                                    <div class="demo-button">
                                                                        <a href="index-2.html" class="theme-btn">View
                                                                            Demo</a>
                                                                    </div>
                                                                </div>
                                                                <div class="homemenu-content text-center">
                                                                    <h4 class="homemenu-title">
                                                                        <a href="index-2.html">Home 02</a>
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 homemenu">
                                                                <div class="homemenu-thumb mb-15">
                                                                    <img src="{{ asset('kebab') }}/img/header/home-3.jpg"
                                                                        alt="img">
                                                                    <div class="demo-button">
                                                                        <a href="index-3.html" class="theme-btn">View
                                                                            Demo</a>
                                                                    </div>
                                                                </div>
                                                                <div class="homemenu-content text-center">
                                                                    <h4 class="homemenu-title">
                                                                        <a href="index-3.html">Home 03</a>
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 homemenu">
                                                                <div class="homemenu-thumb">
                                                                    <img src="{{ asset('kebab') }}/img/header/home-4.jpg"
                                                                        alt="img">
                                                                    <div class="demo-button">
                                                                        <a href="index-4.html" class="theme-btn">View
                                                                            Demo</a>
                                                                    </div>
                                                                </div>
                                                                <div class="homemenu-content text-center">
                                                                    <h4 class="homemenu-title">
                                                                        <a href="index-4.html">Home 04</a>
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4  homemenu">
                                                                <div class="homemenu-thumb mb-15">
                                                                    <img src="{{ asset('kebab') }}/img/header/home-5.jpg"
                                                                        alt="img">
                                                                    <div class="demo-button">
                                                                        <a href="index-5.html" class="theme-btn">View
                                                                            Demo</a>
                                                                    </div>
                                                                </div>
                                                                <div class="homemenu-content text-center">
                                                                    <h4 class="homemenu-title">
                                                                        <a href="index-5.html">Home 05</a>
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 homemenu">
                                                                <div class="homemenu-thumb mb-15">
                                                                    <img src="{{ asset('kebab') }}/img/header/home-6.jpg"
                                                                        alt="img">
                                                                    <div class="demo-button">
                                                                        <a href="index-6.html" class="theme-btn">View
                                                                            Demo</a>
                                                                    </div>
                                                                </div>
                                                                <div class="homemenu-content text-center">
                                                                    <h4 class="homemenu-title">
                                                                        <a href="index-6.html">Home 06</a>
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="has-dropdown">
                                                <a href="shop.html">
                                                    Shop
                                                    <i class="fas fa-angle-down"></i>
                                                </a>
                                                <ul class="submenu">
                                                    <li><a href="shop.html">Shop Grid</a></li>
                                                    <li><a href="shop-list.html">Shop List</a></li>
                                                    <li><a href="shop-left-sidebar.html">Shop Left SideBar</a></li>
                                                    <li><a href="shop-right-sidebar.html">Shop Right SideBar</a></li>
                                                    <li><a href="shop-single.html">Shop Single</a></li>
                                                    <li><a href="shop-single-2.html">Shop Single 2</a></li>
                                                    <li><a href="shop-cart.html">Shop Cart</a></li>
                                                    <li><a href="checkout.html">checkout</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="news.html">
                                                    Blog
                                                    <i class="fas fa-angle-down"></i>
                                                </a>
                                                <ul class="submenu">
                                                    <li><a href="news.html">Blog</a></li>
                                                    <li><a href="news-details.html">Blog Details</a></li>
                                                </ul>
                                            </li>
                                            <li class="has-dropdown">
                                                <a href="news.html">
                                                    Pages
                                                    <i class="fas fa-angle-down"></i>
                                                </a>
                                                <ul class="submenu">
                                                    <li><a href="about.html">About Us</a></li>
                                                    <li class="has-dropdown">
                                                        <a href="team.html">
                                                            Chef Page
                                                            <i class="fas fa-angle-down"></i>
                                                        </a>
                                                        <ul class="submenu">
                                                            <li><a href="team.html">Chef</a></li>
                                                            <li><a href="team-details.html">Chef Details</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="has-dropdown">
                                                        <a href="food-menu.html">
                                                            Food Menu
                                                            <i class="fas fa-angle-down"></i>
                                                        </a>
                                                        <ul class="submenu">
                                                            <li><a href="food-menu.html"> Food Menu 01</a></li>
                                                            <li><a href="food-menu-2.html"> Food Menu 02</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="gallery.html">Gallery</a></li>
                                                    <li><a href="testimonial.html">testimonial</a></li>
                                                    <li><a href="reservation.html">Reservation</a></li>
                                                    <li><a href="faq.html">Faq's</a></li>
                                                    <li><a href="404.html">404 Page</a></li>
                                                </ul>
                                            </li>
                                            <li> --}}
                                        <a href="{{ route('home') }}">Beranda</a>
                                        </li>
                                    </ul>
                                </nav>
                                <!-- for wp -->
                            </div>
                        </div>
                    </div>
                    <div class="header-right d-flex justify-content-end align-items-center">
                        {{-- <div class="menu-cart">
                                <div class="cart-box">
                                    <ul>
                                        <li>
                                            <img src="{{ asset('kebab') }}/img/shop-food/s2.png" alt="image">
                                            <div class="cart-product">
                                                <a href="#0">grilled chiken</a>
                                                <span>168$</span>
                                            </div>
                                        </li>
                                    </ul>
                                    <ul>
                                        <li class="border-none">
                                            <img src="{{ asset('kebab') }}/img/shop-food/s3.png" alt="image">
                                            <div class="cart-product">
                                                <a href="#0">grilled chiken</a>
                                                <span>168$</span>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="shopping-items d-flex align-items-center justify-content-between">
                                        <span>Shopping : $20.00</span>
                                        <span>Total : $168.00</span>
                                    </div>
                                    <div class="cart-button d-flex justify-content-between mb-4">
                                        <a href="shop-cart.html" class="theme-btn">
                                            View Cart
                                        </a>
                                        <a href="checkout.html" class="theme-btn bg-red-2">
                                            Checkout
                                        </a>
                                    </div>
                                </div>
                                <a href="shop-cart.html" class="cart-icon">
                                    <i class="far fa-shopping-basket"></i>
                                </a>
                            </div> --}}
                        <div class="header-button">
                            <a href="{{ route('cotactUs') }}" class="theme-btn bg-red-2">Hubungi Kami</a>
                        </div>
                        <div class="header__hamburger d-xl-block my-auto">
                            <div class="sidebar__toggle">
                                <div class="header-bar">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
