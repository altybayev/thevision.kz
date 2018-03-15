@extends('frontend.layouts.master')


@section('title')
    A7 Consult - Бухгалтерские и юридические услуги | Главная страница
@endsection

@section('content')

<h1 class="site-heading text-center text-white d-none d-lg-block">
    <span class="site-heading-upper text-primary mb-3">мы помогаем нашим клиентам</span>
    <span class="site-heading-lower">A7 CONSULT</span>
</h1>

@include('frontend.partials._topnavigation')

<section class="page-section clearfix">
    <div class="container">
        <div class="intro">
            <img class="intro-img img-fluid mb-3 mb-lg-0 rounded" src="/img/callnow.jpg" alt="">
            <div class="intro-text left-0 text-center bg-faded p-5 rounded">
                <h2 class="section-heading mb-4">
                    <span class="section-heading-upper">Бесплатная</span>
                    <span class="section-heading-lower">Консультация</span>
                </h2>
                <p class="mb-3">Наша миссия проста. Мы работаем с нашими клиентами для создания возможностей, которые позволяют организациям добиваться устойчивого преимущества. Мы формируем будущее. Вместе.
                </p>
                <div class="intro-button mx-auto">
                    <a class="btn btn-primary btn-xl" href="/contacts">Позвоните прямо сейчас</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="page-section cta">
    <div class="container">
        <div class="row">
            <div class="col-xl-9 mx-auto">
                <div class="cta-inner text-center rounded">
                    <h2 class="section-heading mb-4">
                        <span class="section-heading-upper">Консалтинговое агентство</span>
                        <span class="section-heading-lower">A7 Consult</span>
                    </h2>
                    <p class="mb-0">Мы - компания, ориентированная на помощь клиентам в решении бизнес-проблем. Мы занимаемся консультированием и сопровождением клиентов в сфере бухгалтерского учета, юриспруденции, трудовых отношений и государственных закупок.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<footer class="footer text-faded text-center py-5">
    <div class="container">
        <p class="m-0 small">Copyright &copy; A7 Consult</p>
    </div>
</footer>

@endsection