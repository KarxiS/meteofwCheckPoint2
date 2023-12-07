@extends('layouts.app')
@section('content')

<head>
    <title>Meteo HlavnaStranka</title>
    <link rel="stylesheet" href="{{ asset('css/carousel.css') }}">
</head>




<main>

    <div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class=""
                aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"
                class=""></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3" class="active"
                aria-current="true"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item  grey-overlay ">
                <img src="/images/measure.jpg" class="d-block w-100 img-carousel" alt="teplomer">
                <div class="container">
                    <div class="carousel-caption text-start">
                        <h1>Presné merania</h1>
                        <p class="opacity-90">Vďaka nášmu hardware a software riešeniu budú vaše priestory merané
                            24/7</p>
                        <p><a class="btn btn-lg btn-primary" href="/zariadenia.html">Zariadenia</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item grey-overlay">
                <img src="/images/slider1.jpg" class="d-block w-100 img-carousel" alt="zariadenia">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>Výhodné v pomere cena/výkon</h1>
                        <p>Naše zariadenia sú nastavené presne na mieru vašim požiadavkám. Tým sa stávajú stabilné a
                            účinné.</p>
                        <p><a class="btn btn-lg btn-primary" href="/cenník.html">Cenník</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item active grey-overlay">
                <img src="/images/demo.png" class="d-block w-100 img-carousel" alt="demoApp">
                <div class="container">
                    <div class="carousel-caption text-end">
                        <h1>Demo ukážka</h1>
                        <p>Pripravili sme si pre vás rôzne reprezentácie údajov naších termometrov</p>
                        <p><a class="btn btn-lg btn-primary" href="/grafPred.html">Grafické demo</a>
                            <a class="btn btn-lg btn-primary" href="/txtPred.html">Textové Demo</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Predošlé</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Ďalšie</span>
        </button>
    </div>


    <!-- Marketing messaging and featurettes
        ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

        <!-- Three columns of text below the carousel -->
        <div class="row">
            <div class="col-lg-4 img-columns ">
                <img src="/images/tablet.jpg" class="d-block w-100 rounded-circle img-columns" alt="Tablet">
                <h2 class="fw-normal">Riešenie na mieru</h2>
                <p>Len naša firma sa dokáže prispôsobiť vaším požiadavkám a zachovať kvalitu naších produktov</p>
                <p><a class="btn btn-secondary rounded-pill" href="#contact">Kontaktujte nás »</a></p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <img src="/images/miniDisplej.jpg" class="d-block w-100 rounded-circle img-columns" alt="displej">
                <h2 class="fw-normal">Bezkonkurenčný výkon</h2>
                <p>Vďaka dlhému vývoju a praxi sú naše zariadenia optimalizované na dlhú prevádzku</p>
                <p><a class="btn btn-secondary rounded-pill" href="/zariadenia.html">Zariadenia »</a></p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">

                <img src="/images/experience.jpg" class="d-block w-100 rounded-circle img-columns" alt="ludia">
                <h2 class="fw-normal">Dlhé skúsenosti</h2>
                <p>Na trhu už figurujeme 20rokov. V prípade neistoty vám dokážeme navrhnúť riešenie cez naše
                    skúsenosti.</p>
                <p><a class="btn btn-secondary rounded-pill" href="#contact">Kontaktujte nás »</a></p>
            </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
        <!-- progress of product -->
        <h1> Stav ďalšej aktualizácie softvéru</h1>
        <div class="progress">
            <div class="progress-bar bg-primary-progress progress-bar-striped progress-bar-animated" role="progressbar"
                aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%">
            </div>
        </div>
        <h6>Dokončené na: <span class="bg-primary-progress-number">76%</span></h6>

        <!-- START THE FEATURETTES -->

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading fw-normal lh-1">Pridaná funkcia <span
                        class="text-body-secondary">máp.</span></h2>
                <p class="lead">V našej aplikáciii sme spustili novú službu, ktorá využíva GPS súradnice vaších
                    zariadení</p>
            </div>
            <div class="col-md-5">
                <img src="/images/maps.png" alt="maps"
                    class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
                    height="500">

            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7 order-md-2">
                <h2 class="featurette-heading fw-normal lh-1">Sledovanie údajov cez internet. <span
                        class="text-body-secondary">Odkiaľkoľvek.</span></h2>
                <p class="lead">Vďaka našej multiplatformovej aplikácii dokážete si pozerať informácie zariadení
                    odkiaľkoľvek a kedykoľvek</p>
            </div>
            <div class="col-md-5 order-md-1">
                <img src="/images/anywhere.jpg" alt="anywhere"
                    class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
                    height="500">

            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading fw-normal lh-1">Bezpečnosť na úrovni <span
                        class="text-body-secondary">armádneho šifrovania.</span></h2>
                <p class="lead">Používame šifrovanie na armádnej úrovni, vďaka certifikácii ISO654651</p>
            </div>
            <div class="col-md-5">
                <img src="images/security.jpg" alt="security"
                    class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
                    height="500">

            </div>
        </div>

        <hr class="featurette-divider">

        <!-- /END THE FEATURETTES -->

    </div><!-- /.container -->


    <!-- FOOTER -->
    <footer class="container">
        <p class="float-end"><a href="#">Ísť na začiatok</a></p>
        <p>© 2017–2023 Meteo Centrala s.r.o., Všetky práva vyhradené.</p>
    </footer>
</main>



@endsection