@extends('site.layout.template')

@section("content")
<section class="page-title bg-overlay-black-60 jarallax" data-speed="0.6" data-img-src="{{ asset('assets/site/images/bg/02.jpg') }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-title-name">
                    <h1> @lang("miscellaneous.main_menu.who_are_we.title") ?</h1>
                    <p>@lang("miscellaneous.about.banner_title1")</p>

                </div>
            </div>
        </div>
</section>
@include("site.parties.info")
<section class="portfolio-home gray-bg o-hidden">
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-lg-4">
                <div class="portfolio-title section-title mt-md-5">
                    <h6>Média</h6>
                    <h2 class="title-effect">Notre Galerie</h2>
                    {{-- <p class="mb-20">Work on the best projects for the best clients. Our clients are some of the
                        most forward-looking companies in the world.</p>
                    <span>Webster has powerful options & tools, unlimited designs, responsive framework and
                        amazing support. We are dedicated to providing you with the best experience possible.
                        Purchase webster to find out why the sky's the limit when using Webster.</span> --}}
                    <a class="button mt-30" href="galerie.html">@lang('miscellaneous.inner_page.news.see_more')</a>
                </div>
                <div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="isotope popup-gallery columns-3 no-padding">

                    <div class="grid-item">
                        <div class="portfolio-item">
                            <img src="{{ asset('assets/site/images/videos/01.jpg') }}" alt="">
                            <div class="portfolio-overlay">
                                <h4 class="text-white"> <a href="{{ route('media') }}"> Appel à la croissance spirituelle
                                    </a> </h4>
                                <span class="text-white"> <a href="#"> Dimanche </a>| <a href="#">1 octobre
                                    </a>
                                </span>
                            </div>
                            <a class="popup popup-youtube" href="https://www.youtube.com/watch?v=fRM_L_ITFCE"><i
                                    class="fa fa-play"></i></a>
                        </div>
                    </div>
                    <div class="grid-item">
                        <div class="portfolio-item">
                            <img src="{{ asset('assets/site/images/portfolio/small/05.jpg') }}" alt="">
                            <div class="portfolio-overlay">
                                <h4 class="text-white"> <a href="{{ route('media') }}">Bartimée fils de Timée
                                    </a> </h4>
                                <span class="text-white"> <a href="#"> Campagne d'évangelisation mbandaka </a>| <a href="#">Jour 4
                                    </a>
                                </span>
                            </div>
                            <a class="popup popup-youtube" href="https://www.youtube.com/watch?v=FgDABw2s_-4"><i
                                    class="fa fa-play"></i></a>
                        </div>
                    </div>
                    <div class="grid-item">
                        <div class="portfolio-item">
                            <img src="{{ asset('assets/site/images/portfolio/small/05.jpg') }}" alt="">
                            <div class="portfolio-overlay">
                                <h4 class="text-white"> <a href="{{ route('media') }}">La femme à la perte du sang
                                    </a> </h4>
                                    <span class="text-white"> <a href="#"> Campagne d'évangelisation mbandaka </a>| <a href="#">Jour 3
                                    </a>
                                </span>
                            </div>
                            <a class="popup popup-youtube" href="https://www.youtube.com/watch?v=q9-UxPCkRQ4"><i
                                    class="fa fa-play"></i></a>
                        </div>
                    </div>
                    <div class="grid-item">
                        <div class="portfolio-item">
                            <img src="{{ asset('assets/site/images/portfolio/small/05.jpg') }}" alt="">
                            <div class="portfolio-overlay">
                                <h4 class="text-white"> <a href="{{ route('media') }}">La femme adultère
                                    </a> </h4>
                                    <span class="text-white"> <a href="#"> Campagne d'évangelisation mbandaka </a>| <a href="#">Jour 2
                                    </a>
                                </span>
                            </div>
                            <a class="popup popup-youtube" href="https://www.youtube.com/watch?v=rA0zcBncqBk&t=2485s"><i
                                    class="fa fa-play"></i></a>
                        </div>
                    </div>
                    <div class="grid-item">
                        <div class="portfolio-item">
                            <img src="{{ asset('assets/site/images/portfolio/small/05.jpg') }}" alt="">
                            <div class="portfolio-overlay">
                                <h4 class="text-white"> <a href="{{ route('media') }}"> Jésus le seul sauveur
                                    </a> </h4>
                                    <span class="text-white"> <a href="#"> Campagne d'évangelisation mbandaka </a>| <a href="#">Jour 1
                                    </a>
                                </span>
                            </div>
                            <a class="popup popup-youtube" href="https://www.youtube.com/watch?v=rpEA00QQZKU"><i
                                    class="fa fa-play"></i></a>
                        </div>
                    </div>
                    <div class="grid-item">
                        <div class="portfolio-item">
                            <img src="{{ asset('assets/site/images/portfolio/small/05.jpg') }}" alt="">
                            <div class="portfolio-overlay">
                                <h4 class="text-white"> <a href="{{ route('media') }}"> Appel à la croissance spirituelle
                                    </a> </h4>
                                <span class="text-white"> <a href="#"> Dimanche </a>| <a href="#">03/09/2023
                                    </a>
                                </span>
                            </div>
                            <a class="popup popup-youtube" href="https://www.youtube.com/watch?v=9262Fy7JziQ"><i
                                    class="fa fa-play"></i></a>
                        </div>
                    </div>
                    <div class="grid-item">
                        <div class="portfolio-item">
                            <img src="{{ asset('assets/site/images/portfolio/small/05.jpg') }}" alt="">
                            <div class="portfolio-overlay">
                                <h4 class="text-white"> <a href="{{ route('media') }}"> Un si grand salut
                                    </a> </h4>
                                <span class="text-white"> <a href="#"> Dimanche </a>| <a href="#">20/08/2023
                                    </a>
                                </span>
                            </div>
                            <a class="popup popup-youtube" href="https://www.youtube.com/watch?v=TckN2Py3M7Q"><i
                                    class="fa fa-play"></i></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>


@endsection
