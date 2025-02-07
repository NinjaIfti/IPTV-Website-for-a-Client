@extends('template.master')
@section('title', 'ABOUT US | '.Config::get('app.name'))
@section('content')

    <!--==============================
    Breadcumb
    ============================== -->
    <div class="breadcumb-wrapper" data-bg-src="{{ asset('assets/img/bg/breadcumb-bg.jpg') }}" data-overlay="title" data-opacity="8">
        <div class="container">
            <div class="breadcumb-content text-center">
                <h1 class="breadcumb-title">{{ trans('messages.about_us') }}</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ URL::route('index') }}">{{ trans('messages.home') }}</a></li>
                    <li>{{ trans('messages.about_us') }}</li>
                </ul>
            </div>
        </div>
    </div>

    <!--==============================
    Service Area
    ==============================-->
    <section class="overflow-hidden space">
        <div class="container">
            <div class="title-area text-center">
                <span class="sub-title"><i class="fal fa-book me-2"></i> {{ trans('messages.what_we_do') }}</span>
                <h2 class="sec-title">{{ trans('messages.online_education') }}</h2>
            </div>
            <div class="row gy-4 justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="service-card style3">
                        <div class="service-card-content">
                            <h3 class="box-title">{{ trans('messages.learn_from_anywhere') }}</h3>
                            <p class="service-card-text">{{ trans('messages.service_card_text') }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="service-card style3">
                        <div class="service-card-content">
                            <h3 class="box-title">{{ trans('messages.expert_instructor') }}</h3>
                            <p class="service-card-text">{{ trans('messages.expert_instructor_text') }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="service-card style3">
                        <div class="service-card-content">
                            <h3 class="box-title">{{ trans('messages.live_support') }}</h3>
                            <p class="service-card-text">{{ trans('messages.live_support_text') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--==============================
    FAQ Section with Image
==============================-->
    <section class="faq-section py-5 bg-light">
        <div class="container">
            <div class="row align-items-center">
                <!-- FAQ Content (Left) -->
                <div class="col-lg-7">
                    <div class="section-heading mb-4">
                        <h2 class="fw-bold">Frequently Asked Questions</h2>
                        <p class="text-muted">Find answers to the most common questions about our IPTV service.</p>
                    </div>

                    <div class="accordion" id="faqAccordion">
                        @foreach([
                            trans('messages.faq_question_1') => trans('messages.faq_answer_1'),
                            trans('messages.faq_question_2') => trans('messages.faq_answer_2'),
                            trans('messages.faq_question_3') => trans('messages.faq_answer_3'),
                            trans('messages.faq_question_4') => trans('messages.faq_answer_4'),
                        ] as $question => $answer)
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#{{ Str::slug($question) }}">
                                        {{ $question }}
                                    </button>
                                </h2>
                                <div id="{{ Str::slug($question) }}" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body text-muted">
                                        {{ $answer }}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>

                <!-- Image (Right) -->
                <div class="col-lg-5 text-center">
                    <img loading="lazy" decoding="async" width="600" height="600"
                         src="https://xtremehdiptv.org/wp-content/uploads/2023/11/Info.png"
                          alt="FAQ Information">
                </div>
            </div>
        </div>
    </section>




{{--    Review Section--}}
{{--   ==============================-->--}}
    <!-- Include Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />

    <div class="container mt-5">
        <div class="title-area text-center">
            <span class="sub-title"><i class="fal fa-star me-2"></i> {{ trans('messages.customer_reviews') }}</span>
            <h2 class="sec-title">{{ trans('messages.what_clients_say') }}</h2>
        </div>

        <!-- Swiper Container -->
        <div class="swiper review-slider">
            <div class="swiper-wrapper">
                <!-- Review 1 -->
                <div class="swiper-slide">
                    <div class="card shadow-sm p-3">
                        <div class="d-flex align-items-center">
                            <i class="fas fa-user-circle fa-3x me-3 text-primary"></i>
                            <div>
                                <h5 class="mb-1">Michael Johnson</h5>
                                <div class="text-warning">★★★★★</div>
                            </div>
                        </div>
                        <p class="mt-2">{{ trans('messages.michael_johnson_review') }}</p>
                    </div>
                </div>

                <!-- Review 2 -->
                <div class="swiper-slide">
                    <div class="card shadow-sm p-3">
                        <div class="d-flex align-items-center">
                            <i class="fas fa-user-circle fa-3x me-3 text-primary"></i>
                            <div>
                                <h5 class="mb-1">Sarah Williams</h5>
                                <div class="text-warning">★★★★☆</div>
                            </div>
                        </div>
                        <p class="mt-2">{{ trans('messages.sarah_williams_review') }}</p>
                    </div>
                </div>

                <!-- Review 3 -->
                <div class="swiper-slide">
                    <div class="card shadow-sm p-3">
                        <div class="d-flex align-items-center">
                            <i class="fas fa-user-circle fa-3x me-3 text-primary"></i>
                            <div>
                                <h5 class="mb-1">David Lee</h5>
                                <div class="text-warning">★★★★★</div>
                            </div>
                        </div>
                        <p class="mt-2">{{ trans('messages.david_lee_review') }}</p>
                    </div>
                </div>

                <!-- Review 4 -->
                <div class="swiper-slide">
                    <div class="card shadow-sm p-3">
                        <div class="d-flex align-items-center">
                            <i class="fas fa-user-circle fa-3x me-3 text-primary"></i>
                            <div>
                                <h5 class="mb-1">Emma Brown</h5>
                                <div class="text-warning">★★★★★</div>
                            </div>
                        </div>
                        <p class="mt-2">{{ trans('messages.emma_brown_review') }}</p>
                    </div>
                </div>

                <!-- Review 5 -->
                <div class="swiper-slide">
                    <div class="card shadow-sm p-3">
                        <div class="d-flex align-items-center">
                            <i class="fas fa-user-circle fa-3x me-3 text-primary"></i>
                            <div>
                                <h5 class="mb-1">James Anderson</h5>
                                <div class="text-warning">★★★★☆</div>
                            </div>
                        </div>
                        <p class="mt-2">{{ trans('messages.james_anderson_review') }}</p>
                    </div>
                </div>

                <!-- Review 6 -->
                <div class="swiper-slide">
                    <div class="card shadow-sm p-3">
                        <div class="d-flex align-items-center">
                            <i class="fas fa-user-circle fa-3x me-3 text-primary"></i>
                            <div>
                                <h5 class="mb-1">Olivia Martinez</h5>
                                <div class="text-warning">★★★★★</div>
                            </div>
                        </div>
                        <p class="mt-2">{{ trans('messages.olivia_martinez_review') }}</p>
                    </div>
                </div>

                <!-- Review 7 -->
                <div class="swiper-slide">
                    <div class="card shadow-sm p-3">
                        <div class="d-flex align-items-center">
                            <i class="fas fa-user-circle fa-3x me-3 text-primary"></i>
                            <div>
                                <h5 class="mb-1">Daniel Wilson</h5>
                                <div class="text-warning">★★★★☆</div>
                            </div>
                        </div>
                        <p class="mt-2">{{ trans('messages.daniel_wilson_review') }}</p>
                    </div>
                </div>

                <!-- Review 8 -->
                <div class="swiper-slide">
                    <div class="card shadow-sm p-3">
                        <div class="d-flex align-items-center">
                            <i class="fas fa-user-circle fa-3x me-3 text-primary"></i>
                            <div>
                                <h5 class="mb-1">Sophia Taylor</h5>
                                <div class="text-warning">★★★★★</div>
                            </div>
                        </div>
                        <p class="mt-2">{{ trans('messages.sophia_taylor_review') }}</p>
                    </div>
                </div>

                <!-- Review 9 -->
                <div class="swiper-slide">
                    <div class="card shadow-sm p-3">
                        <div class="d-flex align-items-center">
                            <i class="fas fa-user-circle fa-3x me-3 text-primary"></i>
                            <div>
                                <h5 class="mb-1">Chris Evans</h5>
                                <div class="text-warning">★★★★☆</div>
                            </div>
                        </div>
                        <p class="mt-2">{{ trans('messages.chris_evans_review') }}</p>
                    </div>
                </div>
            </div>

            <!-- Swiper Pagination & Navigation -->
            <div class="swiper-pagination"></div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".review-slider", {
            loop: true,
            autoplay: { delay: 3000, disableOnInteraction: false },
            slidesPerView: 1,
            spaceBetween: 20,

            breakpoints: { 768: { slidesPerView: 2 }, 1024: { slidesPerView: 3 } }
        });
    </script>

    @include('components.brand')
@endsection
@section('additional-scripts')
@endsection
@section('additional-css')
@endsection
