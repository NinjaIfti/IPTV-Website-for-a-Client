@extends('template.master')
@section('title', 'CATALOGUE | '.Config::get('app.name'))
@section('content')
<div class="breadcumb-wrapper " data-bg-src="{{asset('assets/img/bg/breadcumb-bg.jpg')}}" data-overlay="title" data-opacity="8">
    <div class="breadcumb-shape" data-bg-src="{{asset('assets/img/bg/breadcumb_shape_1_1.png')}}">
    </div>
    <div class="shape-mockup breadcumb-shape2 jump d-lg-block d-none" data-right="30px" data-bottom="30px">
        <img src="{{asset('assets/img/bg/breadcumb_shape_1_2.png')}}" alt="shape">
    </div>
    <div class="shape-mockup breadcumb-shape3 jump-reverse d-lg-block d-none" data-left="50px" data-bottom="80px">
        <img src="{{asset('assets/img/bg/breadcumb_shape_1_3.png')}}" alt="shape">
    </div>
    <div class="container">
        <div class="breadcumb-content text-center">
            <h1 class="breadcumb-title">{{ trans('messages.catalogue') }}</h1>
            <ul class="breadcumb-menu">
                <li><a href="{{ URL::route('index') }}">{{ trans('messages.home') }}</a></li>
                <li>{{ trans('messages.catalogue') }}</li>
            </ul>

            </ul>
        </div>
    </div>
</div>
<div class="why-area-1 space overflow-hidden">

    <div class="shape-mockup why-shape-1 jump" data-top="10%" data-left="7%">
        <img src="{{asset('assets/img/normal/about_1_shape1.png')}}" alt="img">
    </div>

    <div class="shape-mockup why-shape-2" data-bg-src="{{asset('assets/img/normal/wcu_1_shape1.png')}}"></div>

    <div class="shape-mockup why-shape-3 jump-reverse" data-bottom="25%" data-right="-3%">
        <img src="{{asset('assets/img/normal/wcu_1_shape2.png')}}" alt="img">
    </div>

    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6">
                <div class="wcu-img-1">
                    <div class="img1">
                        <img src="{{asset('assets/img/normal/wcu_1_2.png')}}" alt="img">
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="wcu-wrap1">
                    <div class="title-area mb-25">
                        <span class="sub-title"><i class="fal fa-book me-2"></i> Device Catalogue</span>
                        <h2 class="sec-title">{{ trans('messages.device_catalogue') }}</h2>
                        <p class="sec-text mt-20">
                            {{ trans('messages.device_catalogue_description') }}
                            <br>
                            <b>{{ trans('messages.sales_info') }}</b>
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="space">
    <div class="container">
        <div class="title-area text-center">
            <span class="sub-title"><i class="fal fa-book me-2"></i> {{ trans('messages.device_catalogue') }}</span>
            <h2 class="sec-title fw-semibold">{{ trans('messages.device_catalogue') }}</h2>
        </div>
        <div class="row">
            <div class="col-xl-6">
                <div class="th-box mb-5 mb-xl-0">
                    <div class="th-box_img">
                        <img src="{{asset('assets/img/update1/catalogue/1.png')}}" alt="vector">
                    </div>
                    <div class="th-box_content">
                        <h3 class="h4 th-box_title">{{ trans('messages.formuler_z11_pro_max') }}</h3>
                        <p class="th-box_text">{{ trans('messages.formuler_z11_pro_max_description') }}</p>
                        <span class="sub-title">$300 CAD</span>
                        <a href="{{ URL::route('contact') }}" class="th-btn style10">{{ trans('messages.get_it_now') }}<i class="fa-regular fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="th-box theme2">
                    <div class="th-box_img">
                        <img src="{{asset('assets/img/update1/catalogue/2.png')}}" alt="vector">
                    </div>
                    <div class="th-box_content">
                        <h3 class="h4 th-box_title">{{ trans('messages.formuler_z11_pro') }}</h3>
                        <p class="th-box_text">{{ trans('messages.formuler_z11_pro_description') }}</p>
                        <span class="sub-title">$265 CAD</span>
                        <a href="{{ URL::route('contact') }}" class="th-btn">{{ trans('messages.get_it_now') }}<i class="fas fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="th-box theme2">
                    <div class="th-box_img">
                        <img src="{{asset('assets/img/update1/catalogue/3.png')}}" alt="vector">
                    </div>
                    <div class="th-box_content">
                        <h3 class="h4 th-box_title">{{ trans('messages.formuler_z_mini') }}</h3>
                        <p class="th-box_text">{{ trans('messages.formuler_z_mini_description') }}</p>
                        <span class="sub-title">$220 CAD</span>
                        <a href="{{ URL::route('contact') }}" class="th-btn">{{ trans('messages.get_it_now') }}<i class="fas fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="th-box theme2">
                    <div class="th-box_img">
                        <img src="{{asset('assets/img/update1/catalogue/4.png')}}" alt="vector">
                    </div>
                    <div class="th-box_content">
                        <h3 class="h4 th-box_title">{{ trans('messages.formuler_ir1_remote') }}</h3>
                        <p class="th-box_text">{{ trans('messages.formuler_ir1_remote_description') }}</p>
                        <span class="sub-title">$45 CAD</span>
                        <a href="{{ URL::route('contact') }}" class="th-btn">{{ trans('messages.get_it_now') }}<i class="fas fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="th-box theme2">
                    <div class="th-box_img">
                        <img src="{{asset('assets/img/update1/catalogue/5.png')}}" alt="vector">
                    </div>
                    <div class="th-box_content">
                        <h3 class="h4 th-box_title">{{ trans('messages.long_formuler_remote') }}</h3>
                        <p class="th-box_text">{{ trans('messages.long_formuler_remote_description') }}</p>
                        <span class="sub-title">$45 CAD</span>
                        <a href="{{ URL::route('contact') }}" class="th-btn">{{ trans('messages.get_it_now') }}<i class="fas fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="th-box theme2">
                    <div class="th-box_img">
                        <img src="{{asset('assets/img/update1/catalogue/6.png')}}" alt="vector">
                    </div>
                    <div class="th-box_content">
                        <h3 class="h4 th-box_title">{{ trans('messages.mini_keyboard_dreamlink_palm_remo_7') }}</h3>
                        <p class="th-box_text">{{ trans('messages.mini_keyboard_dreamlink_palm_remo_7_description') }}</p>
                        <span class="sub-title">$45 CAD</span>
                        <a href="{{ URL::route('contact') }}" class="th-btn">{{ trans('messages.get_it_now') }}<i class="fas fa-arrow-right ms-2"></i></a>
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
