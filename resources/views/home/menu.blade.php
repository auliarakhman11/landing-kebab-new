@extends('template.master')
@section('content')
    <style>
        div.scrollmenu {
            /* background-color: #333; */
            overflow: auto;
            white-space: nowrap;
        }

        div.scrollmenu a {
            display: inline-block;
            text-decoration: none;
        }

        div.scrollmenu a:hover {
            background-color: #777;
        }

        .scroll_div {
            overflow-x: auto;
            height: 600px;
            overflow-y: scroll;
        }


        /* --- Default: Tampilkan semuanya --- */
        .hanya-desktop {
            display: block;
        }

        .hanya-mobile {
            display: none;
            /* Sembunyikan mobile secara default di layar besar */
        }

        /* --- Media Query untuk Layar Kecil (Mobile) --- */
        /* Jika layar kurang dari atau sama dengan 768px (ukuran tablet/HP) */
        @media screen and (max-width: 768px) {

            /* Sembunyikan elemen desktop */
            .hanya-desktop {
                display: none;
            }

            /* Munculkan elemen mobile */
            .hanya-mobile {
                display: block;
            }
        }
    </style>

    <!--<< Breadcrumb Section Start >>-->
    <div class="breadcrumb-wrapper bg-cover" style="background-image: url('/img/contact-us.jpg');">
        <div class="container">
            <div class="page-heading center">
                <h1>Menu</h1>
                <ul class="breadcrumb-items">
                    <li>
                        <a href="{{ route('home') }}">
                            Beranda
                        </a>
                    </li>
                    <li>
                        <i class="far fa-chevron-right"></i>
                    </li>
                    <li>
                        Menu
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <section class="food-category-section fix section-padding">
        <div class="container hanya-mobile">
            <div class="row">
                <div class="col-12 mt-3">
                    <div class="scrollmenu">
                        <a href="javascript:void(0)" kategori_id="all" style="background-color:#FFBD41; color:#202122;"
                            id="kategori" class="btn ml-2 boxselect">Semua</a>
                        @foreach ($kategori as $k)
                            <a href="javascript:void(0)" kategori_id="{{ $k->id }}"
                                style="background-color:#FFBD41; color:#202122;" id="kategori"
                                class="btn ml-5 boxselect">{{ $k->kategori }}</a>
                        @endforeach
                    </div>
                </div>
                {{-- <div class="col-md-6 col-12 mt-3">
                    <input type="text" id="search_field" class=" form-control" placeholder="Masukan Pencarian...">
                </div> --}}
            </div>
        </div>
        <div class="container">
            {{-- <div class="woocommerce-notices-wrapper">
                <div class="product-showing">
                    <h5><a href="shop.html"><span><img src="{{ asset('kebab') }}/img/filter.png" alt="img"></span>
                            Filtering</a></h5>
                    <h5>Showing <span>1–12</span> of 27 results</h5>
                </div>
                <div class="form-clt">
                    <h6>Sort by: <a href="shop.html"><i class="fal fa-sort-alt"></i></a></h6>
                    <div class="nice-select" tabindex="0">
                        <span class="current">
                            Price
                        </span>
                        <ul class="list">
                            <li data-value="1" class="option selected">
                                Price
                            </li>
                            <li data-value="1" class="option">
                                Price
                            </li>
                            <li data-value="1" class="option">
                                Price
                            </li>
                            <li data-value="1" class="option">
                                Price
                            </li>
                        </ul>
                    </div>
                    <div class="icon">
                        <a href="shop-right-sidebar.html"><i class="fas fa-th"></i></a>
                    </div>
                    <div class="icon-2">
                        <a href="shop-list.html"><i class="fas fa-list"></i></a>
                    </div>
                </div>
                
            </div> --}}
            <div class="row g-5">

                <div class="col-xl-9 col-lg-8">
                    <div class="row" id="demonames">
                        @foreach ($menu as $mn)
                            <div class="col-md-4 col-12 box all {{ $mn->kategori_id }}">
                                <div class="catagory-product-card-2 shadow-style text-center">
                                    {{-- <div class="icon">
                                <a href=""><i class="far fa-heart"></i></a>
                            </div> --}}
                                    <div class="catagory-product-image">
                                        <img src="https://admin.kebabyasmin.id/{{ $mn->foto }}" class="lazy"
                                            loading="lazy" height="200px;" alt="product-img">
                                    </div>
                                    <div class="catagory-product-content">
                                        <div class="catagory-button">
                                            <a href="" class="theme-btn-2"><i
                                                    class="far fa-shopping-basket"></i>Order</a>
                                        </div>
                                        <div class="info-price d-flex align-items-center justify-content-center">
                                            {{-- <p>-5%</p> --}}
                                            <h6>Rp. {{ number_format($mn->harga, 0) }}</h6>
                                            {{-- <span>$28.52</span> --}}
                                        </div>
                                        <h4 class="demoname">
                                            <a href="">{{ $mn->nm_produk }}</a>
                                        </h4>
                                        <div class="star">
                                            <span class="fas fa-star"></span>
                                            <span class="fas fa-star"></span>
                                            <span class="fas fa-star"></span>
                                            <span class="fas fa-star"></span>
                                            <span class="fas fa-star"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    {{-- <div class="page-nav-wrap mt-5 text-center wow fadeInUp" data-wow-delay=".4s">
                        <ul>
                            <li><a class="page-numbers" href="#"><i class="fal fa-long-arrow-left"></i></a></li>
                            <li><a class="page-numbers" href="#">1</a></li>
                            <li><a class="page-numbers" href="#">2</a></li>
                            <li><a class="page-numbers" href="#">3</a></li>
                            <li><a class="page-numbers" href="#">4</a></li>
                            <li><a class="page-numbers" href="#"><i class="fal fa-long-arrow-right"></i></a></li>
                        </ul>
                    </div> --}}
                </div>

                <div class="col-xl-3 col-lg-4 hanya-desktop">

                    <div class="main-sidebar style-2">
                        <div class="single-sidebar-widget">
                            <div class="wid-title">
                                <h4>Kategori</h4>
                            </div>
                            <div class="widget-categories">
                                <ul>
                                    <li><a href="javascript:void(0)" kategori_id="all" class="boxselect">Semua</a></li>
                                    @foreach ($kategori as $k)
                                        <li><a href="javascript:void(0)" class="boxselect"
                                                kategori_id="{{ $k->id }}">{{ $k->kategori }}</a></li>
                                    @endforeach

                                    {{-- <li><a href=""><i class="flaticon-french-fries"></i>French Fries</a>
                                    </li>
                                    <li><a href=""><i class="flaticon-pizza"></i>Hot Pizzas</a></li>
                                    <li><a href=""><i class="flaticon-sandwich"></i>Sandwich</a></li>
                                    <li><a href=""><i class="flaticon-bread"></i>Bread</a></li>
                                    <li><a href=""><i class="flaticon-rice"></i>fried rice</a></li>
                                    <li><a href=""><i class="flaticon-hotdog"></i>hot dog</a></li> --}}
                                </ul>
                            </div>
                        </div>
                        {{-- <div class="single-sidebar-widget">
                            <div class="wid-title">
                                <h4>price filter</h4>
                            </div>
                            <div class="range__barcustom">
                                <div class="slider">
                                    <div class="progress" style="left: 25%; right: 25%;"></div>
                                </div>
                                <div class="range-input">
                                    <input type="range" class="range-min" min="0" max="10000" value="2500">
                                    <input type="range" class="range-max" min="100" max="10000" value="7500">
                                </div>
                                <div class="range-items">
                                    <div class="price-input d-flex">
                                        <div class="field">
                                            <span>Price:</span>
                                        </div>
                                        <div class="field">
                                            <span>$</span>
                                            <input type="number" class="input-min" value="100">
                                        </div>
                                        <div class="separators">-</div>
                                        <div class="field">
                                            <span>$</span>
                                            <input type="number" class="input-max" value="1000">
                                        </div>
                                        <a href="shop-left-sidebar.html" class="theme-btn border-radius-none">Filter</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-sidebar-widget">
                            <div class="wid-title">
                                <h4>filter by size</h4>
                            </div>
                            <div class="filter-size">
                                <div class="input-save d-flex align-items-center">
                                    <input type="checkbox" class="form-check-input" name="save-for-next" id="saveForNext">
                                    <label for="saveForNext">Small</label>
                                </div>
                                <div class="input-save d-flex align-items-center">
                                    <input type="checkbox" class="form-check-input" name="save-for-next" id="saveForNext2">
                                    <label for="saveForNext">Medium</label>
                                </div>
                                <div class="input-save d-flex align-items-center">
                                    <input type="checkbox" class="form-check-input" name="save-for-next" id="saveForNext3">
                                    <label for="saveForNext">Big</label>
                                </div>
                                <div class="input-save d-flex align-items-center">
                                    <input type="checkbox" class="form-check-input" name="save-for-next"
                                        id="saveForNext4">
                                    <label for="saveForNext">Mixing</label>
                                </div>
                            </div>
                        </div>
                        <div class="single-sidebar-widget">
                            <div class="wid-title">
                                <h4>new arrival</h4>
                            </div>
                            <div class="popular-food-posts">
                                <div class="single-post-item">
                                    <div class="thumb bg-cover"
                                        style="background-image: url('assets/img/shop-food/food-1.png');"></div>
                                    <div class="post-content">
                                        <div class="star">
                                            <span class="fas fa-star"></span>
                                            <span class="fas fa-star"></span>
                                            <span class="fas fa-star"></span>
                                            <span class="fas fa-star"></span>
                                            <span class="fas fa-star color-bg"></span>
                                        </div>
                                        <h4><a href="shop-single.html">ruti with chiken</a></h4>
                                        <div class="post-price">
                                            <span class="theme-color-2">$30.52</span>
                                            <span>$28.52</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-post-item">
                                    <div class="thumb bg-cover"
                                        style="background-image: url('assets/img/shop-food/food-2.png');"></div>
                                    <div class="post-content">
                                        <div class="star">
                                            <span class="fas fa-star"></span>
                                            <span class="fas fa-star"></span>
                                            <span class="fas fa-star"></span>
                                            <span class="fas fa-star"></span>
                                            <span class="fas fa-star color-bg"></span>
                                        </div>
                                        <h4><a href="shop-single.html">ruti with chiken</a></h4>
                                        <div class="post-price">
                                            <span class="theme-color-2">$30.52</span>
                                            <span>$28.52</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-post-item">
                                    <div class="thumb bg-cover"
                                        style="background-image: url('assets/img/shop-food/food-3.png');"></div>
                                    <div class="post-content">
                                        <div class="star">
                                            <span class="fas fa-star"></span>
                                            <span class="fas fa-star"></span>
                                            <span class="fas fa-star"></span>
                                            <span class="fas fa-star"></span>
                                            <span class="fas fa-star color-bg"></span>
                                        </div>
                                        <h4><a href="shop-single.html">ruti with chiken</a></h4>
                                        <div class="post-price">
                                            <span class="theme-color-2">$30.52</span>
                                            <span>$28.52</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-post-item">
                                    <div class="thumb bg-cover"
                                        style="background-image: url('assets/img/shop-food/food-4.png');"></div>
                                    <div class="post-content">
                                        <div class="star">
                                            <span class="fas fa-star"></span>
                                            <span class="fas fa-star"></span>
                                            <span class="fas fa-star"></span>
                                            <span class="fas fa-star"></span>
                                            <span class="fas fa-star color-bg"></span>
                                        </div>
                                        <h4><a href="shop-single.html">ruti with chiken</a></h4>
                                        <div class="post-price">
                                            <span class="theme-color-2">$30.52</span>
                                            <span>$28.52</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>

                </div>

            </div>


        </div>
    </section>

    <!-- Main Cta Banner Section Start -->
    {{-- <section class="main-cta-banner-2 section-padding bg-cover"
        style="background-image: url('kebab/img/banner/main-cta-bg-2.jpg');">
        <div class="tomato-shape-left float-bob-y">
            <img src="{{ asset('kebab') }}/img/tomato.png" alt="shape-img">
        </div>
        <div class="chili-shape-right float-bob-y">
            <img src="{{ asset('kebab') }}/img/chilli.png" alt="shape-img">
        </div>
        <div class="container">
            <div class="main-cta-banner-wrapper-2 d-flex align-items-center justify-content-between">
                <div class="section-title mb-0">
                    <span class="theme-color-3 wow fadeInUp">crispy, every bite taste</span>
                    <h2 class="text-white wow fadeInUp" data-wow-delay=".3s">
                        30 minutes fast <br>
                        <span class="theme-color-3">delivery</span> challage
                    </h2>
                </div>
                <a href="shop-single.html" class="theme-btn bg-white wow fadeInUp" data-wow-delay=".5s">
                    <span class="button-content-wrapper d-flex align-items-center">
                        <span class="button-icon"><i class="flaticon-delivery"></i></span>
                        <span class="button-text">order now</span>
                    </span>
                </a>
                <div class="delivery-man">
                    <img src="{{ asset('kebab') }}/img/delivery-man-2.png" alt="img">
                </div>
            </div>
        </div>
    </section> --}}
@endsection
