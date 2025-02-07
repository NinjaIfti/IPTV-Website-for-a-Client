@extends('template.master')
@section('title', 'HOME | '.Config::get('app.name'))
@section('content')
<!--==============================
Hero Area
==============================-->
<!-- Include Swiper CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />

<style>
    /* Card Styling */
    .service-box {
        text-align: center;
        padding: 20px;
        border-radius: 10px;
        background-color: #fff;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s, box-shadow 0.3s, background 0.3s, color 0.3s;
        position: relative;
        overflow: hidden;
    }

    .service-box img {
        width: 72px;
        height: auto;
        margin-bottom: 15px;
        transition: filter 0.3s;
    }

    .service-box h3 {
        font-size: 1.2rem;
        font-weight: bold;
        margin-bottom: 10px;
        transition: color 0.3s;
    }

    .service-box p {
        font-size: 0.95rem;
        color: #555;
        transition: color 0.3s;
    }

    /* Gradient Hover Effect */
    .service-box:hover {
        transform: translateY(-8px);
        box-shadow: 0px 6px 15px rgba(0, 0, 0, 0.15);
        background: linear-gradient(135deg, #007bff, #00c6ff); /* Blue Gradient */
        color: white;
    }

    .service-box:hover h3,
    .service-box:hover p {
        color: white; /* White text on hover */
    }

    .service-box:hover img {
        filter: brightness(1.1) contrast(1.1);
    }


    @media (max-width: 768px) {
        .features-row {
            flex-direction: column;
            align-items: center;
        }

        .service-box {
            min-width: 80%; /* Stacks items in mobile view */
        }
    }

    .th-hero-wrapper {
        position: relative;
        width: 100%;
        height: 100vh;
        overflow: hidden;
    }

    .th-hero-slide {
        position: relative;
        width: 100%;
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .th-hero-bg, .th-hero-bg-overlay {
        position: absolute;
        width: 100%;
        height: 100%;
        background-size: cover;
        background-position: center;
        top: 0;
        left: 0;
        z-index: 1; /* Keep the background behind */
    }

    .th-hero-bg-overlay {
        background-color: rgba(0, 0, 0, 0.5); /* Optional: Dark overlay for better text visibility */
    }

    .hero-style3 {
        position: relative;
        z-index: 10; /* Ensure text appears in front */
        color: white;
        text-align: center;
    }

</style>
<div class="th-hero-wrapper hero-8" id="hero">
    <div class="swiper hero-slider-3">
        <div class="swiper-wrapper">
            <!-- Slide 1 -->
            <div class="swiper-slide">
                <div class="th-hero-slide">
                    <div class="th-hero-bg" style="background-image: url('{{ asset('assets/img/update1/hero/hero_bg_8_1.jpg') }}');"></div>
                    <div class="th-hero-bg-overlay" style="background-image: url('{{ asset('assets/img/hero/hero_overlay_3_1.jpg') }}');"></div>
                    <div class="container">
                        <div class="row align-items-center justify-content-center">
                            <div class="col-lg-12">
                                <div class="hero-style3 text-center">

                                    <h1 class="hero-title text-white">{{ trans('messages.hero_title') }}</h1>
                                    <div class="hero-text text-white">
                                        <p>{{ trans('messages.hero_text') }}</p>
                                    </div>
                                    <div class="mt-2">
                                        <a href="{{ URL::route('subscription') }}" class="th-btn style3">
                                            {{ trans('messages.explore_plan') }}
                                            <i class="fa-regular fa-arrow-right ms-2"></i>
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="swiper-slide">
                <div class="th-hero-slide">
                    <div class="th-hero-bg" style="background-image: url('{{ asset('assets/img/update1/hero/hero_bg_8_2.jpg') }}');"></div>
                    <div class="th-hero-bg-overlay" style="background-image: url('{{ asset('assets/img/hero/hero_overlay_3_1.jpg') }}');"></div>
                    <div class="container">
                        <div class="row align-items-center justify-content-center">
                            <div class="col-lg-12">
                                <div class="hero-style3 text-center">

                                    <h1 class="hero-title text-white">{{ trans('messages.hero_title') }}</h1>
                                    <div class="hero-text text-white">
                                        <p>{{ trans('messages.hero_text') }}</p>
                                    </div>
                                    <div class="mt-2">
                                        <a href="{{ URL::route('subscription') }}" class="th-btn style3">
                                            {{ trans('messages.explore_plan') }}
                                            <i class="fa-regular fa-arrow-right ms-2"></i>
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="swiper-slide">
                <div class="th-hero-slide">
                    <div class="th-hero-bg" style="background-image: url('{{ asset('assets/img/update1/hero/hero_bg_8_3.jpg') }}');"></div>
                    <div class="th-hero-bg-overlay" style="background-image: url('{{ asset('assets/img/hero/hero_overlay_3_1.jpg') }}');"></div>
                    <div class="container">
                        <div class="row align-items-center justify-content-center">
                            <div class="col-lg-12">
                                <div class="hero-style3 text-center">

                                    <h1 class="hero-title text-white">{{ trans('messages.hero_title') }}</h1>
                                    <div class="hero-text text-white">
                                        <p>{{ trans('messages.hero_text') }}</p>
                                    </div>
                                    <div class="mt-2">
                                        <a href="{{ URL::route('subscription') }}" class="th-btn style3">
                                            {{ trans('messages.explore_plan') }}
                                            <i class="fa-regular fa-arrow-right ms-2"></i>
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Include Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

<script>
    var swiper = new Swiper(".hero-slider-3", {
        loop: true,
        autoplay: {
            delay: 4000,  // Change slide every 4 seconds
            disableOnInteraction: false
        },
        effect: "fade",  // Smooth transition effect
        fadeEffect: { crossFade: true },
        speed: 1000
    });
</script>

<!--======== / Hero Section ========-->
<!--==============================
why Area
==============================-->
<div class="space space-bottom why-area-4" data-bg-src="{{asset('assets/img/update1/bg/why_bg_1.png')}}">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6 mb-45 mb-xl-0 text-center text-xl-start">
                <div class="title-area mb-35">
                    <span class="sub-title">{{ trans('messages.why_choose_us') }}</span>
                    <h2 class="sec-title fw-semibold">{{ trans('messages.television_title') }}</h2>

                </div>
                <p class="mt-n2 mb-35">{{ trans('messages.service_description') }}</p>
                <a href="{{ URL::route('contact') }}" class="th-btn">{{ trans('messages.contact_us') }}<i class="fas fa-arrow-right ms-2"></i></a>

            </div>
            <div class="col-xl-6">
                <div class="row gy-4">
                    <div class="col-md-6 feature-card-wrap">
                        <div class="feature-card">
                            <h3 class="feature-card_title">4.500+</h3>
                            <p class="feature-card_text">{{ trans('messages.channels') }}</p>
                        </div>
                    </div>
                    <div class="col-md-6 feature-card-wrap">
                        <div class="feature-card">
                            <h3 class="feature-card_title">97.000+</h3>
                            <p class="feature-card_text">{{ trans('messages.vod_series_movies') }}</p>
                        </div>
                    </div>
                    <div class="col-md-6 feature-card-wrap">
                        <div class="feature-card">
                            <h3 class="feature-card_title">99,9%</h3>
                            <p class="feature-card_text">{{ trans('messages.activity_time') }}</p>
                        </div>
                    </div>
                    <div class="col-md-6 feature-card-wrap">
                        <div class="feature-card">
                            <h3 class="feature-card_title">24/7</h3>
                            <p class="feature-card_text">{{ trans('messages.support') }}</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- Bootstrap-based Device Compatibility Section -->
<section class="container py-5">
    <div class="row align-items-center">
        <!-- Left Side: Image -->
        <div class="col-lg-6 text-center">
            <img src="{{ asset('assets/img/update1/hero/tv.webp') }}" class="img-fluid rounded shadow" alt="IPTV Devices">
        </div>

        <!-- Right Side: Text Content -->
        <div class="col-lg-6">
            <h2 class="fw-bold text-dark text-uppercase floating-text">
                {{ trans('messages.iptv_experience') }}
            </h2>
            <p class="mt-3">
                {{ trans('messages.iptv_description') }}
            </p>
        </div>

    </div>
</section>

<!-- Floating Text Effect -->
<style>
    .floating-text {
        text-shadow: 10px 15px 10px rgba(105, 105, 105, 0.9); /* Stronger black shadow */
    }

</style>


@include('components.movie')

<section class="space">
    <div class="container">
        <div class="title-area text-center">
            <span class="sub-title"><i class="fal fa-book me-1"></i> {{ trans('messages.pricing_table') }}</span>
            <h2 class="sec-title">{{ trans('messages.choose_subscription') }}</h2>
        </div>
        <div class="row gy-4 justify-content-center">
            <div class="col-xl-4 col-md-6">
                <div class="price-card ">
                    <div class="price-card_top">
                        <h3 class="price-card_title">{{ trans('messages.three_months') }}</h3>
                        <h4 class="price-card_price">
                            $70.00<span class="duration">CAD</span>
                        </h4>
                    </div>
                    <div class="price-card_content">
                        <ul class="list-unstyled">
                            <li>{{ trans('messages.watch_live_tv') }}</li>
                            <li>{{ trans('messages.channels_quality') }}</li>
                            <li>{{ trans('messages.no_buffering') }}</li>
                            <li>{{ trans('messages.tv_channels_count') }}</li>
                            <li>{{ trans('messages.vods_series_count') }}</li>
                            <li>{{ trans('messages.free_updates') }}</li>
                            <li>{{ trans('messages.technical_support') }}</li>
                        </ul>

                        <a href="{{ URL::route('payment', ['product' => '3 Months', 'price' => '70']) }}" class="th-btn style10">
                            {{ trans('messages.get_it_now') }}
                            <i class="fa-regular fa-arrow-right ms-2"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-md-6">
                <div class="price-card active">
                    <div class="price-card_top">
                        <h3 class="price-card_title">{{ trans('messages.seven_months') }}</h3>
                        <h4 class="price-card_price">
                            $125.00 <span class="duration">CAD</span>
                        </h4>
                    </div>
                    <div class="price-card_content">
                        <ul class="list-unstyled">
                            <li>{{ trans('messages.watch_live_tv') }}</li>
                            <li>{{ trans('messages.channels_quality') }}</li>
                            <li>{{ trans('messages.no_buffering') }}</li>
                            <li>{{ trans('messages.tv_channels_count') }}</li>
                            <li>{{ trans('messages.vods_series_count') }}</li>
                            <li>{{ trans('messages.free_updates') }}</li>
                            <li>{{ trans('messages.technical_support') }}</li>
                        </ul>

                        <a href="{{ URL::route('payment', ['product' => '7 Months', 'price' => '125']) }}" class="th-btn style10">
                            {{ trans('messages.get_it_now') }}
                            <i class="fa-regular fa-arrow-right ms-2"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-md-6">
                <div class="price-card ">
                    <div class="price-card_top">
                        <h3 class="price-card_title">{{ trans('messages.fourteen_months') }}</h3>
                        <h4 class="price-card_price">
                            $225.00 <span class="duration">CAD</span>
                        </h4>
                    </div>
                    <div class="price-card_content">
                        <ul class="list-unstyled">
                            <li>{{ trans('messages.watch_live_tv') }}</li>
                            <li>{{ trans('messages.channels_quality') }}</li>
                            <li>{{ trans('messages.no_buffering') }}</li>
                            <li>{{ trans('messages.tv_channels_count') }}</li>
                            <li>{{ trans('messages.vods_series_count') }}</li>
                            <li>{{ trans('messages.free_updates') }}</li>
                            <li>{{ trans('messages.technical_support') }}</li>
                        </ul>

                        <a href="{{ URL::route('payment', ['product' => '14 Months', 'price' => '225']) }}" class="th-btn style10">
                            {{ trans('messages.get_it_now') }}
                            <i class="fa-regular fa-arrow-right ms-2"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{--3/3 card--}}
<section>
    <div class="container my-5">
        <div class="text-center mb-4">
            <h2 class="fw-bold">{{ trans('messages.key_features_title') }}</h2>
            <p class="text-muted">{{ trans('messages.key_features_description') }}</p>
        </div>

        <div class="row g-4">
            <!-- First Row -->
            <div class="col-md-4">
                <div class="service-box p-3">
                    <img src="https://xtremehdiptv.org/wp-content/uploads/2023/11/devices.png" alt="">
                    <h3>{{ trans('messages.feature_play_on_any_device_title') }}</h3>
                    <p>{{ trans('messages.feature_play_on_any_device_description') }}</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="service-box p-3">
                    <img src="https://xtremehdiptv.org/wp-content/uploads/2023/11/guide.png" alt="">
                    <h3>{{ trans('messages.feature_tv_guide_title') }}</h3>
                    <p>{{ trans('messages.feature_tv_guide_description') }}</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="service-box p-3">
                    <img src="https://xtremehdiptv.org/wp-content/uploads/2023/11/support.png" alt="">
                    <h3>{{ trans('messages.feature_support_title') }}</h3>
                    <p>{{ trans('messages.feature_support_description') }}</p>
                </div>
            </div>

            <!-- Second Row -->
            <div class="col-md-4">
                <div class="service-box p-3">
                    <img src="https://xtremehdiptv.org/wp-content/uploads/2023/11/uptime.png" alt="">
                    <h3>{{ trans('messages.feature_uptime_title') }}</h3>
                    <p>{{ trans('messages.feature_uptime_description') }}</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="service-box p-3">
                    <img src="https://xtremehdiptv.org/wp-content/uploads/2023/11/secured.png" alt="">
                    <h3>{{ trans('messages.feature_safe_secured_title') }}</h3>
                    <p>{{ trans('messages.feature_safe_secured_description') }}</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="service-box p-3">
                    <img src="https://xtremehdiptv.org/wp-content/uploads/2023/11/premium.png" alt="">
                    <h3>{{ trans('messages.feature_premium_channels_title') }}</h3>
                    <p>{{ trans('messages.feature_premium_channels_description') }}</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!--==============================
Testimonial Area
==============================-->
<section class="space overflow-hidden" data-bg-src="{{asset('assets/img/update1/bg/testi_bg_2.jpg')}}">
    <div class="container">
        <div class="title-area text-center">
            <h2 class="sec-title fw-semibold text-white">{{ trans('messages.buy_or_bring_device') }}</h2>
            <span class="sub-title">{{ trans('messages.device_description') }}</span>
            <div class="btn-group justify-content-center">
                <a href="{{ URL::route('contact') }}" class="th-btn shadow-none">{{ trans('messages.become_student') }}<i class="fas fa-arrow-right ms-2"></i></a>
                <a href="{{ URL::route('contact') }}" class="th-btn style2">{{ trans('messages.become_teacher') }}<i class="fas fa-arrow-right ms-2"></i></a>
            </div>

        </div>
    </div>
    <div class="container-fluid">
        <div class="row gx-40 dot-style2" id="testiSlide1">
            <div class="col-lg-6">
            <div class="img-box12">
                        <img src="{{asset('assets/img/update1/normal/1.jpg')}}" alt="about">
                    </div>
            </div>
            <div class="col-lg-6">
            <div class="img-box12">
                        <img src="{{asset('assets/img/update1/normal/2.jpg')}}" alt="about">
                    </div>
            </div>
            <div class="col-lg-6">
            <div class="img-box12">
                        <img src="{{asset('assets/img/update1/normal/3.jpg')}}" alt="about">
                    </div>
            </div>
            <div class="col-lg-6">
            <div class="img-box12">
                        <img src="{{asset('assets/img/update1/normal/4.jpg')}}" alt="about">
                    </div>
            </div>
        </div>
    </div>
</section>
<section class="space">
    <div class="container">
        <div class="title-area text-center">
            <h2 class="sec-title">{{ trans('messages.resell_service') }}</h2>
            <span class="sub-title">{{ trans('messages.resell_description') }}</span>
        </div>
        <div class="row gy-4 justify-content-center">

            <div class="col-xl-3 col-md-6">
                <div class="price-card">
                    <div class="price-card_top">
                        <h3 class="price-card_title">{{ trans('messages.credits_25') }}</h3>
                        <h4 class="price-card_price">
                            $375.00<span class="duration">CAD</span>
                        </h4>
                    </div>
                    <div class="price-card_content">
                        <a href="{{ URL::route('payment', ['product' => '25 Credits', 'price' => '375']) }}" class="th-btn style10">
                            {{ trans('messages.get_it_now') }}
                            <i class="fa-regular fa-arrow-right ms-2"></i>
                        </a>

                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6">
                <div class="price-card">
                    <div class="price-card_top">
                        <h3 class="price-card_title">{{ trans('messages.credits_50') }}</h3>
                        <h4 class="price-card_price">
                            $700.00 <span class="duration">CAD</span>
                        </h4>
                    </div>
                    <div class="price-card_content">
                        <a href="{{ URL::route('payment', ['product' => '50 Credits', 'price' => '700']) }}" class="th-btn style10">
                            {{ trans('messages.get_it_now') }}
                            <i class="fa-regular fa-arrow-right ms-2"></i>
                        </a>

                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6">
                <div class="price-card">
                    <div class="price-card_top">
                        <h3 class="price-card_title">{{ trans('messages.credits_75') }}</h3>
                        <h4 class="price-card_price">
                            $975.00 <span class="duration">CAD</span>
                        </h4>
                    </div>
                    <div class="price-card_content">
                        <a href="{{ URL::route('payment', ['product' => '75 Credits', 'price' => '975']) }}" class="th-btn style10">
                            {{ trans('messages.get_it_now') }}
                            <i class="fa-regular fa-arrow-right ms-2"></i>
                        </a>

                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6">
                <div class="price-card">
                    <div class="price-card_top">
                        <h3 class="price-card_title">{{ trans('messages.credits_100') }}</h3>
                        <h4 class="price-card_price">
                            $1200.00 <span class="duration">CAD</span>
                        </h4>
                    </div>
                    <div class="price-card_content">
                        <a href="{{ URL::route('payment', ['product' => '100 Credits', 'price' => '1200']) }}" class="th-btn style10">
                            {{ trans('messages.get_it_now') }}
                            <i class="fa-regular fa-arrow-right ms-2"></i>
                        </a>

                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

@include('components.brand')
@endsection
@section('additional-scripts')
@endsection
@section('additional-css')
@endsection
