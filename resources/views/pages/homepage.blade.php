@extends('layouts.page')

@section('content')
    <!-- Секция для курусели -->
    <section class="section-carousel">
        <div class="container">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators section-carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/slider_main.png" class="d-block w-100" alt="...">
                        <div class="carousel-block">
                            <h2>Депозиты и кредиты в повседневной жизни</h2>
                            <p>Фонд «RED» В феврале проводит уроки по финансовой грамотности со старшеклассниками
                                Вроцловской школы.
                                Ученики знакомились с работой банковской системы и самыми популярными банковскими продуктами
                                депозитами и кредитами.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/slider_main.png" class="d-block w-100" alt="...">
                        <div class="carousel-block">
                            <h2>Депозиты и кредиты в повседневной</h2>
                            <p>Фонд «RED» В феврале проводит уроки по финансовой грамотности со старшеклассниками
                                Вроцловской школы.
                                Ученики знакомились с работой банковской системы и самыми популярными банковскими продуктами
                                депозитами и кредитами.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/slider_main.png" class="d-block w-100" alt="...">
                        <div class="carousel-block">
                            <h2>Депозиты и кредиты</h2>
                            <p>Фонд «RED» В феврале проводит уроки по финансовой грамотности со старшеклассниками
                                Вроцловской школы.
                                Ученики знакомились с работой банковской системы и самыми популярными банковскими продуктами
                                депозитами и кредитами.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/slider_main.png" class="d-block w-100" alt="...">
                        <div class="carousel-block">
                            <h2>Депозиты и кредиты в повседневной жизни</h2>
                            <p>Фонд «RED» В феврале проводит уроки по финансовой грамотности со старшеклассниками
                                Вроцловской школы.
                                Ученики знакомились с работой банковской системы и самыми популярными банковскими продуктами
                                депозитами и кредитами.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/slider_main.png" class="d-block w-100" alt="...">
                        <div class="carousel-block">
                            <h2>Кредиты в повседневной жизни</h2>
                            <p>Фонд «RED» В феврале проводит уроки по финансовой грамотности со старшеклассниками
                                Вроцловской школы.
                                Ученики знакомились с работой банковской системы и самыми популярными банковскими продуктами
                                -
                                депозитами и кредитами.</p>
                        </div>
                    </div>
                </div>
                <div class="d-none d-lg-block">
                    <a class="carousel-control-prev section-carousel-prev" href="#carouselExampleIndicators" role="button"
                       data-slide="prev">
                        <span class="carousel-control-prev-icon section-carousel-control-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next section-carousel-next" href="#carouselExampleIndicators" role="button"
                       data-slide="next">
                        <span class="carousel-control-next-icon section-carousel-control-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Секция "Как помочь" -->
    <section class="help">
        <div class="container">
            <h4 class="">КАК ПОМОЧЬ?</h4>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12 section-help">
                    <div class="post">
                        <span class="icon-hands-helping"></span>
                        <h5>Информационная поддержка</h5>
                        <p>Мы помогаем с поиском информации</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 section-help">
                    <div class="post">
                        <img src="img/help-piggy-bank.svg" alt="">
                        <h5>Информационная поддержка</h5>
                        <p>Мы помогаем с поиском информации</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 section-help">
                    <div class="post">
                        <span class="icon-charity"></span>
                        <h5>Информационная поддержка</h5>
                        <p>Мы помогаем с поиском информации</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 section-help">
                    <div class="post">
                        <img src="img/icon-hand.svg" alt="">
                        <h5>Информационная поддержка</h5>
                        <p>Мы помогаем с поиском информации</p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Секция "О фонде" -->
    <section class="section-fund">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6 section-fund-left">
                    <h4>О ФОНДЕ</h4>
                    <h3>A Dream In Their Mind Is Our Mission</h3>
                    <h5>Collaborate with team members to rally support</h5>
                    <p>he new allocation will help expand response to cover those households that are led by women and have
                        elderly, pregnant, or disabled family members, or who have lost all assets.</p>
                    <div class="section-fund__img">
                        <img src="img/section_fund_img.png"
                             alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6 section-fund-right">
                    <div class="row">
                        <div class="col-6 section-fund-right-block">
                            <div class="section-fund-icon text-center">
                                <i class="icon-heart"></i>
                            </div>
                            <h6>Leave a Legacy</h6>
                            <p>As flood water recedes from most parts of Bangladesh and tough challenges such as
                                scarcity.</p>
                            <a href="#" class="btn" title="More details">
                                <span>Подробнее</span><img src="img/arrow_right.svg" alt="">
                            </a>
                        </div>
                        <div class="col-6 section-fund-right-block">
                            <div class="section-fund-icon text-center">
                                <i class="icon-Donate"></i>
                            </div>
                            <h6>Make Donation</h6>
                            <p>As flood water recedes from most parts of Bangladesh and tough challenges such as
                                scarcity.</p>
                            <a href="#" class="btn" title="More details">
                                <span>Подробнее</span><img src="img/arrow_right.svg" alt="">
                            </a>
                        </div>
                        <div class="col-6 section-fund-right-block">
                            <div class="section-fund-icon text-center">
                                <i class="icon-Sponsor-a-child"></i>
                            </div>
                            <h6>Become a Fundraiser</h6>
                            <p>As flood water recedes from most parts of Bangladesh and tough challenges such as
                                scarcity.</p>
                            <a href="#" class="btn" title="More details">
                                <span>Подробнее</span><img src="img/arrow_right.svg" alt="">
                            </a>
                        </div>
                        <div class="col-6 section-fund-right-block">
                            <div class="section-fund-icon text-center">
                                <i class="icon-Become-a-volunteer"></i>
                            </div>
                            <h6>Become A Volunteer</h6>
                            <p>As flood water recedes from most parts of Bangladesh and tough challenges such as
                                scarcity.</p>
                            <a href="#" class="btn" title="More details">
                                <span>Подробнее</span><img src="img/arrow_right.svg" alt="">
                            </a>
                        </div>


                    </div>
                </div>
            </div>
            <a href="#" class="btn btn-danger button-all btn__fund" title="More details">Подробнее</a>
        </div>
    </section>
    <!-- Секция для "Волонтеров" -->
    <section class="section-volunteer">
        <div class="container">
            <div class="row section-volunteer-content">
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <h4>Use your time to serve the world, and you will find that it also serves you.</h4>
                    <h1>Become a Volunteer</h1>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <p>Leather and leather good exporters are gung-ho about hitting $5 billion in export receipts by 2022 if
                        the government manages the Leather Working Group’s certification at the earliest, according to
                        industry insiders. Last fiscal year, leather and leather good exports fetched $1.19 billion,
                        making it the second highest export earner for Bangladesh after garment, according t</p>
                    <a href="#" class="btn btn-danger button-all">
                        Join Us Now
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Секция для "Пожертвование" -->
    <section class="section-donation">
        <div class="container">
            <div class="row section-donation-content">
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <img src="img/donation_video.svg"
                         alt="" class="img-fluid">
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6 section-donation-content-text">
                    <h4>We’ve funded 120,00 charity projects for 20M people around the world.</h4>
                    <p>Leather and leather good exporters are gung-ho about hitting $5 billion in export receipts by 2022 if
                        the government manages the Leather Working Group’s certification at the earliest, according to
                        industry insiders.</p>

                    <div class="row  ">
                        <div class="col-6 text-center section-donation-content-funded">
                            <div class="card section-donation-content-funded-card">
                                <span class="icon-food-box"></span>
                                <h6>619</h6>
                                <p>Food Served</p>
                            </div>
                        </div>
                        <div class="col-6 text-center section-donation-content-funded">
                            <div class="card section-donation-content-funded-card">
                                <span class="icon-people-on-curve"></span>
                                <h6>38538</h6>
                                <p>Volunteer</p>
                            </div>
                        </div>
                        <div class="col-6 text-center section-donation-content-funded">
                            <div class="card section-donation-content-funded-card">
                                <span class="icon-blood"></span>
                                <h6>127167</h6>
                                <p>Blood Donated</p>
                            </div>
                        </div>
                        <div class="col-6 text-center section-donation-content-funded">
                            <div class="card section-donation-content-funded-card">
                                <span class="icon-boy-and-girl"></span>
                                <h6>2101</h6>
                                <p>Happy Children</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Секция для "Индикатор (Популярные Причины)" -->
    <section class="section-сauses">
        <div class="container">
            <h5 class="text-center">Our Causes</h5>
            <h2 class="text-center">Popular Causes</h2>

            <p class="text-center">Leather and leather good exporters are gung-ho about hitting $5 billion in export
                receipts by 2022 if the government manages the Leather Working Group’s certification at the earliest,
                according to industry insiders. Last fiscal year, leather and leather good exports fetched $1.19 billion,
                making it the second highest export earner for Bangladesh after garment, according t</p>

            <div class="row">
                <div class="col-12 col-lg-4">
                    <div class="section-сauses-content">
                        <div class="image-container with-overlay">
                            <img src="img/Popular-1.svg" alt="" class="img-fluid">
                        </div>
                        <div class="like-handler">
                            <div class="like_container" id="percent-1">
                                <span class="percent"></span>
                            </div>
                        </div>
                        <div class="line" data-percent="0.85" id="line" data-id="#percent-1"></div>
                        <div class="section-сauses-content-info">
                            <div class="post-line text-left">Raised $57,089</div>
                            <div class="post-line text-right">Goal $50,000</div>
                            <h3>Capetown orphanage</h3>
                            <div class="post-time text-left">Time Left</div>
                            <div class="post-time text-right"><i class="fas fa-calendar-alt"></i><span>15 Day</span></div>
                            <div class="post-location text-left">Target Location</div>
                            <div class="post-location text-right"><i
                                    class="fas fa-map-marker-alt"></i><span>Mombasa, USA</span></div>
                            <p>Once we obtain the LWG certification, nobody will ask about the quality of our products as
                                everything would be produced following the international standards of compliance,” said
                                Saiful Islam, president of the Leathergoods and Footwear Manufacturers & Exporters
                                Association of Bangladesh</p>
                            <a href="#" class="btn button-all btn-danger" title="Go to DONATE NOW">DONATE NOW</a>
                        </div>

                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="section-сauses-content">
                        <div class="image-container with-overlay">
                            <img src="img/Popular-2.svg" alt="" class="img-fluid">
                        </div>
                        <div class="like-handler">
                            <div class="like_container" id="percent-2">
                                <span class="percent"></span>
                            </div>
                        </div>
                        <div class="line" data-percent="0.25" id="line2" data-id="#percent-2"></div>

                        <div class="section-сauses-content-info">
                            <div class="post-line text-left">Raised $57,089</div>
                            <div class="post-line text-right">Goal $50,000</div>
                            <h3>Capetown orphanage</h3>
                            <div class="post-time text-left">Time Left</div>
                            <div class="post-time text-right"><i class="fas fa-calendar-alt"></i><span>15 Day</span></div>
                            <div class="post-location text-left">Target Location</div>
                            <div class="post-location text-right"><i class="fas fa-map-marker-alt"></i><span>Mombasa, USA</span></div>
                            <p>Once we obtain the LWG certification, nobody will ask about the quality of our products as
                                everything would be produced following the international standards of compliance,” said
                                Saiful Islam, president of the Leathergoods and Footwear Manufacturers & Exporters
                                Association of Bangladesh</p>
                            <a href="#" class="btn button-all btn-danger" title="Go to DONATE NOW">DONATE NOW</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="section-сauses-content">
                        <div class="image-container with-overlay">
                            <img src="img/Popular-3.svg" alt="" class="img-fluid">
                        </div>
                        <div class="like-handler">
                            <div class="like_container" id="percent-3">
                                <span class="percent"></span>
                            </div>
                        </div>
                        <div class="line" data-percent="0.15" id="line3" data-id="#percent-3"></div>
                        <div class="section-сauses-content-info">
                            <div class="post-line text-left">Raised $57,089</div>
                            <div class="post-line text-right">Goal $50,000</div>
                            <h3>Capetown orphanage</h3>
                            <div class="post-time text-left">Time Left</div>
                            <div class="post-time text-right"><i class="fas fa-calendar-alt"></i><span>15 Day</span></div>
                            <div class="post-location text-left">Target Location</div>
                            <div class="post-location text-right"><i class="fas fa-map-marker-alt"></i><span>Mombasa, USA</span></div>
                            <p>Once we obtain the LWG certification, nobody will ask about the quality of our products as
                                everything would be produced following the international standards of compliance,” said
                                Saiful Islam, president of the Leathergoods and Footwear Manufacturers & Exporters
                                Association of Bangladesh</p>
                            <a href="#" class="btn button-all btn-danger" title="Go to DONATE NOW">DONATE NOW</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Секция для "Индикатор (Популярные Причины)" -->
    <section class="section-event">
        <div class="container">
            <h3 class="text-center">Upcoming Event</h3>
            <p class="text-center">The evening’s crawling rush hour traffic came to a complete halt in Kazipara in Dhaka as
                hundreds of garments workers, most of whom
                are women, got out of their factories at the end of their shifts. Their relentless hard work, albeit often
                underappreciated in the views of many,</p>
            <!-- Индикатор-1 (Популярные Причины) -->
            <div class="row section-event-content">
                <div class="col-12 col-lg-3 section-event-content-img">
                    <img src="img/imeg_event_1.svg" alt="" class="img-fluid">
                </div>
                <div class="col-12 col-lg-6 section-event-content-info">
                    <h5>03 FEBRUARY</h5>
                    <h4>Project management in the voluntary sector</h4>
                    <p>It was launched in 2007 to press for the release of AL chief Sheikh Hasina who was in jail at that
                        time, according to the platform’s President Asaduzzaman Durjoy. He said their objective is to “carry
                        forward the spirit of the Liberation War from one generation to another</p>
                    <div class="section-event-content-info-time">
                        <div class="info-time"><i class="far fa-clock"></i><span>10.00AM- 3.00PM</span></div>
                        <div class="info-time"><i class="fas fa-map-marker-alt"></i><span>167 Stefhen St. New York</span>
                        </div>
                    </div>
                    <div class="section-event-content-info-circle row">
                        <div data-percent="0.15" class="col-6 col-md-3 col-lg-3 circles" id="circle">
                            <div class="text-center circle-days">
                                <span>567</span> <br> DAYS
                            </div>
                        </div>
                        <div data-percent="0.25" class="col-6 col-md-3 col-lg-3 circles" id="circle-2">
                            <div class="text-center circle-days">
                                <span>567</span> <br> DAYS
                            </div>
                        </div>
                        <div data-percent="0.35" class="col-6 col-md-3 col-lg-3 circles" id="circle-3">
                            <div class="text-center circle-days">
                                <span>567</span> <br> DAYS
                            </div>
                        </div>
                        <div data-percent="0.45" class="col-6 col-md-3 col-lg-3 circles" id="circle-4">
                            <div class="text-center circle-days">
                                <span>567</span> <br> DAYS
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-3 section-event-content-organizer">
                    <div class="section-event-content-organizer-content">
                        <div class="organizer__img">
                            <img src="img/event_min_1.svg" alt="">
                        </div>
                        <div class="organizer__name">
                            <span>Organized By:</span>
                            <h6>Devil Roy Barman</h6>
                        </div>
                    </div>
                    <a href="#" class="btn button-all btn-danger" title="Go to Join Now">Join Now</a>
                </div>
            </div>
            <!-- Индикатор-2 (Популярные Причины) -->
            <div class="row section-event-content">
                <div class="col-12 col-lg-3 section-event-content-img">
                    <img src="img/imeg_event_2.svg" alt="" class="img-fluid">
                </div>
                <div class="col-12 col-lg-6 section-event-content-info">
                    <h5>03 FEBRUARY</h5>
                    <h4>Project management in the voluntary sector</h4>
                    <p>It was launched in 2007 to press for the release of AL chief Sheikh Hasina who was in jail at that
                        time, according to the platform’s President Asaduzzaman Durjoy. He said their objective is to “carry
                        forward the spirit of the Liberation War from one generation to another</p>
                    <div class="section-event-content-info-time">
                        <div class="info-time"><i class="far fa-clock"></i><span>10.00AM- 3.00PM</span></div>
                        <div class="info-time"><i class="fas fa-map-marker-alt"></i><span>167 Stefhen St. New York</span>
                        </div>
                    </div>
                    <div class="section-event-content-info-circle row">
                        <div data-percent="0.15" class="circles col-6 col-md-3 col-lg-3" id="circle-5">
                            <div class="text-center circle-days">
                                <span>567</span> <br> DAYS
                            </div>
                        </div>
                        <div data-percent="0.25" class="circles col-6 col-md-3 col-lg-3" id="circle-6">
                            <div class="text-center circle-days">
                                <span>567</span> <br> DAYS
                            </div>
                        </div>
                        <div data-percent="0.35" class="circles col-6 col-md-3 col-lg-3" id="circle-7">
                            <div class="text-center circle-days">
                                <span>567</span> <br> DAYS
                            </div>
                        </div>
                        <div data-percent="0.45" class="circles col-6 col-md-3 col-lg-3" id="circle-8">
                            <div class="text-center circle-days">
                                <span>567</span> <br> DAYS
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-3 section-event-content-organizer">
                    <div class="section-event-content-organizer-content">
                        <div class="organizer__img">
                            <img src="img/event_min_2.svg" alt="">
                        </div>
                        <div class="organizer__name">
                            <span>Organized By:</span>
                            <h6>Devil Roy Barman</h6>
                        </div>
                    </div>
                    <a href="#" class="btn button-all btn-danger" title="Go to Join Now">Join Now</a>
                </div>
            </div>
            <!-- Индикатор-3 (Популярные Причины) -->
            <div class="row section-event-content">
                <div class="col-12 col-lg-3 section-event-content-img">
                    <img src="img/imeg_event_3.svg" alt="" class="img-fluid">
                </div>
                <div class="col-12 col-lg-6 section-event-content-info">
                    <h5>03 FEBRUARY</h5>
                    <h4>Project management in the voluntary sector</h4>
                    <p>It was launched in 2007 to press for the release of AL chief Sheikh Hasina who was in jail at that
                        time, according to the platform’s President Asaduzzaman Durjoy. He said their objective is to “carry
                        forward the spirit of the Liberation War from one generation to another</p>
                    <div class="section-event-content-info-time">
                        <div class="info-time"><i class="far fa-clock"></i><span>10.00AM- 3.00PM</span></div>
                        <div class="info-time"><i class="fas fa-map-marker-alt"></i><span>167 Stefhen St. New York</span>
                        </div>
                    </div>
                    <div class="section-event-content-info-circle row">
                        <div data-percent="0.50" class="circles col-6 col-md-3 col-lg-3" id="circle-9">
                            <div class="text-center circle-days">
                                <span>567</span> <br> DAYS
                            </div>
                        </div>
                        <div data-percent="0.45" class="circles col-6 col-md-3 col-lg-3" id="circle-10">
                            <div class="text-center circle-days">
                                <span>567</span> <br> DAYS
                            </div>
                        </div>
                        <div data-percent="0.70" class="circles col-6 col-md-3 col-lg-3" id="circle-11">
                            <div class="text-center circle-days">
                                <span>567</span> <br> DAYS
                            </div>
                        </div>
                        <div data-percent="0.12" class="circles col-6 col-md-3 col-lg-3" id="circle-12">
                            <div class="text-center circle-days">
                                <span>567</span> <br> DAYS
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-3 section-event-content-organizer">
                    <div class="section-event-content-organizer-content">
                        <div class="organizer__img">
                            <img src="img/event_min_3.svg" alt="">
                        </div>
                        <div class="organizer__name">
                            <span>Organized By:</span>
                            <h6>Devil Roy Barman</h6>
                        </div>
                    </div>
                    <a href="#" class="btn button-all btn-danger" title="Go to Join Now">Join Now</a>
                </div>
            </div>
            <div class="empty"></div>
        </div>
    </section>

    <section class="expert-team">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-6 col-lg-9">
                    <h3>Our Executive</h3>
                    <h4>Expert Team</h4>
                    <p class="large-text">Leather and leather good exporters are gung-ho about hitting $5 billion in export
                        <br>
                        receipts by 2022 if the government manages the Leather Working Group’s
                        <br> certification at the earliest, according to industry insiders.</p>
                </div>
                <div class="col-12 col-sm-3 col-md-6 col-lg-3">
                    <a href="#" class="btn btn-danger">
                        View All
                    </a>
                </div>


            </div>

            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <img src="img/beautiful-brunette-cute-774909.png" alt="" class="img-fluid">
                    <div class="card-body">
                        <h5 class="card-title">Birgit Schreiner</h5>
                        <p class="card-text">OWNER</p>

                        <ul class="icons-logo">
                            <li><a href="#" title="Go to facebook page"><em class="fab fa-facebook-f"></em></a></li>
                            <li><a href="#" title="Go to twitter page"><em class="fab fa-twitter"></em></a></li>
                            <li><a href="#" title="Go to instagram page"><em class="fab fa-instagram"></em></a></li>
                            <li><a href="#" title="Go to pinterest page"><em class="fab fa-pinterest-p"></em></a></li>
                        </ul>

                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12"><img src="img/lucas-sankey-9R-CH7PR150-unsplash.png" alt=""
                                                              class="img-fluid">
                    <div class="card-body">
                        <h5 class="card-title">Bernd Frey</h5>
                        <p class="card-text">CUSTOMER CARE</p>

                        <ul class="icons-logo">
                            <li><a href="#" title="Go to facebook page"><em class="fab fa-facebook-f"></em></a></li>
                            <li><a href="#" title="Go to twitter page"><em class="fab fa-twitter"></em></a></li>
                            <li><a href="#" title="Go to instagram page"><em class="fab fa-instagram"></em></a></li>
                            <li><a href="#" title="Go to pinterest page"><em class="fab fa-pinterest-p"></em></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12"><img src="img/benjamin-parker-OhKElOkQ3RE-unsplash.png" alt=""
                                                              class="img-fluid">
                    <div class="card-body">
                        <h5 class="card-title">Jan Baier</h5>
                        <p class="card-text">CO-FOUNDER</p>

                        <ul class="icons-logo">
                            <li><a href="#" title="Go to facebook page"><em class="fab fa-facebook-f"></em></a></li>
                            <li><a href="#" title="Go to twitter page"><em class="fab fa-twitter"></em></a></li>
                            <li><a href="#" title="Go to instagram page"><em class="fab fa-instagram"></em></a></li>
                            <li><a href="#" title="Go to pinterest page"><em class="fab fa-pinterest-p"></em></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12"><img src="img/adult-beautiful-digital-nomad-1181496.png" alt=""
                                                              class="img-fluid">
                    <div class="card-body">
                        <h5 class="card-title">Katharina Zimmer</h5>
                        <p class="card-text">SPECIALIST</p>

                        <ul class="icons-logo">
                            <li><a href="#" title="Go to facebook page"><em class="fab fa-facebook-f"></em></a></li>
                            <li><a href="#" title="Go to twitter page"><em class="fab fa-twitter"></em></a></li>
                            <li><a href="#" title="Go to instagram page"><em class="fab fa-instagram"></em></a></li>
                            <li><a href="#" title="Go to pinterest page"><em class="fab fa-pinterest-p"></em></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="best-gallery">
        <div class="container">
            <h2>BEST GALLERY</h2>
            <p>The fashion industry is slowly but steadily getting rid of traditional fashion seasons because of a trend
                <br>
                called “fast fashion”. Like fast food, fast fashion seeks a quick turnaround. <br>
                Consumers are constantly looking for new designs and denying waiting until another fashion season begins.
            </p>


            <div class="span-gallery">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="pills-All-tab"  data-toggle="pill" href="#pills-All" role="tab"
                           aria-controls="pills-All" aria-selected="true">All</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-Food-tab" data-toggle="pill" href="#pills-Food" role="tab"
                           aria-controls="pills-Food" aria-selected="false">Food</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-Home-tab" data-toggle="pill" href="#pills-Home" role="tab"
                           aria-controls="pills-Home" aria-selected="false">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-Education-tab" data-toggle="pill" href="#pills-Education" role="tab"
                           aria-controls="pills-Education" aria-selected="false">Education</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-Blood-tab" data-toggle="pill" href="#pills-Blood" role="tab"
                           aria-controls="pills-Blood" aria-selected="false">Blood</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-Water-tab" data-toggle="pill" href="#pills-Water" role="tab"
                           aria-controls="pills-Water" aria-selected="false">Water</a>
                    </li>
                </ul>
            </div>

            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    <div class="row">
                        <div class="col-12 col-lg-8">
                            <div class="row" id="first-col">

                                <div class="col-12 card-img">
                                    <a href="img/images/NoPathCopy.png" data-lightbox="roadtrip">
                                        <img src="img/images/NoPathCopy.png" alt="Mr. Cat" class="img-fluid">
                                    </a>
                                </div>
                            </div>

                            <div class="row" >
                                <div class="col-12 col-lg-6 card-img">
                                    <a href="img/images/NoPathCopy18.png" data-lightbox="roadtrip">
                                        <img src="img/images/NoPathCopy18.png" alt="Mr. Cat" class="img-fluid">
                                    </a>
                                </div>

                                <div class="col-12 col-lg-6 card-img">
                                    <a href="img/images/NoPathCopy14.png" data-lightbox="roadtrip">
                                        <img src="img/images/NoPathCopy14.png" alt="Mr. Cat" class="img-fluid">
                                    </a>
                                </div>
                            </div>


                        </div>
                        <div class="col-12 col-lg-4" id="second-col">
                            <div class="col-12 card-img" >
                                <a href="img/images/NoPathCopy11.png" data-lightbox="roadtrip">
                                    <img src="img/images/NoPathCopy11.png" alt="Mr. Cat" class="img-fluid">
                                </a>
                            </div>
                            <div class="col-12 card-img">
                                <a href="img/images/NoPathCopy12.png" data-lightbox="roadtrip">
                                    <img src="img/images/NoPathCopy12.png" alt="Mr. Cat" class="img-fluid">
                                </a>
                            </div>
                            <div class="col-12 card-img">
                                <a href="img/images/NoPathCopy13.png" data-lightbox="roadtrip">
                                    <img src="img/images/NoPathCopy13.png" alt="Mr. Cat" class="img-fluid">
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">2</div>
                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">3</div>
                <div class="tab-pane fade" id="pills-food" role="tabpanel" aria-labelledby="pills-contact-tab">4</div>
            </div>


        </div>
    </section>
    <!-- Секция для курусели c партнерами -->
    <section class="slide-partners">
        <div class="container">
            <div id="carouselExampleIndicators-2" class="carousel slide slide-partners__content" data-ride="carousel">
                <h2 class="text-center">Trusted Partners Worldwide</h2>
                <h5 class="text-center">We are very greatful and feel honoured to our all partners for being with us</h5>
                <ol class="carousel-indicators slide-partners__indicators">
                    <li data-target="#carouselExampleIndicators-2" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators-2" data-slide-to="1"></li>
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
@endsection
