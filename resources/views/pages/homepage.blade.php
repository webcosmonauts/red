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
                        <img src="/images/slider_main.png" class="d-block w-100" alt="...">
                        <div class="carousel-block">
                            <h2>Депозиты и кредиты в повседневной жизни</h2>
                            <p>Фонд «RED» В феврале проводит уроки по финансовой грамотности со старшеклассниками Вроцловской школы. Ученики знакомились с работой банковской системы и самыми популярными банковскими продуктами депозитами и кредитами.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="/images/slider_main.png" class="d-block w-100" alt="...">
                        <div class="carousel-block">
                            <h2>Депозиты и кредиты в повседневной</h2>
                            <p>Фонд «RED» В феврале проводит уроки по финансовой грамотности со старшеклассниками Вроцловской школы. Ученики знакомились с работой банковской системы и самыми популярными банковскими продуктами депозитами и кредитами.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="/images/slider_main.png" class="d-block w-100" alt="...">
                        <div class="carousel-block">
                            <h2>Депозиты и кредиты</h2>
                            <p>Фонд «RED» В феврале проводит уроки по финансовой грамотности со старшеклассниками Вроцловской школы. Ученики знакомились с работой банковской системы и самыми популярными банковскими продуктами депозитами и кредитами.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="/images/slider_main.png" class="d-block w-100" alt="...">
                        <div class="carousel-block">
                            <h2>Депозиты и кредиты в повседневной жизни</h2>
                            <p>Фонд «RED» В феврале проводит уроки по финансовой грамотности со старшеклассниками Вроцловской школы. Ученики знакомились с работой банковской системы и самыми популярными банковскими продуктами депозитами и кредитами.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="/images/slider_main.png" class="d-block w-100" alt="...">
                        <div class="carousel-block">
                            <h2>Кредиты в повседневной жизни</h2>
                            <p>Фонд «RED» В феврале проводит уроки по финансовой грамотности со старшеклассниками Вроцловской школы. Ученики знакомились с работой банковской системы и самыми популярными банковскими продуктами - депозитами и кредитами.</p>
                        </div>
                    </div>
                </div>
                <div class="d-none d-lg-block">
                    <a class="carousel-control-prev section-carousel-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon section-carousel-control-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next section-carousel-next" href="#carouselExampleIndicators" role="button" data-slide="next">
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
            <div class="row help-content">
                <div class="col-lg-3 col-md-6 col-sm-12 section-help">
                    <div class="post">
                        <span class="icon-hands-helping"></span>
                        <h5>Информационная поддержка</h5>
                        <p>Мы помогаем с поиском информации</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 section-help">
                    <div class="post">
                        <div class="icon"><img src="/images/help-piggy-bank.svg" alt=""></div>
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
                        <div class="icon"><img src="/images/icon-hand.svg" alt=""></div>
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
                    <p>he new allocation will help expand response to cover those households that are led by women and have elderly, pregnant, or disabled family members, or who have lost all assets.</p>
                    <div class="section-fund__img">
                        <img src="/images/section_fund_img.png" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6 section-fund-right">
                    <div class="row">
                        <div class="col-6 section-fund-right-block">
                            <div class="section-fund-icon text-center">
                                <i class="icon-heart"></i>
                            </div>
                            <h6>Leave a Legacy</h6>
                            <p>As flood water recedes from most parts of Bangladesh and tough challenges such as scarcity.</p>
                            <a href="#" class="btn" title="More details">
                                <span>Подробнее</span><img src="/images/arrow_right.svg" alt="">
                            </a>
                        </div>
                        <div class="col-6 section-fund-right-block">
                            <div class="section-fund-icon text-center">
                                <i class="icon-Donate"></i>
                            </div>
                            <h6>Make Donation</h6>
                            <p>As flood water recedes from most parts of Bangladesh and tough challenges such as scarcity.</p>
                            <a href="#" class="btn" title="More details">
                                <span>Подробнее</span><img src="/images/arrow_right.svg" alt="">
                            </a>
                        </div>
                        <div class="col-6 section-fund-right-block">
                            <div class="section-fund-icon text-center">
                                <i class="icon-Sponsor-a-child"></i>
                            </div>
                            <h6>Become a Fundraiser</h6>
                            <p>As flood water recedes from most parts of Bangladesh and tough challenges such as scarcity.</p>
                            <a href="#" class="btn" title="More details">
                                <span>Подробнее</span><img src="/images/arrow_right.svg" alt="">
                            </a>
                        </div>
                        <div class="col-6 section-fund-right-block">
                            <div class="section-fund-icon text-center">
                                <i class="icon-Become-a-volunteer"></i>
                            </div>
                            <h6>Become A Volunteer</h6>
                            <p>As flood water recedes from most parts of Bangladesh and tough challenges such as scarcity.</p>
                            <a href="#" class="btn" title="More details">
                                <span>Подробнее</span><img src="/images/arrow_right.svg" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <a href="#" class="btn btn-danger button-all btn__fund" title="More details">Подробнее</a>
        </div>
    </section>
    <!-- Секция для "Волонтеров" -->
    <section class="section-volunteer" style="background-image: url('/images/section_volunteer_bg.png');">
        <div class="container">
            <div class="row section-volunteer-content">
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <h4>Use your time to serve the world, and you will find that it also serves you.</h4>
                    <h1>Become a Volunteer</h1>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <p>Leather and leather good exporters are gung-ho about hitting $5 billion in export receipts by 2022 if the government manages the Leather Working Group’s certification at the earliest, according to industry insiders. Last fiscal year, leather and leather good exports fetched $1.19 billion, making it the second highest export earner for Bangladesh after garment, according t</p>
                    <a href="#" class="btn btn-danger button-all">Join Us Now</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Секция для "Пожертвование" -->
    <section class="section-donation">
        <div class="container">
            <div class="row section-donation-content">
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <img src="/images/donation_video.png"
                         alt="" class="img-fluid">
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6 section-donation-content-text">
                    <h4>We’ve funded 120,00 charity projects for 20M people around the world.</h4>
                    <p>Leather and leather good exporters are gung-ho about hitting $5 billion in export receipts by 2022 if the government manages the Leather Working Group’s certification at the earliest, according to industry insiders.</p>

                    <div class="row">
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

            <p class="text-center">Leather and leather good exporters are gung-ho about hitting $5 billion in export receipts by 2022 if the government manages the Leather Working Group’s certification at the earliest, according to industry insiders. Last fiscal year, leather and leather good exports fetched $1.19 billion, making it the second highest export earner for Bangladesh after garment, according t</p>

            <div class="row">
                <div class="col-12 col-lg-4">
                    <div class="section-сauses-content">
                        <div class="image-container with-overlay">
                            <img src="/images/Popular-1.png" alt="" class="img-fluid">
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
                            <div class="post-location text-right"><i class="fas fa-map-marker-alt"></i><span>Mombasa, USA</span></div>
                            <p>Once we obtain the LWG certification, nobody will ask about the quality of our products as everything would be produced following the international standards of compliance,” said Saiful Islam, president of the Leathergoods and Footwear Manufacturers & Exporters Association of Bangladesh</p>
                            <a href="#" class="btn button-all btn-danger" title="Go to DONATE NOW">DONATE NOW</a>
                        </div>

                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="section-сauses-content">
                        <div class="image-container with-overlay">
                            <img src="/images/Popular-2.png" alt="" class="img-fluid">
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
                            <p>Once we obtain the LWG certification, nobody will ask about the quality of our products as everything would be produced following the international standards of compliance,” said Saiful Islam, president of the Leathergoods and Footwear Manufacturers & Exporters Association of Bangladesh</p>
                            <a href="#" class="btn button-all btn-danger" title="Go to DONATE NOW">DONATE NOW</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="section-сauses-content">
                        <div class="image-container with-overlay">
                            <img src="/images/Popular-3.png" alt="" class="img-fluid">
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
                            <p>Once we obtain the LWG certification, nobody will ask about the quality of our products as everything would be produced following the international standards of compliance,” said Saiful Islam, president of the Leathergoods and Footwear Manufacturers & Exporters Association of Bangladesh</p>
                            <a href="#" class="btn button-all btn-danger" title="Go to DONATE NOW">DONATE NOW</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Секция для "Индикатор (Популярные Причины)" -->
    <section class="section-event" style="background: url('/images/bg_event.png'), rgba(243, 245, 247, 0.95);">
        <div class="container">
            <h3 class="text-center">Upcoming Event</h3>
            <p class="text-center">The evening’s crawling rush hour traffic came to a complete halt in Kazipara in Dhaka as hundreds of garments workers, most of whom are women, got out of their factories at the end of their shifts. Their relentless hard work, albeit often underappreciated in the views of many,</p>
            <!-- Индикатор-1 (Популярные Причины) -->
            <div class="row section-event-content">
                <div class="col-12 col-lg-3 section-event-content-img">
                    <img src="/images/imeg_event_1.jpg" alt="" class="img-fluid">
                </div>
                <div class="col-12 col-lg-6 section-event-content-info">
                    <h5>03 FEBRUARY</h5>
                    <h4>Project management in the voluntary sector</h4>
                    <p>It was launched in 2007 to press for the release of AL chief Sheikh Hasina who was in jail at that time, according to the platform’s President Asaduzzaman Durjoy. He said their objective is to “carry forward the spirit of the Liberation War from one generation to another</p>
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
                            <img src="/images/event_min_1.png" alt="">
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
                    <img src="/images/imeg_event_2.jpg" alt="" class="img-fluid">
                </div>
                <div class="col-12 col-lg-6 section-event-content-info">
                    <h5>03 FEBRUARY</h5>
                    <h4>Project management in the voluntary sector</h4>
                    <p>It was launched in 2007 to press for the release of AL chief Sheikh Hasina who was in jail at that time, according to the platform’s President Asaduzzaman Durjoy. He said their objective is to “carry forward the spirit of the Liberation War from one generation to another</p>
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
                            <img src="/images/event_min_2.png" alt="">
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
                    <img src="/images/imeg_event_3.jpg" alt="" class="img-fluid">
                </div>
                <div class="col-12 col-lg-6 section-event-content-info">
                    <h5>03 FEBRUARY</h5>
                    <h4>Project management in the voluntary sector</h4>
                    <p>It was launched in 2007 to press for the release of AL chief Sheikh Hasina who was in jail at that time, according to the platform’s President Asaduzzaman Durjoy. He said their objective is to “carry forward the spirit of the Liberation War from one generation to another</p>
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
                            <img src="/images/event_min_3.png" alt="">
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
                    <p class="large-text">Leather and leather good exporters are gung-ho about hitting $5 billion in export<br>receipts by 2022 if the government manages the Leather Working Group’s<br> certification at the earliest, according to industry insiders.</p>
                </div>
                <div class="col-12 col-sm-3 col-md-6 col-lg-3">
                    <a href="#" class="btn btn-danger">
                        View All
                    </a>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <img src="/images/brunettegirl.png" alt="Birgit Schreiner" class="img-fluid">
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
                <div class="col-lg-3 col-md-6 col-sm-12"><img src="/images/lucassankey.png" alt="Bernd Frey" class="img-fluid">
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
                <div class="col-lg-3 col-md-6 col-sm-12"><img src="/images/benjaminparker.png" alt="Jan Baier" class="img-fluid">
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
                <div class="col-lg-3 col-md-6 col-sm-12"><img src="/images/adultnomad.png" alt="Katharina Zimmer" class="img-fluid">
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

    <!-- Секция-галерея-->

    <section class="best-gallery">
        <div class="container">
            <h2>BEST GALLERY</h2>
            <p>The fashion industry is slowly but steadily getting rid of traditional fashion seasons because of a trend<br>called “fast fashion”. Like fast food, fast fashion seeks a quick turnaround.<br>Consumers are constantly looking for new designs and denying waiting until another fashion season begins.
            </p>
            <div class="span-gallery">
                <ul class="nav nav-pills mb-3 pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link pills-all-tab active" data-toggle="pill" type="button" href="#pills-all"
                           role="tab"
                           aria-controls="pills-all" aria-selected="true">All</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pills-food-tab" data-toggle="pill" href="#pills-food" role="tab"
                           aria-controls="pills-food" aria-selected="false">Food</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pills-home-tab" data-toggle="pill" href="#pills-home" role="tab"
                           aria-controls="pills-home" aria-selected="false">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pills-education-tab" data-toggle="pill" href="#pills-education" role="tab"
                           aria-controls="pills-education" aria-selected="false">Education</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pills-blood-tab" data-toggle="pill" href="#pills-blood" role="tab"
                           aria-controls="pills-blood" aria-selected="false">Blood</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pills-water-tab" data-toggle="pill" href="#pills-water" role="tab"
                           aria-controls="pills-water" aria-selected="false">Water</a>
                    </li>
                </ul>
            </div>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-all" role="tabpanel" aria-labelledby="pills-all-tab">
                    <div class="row">
                        <div class="col-12 col-lg-8">
                            <div class="row first-col">
                                <div class="col-12 card-img">
                                    <a href="/images/images/NoPathCopy.png" data-lightbox="roadtrip">
                                        <img src="/images/images/NoPathCopy.png" alt="Photo" class="img-fluid">
                                    </a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-lg-6 card-img">
                                    <a href="/images/images/NoPathCopy18.png" data-lightbox="roadtrip">
                                        <img src="/images/images/NoPathCopy18.png" alt="Photo" class="img-fluid">
                                    </a>
                                </div>
                                <div class="col-12 col-lg-6 card-img">
                                    <a href="/images/images/NoPathCopy14.png" data-lightbox="roadtrip">
                                        <img src="/images/images/NoPathCopy14.png" alt="Photo" class="img-fluid">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4 second-col">
                            <div class="col-12 card-img">
                                <a href="/images/images/NoPathCopy11.png" data-lightbox="roadtrip">
                                    <img src="/images/images/NoPathCopy11.png" alt="Photo" class="img-fluid">
                                </a>
                            </div>
                            <div class="col-12 card-img">
                                <a href="/images/images/NoPathCopy12.png" data-lightbox="roadtrip">
                                    <img src="/images/images/NoPathCopy12.png" alt="Photo" class="img-fluid">
                                </a>
                            </div>
                            <div class="col-12 card-img">
                                <a href="/images/images/NoPathCopy13.png" data-lightbox="roadtrip">
                                    <img src="/images/images/NoPathCopy13.png" alt="Photo" class="img-fluid">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-food" role="tabpanel" aria-labelledby="pills-food-tab">
                    <div class="row">
                        <div class="col-12 col-lg-8">
                            <div class="row first-col">
                                <div class="col-12 card-img">
                                    <a href="/images/photo-food1.png" data-lightbox="roadtrip">
                                        <img src="/images/photo-food1.png" alt="Photo" class="img-fluid">
                                    </a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-lg-6 card-img">
                                    <a href="/images/photo-food2.png" data-lightbox="roadtrip">
                                        <img src="/images/photo-food2.png" alt="Photo" class="img-fluid">
                                    </a>
                                </div>
                                <div class="col-12 col-lg-6 card-img">
                                    <a href="/images/photo-food3.png" data-lightbox="roadtrip">
                                        <img src="/images/photo-food3.png" alt="Photo" class="img-fluid">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4 second-col">
                            <div class="col-12 card-img">
                                <a href="/images/photo-food4.png" data-lightbox="roadtrip">
                                    <img src="/images/photo-food4.png" alt="Photo" class="img-fluid">
                                </a>
                            </div>
                            <div class="col-12 card-img">
                                <a href="/images/photo-food5.png" data-lightbox="roadtrip">
                                    <img src="/images/photo-food5.png" alt="Photo" class="img-fluid">
                                </a>
                            </div>
                            <div class="col-12 card-img">
                                <a href="/images/photo-food6.png" data-lightbox="roadtrip">
                                    <img src="/images/photo-food6.png" alt="Photo" class="img-fluid">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    <div class="row">
                        <div class="col-12 col-lg-8">
                            <div class="row first-col">
                                <div class="col-12 card-img">
                                    <a href="/images/photo-home1.png" data-lightbox="roadtrip">
                                        <img src="/images/photo-home1.png" alt="Photo" class="img-fluid">
                                    </a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-lg-6 card-img">
                                    <a href="/images/photo-home2.png" data-lightbox="roadtrip">
                                        <img src="/images/photo-home2.png" alt="Photo" class="img-fluid">
                                    </a>
                                </div>
                                <div class="col-12 col-lg-6 card-img">
                                    <a href="/images/photo-home3.png" data-lightbox="roadtrip">
                                        <img src="/images/photo-home3.png" alt="Photo" class="img-fluid">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4 second-col">
                            <div class="col-12 card-img">
                                <a href="/images/photo-home4.png" data-lightbox="roadtrip">
                                    <img src="/images/photo-home4.png" alt="Photo" class="img-fluid">
                                </a>
                            </div>
                            <div class="col-12 card-img">
                                <a href="/images/photo-home5.png" data-lightbox="roadtrip">
                                    <img src="/images/photo-home5.png" alt="Photo" class="img-fluid">
                                </a>
                            </div>
                            <div class="col-12 card-img">
                                <a href="/images/photo-home6.png" data-lightbox="roadtrip">
                                    <img src="/images/photo-home6.png" alt="Photo" class="img-fluid">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-education" role="tabpanel" aria-labelledby="pills-education-tab">
                    <div class="row">
                        <div class="col-12 col-lg-8">
                            <div class="row first-col">
                                <div class="col-12 card-img">
                                    <a href="/images/photo-education1.png" data-lightbox="roadtrip">
                                        <img src="/images/photo-education1.png" alt="Photo" class="img-fluid">
                                    </a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-lg-6 card-img">
                                    <a href="/images/photo-education2.png" data-lightbox="roadtrip">
                                        <img src="/images/photo-education2.png" alt="Photo" class="img-fluid">
                                    </a>
                                </div>
                                <div class="col-12 col-lg-6 card-img">
                                    <a href="/images/photo-education3.png" data-lightbox="roadtrip">
                                        <img src="/images/photo-education3.png" alt="Photo" class="img-fluid">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4 second-col">
                            <div class="col-12 card-img">
                                <a href="/images/photo-education4.png" data-lightbox="roadtrip">
                                    <img src="/images/photo-education4.png" alt="Photo" class="img-fluid">
                                </a>
                            </div>
                            <div class="col-12 card-img">
                                <a href="/images/photo-education5.png" data-lightbox="roadtrip">
                                    <img src="/images/photo-education5.png" alt="Photo" class="img-fluid">
                                </a>
                            </div>
                            <div class="col-12 card-img">
                                <a href="/images/photo-education6.png" data-lightbox="roadtrip">
                                    <img src="/images/photo-education6.png" alt="Photo" class="img-fluid">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-blood" role="tabpanel" aria-labelledby="pills-blood-tab">
                    <div class="row">
                        <div class="col-12 col-lg-8">
                            <div class="row first-col">
                                <div class="col-12 card-img">
                                    <a href="/images/photo-blood1.png" data-lightbox="roadtrip">
                                        <img src="/images/photo-blood1.png" alt="Photo" class="img-fluid">
                                    </a>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12 col-lg-6 card-img">
                                    <a href="/images/photo-blood2.png" data-lightbox="roadtrip">
                                        <img src="/images/photo-blood2.png" alt="Photo" class="img-fluid">
                                    </a>
                                </div>

                                <div class="col-12 col-lg-6 card-img">
                                    <a href="/images/photo-blood3.png" data-lightbox="roadtrip">
                                        <img src="/images/photo-blood3.png" alt="Photo" class="img-fluid">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4 second-col">
                            <div class="col-12 card-img">
                                <a href="/images/photo-blood4.png" data-lightbox="roadtrip">
                                    <img src="/images/photo-blood4.png" alt="Photo" class="img-fluid">
                                </a>
                            </div>
                            <div class="col-12 card-img">
                                <a href="/images/photo-blood5.png" data-lightbox="roadtrip">
                                    <img src="/images/photo-blood5.png" alt="Photo" class="img-fluid">
                                </a>
                            </div>
                            <div class="col-12 card-img">
                                <a href="/images/photo-blood6.png" data-lightbox="roadtrip">
                                    <img src="/images/photo-blood6.png" alt="Photo" class="img-fluid">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-water" role="tabpanel" aria-labelledby="pills-water-tab">
                    <div class="row">
                        <div class="col-12 col-lg-8">
                            <div class="row first-col">
                                <div class="col-12 card-img">
                                    <a href="/images/photo-water1.png" data-lightbox="roadtrip">
                                        <img src="/images/photo-water1.png" alt="Photo" class="img-fluid">
                                    </a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-lg-6 card-img">
                                    <a href="/images/photo-water2.png" data-lightbox="roadtrip">
                                        <img src="/images/photo-water2.png" alt="Photo" class="img-fluid">
                                    </a>
                                </div>
                                <div class="col-12 col-lg-6 card-img">
                                    <a href="/images/photo-water3.png" data-lightbox="roadtrip">
                                        <img src="/images/photo-water3.png" alt="Photo" class="img-fluid">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4 second-col">
                            <div class="col-12 card-img">
                                <a href="/images/photo-water4.png" data-lightbox="roadtrip">
                                    <img src="/images/photo-water4.png" alt="Photo" class="img-fluid">
                                </a>
                            </div>
                            <div class="col-12 card-img">
                                <a href="/images/photo-water5.png" data-lightbox="roadtrip">
                                    <img src="/images/photo-water5.png" alt="Photo" class="img-fluid">
                                </a>
                            </div>
                            <div class="col-12 card-img">
                                <a href="/images/photo-water6.png" data-lightbox="roadtrip">
                                    <img src="/images/photo-water6.png" alt="Photo" class="img-fluid">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Секция с отзывами-->

    <section class="testimonial">
        <div class="container">
            <h3>TESTIMONIAL</h3>
            <h2>Thar Is Thoughts About Our Work</h2>

            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="slider-feedback">
                            <div class="row">
                                <div class="col-lg-4">
                                    <img src="/images/adult-curly-hair-digital-nomad-1181742.png" class="img-fluid" alt="Devil Roy Barman">
                                </div>
                                <div class="col-lg-8">
                                    <div class="row">
                                        <div class="col-12 col-lg-4">
                                            <h5>Devil Roy Barman</h5>
                                        </div>
                                        <div class="col-12 col-lg-4">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-12"><h6>Founder</h6></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <p>I thought about the times in my life when I couldn't even afford $5 for a book. That's when it hit me. Wouldn't it be cool if the price tag said, '5 jumping jacks and a sit-up. Chris raised $70k to help his neighbor Norma stay in her home.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="slider-feedback">
                            <div class="row">
                                <div class="col-lg-4">
                                    <img src="/images/adult-curly-hair-digital-nomad-1181742.png" class="img-fluid" alt="Devil Roy Barman">
                                </div>
                                <div class="col-lg-8">
                                    <div class="row">
                                        <div class="col-12 col-lg-4">
                                            <h5>Devil Roy Barman</h5>
                                        </div>
                                        <div class="col-12 col-lg-4">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-12"><h6>Founder</h6></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <p>I thought about the times in my life when I couldn't even afford $5 for a book. That's when it hit me. Wouldn't it be cool if the price tag said, '5 jumping jacks and a sit-up. Chris raised $70k to help his neighbor Norma stay in her home.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="slider-feedback">
                            <div class="row">
                                <div class="col-lg-4">
                                    <img src="/images/adult-curly-hair-digital-nomad-1181742.png" class="img-fluid" alt="Devil Roy Barman">
                                </div>
                                <div class="col-lg-8">
                                    <div class="row">
                                        <div class="col-12 col-lg-4">
                                            <h5>Devil Roy Barman</h5>
                                        </div>
                                        <div class="col-12 col-lg-4">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-12"><h6>Founder</h6></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <p>I thought about the times in my life when I couldn't even afford $5 for a book. That's when it hit me. Wouldn't it be cool if the price tag said, '5 jumping jacks and a sit-up. Chris raised $70k to help his neighbor Norma stay in her home.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carusel-control">
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                            <i class="fas fa-angle-left"></i>
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only"><</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                            <i class="fas fa-angle-right"></i>
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Секция обратной связи-->

    <section class="contact-us" style="background-image: url('/images/background.png');">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <h6>Get in Touch</h6>
                    <h3>Contact Us</h3>

                    <div class="form-for-contact"></div>

                    <form class="needs-validation">
                        <div class="row">
                            <div class="col-sm-12 col-md-6 col-lg-6">
                                <div class="input-group mb-4">
                                    <div class="input-group-prepend">
                                        <label for="tel" class="input-group-text" id="tel">
                                            <i class="fas fa-phone-alt"></i>
                                        </label>
                                    </div>
                                    <input type="tel" class="form-control" placeholder="Phone Number"
                                           aria-label="Phone Number" aria-describedby="basic-addon1">
                                </div>

                                <div class="input-group mb-4">
                                    <div class="input-group-prepend">
                                        <label for="name" class="input-group-text" id="name">
                                            <i class="fas fa-tag"></i>
                                        </label>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Full Name"
                                           aria-label="Full Name" aria-describedby="basic-addon1">
                                </div>

                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-6">
                                <div class="input-group mb-4">
                                    <div class="input-group-prepend">
                                        <label for="staticEmail" class="input-group-text" id="staticEmail">
                                            <i class="fas fa-envelope"></i>
                                        </label>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Email"
                                           aria-label="Email" aria-describedby="basic-addon1">
                                </div>

                                <div class="input-group mb-4">
                                    <div class="input-group-prepend">
                                        <label for="topic" class="input-group-text" id="Topic">
                                            <i class="fas fa-tag"></i>
                                        </label>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Topic"
                                           aria-label="Topic" aria-describedby="basic-addon1">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="input-group mb-6">
                                    <div class="input-group-prepend">
                                        <label for="Message" class="input-group-text" id="Message">
                                            <i class="fas fa-comment"></i>
                                        </label>
                                    </div>
                                    <textarea type="text" class="form-control" placeholder="Message"
                                              aria-label="Message" rows="4" aria-describedby="basic-addon1"
                                              style="border-left: none"></textarea>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-danger button-all">Send</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Секция последних новостей -->
    <section class="latest-news">
        <div class="container">
            <div class="text-center">
                <h3>Read Our</h3>
                <h2>Latest News</h2>
                <p>Wintour attended North London Collegiate School in Stanmore, but dropped out aged 16. She soon took <br>a job at cult 1960s London fashion boutique Biba, before completing <br>a training programme at Harrods and landing a permanent role as editorial assistant at Harper’s & Queen magazine, now Harper’s Bazaar. In 1975, Wintour moved across the pond to become junior fashion editor at Harper’s Bazaar in the US, where she stayed for several years, going on to work at other now defunct titles including Viva and Savvy until the early 1980s.</p>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-4 latest-news__card">
                    <div class="card">
                        <img src="/images/latest-news1.png" class="card-img-top" alt="ANNA WINTOUR">
                        <div class="card-title">
                            <h5>ANNA WINTOUR AT 70: WHY THE VOGUE EDITOR PLAYS </h5>
                            <p>London in 1949, Anna Wintour came from a media family. She is the eldest
                                daughter of the late Charles Wintour </p>
                            <div class="row justify-content-around">
                                <div class="card-title_info">
                                    <img src="/images/icon-latest-news.png" alt="Mr man"> Toby Halvorson
                                </div>
                                <div class="card-title_info">
                                    <span>June 16, 2020</span>
                                </div>
                                <div class="card-title_info">
                                    <a href="#" title="Share"><em class="fas fa-share-alt"></em></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-4 latest-news__card">
                    <div class="card">
                        <img src="/images/latest-news2.png" class="card-img-top" alt="ANNA WINTOUR">
                        <div class="card-title">
                            <h5>ANNA WINTOUR AT 70: WHY THE VOGUE EDITOR PLAYS </h5>
                            <p>London in 1949, Anna Wintour came from a media family. She is the eldest daughter of the late Charles Wintour </p>
                            <div class="row justify-content-around">
                                <div class="card-title_info">
                                    <img src="/images/icon-latest-news.png" alt="Mr man"> Toby Halvorson
                                </div>
                                <div class="card-title_info">
                                    <span>June 16, 2020</span>
                                </div>
                                <div class="card-title_info">
                                    <a href="#" title="Share"><em class="fas fa-share-alt"></em></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-4 latest-news__card">
                    <div class="card">
                        <img src="/images/latest-news3.png" class="card-img-top" alt="ANNA WINTOUR">
                        <div class="card-title">
                            <h5>ANNA WINTOUR AT 70: WHY THE VOGUE EDITOR PLAYS </h5>
                            <p>London in 1949, Anna Wintour came from a media family. She is the eldest daughter of the late Charles Wintour </p>
                            <div class="row justify-content-around">
                                <div class="card-title_info">
                                    <img src="/images/icon-latest-news.png" alt="Mr man"> Toby Halvorson
                                </div>
                                <div class="card-title_info">
                                    <span>June 16, 2020</span>
                                </div>
                                <div class="card-title_info">
                                    <a href="#" title="Share"><em class="fas fa-share-alt"></em></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Секция для курусели c партнерами -->
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
@endsection
