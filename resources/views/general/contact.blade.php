@extends('template.master')
@section('title', 'CONTACT US | ' . Config::get('app.name'))
@section('content')

    <!--==============================
    Breadcrumb Section
==============================-->
    <div class="breadcumb-wrapper" data-bg-src="{{ asset('assets/img/bg/breadcumb-bg.jpg') }}" data-overlay="title" data-opacity="8">
        <div class="breadcumb-shape" data-bg-src="{{ asset('assets/img/bg/breadcumb_shape_1_1.png') }}"></div>
        <div class="shape-mockup breadcumb-shape2 jump d-lg-block d-none" data-right="30px" data-bottom="30px">
            <img src="{{ asset('assets/img/bg/breadcumb_shape_1_2.png') }}" alt="shape">
        </div>
        <div class="shape-mockup breadcumb-shape3 jump-reverse d-lg-block d-none" data-left="50px" data-bottom="80px">
            <img src="{{ asset('assets/img/bg/breadcumb_shape_1_3.png') }}" alt="shape">
        </div>
        <div class="container">
            <div class="breadcumb-content text-center">
                <h1 class="breadcumb-title">{{ trans('messages.contact_us') }}</h1>
                <ul class="breadcumb-menu">
                    <li><a href="index.html">{{ trans('messages.home') }}</a></li>
                    <li>{{ trans('messages.contact_us') }}</li>
                </ul>
            </div>
        </div>
    </div>

    <!--==============================
        Contact Section
    ==============================-->
    <div class="space" id="contact-sec">
        <div class="container">
            <div class="row">
                <!-- Left Column: Questions & How It Works -->
                <div class="col-xl-5 mb-30 mb-xl-0">
                    <div class="me-xxl-5 mt-60">
                        <div class="title-area mb-25">
                            <h2 class="border-title h3">{{ trans('messages.have_any_questions') }}</h2>
                        </div>
                        <p class="mt-n2 mb-25">{{ trans('messages.help_description') }}</p>

                        <!-- How It Works Section -->
                        <div class="card subscription-card mb-30">
                            <div class="card-body">
                                <h5 class="card-title">{{ trans('messages.how_it_works') }}</h5>
                                <div class="card-text">
                                    <ol>
                                        <li>
                                            <strong>{{ trans('messages.choose_your_subscription') }}</strong><br>
                                            {{ trans('messages.choose_your_subscription_desc') }}
                                        </li>
                                        <li>
                                            <strong>{{ trans('messages.receive_your_logins') }}</strong><br>
                                            {{ trans('messages.receive_your_logins_desc') }}
                                        </li>
                                        <li>
                                            <strong>{{ trans('messages.start_streaming') }}</strong><br>
                                            {{ trans('messages.start_streaming_desc') }}
                                        </li>
                                    </ol>
                                    <p>
                                        <strong>{{ trans('messages.best_iptv_quality') }}</strong><br>
                                        {{ trans('messages.best_iptv_quality_desc') }}
                                    </p>
                                    <p>
                                        <strong>{{ trans('messages.fast_support') }}</strong><br>
                                        {{ trans('messages.fast_support_desc') }}
                                    </p>
                                    <p>
                                        <strong>{{ trans('messages.satisfied_or_refunded') }}</strong><br>
                                        {{ trans('messages.satisfied_or_refunded_desc') }}
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Right Column: Contact Form -->
                <div class="col-xl-7">
                    <div class="contact-form-wrap" data-bg-src="assets/img/bg/contact_bg_1.png">
                        <span class="sub-title">{{ trans('messages.contact_with_us') }}</span>
                        <h2 class="border-title">{{ trans('messages.get_in_touch') }}</h2>
                        <p class="mt-n1 mb-30 sec-text">{{ trans('messages.contact_description') }}</p>
                        <form action="{{ route('contact.store') }}" method="POST" class="contact-form ajax-contact">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control style-white" name="name" id="name" placeholder="{{ trans('messages.your_name') }}">
                                        <i class="fal fa-user"></i>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control style-white" name="email" id="email" placeholder="{{ trans('messages.email_address') }}">
                                        <i class="fal fa-envelope"></i>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <select name="subject" id="subject" class="single-select nice-select form-select style-white">
                                            <option value="" disabled selected hidden>{{ trans('messages.area_of_interest') }}</option>
                                            <option value="Subscribe">{{ trans('messages.subscribe') }}</option>
                                            <option value="Buy a Device">{{ trans('messages.buy_a_device') }}</option>
                                            <option value="Become a Reseller">{{ trans('messages.become_a_reseller') }}</option>
                                            <option value="Support">{{ trans('messages.support') }}</option>
                                            <option value="Other">{{ trans('messages.other') }}</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="tel" class="form-control style-white" name="number" id="number" placeholder="{{ trans('messages.phone_number') }}">
                                        <i class="fal fa-phone"></i>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea name="message" id="message" cols="30" rows="3" class="form-control style-white" placeholder="{{ trans('messages.write_your_message') }}"></textarea>
                                        <i class="fal fa-pen"></i>
                                    </div>
                                </div>
                                <div class="form-btn col-12 mt-10">
                                    <button class="th-btn">
                                        {{ trans('messages.send_message') }}<i class="fas fa-long-arrow-right ms-2"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('components.brand')
@endsection

@section('additional-scripts')
    <script>
        $('.ajax-contact').on('submit', function (e) {
            e.preventDefault();

            let formData = $(this).serialize();
            $.ajax({
                url: $(this).attr('action'),
                method: $(this).attr('method'),
                data: formData,
                success: function (response) {
                    toastr.success(response.message || 'Message sent successfully!');
                    $('.contact-form')[0].reset();
                },
                error: function (xhr) {
                    toastr.error(xhr.responseJSON.message || 'An error occurred. Please try again.');
                }
            });
        });
    </script>
@endsection

@section('additional-css')
@endsection
