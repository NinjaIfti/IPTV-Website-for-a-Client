<!-- Swiper CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css">
<section class="py-5">
    <div class="container">
        <div class="title-area text-center">



        <!-- Swiper Container -->
        <div class="swiper brand-carousel">
            <div class="swiper-wrapper">
                @php
                    $brands = [
                        "https://iptvstreaam.shop/wp-content/uploads/2024/06/Design-sans-titre-7.webp",
                        "https://iptvstreaam.shop/wp-content/uploads/2024/06/8-1-2.webp",
                        "https://iptvstreaam.shop/wp-content/uploads/2024/06/Design-sans-titre-6-2.webp",
                        "https://iptvstreaam.shop/wp-content/uploads/2024/06/Design-sans-titre-21-2.png.webp",
                        "https://iptvstreaam.shop/wp-content/uploads/2024/06/9-1-1.webp",
                        "https://iptvstreaam.shop/wp-content/uploads/2024/06/2-1.webp",
                        "https://iptvstreaam.shop/wp-content/uploads/2024/06/Design-sans-titre-16.png-1.webp",
                        "https://iptvstreaam.shop/wp-content/uploads/2024/06/3-1-1.webp",
                        "https://iptvstreaam.shop/wp-content/uploads/2024/06/10-1-1.webp",
                        "https://iptvstreaam.shop/wp-content/uploads/2023/12/Design-sans-titre-24-2.png",
                        "https://iptvstreaam.shop/wp-content/uploads/2024/06/Design-sans-titre-28-2.webp",
                        "https://iptvstreaam.shop/wp-content/uploads/2023/04/Sans-titre-14.png",
                        "https://iptvstreaam.shop/wp-content/uploads/2023/04/4-1.png",
                        "https://iptvstreaam.shop/wp-content/uploads/2024/06/Untitled-design-2.png-1.webp",
                        "https://iptvstreaam.shop/wp-content/uploads/2024/06/Design-sans-titre-15.png.webp",
                        "https://iptvstreaam.shop/wp-content/uploads/2024/06/Design-sans-titre-11-2.png.webp"
                    ];
                @endphp

                @foreach ($brands as $brand)
                    <div class="swiper-slide">
                        <figure class="swiper-slide-inner">
                            <img class="swiper-slide-image img-fluid" src="{{ $brand }}" alt="Brand Logo" loading="lazy">
                        </figure>
                    </div>
                @endforeach
            </div>

            <!-- Swiper Pagination & Navigation -->


        </div>
    </div>
</section>

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

<script>
    var swiper = new Swiper(".brand-carousel", {
        loop: true,
        autoplay: {
            delay: 1000,
            disableOnInteraction: false
        },
        slidesPerView: 2,
        spaceBetween: 20,


        breakpoints: {
            768: { slidesPerView: 4 },
            1024: { slidesPerView: 6 }
        }
    });
</script>
