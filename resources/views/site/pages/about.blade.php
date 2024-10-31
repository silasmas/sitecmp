@extends('site.layout.template', ['titre' => 'A propos'])

@section("content")

    <section class="page-title bg-overlay-black-60 jarallax" data-speed="0.6" data-img-src="{{ asset('assets/site/images/bg/B21-2024-fbc.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-title-name">
                        <h1> @lang("miscellaneous.main_menu.who_are_we.title")</h1>
                        <p>@lang("miscellaneous.inner_page.about.banner_title1")</p>

                    </div>
                </div>
            </div>
    </section>

    @include("site.parties.info")
    <section class="our-history white-bg page-section-ptb">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="section-title text-center">
                        <h2 class="title-effect">Pour la petite histoire</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="timeline-dots"></div>
                    <ul class="timeline">
                        <li>
                            <div class="timeline-badge"></div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h5 class="timeline-title text-muted">Centre Missionnaire Philadelphie </h5>

                                </div>
                                <div class="timeline-body">
                                    <p>Le Centre Missionnaire Philadelphie est une église locale de la 37ème Communauté
                                        des Assemblées de Dieu au Congo</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-badge"></div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h5 class="timeline-title text-muted">Depuis le 30 octobre 2016</h5>
                                </div>
                                <div class="timeline-body">
                                    <p>suivant l’orientation divine, l’apôtre Roland DALO a cédé la direction de
                                        l’église au pasteur Ken LUAMBA pour se consacrer à Daloministries, un ministère
                                        d’encadrement des serviteurs de Dieu.</p>
                                </div>
                            </div>
                        </li>

                        <li class="timeline-arrow"><i class="fa fa-chevron-down"></i></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="who-we-are-left">
                        <div class="owl-carousel" data-nav-dots="true" data-items="1" data-md-items="1"
                            data-sm-items="1" data-xs-items="1" data-xx-items="1">
                            <div class="item"><img class="img-fluid full-width" src="{{ asset('assets/site/images/about/B21-2024-hd.jpg') }}" alt="">
                            </div>
                            <div class="item"><img class="img-fluid full-width" src="{{ asset('assets/site/images/about/01.jpg') }}" alt="">
                            </div>
                            <div class="item"><img class="img-fluid full-width" src="{{ asset('assets/site/images/about/SEM-BIBL-VignYtb-J2.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 sm-mt-30">

                    <div class="accordion plus-icon shadow">
                        <div class="acd-group acd-active">
                            <a href="#" class="acd-heading acd-active">01. Histoire</a>
                            <div class="acd-des">
                                Le Centre Missionnaire Philadelphie est une église locale de la 37ème Communauté
                                            des Assemblées de Dieu au Congo. Sous une tente, cadre inhabituel pour une
                                            église à Kinshasa, le Centre Missionnaire Philadelphie a vu le jour le dimanche 24
                                            février 2008 par un culte auquel plus d’un millier de personnes ont pris part. Après
                                            plus de vingt ans passés au Centre Evangélique Francophone de la Borne, le Dieu
                                            Tout Puissant qui fait concourir toutes choses pour notre bien selon Romains 8 : 28,
                                            a permis que le pasteur Roland DALO implante cette église locale.
                                            <blockquote>
                                                <p>Le Centre Missionnaire Philadelphie est une église locale de la 37ème Communauté
                                                des Assemblées de Dieu au Congo</p>
                                            </blockquote>
                            </div>
                        </div>
                        <div class="acd-group">
                            <a href="#" class="acd-heading">02. Vision</a>
                            <div class="acd-des">
                                <p>Nous sommes au Centre Missionnaire Philadelphie.</p>
                                <h2 class="h4">Pourquoi Centre ?</h2>

                                <p>Nous sommes un carrefour, un endroit où des personnes d'arrière plans différents (races, tribus, cultures, niveaux sociaux et intellectuels) se mélangent, sans aucune barrière, à cause de l’expérience profonde de la nouvelle naissance et de la transformation de vie en Jésus Christ.
                                    La particularité avec laquelle nous allons marcher à ce niveau contient trois volets :
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalLong">
                                        Voir la suite
                                      </button>
                                </p>

                            </div>
                        </div>
                        <div class="acd-group">
                            <a href="#" class="acd-heading">03. Mission</a>
                            <div class="acd-des">
                                <ol>
                                    <li>Préparer l’épouse à la rencontre de l’Epoux</li>
                                    <p>Nous savons et nous croyons que nous sommes en train de vivre les dernières heures de la vie de l’Eglise ici bas.</p>
                                    <li>Ramener les cœurs des fils à leur Père</li>
                                    <p>Par un message profondément axé sur:
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalLong2">
                                            Voir la suite
                                          </button>
                                    </p>
                                </ol>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>

    <section class="split-section black-bg page-section-ptb" style="margin-top: 50px;">
        <div class="side-background">
            <div class="col-lg-6 img-side img-left">
                <div class="img-holder img-cover jarallax" data-speed="0.6" data-img-src="{{ asset('assets/images/about-img/pastor.jpg') }}">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-lg-5">
                    <div class="section-title">
                        <h6 class="text-white">Pasteur Titulaire</h6>
                        <h2 class="text-white title-effect">Pasteur Ken Luamba </h2>
                        <p class="text-white">Shalom bien-aimé(e) dans le Seigneur,</p>
                    </div>
                    <div class="tab">
                        <ul class="nav nav-tabs">
                            <li class="nav-item"><a class="nav-link active" href="#research-07" data-bs-toggle="tab">Nou
                                    sommes dans la joie de vous compter parmi nous en ce jour. Notre désir est que vous
                                    passiez des moments bénis dans la présence du Seigneur.

                                    <br><br>Notre prière pour vous est que le Seigneur fortifie votre foi et raffermisse
                                    vos pas afin de remporter le prix de la vocation céleste de Dieu en Jésus-Christ,
                                    notre Seigneur, qui revient très bientôt.

                                    <br><br>Ainsi, nous prions que Dieu vous accorde d'accomplir votre destinée en
                                    établissant clairement vos priorités; mais surtout en faisant de Lui la priorité des
                                    priorités.
                                    En effet, que sert-il à un homme de gagner le monde entier s'il perd son âme ?

                                    <br><br> Puissiez-vous être rassuré(e), de notre part, qu'une main de soutien vous
                                    est tenue.</a></li>

                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="research-07">
                                <p class="text-white">
                                    Votre Frère, <br>
                                    Ken Luamba <br>
                                    Pasteur
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="meet-team white-bg page-section-ptb">
        <div class="container">
            <ul class="nav  mb-5 nav-tabs nav-tab-page justify-content-center align-items-center" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                        data-bs-target="#collegePastoral" type="button" role="tab" aria-controls="pills-home"
                        aria-selected="true">Collège pastoral</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-arrivage-tab" data-bs-toggle="pill"
                        data-bs-target="#programmes" type="button" role="tab" aria-controls="pills-profile"
                        aria-selected="false">Nos programmes</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-categorie-tab" data-bs-toggle="pill"
                        data-bs-target="#extensions" type="button" role="tab"
                        aria-controls="pills-profile" aria-selected="false">Nos extensions</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-fournisseur-tab" data-bs-toggle="pill"
                        data-bs-target="#cellule" type="button" role="tab"
                        aria-controls="pills-contact" aria-selected="false">Nos cellules</button>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="collegePastoral" role="tabpanel"
                    aria-labelledby="pills-home-tab" tabindex="0">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-title text-center">
                                <h6>Collège pastoral</h6>
                                <h2 class="title-effect">Collège pastoral</h2>
                                <p>Découvrir tous les ministres de notre église</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="isotope-filters">
                                <button data-filter="" class="active">Tous</button>
                                <button data-filter=".visionnaire">Titulaire</button>
                                <button data-filter=".leadership">Associés</button>
                                <button data-filter=".development">Stagiaires</button>
                            </div>
                            <div class="isotope full-screen columns-4">
                                @forelse ($pastors as $ps)
                                <div class="row">
                                    <div class="grid-item {{ $ps->is_titular==1 && $ps->type=="Pasteur"?"visionnaire":"" }} {{ $ps->is_titular==0&&$ps->type=="Pasteur"?"leadership":"" }}{{ $ps->is_titular==0&&$ps->type=="Pasteur stagiaire"?"development":"" }}">
                                        <div class="team team-hover">
                                            <div class="team-photo">
                                                <img class="img-fluid mx-auto" src="{{ asset('storage/'.$ps->image_url) }}" alt="">
                                            </div>
                                            <div class="team-description">
                                                <div class="team-info">
                                                    <h5><a href="">{{ $ps->fullname }}</a></h5>
                                                </div>
                                                <div class="team-contact">
                                                    <span class="call"> {{ $ps->contact }}</span>
                                                    <span class="email"> <i class="fa fa-envelope-o"></i>
                                                        eglisecmp@gmail.com</span>
                                                </div>
                                                <div class="social-icons color clearfix">
                                                    <ul>
                                                        <li class="social-facebook" {{$ps->facebook_url==""?"hidden":""}}><a target="blank" href="{{ $ps->facebook_url }}"><i class="fa fa-facebook"></i></a>
                                                        </li>
                                                        <li class="social-twitter" {{$ps->twitter_url==""?"hidden":""}}><a target="blank" href="{{ $ps->twitter_url }}"><i class="fa fa-twitter"></i></a>
                                                        </li>
                                                        <li class="social-instagram" {{$ps->instagram_url==""?"hidden":""}}><a target="blank" href="{{ $ps->instagram_url }}"><i class="fa fa-instagram"></i></a>
                                                        </li>
                                                        <li class="social-youtube" {{$ps->youtube_url==""?"hidden":""}}><a target="blank" href="{{ $ps->youtube_url }}"><i class="fa fa-youtube"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @empty

                                @endforelse

                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="programmes" role="tabpanel"
                    aria-labelledby="pills-profile-tab" tabindex="0">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-title text-center mb-80">
                                <h6>Rejoignez-nous et participez à nos célébrations dont voici les horaires</h6>
                                <h2 class="title-effect">NOS PROGRAMMES</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-md-3 ">
                            <div class="pricing-table h-100">
                                <div class="pricing-top h-100">
                                    <div class="pricing-title">
                                        <div class="mb-15 badge-day">Mercredi</div>
                                        <h3 class="title-card">Culte d'enseignement biblique</h3>
                                    </div>
                                    <div class="time-line-prog d-flex flex-column">
                                        <div class="item-line">
                                            <div class="icon">
                                                <i class="fa fa-clock-o"></i>
                                            </div>
                                            17h30 - 19h30
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="col-md-3 ">
                            <div class="pricing-table h-100">
                                <div class="pricing-top h-100">
                                    <div class="pricing-title">
                                        <div class="mb-15 badge-day">Jeudi</div>
                                        <h3 class="title-card">Culte d'intercession (Jeudi Etoko)</h3>
                                    </div>
                                    <div class="time-line-prog d-flex flex-column">
                                        <div class="item-line">
                                            <div class="icon">
                                                <i class="fa fa-clock-o"></i>
                                            </div>
                                            17h30 - 19h30
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 ">
                            <div class="pricing-table h-100">
                                <div class="pricing-top h-100">
                                    <div class="pricing-title">
                                        <div class="mb-15 badge-day">Samedi</div>
                                        <h3 class="title-card">Réunion de la jeunesse</h3>
                                    </div>
                                    <div class="time-line-prog d-flex flex-column">
                                        <div class="item-line">
                                            <div class="icon">
                                                <i class="fa fa-clock-o"></i>
                                            </div>
                                            16h30 - 18h30
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="col-md-3 ">
                            <div class="pricing-table h-100">
                                <div class="pricing-top h-100">
                                    <div class="pricing-title">
                                        <div class="mb-15 badge-day">Dimanche</div>
                                        <h3 class="title-card">Culte dominical</h3>
                                    </div>

                                    <div class="time-line-prog d-flex flex-column">
                                        <div class="item-line">
                                            <div class="icon">
                                                <i class="fa fa-clock-o"></i>
                                            </div>
                                            07h00-8h30
                                        </div>
                                        <div class="item-line">
                                            <div class="icon">
                                                <i class="fa fa-clock-o"></i>
                                            </div>
                                            12h00-13h30
                                        </div>
                                        <div class="item-line">
                                            <div class="icon">
                                                <i class="fa fa-clock-o"></i>
                                            </div>
                                            09h30 -11h00
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>


                    </div>
                </div>
                <div class="tab-pane fade" id="extensions" role="tabpanel"
                    aria-labelledby="pills-profile-tab" tabindex="0">

                </div>
                <div class="tab-pane fade" id="cellules" role="tabpanel"
                    aria-labelledby="pills-profile-tab" tabindex="0">
                </div>
                <div class="tab-pane fade" id="pills-lot" role="tabpanel" aria-labelledby="pills-profile-tab"
                    tabindex="0">
                </div>

            </div>

        </div>

    </section>



{{-- <section class="gray-bg page-section-pt happy-clients">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 align-self-end">
                <img class="d-xs-block d-lg-block d-none img-fluid" src="{{ asset('assets/site/images/objects/testimonial.jpg') }}" alt="">
            </div>
            <div class="col-lg-6 mt-60">
                <div class="section-title">
                    <h6>Ce que Dieu a fait</h6>
                    <h2 class="title-effect">Nos fidèles parlent</h2>
                </div>
                <div class="tab">
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="testi-01">
                            <span class="quoter-icon">“</span>
                            <p>I had a few things I needed help with on this template... Their customer service was
                                amazing and helped me out many times. All fits and works well and good!! Top marks. One
                                of the complete template with different requirements. Thanks a lot for such great
                                features, pages, shortcodes and home variations. Incredible Job.</p>
                            <div class="testimonial-avatar">
                                <h5>Acapella </h5>
                                <span>ThemeForest user</span>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="testi-02">
                            <span class="quoter-icon">“</span>
                            <p>Really like the cleanliness of the design, the documentation and the content-blocks.
                                Obviously it is still a relatively new template (version 1.0.3), so it lacks some
                                features that you'll find in more mature templates. But their support is swift and very
                                co-operative. Kudos!</p>
                            <div class="testimonial-avatar">
                                <h5>Tenfore </h5>
                                <span>ThemeForest user</span>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="testi-03">
                            <span class="quoter-icon">“</span>
                            <p> One of the complete template with different requirements. Thanks a lot for such great
                                features, pages, shortcodes and home variations. Incredible Job. I had a few things I
                                needed help with on this template... Their customer service was amazing and helped me
                                out many times. All fits and works well and good!! Top marks.</p>
                            <div class="testimonial-avatar">
                                <h5>Acapella </h5>
                                <span>ThemeForest user</span>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="testi-04">
                            <span class="quoter-icon">“</span>
                            <p>The quality of design is very good and make sense to the real world requirement. yes its
                                multipurpose template and i found what i wanted from this theme. perfectly suitable for
                                my business and design is flexible with multiple layout provided. good work keep it up.
                            </p>
                            <div class="testimonial-avatar">
                                <h5>Shopperbox </h5>
                                <span>ThemeForest user</span>
                            </div>
                        </div>
                        <ul class="nav nav-tabs mt-60" id="myTab" role="tablist">
                            <li><a class="nav-item active" href="#testi-01" data-bs-toggle="tab"><img class="img-fluid"
                                        src="{{ asset('assets/site/images/team/01.jpg') }}" alt=""> </a></li>
                            <li><a class="nav-item" href="#testi-02" data-bs-toggle="tab"><img class="img-fluid"
                                        src="{{ asset('assets/site/images/team/02.jpg') }}" alt=""> </a></li>
                            <li><a class="nav-item" href="#testi-03" data-bs-toggle="tab"><img class="img-fluid"
                                        src="{{ asset('assets/site/images/team/03.jpg') }}" alt=""> </a></li>
                            <li><a class="nav-item" href="#testi-04" data-bs-toggle="tab"><img class="img-fluid"
                                        src="{{ asset('assets/site/images/team/04.jpg') }}" alt=""> </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}

<section class="contact-box contact-box-top theme-bg" style="margin-top: 50px;">
    <div class="container">
        <div class="row pt-20 pb-40">
            <div class="col-md-4 sm-mb-30">
                <div class="contact-box">
                    <div class="contact-icon">
                        <i class="ti-map text-white"></i>
                    </div>
                    <div class="contact-info">
                        <h5 class="text-white"> Adresse</h5>
                        <span class="text-white">Details</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4 sm-mb-30">
                <div class="contact-box">
                    <div class="contact-icon">
                        <i class="ti-headphone text-white"></i>
                    </div>
                    <div class="contact-info">
                        <h5 class="text-white">Téléphone</h5>
                        <span class="text-white">Heure de rdv</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="contact-box">
                    <div class="contact-icon">
                        <i class="ti-email text-white"></i>
                    </div>
                    <div class="contact-info">
                        <h5 class="text-white">Email</h5>
                        <span class="text-white">Fax</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@include("site.parties.modal")
@endsection




