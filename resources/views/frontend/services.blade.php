@extends('frontend.layouts.master')


@section('title')
    A7 Consult - Бухгалтерские и юридические услуги | Наши услуги

@endsection

@section('content')

<h1 class="site-heading text-center text-white d-none d-lg-block">
    <span class="site-heading-upper text-primary mb-3">мы помогаем нашим клиентам</span>
    <span class="site-heading-lower">A7 CONSULT</span>
</h1>

@include('frontend.partials._topnavigation')

<section class="page-section">
    <div class="container">
        <div class="product-item">
            <div class="product-item-title d-flex">
                <div class="bg-faded p-5 d-flex ml-auto rounded">
                    <h2 class="section-heading mb-0">
                        <span class="section-heading-upper">закон и порядок</span>
                        <span class="section-heading-lower">Юридические услуги</span>
                    </h2>
                </div>
            </div>
            <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="/img/services_law.jpg" alt="">
            <div class="product-item-description d-flex mr-auto">
                <div class="bg-faded p-5 rounded">
                    <p class="mb-0">Составление договоров на казахском и русском языках &middot; Составление досудебных претензий &middot; Составление исковых заявлений &middot; Регистрации/перерегистрация ТОО и других юридических лиц &middot; Регистрация ИП &middot; Разработка учредительных документов.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="page-section">
    <div class="container">
        <div class="product-item">
            <div class="product-item-title d-flex">
                <div class="bg-faded p-5 d-flex mr-auto rounded">
                    <h2 class="section-heading mb-0">
                        <span class="section-heading-upper">сверка, сводка, баланс</span>
                        <span class="section-heading-lower">Бухгалтерские услуги</span>
                    </h2>
                </div>
            </div>
            <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="/img/services_accounting.jpg" alt="">
            <div class="product-item-description d-flex ml-auto">
                <div class="bg-faded p-5 rounded">
                    <p class="mb-0">Ведение бухгалтерского учета &middot; Восстановление бухгалтерского учета предприятия &middot; Подготовка и сдача налоговой отчетности &middot; Консультации в сфере бухгалтерского учета и налогооблажения</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="page-section">
    <div class="container">
        <div class="product-item">
            <div class="product-item-title d-flex">
                <div class="bg-faded p-5 d-flex ml-auto rounded">
                    <h2 class="section-heading mb-0">
                        <span class="section-heading-upper">сотрудник, работодатель</span>
                        <span class="section-heading-lower">Трудовые отношения</span>
                    </h2>
                </div>
            </div>
            <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="/img/services_labor.jpg" alt="">
            <div class="product-item-description d-flex mr-auto">
                <div class="bg-faded p-5 rounded">
                    <p class="mb-0">Ведение кадрового делопроизводства &middot; Разработка нормативной документации предприятия (индивидуальные трудовые договора, договора о материальной ответственности, соглашения о неразглашении тайны, правила, решения, приказы и т.д.)</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="page-section">
    <div class="container">
        <div class="product-item">
            <div class="product-item-title d-flex">
                <div class="bg-faded p-5 d-flex ml-auto rounded">
                    <h2 class="section-heading mb-0">
                        <span class="section-heading-upper">тендеры, аукционы, конкурсы</span>
                        <span class="section-heading-lower">Государственные закупки</span>
                    </h2>
                </div>
            </div>
            <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="/img/services_tender.jpg" alt="">
            <div class="product-item-description d-flex mr-auto">
                <div class="bg-faded p-5 rounded">
                    <p class="mb-0">Консультации по процедурам проведения и участия в государственных закупках и закупках национальных компаний.</p>
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