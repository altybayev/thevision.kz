@extends('frontend.layouts.master')


@section('title')
    A7 Consult - Бухгалтерские и юридические услуги | Контакты

@endsection

@section('content')

<h1 class="site-heading text-center text-white d-none d-lg-block">
    <span class="site-heading-upper text-primary mb-3">мы помогаем нашим клиентам</span>
    <span class="site-heading-lower">A7 CONSULT</span>
</h1>

@include('frontend.partials._topnavigation')

<section class="page-section cta">
    <div class="container">
        <div class="row">
            <div class="col-xl-9 mx-auto">
                <div class="cta-inner text-center rounded">
                    <h2 class="section-heading mb-5">
                        <span class="section-heading-upper">Звоните. Пишите.</span>
                        <span class="section-heading-lower">Наши контакты</span>
                    </h2>
                    <!-- <ul class="list-unstyled list-hours mb-5 text-left mx-auto">
                        <li class="list-unstyled-item list-hours-item d-flex">
                            Sunday
                            <span class="ml-auto">Closed</span>
                        </li>
                        <li class="list-unstyled-item list-hours-item d-flex">
                            Monday
                            <span class="ml-auto">7:00 AM to 8:00 PM</span>
                        </li>
                        <li class="list-unstyled-item list-hours-item d-flex">
                            Tuesday
                            <span class="ml-auto">7:00 AM to 8:00 PM</span>
                        </li>
                        <li class="list-unstyled-item list-hours-item d-flex">
                            Wednesday
                            <span class="ml-auto">7:00 AM to 8:00 PM</span>
                        </li>
                        <li class="list-unstyled-item list-hours-item d-flex">
                            Thursday
                            <span class="ml-auto">7:00 AM to 8:00 PM</span>
                        </li>
                        <li class="list-unstyled-item list-hours-item d-flex">
                            Friday
                            <span class="ml-auto">7:00 AM to 8:00 PM</span>
                        </li>
                        <li class="list-unstyled-item list-hours-item d-flex">
                            Saturday
                            <span class="ml-auto">9:00 AM to 5:00 PM</span>
                        </li>
                    </ul> -->
                    <p class="address section-heading mb-5">
                        <small>
                            <em>Пишите нам на: </em>
                        </small>
                        <br>
                        <span class="section-heading-lower">tooa7@mail.ru</span>
                    </p>
                    <p class="mb-0 section-heading mb-5">
                        <small>
                            <em>Ждем Ваших звонков</em>
                        </small>
                        <br>
                        <span class="section-heading-lower">+7 (700) 211 1020</span>
                    </p>
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