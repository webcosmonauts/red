@extends('layouts.page')

@section('content')
    <!-- Секция для курусели c партнерами -->
    <section class="our_partners_title">
        <div class="container">
            <h3 class="text-center">Наши партнёры</h3>
        </div>
    </section>
    <section class="slide-partners">
        <div class="container">
            <div id="carouselExampleIndicators" class="carousel slide slide-partners__content" data-ride="carousel">
                <h2 class="text-center">Trusted Partners Worldwide</h2>
                <h5 class="text-center">We are very greatful and feel honoured to our all partners for being with us</h5>
                <ol class="carousel-indicators slide-partners__indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                </ol>
                <div class="carousel-inner slide-partners__inner">
                    <div class="carousel-item active">
                        <div class="row slide-partners__img">
                            <div class="col-sm-6 col-md-6 col-lg-3"><a href="#"><img class="img-fluid" src="img/partners_1.png"
                                                                                     alt="Image"></a>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-3"><a href="#"><img class="img-fluid" src="img/partners_2.png"
                                                                                     alt="Image"></a>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-3"><a href="#"><img class="img-fluid" src="img/partners_3.png"
                                                                                     alt="Image"></a>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-3"><a href="#"><img class="img-fluid" src="img/partners_4.png"
                                                                                     alt="Image"></a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row slide-partners__img">
                            <div class="col-sm-6 col-md-6 col-lg-3"><a href="#"><img class="img-fluid" src="img/partners_5.png"
                                                                                     alt="Image"></a>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-3"><a href="#"><img class="img-fluid" src="img/partners_2.png"
                                                                                     alt="Image"></a>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-3"><a href="#"><img class="img-fluid" src="img/partners_3.png"
                                                                                     alt="Image"></a>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-3"><a href="#"><img class="img-fluid" src="img/partners_4.png"
                                                                                     alt="Image"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="our_partners__btn">
        <div class="container">
            <div class="d-flex justify-content-center">
                <a href="partners.html" class="btn btn-danger button-all text-center" title="Go to Partners forms">Стать партнёром</a>
            </div>
        </div>
    </section>
    <!-- //Секция для курусели c партнерами -->
@endsection
