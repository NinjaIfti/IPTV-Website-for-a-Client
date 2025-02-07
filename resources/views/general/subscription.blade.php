@extends('template.master')
@section('title', 'SUBSCRIPTION | '.Config::get('app.name'))
@section('content')

    <!--==============================
    Breadcumb
==============================-->
    <div class="breadcumb-wrapper " data-bg-src="{{asset('assets/img/bg/breadcumb-bg.jpg')}}" data-overlay="title" data-opacity="8">
        <div class="breadcumb-shape" data-bg-src="{{asset('assets/img/bg/breadcumb_shape_1_1.png')}}"></div>
        <div class="container">
            <div class="breadcumb-content text-center">
                <h1 class="breadcumb-title">{{ trans('messages.subscription') }}</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ URL::route('index') }}">{{ trans('messages.home') }}</a></li>
                    <li>{{ trans('messages.subscription') }}</li>
                </ul>
            </div>
        </div>
    </div>

    <!--==============================
       Sports Event Section (Before Membership Plan)
   ==============================-->
    <section class="sports-section py-5 bg-light">
        <div class="container">
            <div class="row align-items-center">
                <!-- Left Content -->
                <div class="col-lg-6">
                    <h3 class="fw-bold mb-3">{{ trans('messages.experience_major_sports') }}</h3>
                    <p class="text-muted">
                        {{ trans('messages.sports_description') }}
                    </p>
                    <a href="#subscription-plans" class="btn btn-primary mt-3 scroll-to">
                        {{ trans('messages.try_it_now') }}
                    </a>
                </div>


                <!-- Right Image -->
                <div class="col-lg-6 text-center">
                    <img src="https://xtremehdiptv.org/wp-content/uploads/2023/11/nfl.png"
                         alt="NFL Sports Event"

                </div>
            </div>
        </div>
    </section>

    <!--==============================
        Membership Plans Section (Target for Scrolling)
    ==============================-->
    <section id="subscription-plans" class="space">
        <div class="container">
            <div class="title-area text-center">
                <span class="sub-title"><i class="fal fa-book me-1"></i> {{ trans('messages.pricing_table') }}</span>
                <h2 class="sec-title">{{ trans('messages.membership_price_plan') }}</h2>
            </div>
            <div class="row gy-4 justify-content-center">
                @php
                    $plans = [
                        ['title' => 'one_month', 'price' => 25, 'desc' => 'one_month_description'],
                        ['title' => 'three_months', 'price' => 70, 'desc' => 'three_months_description'],
                        ['title' => 'seven_months', 'price' => 125, 'desc' => 'seven_months_description'],
                        ['title' => 'fourteen_months', 'price' => 220, 'desc' => 'fourteen_months_description']
                    ];
                @endphp

                @foreach($plans as $plan)
                    <div class="col-xl-3 col-md-6">
                        <div class="price-card {{ $loop->index == 1 ? 'active' : '' }}">
                            <div class="price-card_top">
                                <h3 class="price-card_title">{{ trans('messages.'.$plan['title']) }}</h3>
                                <h4 class="price-card_price">
                                    ${{ number_format($plan['price'], 2) }} <span class="duration">CAD</span>
                                </h4>
                            </div>
                            <div class="price-card_content">
                                <div class="checklist">
                                    <ul>
                                        <li>{{ trans('messages.'.$plan['desc']) }}</li>
                                    </ul>
                                </div>
                                <form id="paypalForm{{ $loop->index }}" action="{{ route('paypal') }}" method="post">
                                    @csrf
                                    <input type="hidden" name="amount" value="{{ $plan['price'] }}">
                                </form>
                                <a href="javascript:void(0);"
                                   onclick="document.getElementById('paypalForm{{ $loop->index }}').submit();"
                                   class="th-btn style10">
                                    {{ trans('messages.choose_the_plan') }} <i class="fa-regular fa-arrow-right ms-2"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Include Smooth Scroll Script -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            document.querySelectorAll('.scroll-to').forEach(button => {
                button.addEventListener('click', function(event) {
                    event.preventDefault();
                    const target = document.querySelector(this.getAttribute('href'));
                    if (target) {
                        window.scrollTo({
                            top: target.offsetTop - 50, // Adjust offset if needed
                            behavior: "smooth"
                        });
                    }
                });
            });
        });
    </script>


    @include('components.brand')
@endsection
@section('additional-scripts')
@endsection
@section('additional-css')
@endsection
