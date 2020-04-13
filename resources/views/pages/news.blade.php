@extends('layouts.page')

@section('content')
    <!-- Новости -->
    <section class="news">
        <div class="container">
            <h1 class="text-center">Новости</h1>
            <div class="row">
                <!-- 1-статья -->
                <div class="col-12 col-lg-6">
                    <div class="row single-article">
                        <div class="col-12 col-lg-6 title-arch">
                            <a class="category" href="#" title="Go to Category">Юмор</a>
                            <div class="info-time"><i class="far fa-clock"></i><span>26 марта 2020</span></div>
                            <p>Приют для животных рисует питомцев тех, кто пожертвовал им деньги. Чем хуже рисунки, тем больше им платят — фото Приют для животных рисует питомцев тех, кто пожертвовал им деньги. Чем хуже рисунки, тем больше им платят — фото Приют для животных рисует питомцев тех, кто пожертвовал им деньги. Чем хуже рисунки, тем больше им платят — фото</p>
                            <a href="{{ route('news.single') }}" class="btn" title="Go ti this news">
                                <span>Подробнее</span><img src="/images/arrow_right.svg" alt="arrow">
                            </a>
                        </div>
                        <ul class="soc-1">
                            <li><a href="#" title="Go to facebook page"><em class="fab fa-facebook-f"></em></a></li>
                            <li><a href="#" title="Go to telegram page"><em class="fab fa-telegram-plane"></em></a></li>
                            <li><a href="#" title="Go to twitter page"><em class="fab fa-twitter"></em></a></li>
                        </ul>
                        <div class="img-news col-12 col-lg-6">
                            <a href="#" title="Go to News">
                                <img src="https://i.pinimg.com/originals/ba/54/2a/ba542a4b0d7d56c208b02ea0a09e0a83.jpg"
                                     class="img-fluid" alt="News">
                            </a>
                        </div>
                    </div>
                </div>
                <!-- 2-статья -->
                <div class="col-12 col-lg-6">
                    <div class="row single-article">
                        <div class="col-12 col-lg-6 title-arch">
                            <a class="category" href="#" title="Go to Category">Юмор</a>
                            <div class="info-time"><i class="far fa-clock"></i><span>26 марта 2020</span></div>
                            <p>Приют для животных рисует питомцев тех, кто пожертвовал им деньги. Чем хуже рисунки, тем больше им платят — фото</p>
                            <a href="{{ route('news.single') }}" class="btn" title="Go ti this news">
                                <span>Подробнее</span><img src="/images/arrow_right.svg" alt="arrow">
                            </a>
                        </div>
                        <ul class="soc-1">
                            <li><a href="#" title="Go to facebook page"><em class="fab fa-facebook-f"></em></a></li>
                            <li><a href="#" title="Go to telegram page"><em class="fab fa-telegram-plane"></em></a></li>
                            <li><a href="#" title="Go to twitter page"><em class="fab fa-twitter"></em></a></li>
                        </ul>
                        <div class="img-news col-12 col-lg-6">
                            <a href="#" title="Go to News">
                                <img src="https://i.pinimg.com/originals/ab/db/25/abdb2597570b49f7c5ec0ae4908ded43.png"
                                     class="img-fluid" alt="News">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!--3-статья -->
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="row single-article">
                        <div class="col-12 col-lg-6 title-arch">
                            <a class="category" href="#" title="Go to Category">Юмор</a>
                            <div class="info-time"><i class="far fa-clock"></i><span>26 марта 2020</span></div>
                            <p>Приют для животных рисует питомцев тех, кто пожертвовал им деньги. Чем хуже рисунки, тем больше им платят — фото</p>
                            <a href="{{ route('news.single') }}" class="btn" title="Go ti this news">
                                <span>Подробнее</span><img src="/images/arrow_right.svg" alt="arrow">
                            </a>
                        </div>
                        <ul class="soc-1">
                            <li><a href="#" title="Go to facebook page"><em class="fab fa-facebook-f"></em></a></li>
                            <li><a href="#" title="Go to telegram page"><em class="fab fa-telegram-plane"></em></a></li>
                            <li><a href="#" title="Go to twitter page"><em class="fab fa-twitter"></em></a></li>
                        </ul>
                        <div class="img-news col-12 col-lg-6">
                            <a href="#" title="Go to News">
                                <img src="/images/news-2.png" class="img-fluid" alt="News">
                            </a>
                        </div>
                    </div>
                </div>
                <!-- 4-статья -->
                <div class="col-12 col-lg-6">
                    <div class="row single-article">
                        <div class="col-12 col-lg-6 title-arch">
                            <a class="category" href="#" title="Go to Category">Юмор</a>
                            <div class="info-time"><i class="far fa-clock"></i><span>26 марта 2020</span></div>
                            <p>Приют для животных рисует питомцев тех, кто пожертвовал им деньги. Чем хуже рисунки, тем больше им платят — фото</p>
                            <a href="{{ route('news.single') }}" class="btn" title="Go ti this news">
                                <span>Подробнее</span><img src="/images/arrow_right.svg" alt="arrow">
                            </a>
                        </div>
                        <ul class="soc-1">
                            <li><a href="#" title="Go to facebook page"><em class="fab fa-facebook-f"></em></a></li>
                            <li><a href="#" title="Go to telegram page"><em class="fab fa-telegram-plane"></em></a></li>
                            <li><a href="#" title="Go to twitter page"><em class="fab fa-twitter"></em></a></li>
                        </ul>
                        <div class="img-news col-12 col-lg-6">
                            <a href="#" title="Go to News">
                                <img src="https://i.pinimg.com/originals/ab/db/25/abdb2597570b49f7c5ec0ae4908ded43.png"
                                     class="img-fluid" alt="News">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- 5-статья -->
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="row single-article">
                        <div class="col-12 col-lg-6 title-arch">
                            <a class="category" href="#" title="Go to Category">Юмор</a>
                            <div class="info-time"><i class="far fa-clock"></i><span>26 марта 2020</span></div>
                            <p>Приют для животных рисует питомцев тех, кто пожертвовал им деньги. Чем хуже рисунки, тем больше им платят — фото</p>
                            <a href="{{ route('news.single') }}" class="btn" title="Go ti this news">
                                <span>Подробнее</span><img src="/images/arrow_right.svg" alt="arrow">
                            </a>
                        </div>
                        <ul class="soc-1">
                            <li><a href="#" title="Go to facebook page"><em class="fab fa-facebook-f"></em></a></li>
                            <li><a href="#" title="Go to telegram page"><em class="fab fa-telegram-plane"></em></a></li>
                            <li><a href="#" title="Go to twitter page"><em class="fab fa-twitter"></em></a></li>
                        </ul>
                        <div class="img-news col-12 col-lg-6">
                            <a href="#" title="Go to News">
                                <img src="https://i.pinimg.com/originals/2b/27/45/2b27459c4add357cb0215dd2f734d1e2.jpg"
                                     class="img-fluid" alt="News">
                            </a>
                        </div>
                    </div>
                </div>
                <!-- 6-статья -->
                <div class="col-12 col-lg-6">
                    <div class="row single-article">
                        <div class="col-12 col-lg-6 title-arch">
                            <a class="category" href="#" title="Go to Category">Юмор</a>
                            <div class="info-time"><i class="far fa-clock"></i><span>26 марта 2020</span></div>
                            <p>Приют для животных рисует питомцев тех, кто пожертвовал им деньги. Чем хуже рисунки, тем больше им платят — фото</p>
                            <a href="{{ route('news.single') }}" class="btn" title="Go ti this news">
                                <span>Подробнее</span><img src="/images/arrow_right.svg" alt="arrow">
                            </a>
                        </div>
                        <ul class="soc-1">
                            <li><a href="#" title="Go to facebook page"><em class="fab fa-facebook-f"></em></a></li>
                            <li><a href="#" title="Go to telegram page"><em class="fab fa-telegram-plane"></em></a></li>
                            <li><a href="#" title="Go to twitter page"><em class="fab fa-twitter"></em></a></li>
                        </ul>
                        <div class="img-news col-12 col-lg-6">
                            <a href="#" title="Go to News">
                                <img src="https://i.pinimg.com/originals/0c/fc/06/0cfc069edef8ed4ab58c19d362802971.jpg"
                                     class="img-fluid" alt="News">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- 7-статья -->
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="row single-article">
                        <div class="col-12 col-lg-6 title-arch">
                            <a class="category" href="#" title="Go to Category">Юмор</a>
                            <div class="info-time"><i class="far fa-clock"></i><span>26 марта 2020</span></div>
                            <p>Приют для животных рисует питомцев тех, кто пожертвовал им деньги. Чем хуже рисунки, тем больше им платят — фото</p>
                            <a href="{{ route('news.single') }}" class="btn" title="Go ti this news">
                                <span>Подробнее</span><img src="/images/arrow_right.svg" alt="arrow">
                            </a>
                        </div>
                        <ul class="soc-1">
                            <li><a href="#" title="Go to facebook page"><em class="fab fa-facebook-f"></em></a></li>
                            <li><a href="#" title="Go to telegram page"><em class="fab fa-telegram-plane"></em></a></li>
                            <li><a href="#" title="Go to twitter page"><em class="fab fa-twitter"></em></a></li>
                        </ul>
                        <div class="img-news col-12 col-lg-6">
                            <a href="#" title="Go to News">
                                <img src="https://i.pinimg.com/originals/2b/27/45/2b27459c4add357cb0215dd2f734d1e2.jpg"
                                     class="img-fluid" alt="News">
                            </a>
                        </div>
                    </div>
                </div>
                <!-- 8-статья -->
                <div class="col-12 col-lg-6">
                    <div class="row single-article">
                        <div class="col-12 col-lg-6 title-arch">
                            <a class="category" href="#" title="Go to Category">Юмор</a>
                            <div class="info-time"><i class="far fa-clock"></i><span>26 марта 2020</span></div>
                            <p>Приют для животных рисует питомцев тех, кто пожертвовал им деньги. Чем хуже рисунки, тем больше им платят — фото</p>
                            <a href="{{ route('news.single') }}" class="btn" title="Go ti this news">
                                <span>Подробнее</span><img src="/images/arrow_right.svg" alt="arrow">
                            </a>
                        </div>
                        <ul class="soc-1">
                            <li><a href="#" title="Go to facebook page"><em class="fab fa-facebook-f"></em></a></li>
                            <li><a href="#" title="Go to telegram page"><em class="fab fa-telegram-plane"></em></a></li>
                            <li><a href="#" title="Go to twitter page"><em class="fab fa-twitter"></em></a></li>
                        </ul>
                        <div class="img-news col-12 col-lg-6">
                            <a href="#" title="Go to News">
                                <img src="https://i.pinimg.com/originals/0c/fc/06/0cfc069edef8ed4ab58c19d362802971.jpg"
                                     class="img-fluid" alt="News">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- навигация Pagination  -->
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <i class="fas fa-angle-left"></i>
                        </a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <i class="fas fa-angle-right"></i>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </section>
@endsection
