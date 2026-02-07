@extends('template.master')
@section('content')
    <!--<< Breadcrumb Section Start >>-->
    <div class="breadcrumb-wrapper bg-cover" style="background-image: url('/img/contact-us.jpg');">
        <div class="container">
            <div class="page-heading center">
                <h1>Hubungi Kami</h1>
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
                        Hubungi Kami
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!--<< Contact Info Section Start >>-->
    <section class="contact-info-section fix section-padding section-bg">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="contact-info-items text-center">
                        <div class="icon">
                            <img src="{{ asset('kebab') }}/img/icon/location.svg" alt="icon-img">
                        </div>
                        <div class="content">
                            <h3>Kantor Kami</h3>
                            <p>
                                Jl. Kampung Melayu Darat (Samping Gang
                                Kenari)<br>Banjarmasin Tengah, Kota Banjarmasin, Kalimantan Selatan
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                    <div class="contact-info-items active text-center">
                        <div class="icon">
                            <img src="{{ asset('kebab') }}/img/icon/phone.svg" alt="icon-img">
                        </div>
                        <div class="content">
                            <h3>Whatsapp</h3>
                            <p>
                                0856 5107 7183
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                    <div class="contact-info-items text-center">
                        <div class="icon">
                            <img src="{{ asset('kebab') }}/img/icon/email.svg" alt="icon-img">
                        </div>
                        <div class="content">
                            <h3>Email</h3>
                            <p>
                                kebabyasminofficial@gmail.com
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--<< Contact Section Start >>-->
    <section class="contact-section section-padding pt-0 section-bg">
        <div class="container">
            <div class="contact-area">
                <div class="row justify-content-between">
                    <div class="col-12">
                        <div class="map-content-area">
                            <h3 class="wow fadeInUp" data-wow-delay=".3s"> Hubungi Kami</h3>
                            <p class="wow fadeInUp" data-wow-delay=".5s">
                                Lorem ipsum dolor sit amet consectetur adipiscing elit mattis <br>
                                faucibus odio feugiat arc dolor.
                            </p>
                            <div class="google-map wow fadeInUp" data-wow-delay=".7s">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3983.1315525073182!2d114.59925107374414!3d-3.317644641218036!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zM8KwMTknMDMuNSJTIDExNMKwMzYnMDYuNiJF!5e0!3m2!1sen!2sid!4v1769695999795!5m2!1sen!2sid"
                                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="col-xl-5 col-lg-5 mt-5 mt-lg-0">
                        <div class="contact-form-items">
                            <div class="contact-title">
                                <h3 class="wow fadeInUp" data-wow-delay=".3s">Fill Up The Form</h3>
                                <p class="wow fadeInUp" data-wow-delay=".5s">Your email address will not be published.
                                    Required fields are marked *</p>
                            </div>
                            <form action="contact.php" id="contact-form" method="POST">
                                <div class="row g-4">
                                    <div class="col-lg-12 wow fadeInUp" data-wow-delay=".3s">
                                        <div class="form-clt">
                                            <input type="text" name="name" id="name" placeholder="Your Name*">
                                            <div class="icon">
                                                <i class="fal fa-user"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 wow fadeInUp" data-wow-delay=".5s">
                                        <div class="form-clt">
                                            <input type="text" name="email" id="email"
                                                placeholder="Email Address*">
                                            <div class="icon">
                                                <i class="fal fa-envelope"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 wow fadeInUp" data-wow-delay=".7s">
                                        <div class="form-clt-big form-clt">
                                            <textarea name="message" id="message" placeholder="Enter Your Messege here"></textarea>
                                            <div class="icon">
                                                <i class="fal fa-edit"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 wow fadeInUp" data-wow-delay=".8s">
                                        <button type="submit" class="theme-btn">
                                            <span class="button-content-wrapper d-flex align-items-center">
                                                <span class="button-icon"><i class="fal fa-paper-plane"></i></span>
                                                <span class="button-text">Get In Touch</span>
                                            </span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div> --}}
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
