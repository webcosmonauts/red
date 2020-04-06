<header>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="index.html"><img src="img/logo-final.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item ">
                        <a class="nav-link header-nav-hover {{ request()->routeIs('homepage') }}"
                           title="Go to Main" href="{{ route('homepage') }}">Главная</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link header-nav-hover {{ request()->routeIs('news') }}" href="{{ route('news') }}" title="Go to News">Новости</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link header-nav-hover {{ request()->routeIs('projects') }}" href="{{ route('projects') }}" title="Go to Our Projects">Проекты</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link header-nav-hover {{ request()->routeIs('jobs') }}" href="{{ route('jobs') }}" title="Go to Vacancies">Вакансии</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link header-nav-hover {{ request()->routeIs('partners') }}" href="{{ route('partners') }}" title="Go to Partners">Партнёры</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link header-nav-hover {{ request()->routeIs('about') }}" href="{{ route('about') }}" title="Go to About Us">О нас</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link header-nav-hover {{ request()->routeIs('contact') }}" href="{{ route('contact') }}" title="Go to Contact">Контакты</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link header-nav-hover {{ request()->routeIs('homepage') }}" href="#">рус</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="btn btn-danger button-all btn__header" title="Go to Help">Помочь</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>
