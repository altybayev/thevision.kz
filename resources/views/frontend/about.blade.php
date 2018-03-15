@extends('frontend.layouts.master')


@section('title')
    A7 Consult - Бухгалтерские и юридические услуги | О нас

@endsection

@section('content')

<h1 class="site-heading text-center text-white d-none d-lg-block">
    <span class="site-heading-upper text-primary mb-3">мы помогаем нашим клиентам</span>
    <span class="site-heading-lower">A7 CONSULT</span>
</h1>

@include('frontend.partials._topnavigation')

<section class="page-section about-heading">
    <div class="container">
        <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="/img/aboutnew.jpg" alt="">
        <div class="about-heading-content">
            <div class="row">
                <div class="col-xl-9 col-lg-10 mx-auto">
                    <div class="bg-faded rounded p-5">
                        <h2 class="section-heading mb-4">
                            <span class="section-heading-upper">Опыт, Практика, Инновации</span>
                            <span class="section-heading-lower">A7 Consult</span>
                        </h2>
                        <p>Консалтинговое агентство, ориентированное на помощь клиентам в решении бизнес-проблем.</p>
                        <p class="mb-0">Мы занимаемся <em>консультированием</em> и сопровождением клиентов в сфере бухгалтерского учета, юриспруденции, трудовых отношений и государтсвенных закупок.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection