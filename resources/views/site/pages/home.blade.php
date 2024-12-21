@extends('site.layout.template', ['titre' => 'Accueil'])

@section('content')
<div class="banner" id="home">
    <div id="carouselExampleSlidesOnly" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-indicators d-lg-none">
            <button type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>

        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="content-banner">
                    <div class="bg-banner">
                        <img src="{{ asset('assets/site/revolution/assets/slider-01/B21-2024-tw.jpg') }}"
                            alt="image de banière">
                    </div>
                    <div class="container">
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="content-banner">
                    <div class="bg-banner">
                        <img src="{{ asset('assets/site/revolution/assets/slider-01/SLIDE1.jpg') }}"
                            alt="image de banière">
                    </div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8 mx-auto">
                                <div class="block text-center">
                                    <h2 class="mb-lg-3" style="color: #650F1C">Bienvenue à Philadelphie</h2>
                                    <p class="mb-lg-4 mx-auto" style="color: #650F1C">
                                        Le Centre Missionnaire Philadelphie est une église locale de la 37ème Communauté
                                        des
                                        Assemblées...
                                    </p>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <a href="{{ route('about') }}" class="btn btn-primary">Savoir plus</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="content-banner">
                    <div class="bg-banner">
                        <img src="{{ asset('assets/site/revolution/assets/slider-01/SLIDE2.jpg') }}"
                            alt="image de banière">
                    </div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="block">
                                    <h2 class="mb-lg-3" style="color: #650F1C"> Bienvenue à Philadelphie</h2>
                                    <p class="mb-lg-4 ">
                                        Le Centre Missionnaire Philadelphie est une église locale de la 37ème Communauté
                                        des
                                        Assemblées...
                                    </p>
                                    <div class="d-flex align-items-right">
                                        {{-- <a href="#" class="btn btn-primary">Savoir plus</a> --}}
                                        <a href="#" class="btn btn-white">Contactez-nous</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="content-banner">
                    <div class="bg-banner">
                        <img src="{{ asset('assets/site/revolution/assets/slider-01/SLIDE3.jpg') }}"
                            alt="image de banière">
                    </div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="block">
                                    <h2 class="mb-lg-3" style="color: #650F1C"> Bienvenue à Philadelphie</h2>
                                    <p class="mb-lg-4 ">
                                        Le Centre Missionnaire Philadelphie est une église locale de la 37ème Communauté
                                        des
                                        Assemblées...
                                    </p>
                                    <div class="d-flex align-items-right">
                                        {{-- <a href="#" class="btn btn-primary">Savoir plus</a> --}}
                                        <a href="#" class="btn btn-white">Contactez-nous</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="content-banner">
                    <div class="bg-banner">
                        <img src="{{ asset('assets/site/revolution/assets/slider-01/SLIDE4.jpg') }}"
                            alt="image de banière">
                    </div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="block">
                                    <h2 class="mb-lg-3" style="color: #650F1C"> Bienvenue à Philadelphie</h2>
                                    <p class="mb-lg-4 ">
                                        Le Centre Missionnaire Philadelphie est une église locale de la 37ème Communauté
                                        des
                                        Assemblées...
                                    </p>
                                    <div class="d-flex align-items-right">
                                        {{-- <a href="#" class="btn btn-primary">Savoir plus</a> --}}
                                        <a href="#" class="btn btn-white">Contactez-nous</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev btn-carousel d-none d-lg-flex" type="button"
            data-bs-target="#carouselExampleSlidesOnly" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next btn-carousel d-none d-lg-flex" type="button"
            data-bs-target="#carouselExampleSlidesOnly" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>

    </div>
</div>
@include("site.parties.info")
<section class="page-section-ptb position-relative">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="section-title text-center">
                    <h6 class="text-intro">Suivez-nous</h6>
                    <h2 class="title-effect">Contenu à la une</h2>
                    <p>Raccourci vers les prédications, vidéos, audios, articles d'enseignement à la une </p>
                </div>
            </div>
        </div>
        <div class="row">
            @forelse ($posts->take(6) as $p)
            <div class="col-md-4 xs-mb-40 mb-5">
                <div class="feature-box h-100 active">
                    <div class="feature-box-content">
                        <i class="fa fa-arrows"></i>
                        <h4>{{ $p->title }}</h4>
                        <p>{{ $p->minister->fullname??$p->author}} {{ $p->author?"":"(Pasteur)"}} </p>
                    </div>
                    <div class="content-link">
                        <a href="{{ route('show_article',['slug'=>creatSlug($p->id)]) }}">Lire la suite</a>
                    </div>
                    <div class="feature-box-img" style="background-image: url('storage/{{ $p->image_url }}');">
                    </div>
                    {{-- <span class="feature-border"></span> --}}
                </div>
            </div>
            @empty

            @endforelse


            <div class="col-12">
                <div class="text-center">
                    <a type="button" class="button icon mb-10 mr-10 mt-lg-5 mt-3" href="{{ route('articles') }}">
                        @lang('miscellaneous.see_more')
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="page-section-ptb">
    <div class="container">
        <div class="row g-lg-5">
            <div class="col-lg-6 sm-mb-30 col-md-6">
                <div class="owl-carousel bottom-center-dots" data-nav-dots="ture" data-smartspeed="1200" data-items="1"
                    data-md-items="1" data-sm-items="1" data-xs-items="1" data-xx-items="1">
                    <div class="item">
                        <img class="img-fluid" src="{{ asset('assets/site/images/about/c1.jpg') }}" alt="">
                    </div>
                    <div class="item">
                        <img class="img-fluid" src="{{ asset('assets/site/images/about/c2.jpg') }}" alt="">
                    </div>
                    <div class="item">
                        <img class="img-fluid" src="{{ asset('assets/site/images/about/c3.jpg') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="section-title">
                    <h6 class="text-intro mb-lg-3">Le couple</h6>
                    <h2 class="title-effect mb-lg-3">NATHALIE & KEN LUAMBA</h2>
                    <p style="font-size: 14px">À la porte de 2024, toute notre gratitude à Dieu pour son soutien durant
                        l'année 2023 qui
                        s’est clôturée.</p>
                </div>
                <p> <span class="dropcap gray square">E</span> n cette année nouvelle, puissent les portes
                    placées devant vous, par le Seigneur, s'ouvrir afin que vous accédiez à tout ce qu'Il a en
                    réserve pour vous.
                    Mais notre souhait le plus grand est de vous voir marcher dans la conscience que notre
                    Seigneur et Maître est à la porte. Puissiez-vous donc vous accrocher à Lui, l'auteur et le
                    consommateur de votre foi.</p>
                <div class="mt-30">
                    <p>Bonne et Heureuse année 2024 à tous, en Jésus-Christ !</p>
                    {{-- <button type="button" class="button icon mb-10 mr-10"
                    data-bs-toggle="modal" data-bs-target="#exampleModalLong" >
                        Message de bienvenu
                    </button> --}}
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true" data-bs-toggle="modal"
                        data-bs-target=".bd-example-modal-lg">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header align-items-start">
                                    <div class="modal-title" id="exampleModalLabel">
                                        <div class="section-title mb-10">
                                            <h6>EXPERTISE</h6>
                                            <h2>Modal title</h2>
                                            <p>We are an innovative agency. We develop and design customers
                                                around the world. Our clients are some.</p>
                                        </div>
                                    </div>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <span class="dropcap square">Y</span>ou can use model anywhere in your
                                    website consectetur adipisicing elit. At vel sed corporis delectus quo ea
                                    molestias a ab ad officiis eaque natus animi reiciendis sint beatae, dolor
                                    inventore praesentium lorem qui.
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
</section>

<section class="awesome-features gray-bg page-section-ptb pos-r">
    <div class="side-background">
        <div class="col-lg-5 img-side img-left d-xs-block d-lg-block d-none">
            <div class="row page-section-pt mt-30">
                <img src="{{ asset('assets/site/images/objects/07b.png') }}" alt="">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-end">
            <div class="col-lg-7">
                <div class="section-title">
                    <h6 class="text-intro mb-lg-3">A Propos</h6>
                    <h2 class="title-effect mb-lg-3"> Ce que nous sommes</h2>
                    <p>Présentation globale de la mission et de la vision de l'église </p>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="feature-text text-start mb-30">
                            <div class="feature-icon">
                                <span class="ti-desktop theme-color"></span>
                            </div>
                            <div class="feature-info">
                                <h5>Notre histoire</h5>
                                <p>Le Centre Missionnaire Philadelphie est une église locale de la Communauté
                                    des Assemblées de Dieu au Congo. </p>
                                <p>Sous une tente, cadre inhabituel pour une église à Kinshasa, Il a vu le jour
                                    le dimanche 24 février 2008 par un culte auquel plus d’un millier de
                                    personnes ont pris part...</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="feature-text text-start mb-30">
                            <div class="feature-icon">
                                <span class="ti-headphone theme-color"></span>
                            </div>
                            <div class="feature-info">
                                <h5>Notre mission</h5>
                                <p>Notre mission s'articule autour quatre axes:
                                    Préparer l’épouse à la rencontre de l’Epoux;
                                    Ramener les cœurs des fils à leur Père;
                                    Prêcher et apporter au peuple la délivrance des jougs et oppressions
                                    démoniaques;
                                    La stabilité des foyers par une vie de couple stable et harmonieuse.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="feature-text text-start mt-30">
                            <div class="feature-icon">
                                <span class="ti-panel theme-color"></span>
                            </div>
                            <div class="feature-info">
                                <h5>La vision</h5>
                                <p>Nous sommes un carrefour, un endroit où des personnes d'arrière plans
                                    différents (races, tribus, cultures, niveaux sociaux et intellectuels) se
                                    mélangent, sans aucune barrière, à cause de l’expérience profonde de la
                                    nouvelle naissance et de la transformation de vie en Jésus Christ.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<section class="our-service-home page-section-ptb bg-overlay-black-80 jarallax" data-speed="0.6"
    data-img-src="{{ asset('assets/site/images/bg/06.jpg') }}">
    <div class="container">
        <div class="row mb-60 justify-content-center">
            <div class="col-md-8">
                <div class="section-title text-center">
                    <h6 class="text-white">En général</h6>
                    <h2 class="text-white title-effect">Nos statistiques</h2>
                    <p class="text-white">Rejoindre le Centre Missionnaire Philadelphie</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 sm-mb-30">
                <div class="counter text-white text-center">
                    <span class="icon ti-user theme-color"></span>
                    <span class="timer" data-to="8000" data-speed="5000">8000+</span>
                    <label>FIDELES</label>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 sm-mb-30">
                <div class="counter text-white text-center">
                    <span class="icon ti-help-alt theme-color"></span>
                    <span class="timer" data-to="23" data-speed="5000">23+</span>
                    <label>EXTENSIONS</label>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 xs-mb-30">
                <div class="counter text-white text-center">
                    <span class="icon ti-check-box theme-color"></span>
                    <span class="timer" data-to="17" data-speed="5000">17+</span>
                    <label>CELLULES</label>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="counter text-white text-center">
                    <span class="icon ti-face-smile theme-color"></span>
                    <span class="timer" data-to="10" data-speed="5000">10+</span>
                    <label>PASTORAL</label>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="white-bg page-section-ptb">
    <div class="container">
        <div class="custom-content">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center">
                        <h2 class="text-white title-effect dark">Rejoindre le Centre Missionnaire Philadelphie
                        </h2>
                        <p class="text-white"></p>
                    </div>
                </div>
            </div>

        </div>
</section>

<section class="portfolio-home gray-bg o-hidden">
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-lg-4">
                <div class="portfolio-title section-title mt-md-5">
                    <h6>Média</h6>
                    <h2 class="title-effect">Notre Galerie</h2>
                    <a class="button mt-30" href="galerie.html">@lang('miscellaneous.inner_page.news.see_more')</a>
                </div>
                <div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="isotope popup-gallery columns-3 no-padding">
                    <div class="grid-item">
                        <div class="portfolio-item">
                            <img src="{{ asset('assets/site/images/portfolio/small/01.jpg') }}" alt="">
                            <div class="portfolio-overlay">
                                <h4 class="text-white"> <a href="{{ route('media') }}">Culte dominicale</a>
                                </h4>
                                <span class="text-white"> <a href="#"> CMP </a>| Dimanche <a href="#">
                                    </a> </span>
                            </div>
                            <a class="popup portfolio-img"
                                href="{{ asset('assets/site/images/portfolio/small/01.jpg') }}"><i
                                    class="fa fa-arrows-alt"></i></a>
                        </div>
                    </div>
                    <div class="grid-item">
                        <div class="portfolio-item">
                            <img src="{{ asset('assets/site/images/portfolio/small/02.jpg') }}" alt="">
                            <div class="portfolio-overlay">
                                <h4 class="text-white"> <a href="{{ route('media') }}"> Prière pour la nation</a>
                                </h4>
                                <span class="text-white"> <a href="#">CMP</a>| Jeune et prière<a href="#"></a>
                                </span>
                            </div>
                            <a class="popup portfolio-img"
                                href="{{ asset('assets/site/images/portfolio/small/02.jpg') }}"><i
                                    class="fa fa-arrows-alt"></i></a>
                        </div>
                    </div>
                    <div class="grid-item">
                        <div class="portfolio-item">
                            <img src="{{ asset('assets/site/images/portfolio/small/03.jpg') }}" alt="">
                            <div class="portfolio-overlay">
                                <h4 class="text-white"> <a href="{{ route('media') }}"> Jeudi étoko</a>
                                </h4>
                                <span class="text-white"> <a href="#">CMP</a>| Jeudi<a href="#">
                                    </a> </span>
                            </div>
                            <a class="popup portfolio-img"
                                href="{{ asset('assets/site/images/portfolio/small/03.jpg') }}"><i
                                    class="fa fa-arrows-alt"></i></a>
                        </div>
                    </div>
                    <div class="grid-item">
                        <div class="portfolio-item">
                            <img src="{{ asset('assets/site/images/portfolio/small/4.jpg') }}" alt="">
                            <div class="portfolio-overlay">
                                <h4 class="text-white"> <a href="{{ route('media') }}">Culte d'enseignement</a>
                                </h4>
                                <span class="text-white"> <a href="#"> CMP </a>| Mercredi<a href="#">
                                    </a>
                                </span>
                            </div>
                            <a class="popup portfolio-img"
                                href="{{ asset('assets/site/images/portfolio/small/04.jpg') }}"><i
                                    class="fa fa-arrows-alt"></i></a>
                        </div>
                    </div>
                    <div class="grid-item">
                        <div class="portfolio-item">
                            <img src="{{ asset('assets/site/images/portfolio/small/05.jpg') }}" alt="">
                            <div class="portfolio-overlay">
                                <h4 class="text-white"> <a href="{{ route('media') }}"> Pour notre nation
                                    </a> </h4>
                                <span class="text-white"> <a href="#"> Pourquoi </a>| <a href="#">Prier pour la nation
                                    </a>
                                </span>
                            </div>
                            <a class="popup popup-youtube" href="https://www.youtube.com/watch?v=HxeTFrq_14Q"><i
                                    class="fa fa-play"></i></a>
                        </div>
                    </div>
                    <div class="grid-item">
                        <div class="portfolio-item">
                            <img src="{{ asset('assets/site/images/portfolio/small/06.jpg') }}" alt="">
                            <div class="portfolio-overlay">
                                <h4 class="text-white"> <a href="{{ route('media') }}"> La prière pour la nation </a>
                                </h4>
                                <span class="text-white"> <a href="#"> CMP </a>| Séminaire<a href="#"></a> </span>
                            </div>
                            <a class="popup portfolio-img"
                                href="{{ asset('assets/site/images/portfolio/small/06.jpg') }}"><i
                                    class="fa fa-arrows-alt"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

