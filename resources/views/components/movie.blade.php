

    <!--==============================
    Image Carousel Section
==============================-->
    <section class="py-5">
        <div class="container">
            <div class="title-area text-center">

                <h2 class="sec-title">{{ trans('messages.premium_entertainment') }}</h2>

            </div>

            <!-- Swiper Container -->
            <div class="swiper image-carousel">
                <div class="swiper-wrapper">
                    @php
                        $images = [
                            "https://iptvstreaam.shop/wp-content/uploads/2024/06/3-1_4_11zon.webp",
                            "https://iptvstreaam.shop/wp-content/uploads/2024/06/4_5_11zon.webp",
                            "https://iptvstreaam.shop/wp-content/uploads/2024/06/25_4_11zon.webp",
                            "https://iptvstreaam.shop/wp-content/uploads/2024/06/24_3_11zon.webp",
                            "https://iptvstreaam.shop/wp-content/uploads/2024/06/20_2_11zon.webp",
                            "https://iptvstreaam.shop/wp-content/uploads/2024/06/17_1_11zon.webp"
                        ];
                    @endphp

                    @foreach ($images as $image)
                        <div class="swiper-slide">
                            <figure class="swiper-slide-inner">
                                <img class="swiper-slide-image img-fluid" src="{{ $image }}" alt="Image" loading="lazy">
                            </figure>
                        </div>
                    @endforeach
                </div>

                <!-- Swiper Pagination & Navigation -->

            </div>
        </div>
    </section>

    <!-- Include Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <script>
        var swiper = new Swiper(".image-carousel", {
            loop: true,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false
            },
            slidesPerView: 2,
            spaceBetween: 20,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            breakpoints: {
                768: { slidesPerView: 3 },
                1024: { slidesPerView: 4 }
            }
        });
    </script>

    @include('components.sports')

