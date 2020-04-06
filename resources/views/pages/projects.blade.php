@extends('layouts.page')

@section('content')
    <!-- Как получить помощь  -->
    <section class="fund-helps">
        <div class="container steps-helps">
            <h5>Фонд RED помогает в различных сферах повседневной жизни</h5>
            <h2>Как можно получить помощь?</h2>
            <div class="row justify-content-between align-items-center">
                <div class="col-12 col-lg-3 card">
                    <h1>1</h1>
                    <div class="card-body">
                        <h5 class="card-title">Свяжитесь с нами <br><br><br></h5>
                        <p class="card-text">Телефоны нашего фонда:
                            +48 (884) 335 443 <br>
                            +48 (884) 773 773</p></div>
                </div>
                <em><span class="carousel-control-next-icon" aria-hidden="true"></span></em>
                <div class="col-12 col-lg-3 card">
                    <h1>2</h1>
                    <div class="card-body">
                        <h5 class="card-title">Изъясните вашу проблему <br><br></h5>
                        <p class="card-text">Наши волонтёры помогают с выявлением проблемы</p></div>
                </div>
                <em><span class="carousel-control-next-icon" aria-hidden="true"></span></em>
                <div class="col-12 col-lg-3 card">
                    <h1>3</h1>
                    <div class="card-body">
                        <h5 class="card-title">Мы постараемся Вам помочь в ближайшие сроки</h5>
                        <p class="card-text">Наши волонтёры помогают с выявлением проблемы</p></div>
                </div>
            </div>
        </div>
    </section>
    <!-- Есть вопросы?  -->
    <section class="questions">
        <div class="container">
            <h5>Есть вопросы?</h5>
            <h2>Запишись на консультацию</h2>
            <a class="btn button-all btn-danger" href="#" title="Contact us">Связаться с нами</a>
        </div>
    </section>
    <!-- Проекты  -->
    <section class="section-projects">
        <div class="container">
            <h5>Проекты над которыми мы работаем</h5>
            <h2>Присоединись к одному из проектов, помоги ближним</h2>
            <div class="row">
                <div class="col-12 col-lg-6">
                    <img src="img/project-1.jpg" alt="" class="img-fluid"></div>
                <div class="col-12 col-lg-6">
                    <h2>Проект №1. Помощь перселенцам</h2>
                    <p>Leather and leather good exporters are gung-ho about hitting $5 billion in export receipts by 2022 if the government manages the Leather Working Group’s certification at the earliest, according to industry insiders.</p>
                    <a class="btn button-all btn-danger" href="#" title="More">Подробнее</a>
                </div>
            </div>
            <div class="row flex-row-reverse ">
                <div class="col-12 col-lg-6">
                    <img src="img/project-2.jpg" alt="" class="img-fluid"></div>
                <div class="col-12 col-lg-6">
                    <h2>Проект №2. Организация документов</h2>
                    <p>Leather and leather good exporters are gung-ho about hitting $5 billion in export receipts by 2022 if the government manages the Leather Working Group’s certification at the earliest, according to industry insiders.</p>
                    <a class="btn button-all btn-danger" href="#" title="More">Подробнее</a>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-6">
                    <img src="img/project-1.jpg" alt="" class="img-fluid"></div>
                <div class="col-12 col-lg-6">
                    <h2>Проект №3. Помощь перселенцам</h2>
                    <p>Leather and leather good exporters are gung-ho about hitting $5 billion in export receipts by 2022 if the government manages the Leather Working Group’s certification at the earliest, according to industry insiders.</p>
                    <a class="btn button-all btn-danger" href="#" title="More">Подробнее</a>
                </div>
            </div>
            <div class="row flex-row-reverse">
                <div class="col-12 col-lg-6">
                    <img src="img/project-2.jpg" alt="" class="img-fluid"></div>
                <div class="col-12 col-lg-6">
                    <h2>Проект №4. Организация документов</h2>
                    <p>Leather and leather good exporters are gung-ho about hitting $5 billion in export receipts by 2022 if the government manages the Leather Working Group’s certification at the earliest, according to industry insiders.</p>
                    <a class="btn button-all btn-danger" href="#" title="More">Подробнее</a>
                </div>
            </div>
        </div>
    </section>
@endsection
