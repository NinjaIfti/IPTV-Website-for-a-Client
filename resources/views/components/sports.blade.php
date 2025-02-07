<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Swiper Carousel</title>

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css">

    <style>
        /* Carousel Section */
        .carousel-section {
            padding: 40px 0;
            background-color: #f8f9fa; /* Light background */
            text-align: center;
        }

        .mySwiper {
            width: 100%;
            padding: 20px 0;
        }

        .swiper-slide {
            display: flex;
            justify-content: center;
            align-items: center;
            width: auto;
            height: auto;
        }

        .swiper-slide img {
            width: 100%;
            max-width: 180px; /* Adjust size */
            height: auto;
            border-radius: 10px;
            transition: transform 0.3s ease-in-out;
        }

        /* Hover effect */
        .swiper-slide img:hover {
            transform: scale(1.1);
        }

        /* Hide Swiper Pagination Dots */
        .swiper-pagination {
            display: none !important;
        }
    </style>
</head>
<body>

<section class="carousel-section">
    <h2>{{ trans('messages.featured_brands') }}</h2>

    <div class="container">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="https://iptvstreaam.shop/wp-content/uploads/2024/10/Group-1-9889398389393.png" alt="Brand 1">
                </div>
                <div class="swiper-slide">
                    <img src="https://iptvstreaam.shop/wp-content/uploads/2024/10/73537726728763682.png" alt="Brand 2">
                </div>
                <div class="swiper-slide">
                    <img src="https://iptvstreaam.shop/wp-content/uploads/2024/10/672673836728282.png" alt="Brand 3">
                </div>
                <div class="swiper-slide">
                    <img src="https://iptvstreaam.shop/wp-content/uploads/2024/10/63537276373736333.png" alt="Brand 4">
                </div>
                <div class="swiper-slide">
                    <img src="https://iptvstreaam.shop/wp-content/uploads/2024/10/73638376387282873.png" alt="Brand 5">
                </div>
                <div class="swiper-slide">
                    <img src="https://iptvstreaam.shop/wp-content/uploads/2024/10/8273783737832038939939.png" alt="Brand 6">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 5,  // Default for Desktop
            spaceBetween: 20,
            loop: true,
            autoplay: {
                delay: 2000,
                disableOnInteraction: false,
            },
            breakpoints: {
                1024: { slidesPerView: 5 }, // Desktop
                768: { slidesPerView: 3 },  // Tablet
                200: { slidesPerView: 2 },  // Mobile (2 posters)
            },
        });
    });
</script>

</body>
</html>
