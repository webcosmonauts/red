@extends('layouts.page')

@section('content')
    <!-- Новости -->
    <section class="news">
        <div class="container">
            <div class="nav-category"><a href="#" title="Go to Main News">Главная </a>/
                <a href="#" title="Go to News">Новости </a>/
                <a class="active" href="#" title="Go to Society">Социум</a></div>
            <div class="row article">
                <div class="col-12 col-lg-8">
                    <div class="img-news">
                        <img src="/images/news_ball.png" class="img-fluid" alt="News">
                    </div>
                    <a class="category" href="#" title="Go to Category">Социум</a>
                    <a class="category" href="#" title="Go to Category">Знаменитости</a>
                    <h2>Аргентинские власти обвинили Месси в отмывании денег</h2>
                    <div class="info-time">
                        <i class="far fa-clock"></i><span>18.35, 26 марта 2020</span>
                    </div>
                    <p>Против капитана «Барселоны» Лионеля Месси и его отца Хорхе выдвинули обвинения в отмывании денег через благотворительный фонд футболиста Leo Messi, аргентинский прокурор Пабло Турано попросил провести проверку организации. Об этом сообщает газета La Repubblica.</p>

                    <p>Обвинения против Месси были выдвинуты после того, как неделей ранее один из бывших сотрудников фонда сообщил суду о махинациях с деньгами, которые должны были использоваться для социальных проектов. Месси и его отец отвергают все обвинения, указывая, что «жалоба лишена всякого основания».</p>

                    <p>В июле 2016 года суд Барселоны приговорил Месси и его отца к 21 месяцу тюрьмы за уклонение от уплаты налогов на сумму более €4 млн. Также им назначили штрафы в €2 млн и 1,5 млн соответственно.</p>

                    <p>Согласно законодательству Испании, наказание для футболиста и его отца могло быть ограничено испытательным сроком, так как ранее они не были судимы, а срок по приговору составляет менее двух лет. Спустя год суд заменил тюремное заключение Лионелю Месси на дополнительный штраф в виде €250 тыс.</p>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="next-news">
                        <a href="#" title="Go to Next News"><div class="with-overlay">
                                <img src="/images/news_school.png" class="img-fluid" alt="Next News">
                            </div></a>
                        <a class="title-news" href="#" title="Go to this news">
                            <h5>#ЕслиБыНеМама: Елена Захарова с мамой - о самом сокровенном </h5></a>
                        <div class="info-time"><i class="far fa-clock"></i><span>18.35, 26 марта 2020</span></div>
                    </div>
                    <div class="next-news">
                        <a href="#" title="Go to Next News">
                            <div class="with-overlay">
                                <img src="/images/news_break.png" class="img-fluid" alt="Next News">
                            </div>
                        </a>
                        <a class="title-news" href="#" title="Go to this news">
                            <h5>#ЕслиБыНеМама: Елена Захарова с мамой - о самом сокровенном</h5>
                        </a>
                        <div class="info-time">
                            <i class="far fa-clock"></i><span>18.35, 26 марта 2020</span>
                        </div>
                    </div>
                    <div class="next-news">
                        <a href="#" title="Go to Next News">
                            <div class="with-overlay">
                                <img src="/images/news_office.png" class="img-fluid" alt="Next News">
                            </div>
                        </a>
                        <a class="title-news" href="#" title="Go to this news">
                            <h5>#ЕслиБыНеМама: Елена Захарова с мамой - о самом сокровенном</h5>
                        </a>
                        <div class="info-time">
                            <i class="far fa-clock"></i><span>18.35, 26 марта 2020</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
