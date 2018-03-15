<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
    <div class="container">
        <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="/">A7 Consult</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item @if (Request::is('/')) active @endif px-lg-4">
                    <a class="nav-link text-uppercase text-expanded" href="/">Главная
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item @if (Request::is('about*')) active @endif px-lg-4">
                    <a class="nav-link text-uppercase text-expanded" href="/about">О нас</a>
                </li>
                <li class="nav-item @if (Request::is('services*')) active @endif px-lg-4">
                    <a class="nav-link text-uppercase text-expanded" href="/services">Наши услуги</a>
                </li>
                <li class="nav-item @if (Request::is('contacts*')) active @endif px-lg-4">
                    <a class="nav-link text-uppercase text-expanded" href="/contacts">Контакты</a>
                </li>
            </ul>
        </div>
    </div>
</nav>