@extends('layouts.main_website')

@section('content_body')
    <section>
        <div class="container">
            <div class="row">
                @foreach ($images as $index => $image)
                    <div class="col-lg-12 mt-6">
                        <div class="row {{ $index % 2 == 0 ? '' : 'flex-row-reverse' }}">
                            <div class="col-lg-6 justify-content-center d-flex flex-column">
                                <div class="card border-radius-lg shadow-lg">
                                    <div class="d-block blur-shadow-image">
                                        <div class="slider-container">
                                            <div class="swiper">
                                                <div class="swiper-wrapper">
                                                    @foreach ($image->paths as $path)
                                                        <div class="swiper-slide">
                                                            <img src="{{ asset('storage/' . $path) }}" alt="{{ $image->title }}" loading="lazy" class="w-full h-64 object-cover">
                                                        </div>
                                                    @endforeach
                                                </div>
                                                <div class="swiper-pagination"></div>
                                                <div class="swiper-button-prev"></div>
                                                <div class="swiper-button-next"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 {{ $index % 2 == 0 ? 'ps-lg-5' : 'pe-lg-5' }} justify-content-center d-flex flex-column pt-lg-0 pt-3">
                                <h3 class="text-2xl font-bold text-gray-800">
                                    {{ $image->title }}
                                </h3>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        document.querySelectorAll(".slider-container").forEach((container) => {
            new Swiper(container.querySelector(".swiper"), {
                loop: true,
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true
                },
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev"
                },
                autoplay: {
                    delay: 3000,
                    disableOnInteraction: false
                }
            });
        });
    </script>

@stop