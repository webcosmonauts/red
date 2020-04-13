@extends('layouts.page')

@section('content')
    {{-- как стать волонтером? --}}
    <section class="steps-to-volunteer">
        <div class="container">
            <div class="steps text-center">
                <h2>Как стать волонтёром и помочь развитию фонда?</h2>
                <div class="row justify-content-between align-items-center">
                    <div class="col-12 col-lg-3 card">
                        <h1>1</h1>
                        <div class="card-body">
                            <h5 class="card-title">Выберите направление</h5>
                        </div>
                    </div>
                    <em class="d-none d-lg-block">
                        <i class="fas fa-chevron-right"></i>
                    </em>
                    <em class="d-md-block d-lg-none d-xl-none">
                        <i class="fas fa-chevron-down"></i>
                    </em>
                    <div class="col-12 col-lg-3 card">
                        <h1>2</h1>
                        <div class="card-body">
                            <h5 class="card-title">Заполните форму обратной связи</h5>
                        </div>
                    </div>
                    <em class="d-none d-lg-block">
                        <i class="fas fa-chevron-right"></i>
                    </em>
                    <em class="d-md-block d-lg-none d-xl-none">
                        <i class="fas fa-chevron-down"></i>
                    </em>
                    <div class="col-12 col-lg-3 card">
                        <h1>3</h1>
                        <div class="card-body">
                            <h5 class="card-title">Мы с Вами <br> свяжимся</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Вакансии --}}
    <section class="vacancies">
        <div class="container">
            <h1 class="text-center">Вакансии</h1>
            <div class="row">
                <div class="col-12 col-lg-4">
                    <a href="#" title="vacancies-form"><img src="/images/vacancies-1.png" class="img-fluid" alt="vacancies"></a>
                </div>
                <div class="col-12 col-lg-8">
                    <a href="#" title="vacancies-form"><h2>Документооборот</h2></a>
                    <p>Leather and leather good exporters are gung-ho about hitting $5 billion in export receipts by 2022 if the government manages the Leather Working Group’s certification at the earliest, according to industry insiders.</p>
                    <a href="{{ route('contact-order') }}" class="btn button-all btn-danger" title="apply">Подать заявку</a>
                </div>
            </div>
            <div class="divider"></div>
            <div class="row">
                <div class="col-12 col-lg-4">
                    <a href="#" title="vacancies-form"><img src="/images/vacancies-2.png" alt="vacancies" class="img-fluid"></a></div>
                <div class="col-12 col-lg-8">
                    <a href="#" title="vacancies-form"><h2>Документооборот</h2></a>
                    <p>Leather and leather good exporters are gung-ho about hitting $5 billion in export receipts by 2022 if the government manages the Leather Working Group’s certification at the earliest, according to industry insiders.</p>
                    <a href="{{ route('contact-order') }}" class="btn button-all btn-danger" title="apply">Подать заявку</a>
                </div>
            </div>
            <div class="divider"></div>
            <div class="row">
                <div class="col-12 col-lg-4">
                    <a href="#" title="vacancies-form"><img src="/images/vacancies-3.png" alt="vacancies" class="img-fluid"></a></div>
                <div class="col-12 col-lg-8">
                    <a href="#" title="vacancies-form"><h2>Документооборот</h2></a>
                    <p>Leather and leather good exporters are gung-ho about hitting $5 billion in export receipts by 2022 if the government manages the Leather Working Group’s certification at the earliest, according to industry insiders.</p>
                    <a href="{{ route('contact-order') }}" class="btn button-all btn-danger" title="apply">Подать заявку</a>
                </div>
            </div>
            <div class="divider"></div>
        </div>
    </section>
@endsection
