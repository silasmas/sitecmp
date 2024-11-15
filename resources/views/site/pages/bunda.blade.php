@extends('site.layout.template',['titre' => "Bunda 21"])

@section("content")
<section class="page-title bg-overlay-black-60 jarallax" data-speed="0.6"
    data-img-src="{{ asset('assets/site/images/bg/B21-2024-fbc.jpg') }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-title-name">
                    <h1>Bunda 21</h1>
                    <p>Nous connaître</p>

                </div>
            </div>
        </div>
</section>
@include("site.parties.info")

<section class="meet-team white-bg page-section-ptb">
    <div class="container">
        <ul class="nav  mb-5 nav-tabs nav-tab-page justify-content-center align-items-center" id="pills-tab"
            role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                    data-bs-target="#collegePastoral" type="button" role="tab" aria-controls="pills-home"
                    aria-selected="true">Pour la petite histoire</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-arrivage-tab" data-bs-toggle="pill" data-bs-target="#mediaBunda"
                    type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Play liste Bunda
                    21</button>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="collegePastoral" role="tabpanel" aria-labelledby="pills-home-tab"
                tabindex="0">
                <div class="container">
                    <div class="row g-lg-5 align-items-center">
                        <div class="col-lg-6 sm-mb-30">
                            <div class="owl-carousel bottom-center-dots owl-loaded owl-drag" data-nav-dots="ture"
                                data-smartspeed="1200" data-items="1" data-md-items="1" data-sm-items="1"
                                data-xs-items="1" data-xx-items="1">
                                <div class="owl-stage-outer">
                                    <div class="owl-stage"
                                        style="transform: translate3d(-1128px, 0px, 0px); transition: all 1.2s ease 0s; width: 3948px;">
                                        <div class="owl-item cloned" style="width: 534px; margin-right: 30px;">
                                            <div class="item active">
                                                <img class="img-fluid"
                                                    src="{{ asset('assets/site/images/about/B21-2024-hd.jpg') }}"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="owl-item cloned" style="width: 534px; margin-right: 30px;">
                                            <div class="item">
                                                <img class="img-fluid"
                                                    src="{{ asset('assets/site/images/actus/B21-2024-Il-sera deborah.jpg') }}"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="owl-item" style="width: 534px; margin-right: 30px;">
                                            <div class="item">
                                                <img class="img-fluid"
                                                    src="{{ asset('assets/site/images/actus/B21-2024-Il-sera dede.jpg') }}"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="owl-item" style="width: 534px; margin-right: 30px;">
                                            <div class="item">
                                                <img class="img-fluid"
                                                    src="{{ asset('assets/site/images/actus/B21-2024-Il-sera louison.jpg') }}"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="owl-item" style="width: 534px; margin-right: 30px;">
                                            <div class="item">
                                                <img class="img-fluid"
                                                    src="{{ asset('assets/site/images/actus/B21-2024-Il-sera marcello.jpg') }}"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="owl-item cloned" style="width: 534px; margin-right: 30px;">
                                            <div class="item">
                                                <img class="img-fluid"
                                                    src="{{ asset('assets/site/images/actus/B21-2024-Il-sera trésor.jpg') }}"
                                                    alt="">
                                            </div>
                                        </div>
                                        {{-- <div class="owl-item cloned" style="width: 534px; margin-right: 30px;">
                                            <div class="item">
                                                <img class="img-fluid" src="{{ asset('assets/site/images/act/.jpg') }}"
                                                    alt="">
                                            </div>
                                        </div> --}}
                                    </div>
                                </div>
                                <div class="owl-nav disabled">
                                    <button type="button" role="presentation" class="owl-prev"><i
                                            class="fa fa-angle-left fa-2x"></i></button><button type="button"
                                        role="presentation" class="owl-next"><i
                                            class="fa fa-angle-right fa-2x"></i></button>
                                </div>
                                <div class="owl-dots"><button role="button"
                                        class="owl-dot active"><span></span></button><button role="button"
                                        class="owl-dot"><span></span></button><button role="button"
                                        class="owl-dot"><span></span></button></div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="section-title">
                                <h6 class="text-intro mb-lg-3">Grande célébration Bunda 21</h6>
                                <h2 class="title-effect mb-lg-3">Temps de consécration à la recherche de la face de Dieu
                                </h2>
                                <p>
                                    La grande célébration Bunda 21 est un programme de 21 jours de jeûne et prière
                                    pendant lesquels
                                    nous cherchons la face de Dieu pour nous-mêmes, pour nos ministères, nos mariages,
                                    pour nos
                                    business, nos Églises, notre pays.

                                    Il y a bien de choses que Dieu nous a destinées, qui nous appartiennent, mais que
                                    nous devons
                                    palper, posséder.
                                    Le prophète Elie, après avoir reçu une promesse de Dieu, a cherché Dieu à la
                                    montagne ; il s’est
                                    privé de la nourriture, a consenti des sacrifices,
                                    bien que bénéficiaire de la promesse de Dieu, et ce jusqu’à ce que la pluie soit
                                    tombée.

                                    Nous n'attendons donc pas l’accomplissement des promesses de Dieu de manière
                                    passive,
                                    nous faisons notre part et cette dernière se trouve dans la prière.

                                    <br><br>

                                    {{-- Dieu cherche un homme qui se tienne à la brèche, ainsi IL nous appelle dans Sa
                                    présence
                                    --}}

                                    Combats, possède et jouis de ton héritage.
                                </p>
                            </div>

                            <div class="mt-30">
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                website consectetur adipisicing elit. At vel sed corporis delectus quo
                                                ea
                                                molestias a ab ad officiis eaque natus animi reiciendis sint beatae,
                                                dolor
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
                <section class="meet-team gray-bg page-section-ptb">
                    <div class="container">
                        <ul class="nav  mb-5 nav-tabs nav-tab-page justify-content-center align-items-center" id="pills-tab"
                            role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-arrivage-tab" data-bs-toggle="pill" data-bs-target="#plan"
                                    type="button" role="tab" aria-controls="pills-profile" aria-selected="true">Plan
                                    alimentaire</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-fournisseur-tab" data-bs-toggle="pill" data-bs-target="#shop"
                                    type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Laissez-nous votre
                                    témoignage Bunda 21</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="plan" role="tabpanel" aria-labelledby="pills-profile-tab"
                                tabindex="0">
                                <div class="row g-lg-5 position-relative time-line-table" style="z-index: 1">
                                    <div class="col-12 text-center">
                                        <h2 class="title-effect">Plan alimentaire</h2>
                                        <br>
                                        <a type="button" class="button icon mb-10 mr-10 mt-lg-5 mt-3" target="blank"
                                            href="{{ asset('assets/document/b21-plan-alimentaire-2024.pdf') }}">
                                            Télécharger le plan
                                        </a>
                                    </div>
                                    <div class="line d-none d-lg-block"></div>
                                    <iframe src="https://player.flipsnack.com?hash=NTg1RjlGQ0M1QTgrem5xcjU4M3RrNQ==" width="100%"
                                        height="480" seamless="seamless" scrolling="no" frameBorder="0" allowFullScreen
                                        allow="autoplay; clipboard-read; clipboard-write"></iframe>

                                </div>
                            </div>
                            <div class="tab-pane fade" id="logement" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
                                @include('site.pages.bunda.logement')
                            </div>
                            <div class="tab-pane fade" id="shop" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
                                <div class="row mt-70">
                                    <div class="col-sm-12">
                                        <h4 class="mb-40">Remplissez ce formulaire</h4>
                                        <form action="{{ route('temoignage') }}" method="post" id="newsletter">
                                            @csrf
                                            <div class="contact-form border-form clearfix">
                                                <div class="section-field">
                                                    <input type="text" placeholder="Nom complet" class="form-control" name="fullname"
                                                        required>
                                                </div>
                                                <div class="section-field">
                                                    <input type="email" placeholder="Email (optionnel)" class="form-control"
                                                        name="email">
                                                </div>
                                                <div class="section-field">
                                                    <input type="text" placeholder="Téléphone" class="form-control" name="phone"
                                                        required>
                                                </div>
                                                <div class="section-field textarea">
                                                    <textarea class="input-message form-control" placeholder="Message" rows="7"
                                                        name="message" required> </textarea>
                                                </div>
                                                <input type="hidden" name="action" value="sendEmail" />
                                                <button name="submit" type="submit" value="Send" class="button mt-30"><span> Send
                                                        message
                                                    </span> <i class="fa fa-paper-plane"></i></button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </section>
            </div>
            <div class="tab-pane fade" id="mediaBunda" role="tabpanel" aria-labelledby="pills-home-tab"
                tabindex="0">
                <div class="row">
                    @include("site.pages.bunda.playliste")
                </div>
            </div>
        </div>
    </div>
</section>


@endsection
