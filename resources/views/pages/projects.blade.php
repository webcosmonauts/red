@extends('layouts.page')

@section('content')
    {{-- Как получить помощь --}}
    <section class="fund-helps">
        <div class="container steps-helps">
            <h5>Фонд RED помогает в различных сферах повседневной жизни</h5>
            <h2>Как можно получить помощь?</h2>
            <div class="row justify-content-between align-items-center">
                <div class="col-12 col-lg-3 card justify-content-around">
                    <h1>1</h1>
                    <h5 class="card-title">Свяжитесь с нами </h5>
                    <p class="card-text">Телефоны нашего фонда: <br>+48 (884) 335 443 <br>+48 (884) 773 773</p>
                </div>
                <em class="d-none d-lg-block">
                    <i class="fas fa-chevron-right"></i>
                </em>
                <em class="d-md-block d-lg-none d-xl-none">
                    <i class="fas fa-chevron-down"></i>
                </em>
                <div class="col-12 col-lg-3 card justify-content-around">
                    <h1>2</h1>
                    <h5 class="card-title">Изъясните вашу проблему</h5>
                    <p class="card-text">Наши волонтёры помогают с выявлением проблемы </p>
                </div>
                <em class="d-none d-lg-block">
                    <i class="fas fa-chevron-right"></i>
                </em>
                <em class="d-md-block d-lg-none">
                    <i class="fas fa-chevron-down"></i>
                </em>
                <div class="col-12 col-lg-3 card justify-content-around">
                    <h1>3</h1>
                    <h5 class="card-title">Мы постараемся Вам помочь в ближайшие сроки</h5>
                    <p class="card-text">Наши волонтёры помогают с выявлением проблемы </p>
                </div>
            </div>
        </div>
    </section>

    {{-- Есть вопросы? --}}
    <section class="questions">
        <div class="container">
            <h5>Есть вопросы?</h5>
            <h2>Запишись на консультацию</h2>
            <a class="btn button-all btn-danger" href="{{ route('contact') }}" title="Contact us">Связаться с нами</a>
        </div>
    </section>

    {{-- Проекты --}}
    <section class="section-projects">
        <div class="container">
            <h5>Проекты над которыми мы работаем</h5>
            <h2>Присоединись к одному из проектов, помоги ближним</h2>
            <div class="row flex-row-reverse">
                <div class="col-12 col-lg-6">
                    <a href="#" title="Go to project 1"><h2>Проект №1. Помощь перселенцам</h2></a>
                    <p>Leather and leather good exporters are gung-ho about hitting $5 billion in export receipts by 2022 if the government manages the Leather Working Group’s certification at the earliest, according to industry insiders.</p>
                    <a class="btn button-all btn-danger" href="#" title="More">Подробнее</a>
                </div>
                <div class="col-12 col-lg-6">
                    <a href="#" title="Go to project 1"><img src="/images/project-1.jpg" alt="Project-1" class="img-fluid"></a></div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-6">
                    <a href="#" title="Go to project 2"><h2>Проект №2. Организация документов</h2></a>
                    <p>Leather and leather good exporters are gung-ho about hitting $5 billion in export receipts by 2022 if the government manages the Leather Working Group’s certification at the earliest, according to industry insiders.</p>
                    <a class="btn button-all btn-danger" href="#" title="More">Подробнее</a>
                </div>
                <div class="col-12 col-lg-6">
                    <a href="#" title="Go to project 2"><img src="/images/project-2.jpg" alt="Project-2" class="img-fluid"></a></div>
            </div>
            <div class="row flex-row-reverse">
                <div class="col-12 col-lg-6">
                    <a href="#" title="Go to project 3"><h2>Проект №3. Помощь перселенцам</h2></a>
                    <p>Leather and leather good exporters are gung-ho about hitting $5 billion in export receipts by 2022 if the government manages the Leather Working Group’s certification at the earliest, according to industry insiders.</p>
                    <a class="btn button-all btn-danger" href="#" title="More">Подробнее</a>
                </div>
                <div class="col-12 col-lg-6">
                    <a href="#" title="Go to project 3"><img src="/images/project-1.jpg" alt="Project-3" class="img-fluid"></a></div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-6">
                    <a href="#" title="Go to project 4"><h2>Проект №4. Организация документов</h2></a>
                    <p>Leather and leather good exporters are gung-ho about hitting $5 billion in Leather and leather good exporters are gung-ho about hitting $5 billion in Leather and leather good exporters are gung-ho about hitting $5 billion in Leather and leather good exporters are gung-ho about hitting $5 billion in Leather and leather good exporters are gung-ho about hitting $5 billion in export receipts by 2022 if the government manages the Leather Working Group’s certification at the earliest, according to industry insiders.</p>
                    <a class="btn button-all btn-danger" href="#" title="More">Подробнее</a>
                </div>
                <div class="col-12 col-lg-6">
                    <a href="#" title="Go to project 4"><img src="/images/project-2.jpg" alt="Project-4" class="img-fluid"></a></div>
            </div>
        </div>
    </section>
@endsection
