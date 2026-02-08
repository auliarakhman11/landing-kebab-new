@extends('template.master')
@section('content')
    <!-- Hero Section Start -->
    <section class="hero-section">
        <div class="swiper hero-slider">
            <div class="swiper-wrapper">
                @foreach ($hero as $hr)
                    <div class="swiper-slide">
                        <div class="hero-1 bg-cover" style="background-image: url('kebab/img/hero/hero-bg.jpg');">
                            <div class="chilii-shape" data-animation="fadeInUp" data-delay="2.1s">
                                <img src="{{ asset('kebab') }}/img/hero/chilli-shape.png" alt="shape-img">
                            </div>
                            <div class="fire-shape" data-animation="fadeInUp" data-delay="2.4s">
                                <img src="{{ asset('kebab') }}/img/hero/fire-shape.png" alt="shape-img">
                            </div>
                            <div class="chilii-shape-2" data-animation="fadeInUp" data-delay="2.7s">
                                <img src="{{ asset('kebab') }}/img/hero/chilli-shape-2.png" alt="shape-img">
                            </div>
                            <div class="chilii-shape-3" data-animation="fadeInUp" data-delay="3s">
                                <img src="{{ asset('kebab') }}/img/hero/chilli-shape-3.png" alt="shape-img">
                            </div>
                            {{-- <div class="offer-shape" data-animation="fadeInUp" data-delay="2.1s">
                            <img src="{{ asset('kebab') }}/img/hero/offer-shape.png" alt="shape-img">
                        </div> --}}
                            <h2 class="hero-back-title" data-animation="fadeInRight" data-delay="2.5s">Surganya Ngebab!</h2>
                            <div class="container">
                                <div class="row justify-content-between">
                                    <div class="col-xl-5 col-lg-7">
                                        <div class="hero-content">
                                            <p data-animation="fadeInUp">{{ $hr->title1 }}</p>
                                            <h1 data-animation="fadeInUp" data-delay="0.5s">
                                                {{ $hr->title2 }}
                                            </h1>
                                            {{-- <div class="hero-button">
                                            <a href="shop-single.html" class="theme-btn" data-animation="fadeInUp"
                                                data-delay="0.9s">
                                                <span class="button-content-wrapper d-flex align-items-center">
                                                    <span class="button-icon"><i class="flaticon-delivery"></i></span>
                                                    <span class="button-text">order now</span>
                                                </span>
                                            </a>
                                        </div> --}}
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-5 mt-5 mt-lg-0">
                                        <div class="chiken-image" data-animation="fadeInUp" data-delay="1.4s">
                                            <img src="https://admin.kebabyasmin.id/img-hero/{{ $hr->foto }}"
                                                alt="chiken-img">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach


                {{-- <div class="swiper-slide">
                    <div class="hero-1 bg-cover" style="background-image: url('kebab/img/hero/hero-bg.jpg');">
                        <div class="chilii-shape" data-animation="fadeInUp" data-delay="2.1s">
                            <img src="{{ asset('kebab') }}/img/hero/chilli-shape.png" alt="shape-img">
                        </div>
                        <div class="fire-shape" data-animation="fadeInUp" data-delay="2.4s">
                            <img src="{{ asset('kebab') }}/img/hero/fire-shape.png" alt="shape-img">
                        </div>
                        <div class="chilii-shape-2" data-animation="fadeInUp" data-delay="2.7s">
                            <img src="{{ asset('kebab') }}/img/hero/chilli-shape-2.png" alt="shape-img">
                        </div>
                        <div class="chilii-shape-3" data-animation="fadeInUp" data-delay="3s">
                            <img src="{{ asset('kebab') }}/img/hero/chilli-shape-3.png" alt="shape-img">
                        </div>
                        <div class="offer-shape" data-animation="fadeInUp" data-delay="2.1s">
                            <img src="{{ asset('kebab') }}/img/hero/offer-shape.png" alt="shape-img">
                        </div>
                        <h2 class="hero-back-title" data-animation="fadeInRight" data-delay="2.5s">fast food</h2>
                        <div class="container">
                            <div class="row justify-content-between">
                                <div class="col-xl-5 col-lg-7">
                                    <div class="hero-content">
                                        <p data-animation="fadeInUp">crispy, every bite taste</p>
                                        <h1 data-animation="fadeInUp" data-delay="0.5s">
                                            Awesome
                                            <span>fried</span>
                                            chiken
                                        </h1>
                                        <div class="hero-button">
                                            <a href="shop-single.html" class="theme-btn" data-animation="fadeInUp"
                                                data-delay="0.9s">
                                                <span class="button-content-wrapper d-flex align-items-center">
                                                    <span class="button-icon"><i class="flaticon-delivery"></i></span>
                                                    <span class="button-text">order now</span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-5 mt-5 mt-lg-0">
                                    <div class="chiken-image" data-animation="fadeInUp" data-delay="1.4s">
                                        <img src="{{ asset('kebab') }}/img/hero/chiken.png" alt="chiken-img">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="hero-1 bg-cover" style="background-image: url('kebab/img/hero/hero-bg.jpg');">
                        <div class="chilii-shape" data-animation="fadeInUp" data-delay="2.1s">
                            <img src="{{ asset('kebab') }}/img/hero/chilli-shape.png" alt="shape-img">
                        </div>
                        <div class="fire-shape" data-animation="fadeInUp" data-delay="2.4s">
                            <img src="{{ asset('kebab') }}/img/hero/fire-shape.png" alt="shape-img">
                        </div>
                        <div class="chilii-shape-2" data-animation="fadeInUp" data-delay="2.7s">
                            <img src="{{ asset('kebab') }}/img/hero/chilli-shape-2.png" alt="shape-img">
                        </div>
                        <div class="chilii-shape-3" data-animation="fadeInUp" data-delay="3s">
                            <img src="{{ asset('kebab') }}/img/hero/chilli-shape-3.png" alt="shape-img">
                        </div>
                        <div class="offer-shape" data-animation="fadeInUp" data-delay="2.1s">
                            <img src="{{ asset('kebab') }}/img/hero/offer-shape.png" alt="shape-img">
                        </div>
                        <h2 class="hero-back-title" data-animation="fadeInRight" data-delay="2.5s">fast food</h2>
                        <div class="container">
                            <div class="row justify-content-between">
                                <div class="col-xl-5 col-lg-7">
                                    <div class="hero-content">
                                        <p data-animation="fadeInUp">crispy, every bite taste</p>
                                        <h1 data-animation="fadeInUp" data-delay="0.5s">
                                            Favorite
                                            <span>fried</span>
                                            chiken
                                        </h1>
                                        <div class="hero-button">
                                            <a href="shop-single.html" class="theme-btn" data-animation="fadeInUp"
                                                data-delay="0.9s">
                                                <span class="button-content-wrapper d-flex align-items-center">
                                                    <span class="button-icon"><i class="flaticon-delivery"></i></span>
                                                    <span class="button-text">order now</span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-5 mt-5 mt-lg-0">
                                    <div class="chiken-image" data-animation="fadeInUp" data-delay="1.4s">
                                        <img src="{{ asset('kebab') }}/img/hero/chiken.png" alt="chiken-img">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="hero-1 bg-cover" style="background-image: url('kebab/img/hero/hero-bg.jpg');">
                        <div class="chilii-shape" data-animation="fadeInUp" data-delay="2.1s">
                            <img src="{{ asset('kebab') }}/img/hero/chilli-shape.png" alt="shape-img">
                        </div>
                        <div class="fire-shape" data-animation="fadeInUp" data-delay="2.4s">
                            <img src="{{ asset('kebab') }}/img/hero/fire-shape.png" alt="shape-img">
                        </div>
                        <div class="chilii-shape-2" data-animation="fadeInUp" data-delay="2.7s">
                            <img src="{{ asset('kebab') }}/img/hero/chilli-shape-2.png" alt="shape-img">
                        </div>
                        <div class="chilii-shape-3" data-animation="fadeInUp" data-delay="3s">
                            <img src="{{ asset('kebab') }}/img/hero/chilli-shape-3.png" alt="shape-img">
                        </div>
                        <div class="offer-shape" data-animation="fadeInUp" data-delay="2.1s">
                            <img src="{{ asset('kebab') }}/img/hero/offer-shape.png" alt="shape-img">
                        </div>
                        <h2 class="hero-back-title" data-animation="fadeInRight" data-delay="2.5s">fast food</h2>
                        <div class="container">
                            <div class="row justify-content-between">
                                <div class="col-xl-5 col-lg-7">
                                    <div class="hero-content">
                                        <p data-animation="fadeInUp">crispy, every bite taste</p>
                                        <h1 data-animation="fadeInUp" data-delay="0.5s">
                                            delicious
                                            <span>fried</span>
                                            chiken
                                        </h1>
                                        <div class="hero-button">
                                            <a href="shop-single.html" class="theme-btn" data-animation="fadeInUp"
                                                data-delay="0.9s">
                                                <span class="button-content-wrapper d-flex align-items-center">
                                                    <span class="button-icon"><i class="flaticon-delivery"></i></span>
                                                    <span class="button-text">order now</span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-5 mt-5 mt-lg-0">
                                    <div class="chiken-image" data-animation="fadeInUp" data-delay="1.4s">
                                        <img src="{{ asset('kebab') }}/img/hero/chiken.png" alt="chiken-img">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
            <div class="swiper-dot text-center pt-5">
                <div class="dot"></div>
            </div>
        </div>
    </section>

    <!-- Food Catagory Section Start -->
    <section class="food-category-section fix section-padding section-bg">
        <div class="tomato-shape">
            <img src="{{ asset('kebab') }}/img/shape/tomato-shape.png" alt="shape-img">
        </div>
        <div class="burger-shape-2">
            <img src="{{ asset('kebab') }}/img/shape/burger-shape-2.png" alt="shape-img">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-9">
                    <div class="section-title">
                        <span class="wow fadeInUp">Surganya Ngebab!</span>
                        <h2 class="wow fadeInUp" data-wow-delay=".3s">Menu Terbaik Kami</h2>
                    </div>
                </div>
                <div class="col-md-5 ps-0 col-3 text-end wow fadeInUp" data-wow-delay=".5s">
                    <div class="array-button">
                        <button class="array-prev"><i class="far fa-long-arrow-left"></i></button>
                        <button class="array-next"><i class="far fa-long-arrow-right"></i></button>
                    </div>
                </div>
            </div>
            <div class="swiper food-catagory-slider">
                <div class="swiper-wrapper">
                    @foreach ($terlaris as $tr)
                        <div class="swiper-slide">
                            <div class="catagory-product-card bg-cover"
                                style="background-image: url('kebab/img/shape/catagory-card-shape.jpg');">
                                <h5>{{ $tr->nm_produk }}</h5>
                                <div class="catagory-product-image text-center">
                                    <a href="{{ route('menu') }}">
                                        <img src="https://admin.kebabyasmin.id/{{ $tr->foto }}" alt="product-img"
                                            style="max-height: 277px;" class="lazy" loading="lazy">
                                        <div class="decor-leaf">
                                            <img src="{{ asset('kebab') }}/img/shape/decor-leaf.svg" alt="shape-img">
                                        </div>
                                        <div class="decor-leaf-2">
                                            <img src="{{ asset('kebab') }}/img/shape/decor-leaf-2.svg" alt="shape-img">
                                        </div>
                                        <div class="burger-shape">
                                            <img src="{{ asset('kebab') }}/img/shape/burger-shape.png" alt="shape-img">
                                        </div>
                                    </a>
                                </div>
                                <div class="catagory-product-content text-center">
                                    <div class="catagory-product-icon">
                                        <img src="{{ asset('img') }}/yasmin-kebab.svg" alt="shape-text" class="lazy"
                                            loading="lazy">
                                    </div>
                                    <h3>
                                        <a href="">
                                            {{ $tr->nm_produk }}
                                        </a>
                                    </h3>
                                    <p>Rp.{{ number_format($tr->harga, 0) }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    {{-- <div class="swiper-slide">
                        <div class="catagory-product-card bg-cover"
                            style="background-image: url('kebab/img/shape/catagory-card-shape.jpg');">
                            <h5>5 products</h5>
                            <div class="catagory-product-image text-center">
                                <a href="shop.html">
                                    <img src="{{ asset('kebab') }}/img/food/pasta.png" alt="product-img">
                                    <div class="decor-leaf">
                                        <img src="{{ asset('kebab') }}/img/shape/decor-leaf.svg" alt="shape-img">
                                    </div>
                                    <div class="decor-leaf-2">
                                        <img src="{{ asset('kebab') }}/img/shape/decor-leaf-2.svg" alt="shape-img">
                                    </div>
                                    <div class="burger-shape">
                                        <img src="{{ asset('kebab') }}/img/shape/burger-shape.png" alt="shape-img">
                                    </div>
                                </a>
                            </div>
                            <div class="catagory-product-content text-center">
                                <div class="catagory-product-icon">
                                    <img src="{{ asset('kebab') }}/img/shape/food-shape.svg" alt="shape-text">
                                </div>
                                <h3>
                                    <a href="shop-single.html">
                                        pro pizza
                                    </a>
                                </h3>
                                <p>5 products</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="catagory-product-card bg-cover"
                            style="background-image: url('kebab/img/shape/catagory-card-shape.jpg');">
                            <h5>5 products</h5>
                            <div class="catagory-product-image text-center">
                                <a href="shop.html">
                                    <img src="{{ asset('kebab') }}/img/food/burger.png" alt="product-img">
                                    <div class="decor-leaf">
                                        <img src="{{ asset('kebab') }}/img/shape/decor-leaf.svg" alt="shape-img">
                                    </div>
                                    <div class="decor-leaf-2">
                                        <img src="{{ asset('kebab') }}/img/shape/decor-leaf-2.svg" alt="shape-img">
                                    </div>
                                    <div class="burger-shape">
                                        <img src="{{ asset('kebab') }}/img/shape/burger-shape.png" alt="shape-img">
                                    </div>
                                </a>
                            </div>
                            <div class="catagory-product-content text-center">
                                <div class="catagory-product-icon">
                                    <img src="{{ asset('kebab') }}/img/shape/food-shape.svg" alt="shape-text">
                                </div>
                                <h3>
                                    <a href="shop-single.html">
                                        pro pizza
                                    </a>
                                </h3>
                                <p>5 products</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="catagory-product-card bg-cover"
                            style="background-image: url('kebab/img/shape/catagory-card-shape.jpg');">
                            <h5>5 products</h5>
                            <div class="catagory-product-image text-center">
                                <a href="shop.html">
                                    <img src="{{ asset('kebab') }}/img/food/french-fry.png" alt="product-img">
                                    <div class="decor-leaf">
                                        <img src="{{ asset('kebab') }}/img/shape/decor-leaf.svg" alt="shape-img">
                                    </div>
                                    <div class="decor-leaf-2">
                                        <img src="{{ asset('kebab') }}/img/shape/decor-leaf-2.svg" alt="shape-img">
                                    </div>
                                    <div class="burger-shape">
                                        <img src="{{ asset('kebab') }}/img/shape/burger-shape.png" alt="shape-img">
                                    </div>
                                </a>
                            </div>
                            <div class="catagory-product-content text-center">
                                <div class="catagory-product-icon">
                                    <img src="{{ asset('kebab') }}/img/shape/food-shape.svg" alt="shape-text">
                                </div>
                                <h3>
                                    <a href="shop-single.html">
                                        pro pizza
                                    </a>
                                </h3>
                                <p>5 products</p>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </section>

    {{-- promo --}}
    <section class="food-banner-section fix section-padding section-bg pt-0">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="section-title">
                        <h2 class="wow fadeInUp" data-wow-delay=".3s">Promo dari kami</h2>
                    </div>
                </div>

                @foreach ($promo as $pr)
                    <div class="col-md-6 col-12 mt-3 wow fadeInUp" data-wow-delay=".3s">
                        <div class="burger-banner-items bg-cover"
                            style="background-image: url('https://admin.kebabyasmin.id/img-promo/{{ $pr->foto }}');">
                            <div class="burger-content text-center">
                                {{-- <h3>today</h3>
                            <h2>special</h2> --}}
                                {{-- <h2><a href="shop.html" class="text-white">beef <span>burger</span></a></h2> --}}
                                <a href="" class="theme-btn mt-4">
                                    <span class="button-content-wrapper d-flex align-items-center">
                                        <span class="button-icon"><i class="flaticon-delivery"></i></span>
                                        <span class="button-text">Order Sekarang</span>
                                    </span>
                                </a>
                            </div>
                            {{-- <div class="burger-image">
                            <img src="{{ asset('kebab') }}/img/food/big-burger.png" alt="food-img">
                        </div>
                        <div class="text-shape">
                            <img src="{{ asset('kebab') }}/img/shape/pizza-text-2.png" alt="shape-img">
                        </div>
                        <div class="burger-text">
                            <img src="{{ asset('kebab') }}/img/shape/burger-text.png" alt="shape-img">
                        </div> --}}
                        </div>
                    </div>
                @endforeach

                {{-- <div class="col-xl-5 col-lg-9 mt-5 mt-xl-0 wow fadeInUp" data-wow-delay=".5s">
                    <div class="single-offer-items style-2 bg-cover"
                        style="background-image: url('kebab/img/banner/pepsi-bg.png');">
                        <div class="offer-content">
                            <h5>crispy, every bite taste</h5>
                            <h3>
                                FASH FOOD <br>
                                MEAL
                            </h3>
                            <p>
                                The mouth-watering aroma of <br>
                                sizzling burgers
                            </p>
                            <a href="shop-single.html" class="theme-btn mt-4">
                                <span class="button-content-wrapper d-flex align-items-center">
                                    <span class="button-icon"><i class="flaticon-delivery"></i></span>
                                    <span class="button-text">order now</span>
                                </span>
                            </a>
                        </div>
                        <div class="offer-img">
                            <img src="{{ asset('kebab') }}/img/offer/50percent-off-3.png" alt="shape-img">
                        </div>
                        <div class="roller-box">
                            <img src="{{ asset('kebab') }}/img/food/roller-box.png" alt="food-img">
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>
    {{-- end promo --}}

    <!-- Food Banner Section Start -->
    {{-- <section class="food-banner-section section-padding fix section-bg pt-0">
        <div class="chili-shape">
            <img src="{{ asset('kebab') }}/img/shape/chili-shape.png" alt="shape-img">
        </div>
        <div class="fry-shape">
            <img src="{{ asset('kebab') }}/img/shape/fry-shape.png" alt="shape-img">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2 class="wow fadeInUp" data-wow-delay=".3s">Promo dari kami</h2>
                    </div>
                </div>
                <div class="col-xl-5 wow fadeInUp" data-wow-delay=".3s">
                    <div class="single-offer-items bg-cover"
                        style="background-image: url('kebab/img/banner/offer-bg.png');">
                        <div class="offer-content">
                            <h5>crispy, every bite taste</h5>
                            <h3>
                                SUPER <br>
                                DELICIOUS
                            </h3>
                        </div>
                        <div class="offer-image">
                            <img src="{{ asset('kebab') }}/img/offer/50percent-off.png" alt="offer-img">
                        </div>
                        <div class="burger-text">
                            <img src="{{ asset('kebab') }}/img/shape/burger-text.png" alt="shape-img">
                        </div>
                        <div class="main-food">
                            <img src="{{ asset('kebab') }}/img/food/main-food.png" alt="food-img">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12 mt-5 mt-xl-0 wow fadeInUp" data-wow-delay=".5s">
                    <div class="pizza-banner-items bg-cover"
                        style="background-image: url('kebab/img/banner/pizza-bg.png');">
                        <div class="pizza-text">
                            <img src="{{ asset('kebab') }}/img/shape/pizza-text.png" alt="shape-img">
                        </div>
                        <div class="pizza-text-2">
                            <img src="{{ asset('kebab') }}/img/shape/pizza-text-2.png" alt="shape-img">
                        </div>
                        <div class="pizza-image">
                            <img src="{{ asset('kebab') }}/img/food/pizza-2.png" alt="pizza-img">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12 mt-5 mt-xl-0 wow fadeInUp" data-wow-delay=".5s">
                    <div class="pizza-banner-items bg-cover"
                        style="background-image: url('kebab/img/banner/pizza-bg.png');">
                        <div class="pizza-text">
                            <img src="{{ asset('kebab') }}/img/shape/pizza-text.png" alt="shape-img">
                        </div>
                        <div class="pizza-text-2">
                            <img src="{{ asset('kebab') }}/img/shape/pizza-text-2.png" alt="shape-img">
                        </div>
                        <div class="pizza-image">
                            <img src="{{ asset('kebab') }}/img/food/pizza-2.png" alt="pizza-img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <!-- Brand Section Start -->
    {{-- <section class="brand-shape section-padding fix section-bg pt-0">
        <div class="container">
            <div class="brand-wrapper">
                <div class="brand-title">
                    <h4>
                        Global <span>5K+</span> Happy Sponsors With us
                    </h4>
                </div>
                <div class="swiper brand-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="brand-image">
                                <img src="{{ asset('kebab') }}/img/brand/01.svg" alt="brand-img">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-image">
                                <img src="{{ asset('kebab') }}/img/brand/02.svg" alt="brand-img">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-image">
                                <img src="{{ asset('kebab') }}/img/brand/03.svg" alt="brand-img">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-image">
                                <img src="{{ asset('kebab') }}/img/brand/04.svg" alt="brand-img">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-image">
                                <img src="{{ asset('kebab') }}/img/brand/05.svg" alt="brand-img">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-image">
                                <img src="{{ asset('kebab') }}/img/brand/06.svg" alt="brand-img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <!-- Grilled Banner Section Start -->
    {{-- <section class="grilled-banner fix section-padding bg-cover"
        style="background-image: url('kebab/img/banner/main-bg.jpg');">
        <div class="patato-shape">
            <img src="{{ asset('kebab') }}/img/shape/patato-shape.png" alt="shape-img">
        </div>
        <div class="offer-shape float-bob-y">
            <img src="{{ asset('kebab') }}/img/offer/50percent-off-2.png" alt="shape-img">
        </div>
        <div class="text-shape">
            <img src="{{ asset('kebab') }}/img/shape/pizza-text-2.png" alt="shape-img">
        </div>
        <div class="spicy-shape">
            <img src="{{ asset('kebab') }}/img/shape/spicy.png" alt="shape-img">
        </div>
        <div class="tomato-shape">
            <img src="{{ asset('kebab') }}/img/shape/tomato-shape-2.png" alt="shape-img">
        </div>
        <div class="container">
            <div class="grilled-wrapper">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-lg-6">
                        <div class="grilled-content">
                            <h4 class="wow fadeInUp">
                                save 20%
                            </h4>
                            <h2 class="wow fadeInUp" data-wow-delay=".3s">
                                tODAY'S <span>ASTACKIN</span> DAY
                            </h2>
                            <h3 class="wow fadeInUp" data-wow-delay=".5s">
                                <a href="shop.html">
                                    grilled <span class="text-1">chiken</span>
                                </a>
                                <span class="text-2">$59,00</span>
                            </h3>
                            <div class="grilled-button wow fadeInUp" data-wow-delay=".7s">
                                <a href="shop-single.html" class="theme-btn">
                                    <span class="button-content-wrapper d-flex align-items-center">
                                        <span class="button-icon"><i class="flaticon-delivery"></i></span>
                                        <span class="button-text">order now</span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 mt-5 mt-lg-0 wow fadeInUp" data-wow-delay=".4s">
                        <div class="grilled-image">
                            <img src="{{ asset('kebab') }}/img/food/grilled.png" alt="grilled-img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <!-- Food Catagory Section Start -->
    <section class="food-category-section fix section-padding section-bg">
        <div class="container">
            <div class="section-title text-center">
                <span class="wow fadeInUp">Surganya Ngebab!</span>
                <h2 class="wow fadeInUp" data-wow-delay=".3s">Menu Kami</h2>
            </div>
            <div class="row">
                @foreach ($menu as $mn)
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="catagory-product-card-2 text-center">
                            {{-- <div class="icon">
                                <a href=""><i class="far fa-heart"></i></a>
                            </div> --}}
                            <div class="catagory-product-image">
                                <img src="https://admin.kebabyasmin.id/{{ $mn->foto }}" height="200px;"
                                    alt="product-img" class="lazy" loading="lazy">
                            </div>
                            <div class="catagory-product-content">
                                <div class="catagory-button">
                                    <a href="" class="theme-btn-2"><i class="far fa-shopping-basket"></i>Order</a>
                                </div>
                                <div class="info-price d-flex align-items-center justify-content-center">
                                    {{-- <p>-5%</p> --}}
                                    <h6>Rp. {{ number_format($mn->harga, 0) }}</h6>
                                    {{-- <span>$28.52</span> --}}
                                </div>
                                <h4>
                                    <a href="{{ route('menu') }}">{{ $mn->nm_produk }}</a>
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
                {{-- <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                    <div class="catagory-product-card-2 active text-center">
                        <div class="icon">
                            <a href="shop-cart.html"><i class="far fa-heart"></i></a>
                        </div>
                        <div class="catagory-product-image">
                            <img src="{{ asset('kebab') }}/img/food/burger-2.png" alt="product-img">
                        </div>
                        <div class="catagory-product-content">
                            <div class="catagory-button">
                                <a href="shop-cart.html" class="theme-btn-2"><i class="far fa-shopping-basket"></i>Add To
                                    Cart</a>
                            </div>
                            <div class="info-price d-flex align-items-center justify-content-center">
                                <p>-5%</p>
                                <h6>$30.52</h6>
                                <span>$28.52</span>
                            </div>
                            <h4>
                                <a href="shop-single.html">Whopper Burger King</a>
                            </h4>
                            <div class="star">
                                <span class="fas fa-star"></span>
                                <span class="fas fa-star"></span>
                                <span class="fas fa-star"></span>
                                <span class="fas fa-star"></span>
                                <span class="fas fa-star text-white"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                    <div class="catagory-product-card-2 text-center">
                        <div class="icon">
                            <a href="shop-cart.html"><i class="far fa-heart"></i></a>
                        </div>
                        <div class="catagory-product-image">
                            <img src="{{ asset('kebab') }}/img/food/pasta-2.png" alt="product-img">
                        </div>
                        <div class="catagory-product-content">
                            <div class="catagory-button">
                                <a href="shop-cart.html" class="theme-btn-2"><i class="far fa-shopping-basket"></i>Add To
                                    Cart</a>
                            </div>
                            <div class="info-price d-flex align-items-center justify-content-center">
                                <p>-5%</p>
                                <h6>$30.52</h6>
                                <span>$28.52</span>
                            </div>
                            <h4>
                                <a href="shop-single.html">Chiness pasta</a>
                            </h4>
                            <div class="star">
                                <span class="fas fa-star"></span>
                                <span class="fas fa-star"></span>
                                <span class="fas fa-star"></span>
                                <span class="fas fa-star"></span>
                                <span class="fas fa-star text-white"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".8s">
                    <div class="catagory-product-card-2 text-center">
                        <div class="icon">
                            <a href="shop-cart.html"><i class="far fa-heart"></i></a>
                        </div>
                        <div class="catagory-product-image">
                            <img src="{{ asset('kebab') }}/img/food/pizza-3.png" alt="product-img">
                        </div>
                        <div class="catagory-product-content">
                            <div class="catagory-button">
                                <a href="shop-cart.html" class="theme-btn-2"><i class="far fa-shopping-basket"></i>Add To
                                    Cart</a>
                            </div>
                            <div class="info-price d-flex align-items-center justify-content-center">
                                <p>-5%</p>
                                <h6>$30.52</h6>
                                <span>$28.52</span>
                            </div>
                            <h4>
                                <a href="shop-single.html">delicious burger</a>
                            </h4>
                            <div class="star">
                                <span class="fas fa-star"></span>
                                <span class="fas fa-star"></span>
                                <span class="fas fa-star"></span>
                                <span class="fas fa-star"></span>
                                <span class="fas fa-star text-white"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="catagory-product-card-2 text-center">
                        <div class="icon">
                            <a href="shop-cart.html"><i class="far fa-heart"></i></a>
                        </div>
                        <div class="catagory-product-image">
                            <img src="{{ asset('kebab') }}/img/food/main-food-2.png" alt="product-img">
                        </div>
                        <div class="catagory-product-content">
                            <div class="catagory-button">
                                <a href="shop-cart.html" class="theme-btn-2"><i class="far fa-shopping-basket"></i>Add To
                                    Cart</a>
                            </div>
                            <div class="info-price d-flex align-items-center justify-content-center">
                                <p>-5%</p>
                                <h6>$30.52</h6>
                                <span>$28.52</span>
                            </div>
                            <h4>
                                <a href="shop-single.html">fast food combo</a>
                            </h4>
                            <div class="star">
                                <span class="fas fa-star"></span>
                                <span class="fas fa-star"></span>
                                <span class="fas fa-star"></span>
                                <span class="fas fa-star"></span>
                                <span class="fas fa-star text-white"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                    <div class="catagory-product-card-2 text-center">
                        <div class="icon">
                            <a href="shop-cart.html"><i class="far fa-heart"></i></a>
                        </div>
                        <div class="catagory-product-image">
                            <img src="{{ asset('kebab') }}/img/food/ruti.png" alt="product-img">
                        </div>
                        <div class="catagory-product-content">
                            <div class="catagory-button">
                                <a href="shop-cart.html" class="theme-btn-2"><i class="far fa-shopping-basket"></i>Add To
                                    Cart</a>
                            </div>
                            <div class="info-price d-flex align-items-center justify-content-center">
                                <p>-5%</p>
                                <h6>$30.52</h6>
                                <span>$28.52</span>
                            </div>
                            <h4>
                                <a href="shop-single.html">ruti with chiken</a>
                            </h4>
                            <div class="star">
                                <span class="fas fa-star"></span>
                                <span class="fas fa-star"></span>
                                <span class="fas fa-star"></span>
                                <span class="fas fa-star"></span>
                                <span class="fas fa-star text-white"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                    <div class="catagory-product-card-2 text-center">
                        <div class="icon">
                            <a href="shop-cart.html"><i class="far fa-heart"></i></a>
                        </div>
                        <div class="catagory-product-image">
                            <img src="{{ asset('kebab') }}/img/food/grilled-2.png" alt="product-img">
                        </div>
                        <div class="catagory-product-content">
                            <div class="catagory-button">
                                <a href="shop-cart.html" class="theme-btn-2"><i class="far fa-shopping-basket"></i>Add To
                                    Cart</a>
                            </div>
                            <div class="info-price d-flex align-items-center justify-content-center">
                                <p>-5%</p>
                                <h6>$30.52</h6>
                                <span>$28.52</span>
                            </div>
                            <h4>
                                <a href="shop-single.html">grilled chiken</a>
                            </h4>
                            <div class="star">
                                <span class="fas fa-star"></span>
                                <span class="fas fa-star"></span>
                                <span class="fas fa-star"></span>
                                <span class="fas fa-star"></span>
                                <span class="fas fa-star text-white"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".8s">
                    <div class="catagory-product-card-2 text-center">
                        <div class="icon">
                            <a href="shop-cart.html"><i class="far fa-heart"></i></a>
                        </div>
                        <div class="catagory-product-image">
                            <img src="{{ asset('kebab') }}/img/food/delicious-burger.png" alt="product-img">
                        </div>
                        <div class="catagory-product-content">
                            <div class="catagory-button">
                                <a href="shop-cart.html" class="theme-btn-2"><i class="far fa-shopping-basket"></i>Add To
                                    Cart</a>
                            </div>
                            <div class="info-price d-flex align-items-center justify-content-center">
                                <p>-5%</p>
                                <h6>$30.52</h6>
                                <span>$28.52</span>
                            </div>
                            <h4>
                                <a href="shop-single.html">delicious burger</a>
                            </h4>
                            <div class="star">
                                <span class="fas fa-star"></span>
                                <span class="fas fa-star"></span>
                                <span class="fas fa-star"></span>
                                <span class="fas fa-star"></span>
                                <span class="fas fa-star text-white"></span>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
            <div class="catagory-button text-center pt-4 wow fadeInUp" data-wow-delay=".3s">
                <a href="{{ route('menu') }}" class="theme-btn">
                    <span class="button-content-wrapper d-flex align-items-center">
                        <span class="button-icon"><i class="flaticon-delivery"></i></span>
                        <span class="button-text">Lihat lainnya</span>
                    </span>
                </a>
            </div>
        </div>
    </section>

    <!-- Food Comboo Section Start -->
    {{-- <section class="food-comboo-section fix bg-cover section-padding"
        style="background-image: url('kebab/img/bg-image/bg.jpg');">
        <div class="drinks-shape">
            <img src="{{ asset('kebab') }}/img/shape/drinks.png" alt="shape-img">
        </div>
        <div class="container">
            <div class="comboo-wrapper">
                <div class="row align-items-center">
                    <div class="col-xl-6">
                        <div class="food-comboo-content">
                            <div class="section-title">
                                <span class="wow fadeInUp">crispy, every bite taste</span>
                                <h2 class="wow fadeInUp" data-wow-delay=".3s">
                                    trending Food combo
                                    offer less <span>20%</span>
                                </h2>
                            </div>
                            <p class="wow fadeInUp" data-wow-delay=".5s">
                                A team of dreamers and doers building unique interactive music and art festivals.
                            </p>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <button class="nav-link wow fadeInUp" data-wow-delay=".3s" id="nav-home-tab"
                                    data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab"
                                    aria-controls="nav-home" aria-selected="true">
                                    <span class="food-comboo-list">
                                        <span class="offer-image">
                                            <img src="{{ asset('kebab') }}/img/offer/chicken.png" alt="img">
                                        </span>
                                        <span class="comboo-title">
                                            30% off 4pcs hot crispy & 8 pcs wing
                                        </span>
                                    </span>
                                </button>
                                <button class="nav-link active wow fadeInUp" data-wow-delay=".5s" id="nav-profile-tab"
                                    data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab"
                                    aria-controls="nav-profile" aria-selected="false">
                                    <span class="food-comboo-list">
                                        <span class="offer-image">
                                            <img src="{{ asset('kebab') }}/img/offer/pizza.png" alt="img">
                                        </span>
                                        <span class="comboo-title">
                                            20% off tasty pizza with drink
                                        </span>
                                    </span>
                                </button>
                                <button class="nav-link wow fadeInUp" data-wow-delay=".7s" id="nav-contact-tab"
                                    data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab"
                                    aria-controls="nav-contact" aria-selected="false">
                                    <span class="food-comboo-list">
                                        <span class="offer-image">
                                            <img src="{{ asset('kebab') }}/img/offer/burger.png" alt="img">
                                        </span>
                                        <span class="comboo-title">
                                            2pcs humbergur with drinks & sauce
                                        </span>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="tab-content" id="nav-tab-Content">
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                                aria-labelledby="nav-home-tab">
                                <div class="comboo-image bg-cover"
                                    style="background-image: url('kebab/img/banner/comboo-bg.jpg');">
                                    <div class="pizza-text">
                                        <img src="{{ asset('kebab') }}/img/shape/combo-pizza-text.png" alt="shape-img">
                                    </div>
                                    <div class="pizza-image">
                                        <img src="{{ asset('kebab') }}/img/food/big-pizza.png" alt="food-img">
                                    </div>
                                    <div class="offer-shape">
                                        <img src="{{ asset('kebab') }}/img/offer/50percent-off-2.png" alt="shape-img">
                                    </div>
                                    <div class="vegetable-shape">
                                        <img src="{{ asset('kebab') }}/img/shape/vegetable.png" alt="shape-img">
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-profile" role="tabpanel"
                                aria-labelledby="nav-profile-tab">
                                <div class="comboo-image bg-cover"
                                    style="background-image: url('kebab/img/banner/comboo-bg.jpg');">
                                    <div class="pizza-text">
                                        <img src="{{ asset('kebab') }}/img/shape/combo-pizza-text.png" alt="shape-img">
                                    </div>
                                    <div class="pizza-image">
                                        <img src="{{ asset('kebab') }}/img/food/big-pizza.png" alt="food-img">
                                    </div>
                                    <div class="offer-shape">
                                        <img src="{{ asset('kebab') }}/img/offer/50percent-off-2.png" alt="shape-img">
                                    </div>
                                    <div class="vegetable-shape">
                                        <img src="{{ asset('kebab') }}/img/shape/vegetable.png" alt="shape-img">
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-contact" role="tabpanel"
                                aria-labelledby="nav-contact-tab">
                                <div class="comboo-image bg-cover"
                                    style="background-image: url('kebab/img/banner/comboo-bg.jpg');">
                                    <div class="pizza-text">
                                        <img src="{{ asset('kebab') }}/img/shape/combo-pizza-text.png" alt="shape-img">
                                    </div>
                                    <div class="pizza-image">
                                        <img src="{{ asset('kebab') }}/img/food/big-pizza.png" alt="food-img">
                                    </div>
                                    <div class="offer-shape">
                                        <img src="{{ asset('kebab') }}/img/offer/50percent-off-2.png" alt="shape-img">
                                    </div>
                                    <div class="vegetable-shape">
                                        <img src="{{ asset('kebab') }}/img/shape/vegetable.png" alt="shape-img">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <!-- Marque Section Start -->
    <div class="marque-section fix section-padding pt-0 section-bg">
        <div class="marquee-wrapper text-slider">
            <div class="marquee-inner to-left">
                <ul class="marqee-list d-flex">
                    <li class="marquee-item">
                        <span class="text-slider text-color">populer</span><span class="text-slider"></span> <span
                            class="text-slider text-color">dishes</span>
                        <span class="text-slider"><img src="{{ asset('kebab') }}/img/icon/burger.png"
                                alt="icon-img"></span> <span class="text-slider"></span> <span
                            class="text-slider text-color-2">delicious</span>
                        <span class="text-slider text-color-2">food</span> <img
                            src="{{ asset('kebab') }}/img/icon/pizza.png" alt="icon-img"> <span
                            class="text-slider"></span> <span class="text-slider text-color">populer</span>
                        <span class="text-slider text-color">dishes</span> <span class="text-slider"></span><span
                            class="text-slider"><img src="{{ asset('kebab') }}/img/icon/burger.png"
                                alt="icon-img"></span> <span class="text-slider"></span> <span
                            class="text-slider text-color-2">delicious</span>
                        <span class="text-slider text-color">populer</span><span class="text-slider"></span> <span
                            class="text-slider text-color">dishes</span>
                        <span class="text-slider"><img src="{{ asset('kebab') }}/img/icon/burger.png"
                                alt="icon-img"></span> <span class="text-slider"></span> <span
                            class="text-slider text-color-2">delicious</span>
                        <span class="text-slider text-color-2">food</span> <img
                            src="{{ asset('kebab') }}/img/icon/pizza.png" alt="icon-img"> <span
                            class="text-slider"></span> <span class="text-slider text-color">populer</span>
                        <span class="text-slider text-color">dishes</span> <span class="text-slider"></span><span
                            class="text-slider"><img src="{{ asset('kebab') }}/img/icon/burger.png"
                                alt="icon-img"></span> <span class="text-slider"></span> <span
                            class="text-slider text-color-2">delicious</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Choose Us Section Start -->
    <section class="choose-us fix section-padding pt-0 section-bg">
        <div class="container">
            <div class="food-icon-wrapper bg-cover" style="background-image: url('kebab/img/shape/food-shape-2.png');">
                <div class="row g-4">
                    <div class="col-3 wow fadeInUp" data-wow-delay=".3s">
                        <div class="single-food-icon">
                            <div class="icon">
                                <i class="flaticon-quality"></i>
                            </div>
                            <div class="content">
                                <h4>super quality food</h4>
                                {{-- <p>
                                    A team of dreamers and doers building
                                    unique interactive music and art
                                </p> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-3 wow fadeInUp" data-wow-delay=".5s">
                        <div class="single-food-icon">
                            <div class="icon">
                                <i class="flaticon-cooking"></i>
                            </div>
                            <div class="content">
                                <h4>original recipes</h4>
                                {{-- <p>
                                    A team of dreamers and doers building
                                    unique interactive music and art
                                </p> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                        <div class="single-food-icon">
                            <div class="icon">
                                <i class="flaticon-fast-delivery"></i>
                            </div>
                            <div class="content">
                                <h4>quick fast delivery</h4>
                                {{-- <p>
                                    A team of dreamers and doers building
                                    unique interactive music and art
                                </p> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-3 wow fadeInUp" data-wow-delay=".9s">
                        <div class="single-food-icon">
                            <div class="icon">
                                <i class="flaticon-quality"></i>
                            </div>
                            <div class="content">
                                <h4>100% fresh foods</h4>
                                {{-- <p>
                                    A team of dreamers and doers building
                                    unique interactive music and art
                                </p> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section Start -->
    {{-- <section class="about-section fix section-padding pt-0 section-bg">
        <div class="container">
            <div class="about-wrapper">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="about-image">
                            <img src="{{ asset('kebab') }}/img/about/burger.png" alt="about-img">
                            <div class="burger-text">
                                <img src="{{ asset('kebab') }}/img/about/burger-text.png" alt="shape-img">
                            </div>
                            <div class="price">
                                <h2>$<span class="count">4,99</span></h2>
                            </div>
                            <div class="since-text bg-cover"
                                style="background-image: url('kebab/img/shape/food-shape.png');">
                                <h3>since /1985</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 mt-5 mt-lg-0">
                        <div class="about-content">
                            <div class="section-title">
                                <span class="wow fadeInUp">about our food</span>
                                <h2 class="wow fadeInUp" data-wow-delay=".3s">
                                    Where Quality Meet
                                    Excellent <span>Service.</span>
                                </h2>
                            </div>
                            <p class="wow fadeInUp" data-wow-delay=".5s">
                                It's the perfect dining experience where every dish is crafted with fresh, high-quality
                                Experience quick and efficient service that ensures your food is servead fresh It's the
                                dining experience where every dish is crafted with fresh, high-quality ingredients
                            </p>
                            <div class="icon-area">
                                <div class="icon-items d-flex wow fadeInUp" data-wow-delay=".3s">
                                    <div class="icon">
                                        <i class="flaticon-quality"></i>
                                    </div>
                                    <div class="content">
                                        <h4>super quality food</h4>
                                        <p>
                                            A team of dreamers and doers build
                                            unique interactive music and art
                                        </p>
                                    </div>
                                </div>
                                <div class="icon-items d-flex wow fadeInUp" data-wow-delay=".5s">
                                    <div class="icon">
                                        <i class="flaticon-reputation"></i>
                                    </div>
                                    <div class="content">
                                        <h4>well reputation</h4>
                                        <p>
                                            A team of dreamers and doers build
                                            unique interactive music and art
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="info-area d-flex align-items-center">
                                <a href="about.html" class="theme-btn wow style-line-height fadeInUp"
                                    data-wow-delay=".3s">more about us</a>
                                <div class="info-content wow fadeInUp" data-wow-delay=".5s">
                                    <span>BRENDON GARREY</span>
                                    <h6>Customer’s experience is our highest priority.</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <!-- Food Banner Section Start -->
    {{-- <section class="food-banner-section fix section-padding section-bg pt-0">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-9 wow fadeInUp" data-wow-delay=".3s">
                    <div class="burger-banner-items bg-cover"
                        style="background-image: url('kebab/img/banner/burger-bg.png');">
                        <div class="burger-content text-center">
                            <h3>today</h3>
                            <h2>special</h2>
                            <h4><a href="shop.html" class="text-white">beef <span>burger</span></a></h4>
                            <a href="shop-single.html" class="theme-btn mt-4">
                                <span class="button-content-wrapper d-flex align-items-center">
                                    <span class="button-icon"><i class="flaticon-delivery"></i></span>
                                    <span class="button-text">order now</span>
                                </span>
                            </a>
                        </div>
                        <div class="burger-image">
                            <img src="{{ asset('kebab') }}/img/food/big-burger.png" alt="food-img">
                        </div>
                        <div class="text-shape">
                            <img src="{{ asset('kebab') }}/img/shape/pizza-text-2.png" alt="shape-img">
                        </div>
                        <div class="burger-text">
                            <img src="{{ asset('kebab') }}/img/shape/burger-text.png" alt="shape-img">
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-9 mt-5 mt-xl-0 wow fadeInUp" data-wow-delay=".5s">
                    <div class="single-offer-items style-2 bg-cover"
                        style="background-image: url('kebab/img/banner/pepsi-bg.png');">
                        <div class="offer-content">
                            <h5>crispy, every bite taste</h5>
                            <h3>
                                FASH FOOD <br>
                                MEAL
                            </h3>
                            <p>
                                The mouth-watering aroma of <br>
                                sizzling burgers
                            </p>
                            <a href="shop-single.html" class="theme-btn mt-4">
                                <span class="button-content-wrapper d-flex align-items-center">
                                    <span class="button-icon"><i class="flaticon-delivery"></i></span>
                                    <span class="button-text">order now</span>
                                </span>
                            </a>
                        </div>
                        <div class="offer-img">
                            <img src="{{ asset('kebab') }}/img/offer/50percent-off-3.png" alt="shape-img">
                        </div>
                        <div class="roller-box">
                            <img src="{{ asset('kebab') }}/img/food/roller-box.png" alt="food-img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <!-- KFC Banner Section Start -->
    {{-- <section class="kfc-banner fix bg-cover section-padding" style="background-image: url('kebab/img/bg-image/bg.jpg');">
        <div class="kfc-wrapper">
            <div class="container-fluid">
                <div class="row justify-content-between">
                    <div class="col-lg-5">
                        <div class="kfc-image-items bg-cover"
                            style="background-image: url('kebab/img/banner/kfc-bg.png');">
                            <div class="kfc-image">
                                <img src="{{ asset('kebab') }}/img/food/kfc.png" alt="food-img">
                            </div>
                            <div class="offer-shape">
                                <img src="{{ asset('kebab') }}/img/offer/50percent-off-2.png" alt="shape-img">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="kfc-content text-center">
                            <div class="section-title">
                                <span class="wow fadeInUp">crispy, every bite taste</span>
                                <h2 class="wow fadeInUp" data-wow-delay=".3s">
                                    kfc chiken hot <br>
                                    wing & french fries
                                </h2>
                            </div>
                            <p class="mt-3 mt-lg-0 wow fadeInUp" data-wow-delay=".5s">
                                Wheat tortilla with spicy chicken bites, cheese sauce <br>
                                tomatoes and soft cheese
                            </p>
                            <ul class="countdown-items wow fadeInUp" data-wow-delay=".7s">
                                <li>
                                    <span id="day">30</span>
                                    <p>Days</p>
                                </li>
                                <li>
                                    <span id="Hours">22</span>
                                    <p class="cont">hours</p>
                                </li>
                                <li>
                                    <span id="Minutes">48</span>
                                    <p>Min</p>
                                </li>
                                <li>
                                    <span id="Seconds">22</span>
                                    <p>Sec</p>
                                </li>
                            </ul>
                            <a href="shop-single.html" class="theme-btn mt-5 wow fadeInUp" data-wow-delay=".8s">
                                <span class="button-content-wrapper d-flex align-items-center">
                                    <span class="button-icon"><i class="flaticon-delivery"></i></span>
                                    <span class="button-text">order now</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <!-- Testimonial Section Start -->
    {{-- <section class="testimonial-section fix section-padding section-bg">
        <div class="burger-shape">
            <img src="{{ asset('kebab') }}/img/shape/burger-shape-3.png" alt="burger-shape">
        </div>
        <div class="fry-shape">
            <img src="{{ asset('kebab') }}/img/shape/fry-shape-2.png" alt="burger-shape">
        </div>
        <div class="pizza-shape">
            <img src="{{ asset('kebab') }}/img/shape/pizzashape.png" alt="burger-shape">
        </div>
        <div class="container">
            <div class="testimonial-wrapper style-responsive">
                <div class="testimonial-items text-center">
                    <div class="swiper testimonial-content-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="testimonial-content">
                                    <div class="client-info">
                                        <h4>Piter Bowman</h4>
                                        <h5>Business CEO & co founder</h5>
                                    </div>
                                    <h3>
                                        “Thank you for dinner last night. It was amazing!! I have
                                        say it’s the best meal I have had in quite some time.
                                        will definitely be seeing more eating next year.”
                                    </h3>
                                    <div class="star">
                                        <span class="fas fa-star"></span>
                                        <span class="fas fa-star"></span>
                                        <span class="fas fa-star"></span>
                                        <span class="fas fa-star"></span>
                                        <span class="fas fa-star"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-content">
                                    <div class="client-info">
                                        <h4>Piter Bowman</h4>
                                        <h5>Business CEO & co founder</h5>
                                    </div>
                                    <h3>
                                        “Thank you for dinner last night. It was amazing!! I have
                                        say it’s the best meal I have had in quite some time.
                                        will definitely be seeing more eating next year.”
                                    </h3>
                                    <div class="star">
                                        <span class="fas fa-star"></span>
                                        <span class="fas fa-star"></span>
                                        <span class="fas fa-star"></span>
                                        <span class="fas fa-star"></span>
                                        <span class="fas fa-star"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-content">
                                    <div class="client-info">
                                        <h4>Piter Bowman</h4>
                                        <h5>Business CEO & co founder</h5>
                                    </div>
                                    <h3>
                                        “Thank you for dinner last night. It was amazing!! I have
                                        say it’s the best meal I have had in quite some time.
                                        will definitely be seeing more eating next year.”
                                    </h3>
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
                    </div>
                    <div class="swiper testimonial-image-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="client-image-item">
                                    <div class="client-img bg-cover"
                                        style="background-image: url('kebab/img/client/01.jpg')"></div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="client-image-item">
                                    <div class="client-img bg-cover"
                                        style="background-image: url('kebab/img/client/02.jpg')"></div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="client-image-item">
                                    <div class="client-img bg-cover"
                                        style="background-image: url('kebab/img/client/03.jpg')"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <!-- Main Cta Banner Section Start -->
    <section class="main-cta-banner section-padding pt-0">
        <div class="container">
            <div class="main-cta-banner-wrapper bg-cover mt-10"
                style="background-image: url('kebab/img/banner/main-cta-bg.jpg');">
                <div class="section-title">
                    <span class="theme-color-3 wow fadeInUp">Surganya Ngebab!</span>
                    <h2 class="text-white wow fadeInUp" data-wow-delay=".3s">
                        Program <br>
                        <span class="theme-color-3">Order Online</span><br>Ambil Ditempat
                    </h2>
                </div>
                <a href="" class="theme-btn bg-white mt-4 mt-md-0 wow fadeInUp" data-wow-delay=".5s">
                    <span class="button-content-wrapper d-flex align-items-center">
                        <span class="button-icon"><i class="flaticon-delivery"></i></span>
                        <span class="button-text">Order Online</span>
                    </span>
                </a>
                <div class="arrow-shape">
                    <img src="{{ asset('kebab') }}/img/shape/arrow-shape.png" alt="shape-img">
                </div>
                <div class="delivery-man">
                    <img src="{{ asset('img') }}/cooking.png" alt="img">
                </div>
                <div class="frame-shape">
                    <img src="{{ asset('kebab') }}/img/shape/frame.png" alt="shape-img">
                </div>
            </div>
        </div>
    </section>

    <!-- Booking Section Start -->
    <section class="booking-section fix section-padding bg-cover"
        style="background-image: url('kebab/img/banner/main-bg.jpg');">
        <div class="container">
            <div class="booking-wrapper style-responsive section-padding pb-0">
                <div class="row justify-content-between align-items-center">
                    <div class="col-12">
                        <div class="booking-content">
                            <div class="section-title">
                                <span class="wow fadeInUp">Surganya Ngebab!</span>
                                <h2 class="text-white wow fadeInUp" data-wow-delay=".3s">
                                    Punya pertanyaan? <br>
                                    Masukan, Kritik dan Saran?
                                </h2>
                            </div>
                            <div class="icon-items d-flex align-items-center wow fadeInUp" data-wow-delay=".5s">
                                <div class="icon">
                                    <i class="flaticon-phone-call-2"></i>
                                </div>
                                <div class="content">
                                    <h5>24/7 Support center</h5>
                                    <h3><a href="https://wa.me/6285651077183">0856 5107 7183</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="col-lg-5 mt-5 mt-lg-0 wow fadeInUp" data-wow-delay=".4s">
                        <div class="booking-contact bg-cover"
                            style="background-image: url('kebab/img/shape/booking-shape.png');">
                            <h4 class="text-center text-white">create an reservation</h4>
                            <div class="booking-items">
                                <div class="form-clt">
                                    <div class="nice-select" tabindex="0">
                                        <span class="current">
                                            no of person
                                        </span>
                                        <ul class="list">
                                            <li data-value="1" class="option selected">
                                                no of person
                                            </li>
                                            <li data-value="1" class="option">
                                                no of person
                                            </li>
                                            <li data-value="1" class="option">
                                                no of person
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="form-clt">
                                    <input type="text" name="number" id="number" placeholder="phone number">
                                    <div class="icon">
                                        <i class="fas fa-phone"></i>
                                    </div>
                                </div>
                                <div class="form-clt">
                                    <input type="date" id="calendar" name="calendar">
                                </div>
                                <div class="form-clt">
                                    <a href="reservation.html" class="theme-btn bg-yellow">
                                        booking now
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </section>
@endsection
