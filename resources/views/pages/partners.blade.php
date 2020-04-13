@extends('layouts.page')

@section('content')
    <!-- Секция для курусели c партнерами -->
    <section class="our_partners_title">
        <div class="container">
            <h3 class="text-center">Наши партнёры</h3>
        </div>
    </section>
    <div class="news-section student">
        <div class="news-section-carousel carousel" data-min-items="4">
            <div class="container">
                <h2 class="text-center">Trusted Partners Worldwide</h2>
                <h5 class="text-center">We are very greatful and feel honoured to our all partners for being with us</h5>
                <div class="carousel-extra-wrap">
                    <div class="carousel-wrap">
                        <!-- item -->
                        <a href="#" class="news-section__item item col-12 col-md-3 col-lg-3">
                            <div class="news-section__item_thumbnail thumbnail"
                                 style="background-image: url('/images/news/item1.png')"></div>
                        </a>
                        <!--  -->

                        <!-- item -->
                        <a href="#" class="news-section__item item col-12 col-md-3 col-lg-3">
                            <div class="news-section__item_thumbnail thumbnail"
                                 style="background-image: url('/images/news/item2.png')"></div>
                        </a>
                        <!--  -->

                        <!-- item -->
                        <a href="#" class="news-section__item item col-12 col-md-3 col-lg-3">
                            <div class="news-section__item_thumbnail thumbnail"
                                 style="background-image: url('/images/news/item3.png')"></div>
                        </a>
                        <!--  -->

                        <!-- item -->
                        <a href="#" class="news-section__item item col-12 col-md-3 col-lg-3">
                            <div class="news-section__item_thumbnail thumbnail"
                                 style="background-image: url('/images/news/item4.png')"></div>
                        </a>
                        <!--  -->

                        <!-- item -->
                        <a href="#" class="news-section__item item col-12 col-md-3 col-lg-3">
                            <div class="news-section__item_thumbnail thumbnail"
                                 style="background-image: url('/images/news/item5.png')"></div>
                        </a>
                        <!--  -->
                    </div>
                </div>
                <div class="carousel-controls">
                    <a href="#" class="arrow prev" data-direction="prev"><span class="sr-only">arrow</span></a>
                    <a href="#" class="arrow next" data-direction="next"><span class="sr-only">arrow</span></a>
                </div>
            </div>
        </div>
    </div>
    <section class="our_partners__btn">
        <div class="container">
            <div class="d-flex justify-content-center">
                <a href="{{ route('contact-partnership') }}" class="btn btn-danger button-all text-center" title="Go to Partners forms">
                    Стать партнёром
                </a>
            </div>
        </div>
    </section>
    <!-- //Секция для курусели c партнерами -->
@endsection
