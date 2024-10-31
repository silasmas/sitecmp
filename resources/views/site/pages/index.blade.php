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
                        {{-- <div class="row justify-content-center">
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
                        </div> --}}
                    </div>
                </div>
            </div>
            <div class="carousel-item active">
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
                    {{-- <div class="block-card">
                        <div class="card">
                            <img src="{{ asset('assets/site/revolution/assets/slider-01/01.jpg') }}" alt="">
                        </div>
                    </div> --}}
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
                    {{-- <div class="block-card">
                        <div class="card">
                            <img src="images/2.jpg" alt="">
                        </div>
                    </div> --}}
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
                    {{-- <div class="block-card">
                        <div class="card">
                            <img src="{{ asset('assets/site/revolution/assets/slider-01/SLIDE1.jpg') }}" alt="">
                        </div>
                    </div> --}}
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
                    {{-- <div class="block-card">
                        <div class="card">
                            <img src="{{ asset('assets/site/revolution/assets/slider-01/SLIDE1.jpg') }}" alt="">
                        </div>
                    </div> --}}
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
{{-- <section class="rev-slider">
    <h6 class="lacks-heading d-none">Lacks Heading</h6> <!-- lacks heading for w3c -->
    <div id="rev_slider_267_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container"
        data-alias="webster-slider-1" data-source="gallery"
        style="margin:0px auto;background:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
        <div id="rev_slider_267_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.6.3">
            <ul>
                <!-- SLIDE  -->
                <li data-index="rs-755" data-transition="random-static,random-premium,random"
                    data-slotamount="default,default,default,default" data-hideafterloop="0"
                    data-hideslideonmobile="off" data-randomtransition="on"
                    data-easein="default,default,default,default" data-easeout="default,default,default,default"
                    data-masterspeed="default,default,default,default"
                    data-thumb="{{ asset('assets/site/revolution/assets/slider-01/70x70_1a353-01.jpg') }}"
                    data-rotate="0,0,0,0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2=""
                    data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8=""
                    data-param9="" data-param10="" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="{{ asset('assets/site/revolution/assets/slider-01/1a353-01.jpg') }}" alt=""
                        data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg"
                        data-no-retina>
                    <!-- LAYERS -->

                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption   tp-resizeme" id="slide-755-layer-1" data-x="68" data-y="center"
                        data-voffset="-30" data-width="['auto']" data-height="['auto']" data-type="text"
                        data-responsive_offset="on"
                        data-frames='[{"delay":1000,"speed":1000,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","to":"opacity:0;","ease":"nothing"}]'
                        data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                        style="z-index: 5; white-space: nowrap; font-size: 40px; line-height: 40px; font-weight: 200; color: rgba(255,255,255,1); font-family:Montserrat ;">
                    </div>

                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption   tp-resizeme  rev-color" id="slide-755-layer-2" data-x="right"
                        data-hoffset="60" data-y="center" data-voffset="-57" data-width="['auto']"
                        data-height="['auto']" data-type="text" data-responsive_offset="on"
                        data-frames='[{"delay":1000,"speed":500,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","to":"opacity:0;","ease":"nothing"}]'
                        data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                        style="z-index: 6; white-space: nowrap; font-size: 150px; line-height: 150px; font-weight: 600; color: #FFF; font-family:Dosis;">
                        Philadelphie </div>

                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption   tp-resizeme" id="slide-755-layer-5" data-x="center" data-hoffset="-353"
                        data-y="center" data-voffset="80" data-width="['auto']" data-height="['auto']" data-type="text"
                        data-responsive_offset="on"
                        data-frames='[{"delay":3500,"speed":1000,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power2.easeOut"},{"delay":"wait","speed":1000,"frame":"999","to":"opacity:0;","ease":"nothing"}]'
                        data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                        style="display: flex; flex-wrap: wrap; z-index: 8; white-space: nowrap; font-size: 20px; line-height: 22px; font-weight: 600; color: rgba(255,255,255,1); font-family:Montserrat ;">
                        <div style="width: 50%;"></div>
                        <div style="width: 50%;">

                            Le Centre Missionnaire Philadelphie est une église locale de la 37ème Communauté des
                            Assemblées... </div>
                    </div>


                    <!-- LAYER NR. 8 -->
                    <a class="tp-caption rev-btn  tp-resizeme  rev-button" href="#" target="_self"
                        id="slide-755-layer-15" data-x="center" data-hoffset="" data-y="center" data-voffset="160"
                        data-width="['auto']" data-height="['auto']" data-type="button" data-actions=''
                        data-responsive_offset="on"
                        data-frames='[{"delay":2000,"speed":900,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"300","ease":"Power0.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgb(255,255,255);bg:rgb(0,0,0);bs:solid;bw:0 0 0 0;"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[12,12,12,12]"
                        data-paddingright="[35,35,35,35]" data-paddingbottom="[12,12,12,12]"
                        data-paddingleft="[35,35,35,35]"
                        style="z-index: 17; white-space: nowrap; font-size: 12px; line-height: 22px; font-weight: 600; color: rgba(255,255,255,1); font-family:Montserrat ;text-transform:uppercase;background-color:rgb(101,15,28);border-color:rgba(0,20,46,1);border-radius:3px 3px 3px 3px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;text-decoration: none;">Mot
                        de bienvenu </a>
                </li>
                <!-- SLIDE  -->
                <li data-index="rs-756" data-transition="random-static,random-premium,random"
                    data-slotamount="default,default,default,default" data-hideafterloop="0"
                    data-hideslideonmobile="off" data-randomtransition="on"
                    data-easein="default,default,default,default" data-easeout="default,default,default,default"
                    data-masterspeed="default,default,default,default"
                    data-thumb="{{ asset('assets/site/revolution/assets/slider-01/70x70_02483-02.jpg') }}"
                    data-rotate="0,0,0,0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2=""
                    data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8=""
                    data-param9="" data-param10="" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="{{ asset('assets/site/revolution/assets/slider-01/02483-02.jpg') }}" alt=""
                        data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg"
                        data-no-retina>
                    <!-- LAYERS -->

                    <!-- LAYER NR. 9 -->
                    <div class="tp-caption   tp-resizeme" id="slide-756-layer-2" data-x="60" data-y="340"
                        data-width="['auto']" data-height="['auto']" data-type="text" data-responsive_offset="on"
                        data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power2.easeOut"},{"delay":"wait","speed":1000,"frame":"999","to":"opacity:0;","ease":"nothing"}]'
                        data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                        style="z-index: 5; white-space: nowrap; font-size: 60px; line-height: 70px; font-weight: 300; color: rgba(255,255,255,1); font-family:Montserrat ;">
                        Are You
                    </div>

                    <!-- LAYER NR. 10 -->
                    <div class="tp-caption   tp-resizeme" id="slide-756-layer-19" data-x="298" data-y="340"
                        data-width="['auto']" data-height="['auto']" data-type="text" data-responsive_offset="on"
                        data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power2.easeOut"},{"delay":"wait","speed":1000,"frame":"999","to":"opacity:0;","ease":"nothing"}]'
                        data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                        style="z-index: 6; white-space: nowrap; font-size: 60px; line-height: 70px; font-weight: 600; color: rgba(255,255,255,1); font-family:Montserrat ;">
                        Ready
                    </div>

                    <!-- LAYER NR. 11 -->
                    <div class="tp-caption   tp-resizeme" id="slide-756-layer-20" data-x="503" data-y="340"
                        data-width="['auto']" data-height="['auto']" data-type="text" data-responsive_offset="on"
                        data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power2.easeOut"},{"delay":"wait","speed":1000,"frame":"999","to":"opacity:0;","ease":"nothing"}]'
                        data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                        style="z-index: 7; white-space: nowrap; font-size: 60px; line-height: 70px; font-weight: 300; color: rgba(255,255,255,1); font-family:Montserrat ;">
                        to
                    </div>

                    <!-- LAYER NR. 12 -->
                    <div class="tp-caption   tp-resizeme" id="slide-756-layer-3" data-x="60" data-y="center"
                        data-voffset="85" data-width="['auto']" data-height="['auto']" data-type="text"
                        data-responsive_offset="on"
                        data-frames='[{"delay":2090,"speed":1500,"frame":"0","from":"x:left;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":1000,"frame":"999","to":"opacity:0;","ease":"nothing"}]'
                        data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                        style="z-index: 8; white-space: nowrap; font-size: 24px; line-height: 28px; font-weight: 200; color: rgba(255,255,255,1); font-family: Montserrat ;">
                        In today′s world, the importance of a well-executed web presence
                        <br /> cannot be underestimated.
                    </div>

                    <!-- LAYER NR. 13 -->

                    <!-- LAYER NR. 14 -->
                    <a class="tp-caption tp-resizeme" href="#" target="_self" id="slide-756-layer-13" data-x="235"
                        data-y="center" data-voffset="180" data-width="['auto']" data-height="['auto']"
                        data-type="button" data-actions='' data-responsive_offset="on"
                        data-frames='[{"delay":3560,"speed":1000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"300","ease":"Power0.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(0,0,0,1);bg:rgba(255,255,255,1);"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[10,10,10,10]"
                        data-paddingright="[30,30,30,30]" data-paddingbottom="[10,10,10,10]"
                        data-paddingleft="[30,30,30,30]"
                        style="z-index: 10; white-space: nowrap; font-size: 12px; line-height: 22px; font-weight: 600; color: rgba(255,255,255,1); font-family:Montserrat ;text-transform:uppercase;background-color:rgba(0,0,0,0);border-color:rgb(255,255,255);border-style:solid;border-width:2px 2px 2px 2px;border-radius:3px 3px 3px 3px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;text-decoration: none;">Mot
                        de bienvenu </a>

                    <!-- LAYER NR. 15 -->
                    <div class="tp-caption   tp-resizeme" id="slide-756-layer-15" data-x="60" data-y="center"
                        data-voffset="6" data-width="['auto']" data-height="['auto']" data-type="text"
                        data-responsive_offset="on"
                        data-frames='[{"delay":1080,"speed":1500,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","to":"opacity:0;","ease":"nothing"}]'
                        data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                        style="z-index: 11; white-space: nowrap; font-size: 60px; line-height: 70px; font-weight: 400; color: rgba(255,255,255,1); font-family:Montserrat ;">
                        Just Change the
                    </div>

                    <!-- LAYER NR. 16 -->
                    <div class="tp-caption   tp-resizeme" id="slide-756-layer-17" data-x="565" data-y="419"
                        data-width="['auto']" data-height="['auto']" data-type="text" data-responsive_offset="on"
                        data-frames='[{"delay":1080,"speed":1500,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","to":"opacity:0;","ease":"nothing"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                        style="z-index: 13; white-space: nowrap; font-size: 60px; line-height: 70px; font-weight: 600; color: #ffffff; letter-spacing: 0px;font-family:Montserrat;">
                        Future </div>

                    <!-- LAYER NR. 17 -->
                    <div class="tp-caption   tp-resizeme" id="slide-756-layer-18" data-x="781" data-y="420"
                        data-width="['auto']" data-height="['auto']" data-type="text" data-responsive_offset="on"
                        data-frames='[{"delay":1080,"speed":1500,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","to":"opacity:0;","ease":"nothing"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                        style="z-index: 14; white-space: nowrap; font-size: 60px; line-height: 70px; font-weight: 400; color: #ffffff; letter-spacing: 0px;font-family:Montserrat;">
                        ? </div>
                </li>

            </ul>
            <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
        </div>
    </div>
</section> --}}
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
            @forelse ($posts as $p)
            <div class="col-md-4 xs-mb-40">
                <div class="feature-box h-100 active">
                    <div class="feature-box-content">
                        <i class="fa fa-arrows"></i>
                        <h4>{{ $p->title }}</h4>
                        <p>{{ $p->minister->fullname??$p->author}} {{ $p->author?"":"(Pasteur)"}} </p>
                    </div>
                    <div class="content-link">
                        <a href="{{ route('show_article',['id'=>$p->id]) }}">Lire la suite</a>
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
                    <p style="font-size: 14px">À la porte de 2023, toute notre gratitude à Dieu pour son soutien durant
                        l'année 2022 qui
                        s’est clôturée.</p>
                </div>
                <p> <span class="dropcap gray square">E</span> n cette année nouvelle, puissent les portes
                    placées devant vous, par le Seigneur, s'ouvrir afin que vous accédiez à tout ce qu'Il a en
                    réserve pour vous.
                    Mais notre souhait le plus grand est de vous voir marcher dans la conscience que notre
                    Seigneur et Maître est à la porte. Puissiez-vous donc vous accrocher à Lui, l'auteur et le
                    consommateur de votre foi.</p>
                <div class="mt-30">
                    <p>Bonne et Heureuse année 2023 à tous, en Jésus-Christ !</p>
                    <button type="button" class="button icon mb-10 mr-10">
                        Message de bienvenu
                    </button>
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
{{-- Horaire --}}
<section class="page-section-ptb white-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title text-center mb-80">
                    <h6>Rejoignez-nous et participez à nos célébrations dont voici les horaires</h6>
                    <h2 class="title-effect">NOS PROGRAMMES</h2>
                </div>
            </div>
        </div>
        <div class="row g-3 g-lg-4">

            <div class="col-lg-3 col-sm-6">
                <div class="pricing-table h-100">
                    <div class="pricing-top h-100">
                        <img src="{{asset('assets/images/mercredi.png')}}" alt="" class="img-icon">
                        <div class="pricing-title">
                            <div class="mb-15 badge-day">@lang('miscellaneous.day.complete.wednesday')</div>
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

            <div class="col-lg-3 col-sm-6 ">
                <div class="pricing-table h-100">
                    <div class="pricing-top h-100">
                        <img src="{{asset('assets/images/jeudi.png')}}" alt="" class="img-icon">
                        <div class="pricing-title">
                            <div class="mb-15 badge-day">@lang('miscellaneous.day.complete.thursday')</div>
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

            <div class="col-lg-3 col-sm-6 ">
                <div class="pricing-table h-100 mt-5 mt-lg-0">
                    <div class="pricing-top h-100">
                        <img src="{{asset('assets/images/samedi.png')}}" alt="" class="img-icon">
                        <div class="pricing-title">
                            <div class="mb-15 badge-day">@lang('miscellaneous.day.complete.saturday')</div>
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

            <div class="col-lg-3 col-sm-6 ">
                <div class="pricing-table h-100 mt-5 mt-lg-0">
                    <div class="pricing-top h-100">
                        <img src="{{asset('assets/images/dimanche.png')}}" alt="" class="img-icon">
                        <div class="pricing-title">
                            <div class="mb-15 badge-day">@lang('miscellaneous.day.complete.sunday')</div>
                            <h3 class="title-card">Culte dominical</h3>
                        </div>

                        <div class="time-line-prog d-flex flex-column">
                            <div class="item-line">
                                <div class="icon">
                                    <i class="fa fa-clock-o"></i>
                                </div>
                                07h00-09h00 (FR)
                            </div>
                            <div class="item-line">
                                <div class="icon">
                                    <i class="fa fa-clock-o"></i>
                                </div>
                                09h30-11h30 (FR-EN)<br>
                                <a href="http://"> <i class="fa fa-facebook-square"></i></a>
                                <a href="http://"> <i class="fa fa-youtube-play"></i></a>
                                <a href="http://"> <i class="fa fa-twitter-square"></i></a>
                            </div>
                            <div class="item-line">
                                <div class="icon">
                                    <i class="fa fa-clock-o"></i>
                                </div>
                                12h00 -14h00 (LN)
                            </div>
                        </div>
                    </div>

                </div>
            </div>


        </div>
    </div>
</section>
{{-- Temoignages --}}
<section class="gray-bg page-section-pt happy-clients">
    <div class="container">
        <div class="row justify-content-center">
            {{-- <div class="col-lg-6 align-self-end">
                <img class="d-xs-block d-lg-block d-none img-fluid"
                    src="{{ asset('asets/site/images/objects/testimonial.jpg') }}" alt="">
            </div> --}}
            <div class="col-lg-8 mt-60">
                <div class="section-title text-center">
                    <h6 class="text-intro mb-lg-3">Ce que Dieu a fait</h6>
                    <h2 class="title-effect">Nos fidèles parlent</h2>
                </div>
                <div class="tab">
                    {{-- <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show text-center active" id="testi-01">
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
                        <div class="tab-pane fade text-center" id="testi-02">
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
                        <div class="tab-pane fade text-center" id="testi-03">
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
                        <div class="tab-pane fade text-center" id="testi-04">
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
                        <ul class="nav nav-tabs mt-60 d-flex justify-content-center" id="myTab" role="tablist">
                            <li><a class="nav-item active" href="#testi-01" data-bs-toggle="tab"><img class="img-fluid"
                                        src="{{ asset('assets/site/images/team/01.jpg') }}" alt=""> </a></li>
                            <li><a class="nav-item" href="#testi-02" data-bs-toggle="tab"><img class="img-fluid"
                                        src="{{ asset('assets/site/images/team/02.jpg') }}" alt=""> </a></li>
                            <li><a class="nav-item" href="#testi-03" data-bs-toggle="tab"><img class="img-fluid"
                                        src="{{ asset('assets/site/images/team/03.jpg') }}" alt=""> </a></li>
                            <li><a class="nav-item" href="#testi-04" data-bs-toggle="tab"><img class="img-fluid"
                                        src="{{ asset('assets/site/images/team/04.jpg') }}" alt=""> </a></li>
                        </ul>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</section>

{{-- barre d'adresse --}}
<section class="contact-box contact-box-top theme-bg">
    <div class="container">
        <div class="row pt-20 pb-40">
            <div class="col-md-4 sm-mb-30">
                <div class="contact-box">
                    <div class="contact-icon">
                        <i class="ti-map text-white"></i>
                    </div>
                    <div class="contact-info">
                        <h5 class="text-white"> </h5>
                        <span class="text-white">
                            {{-- @lang('miscellaneous.footer.address1') <br> @lang('miscellaneous.footer.address2') --}}
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-md-4 sm-mb-30">
                <div class="contact-box">
                    <div class="contact-icon">
                        <i class="ti-headphone text-white"></i>
                    </div>
                    <div class="contact-info">
                        <h5 class="text-white"></h5>
                        <span class="text-white">
                            {{-- <a href="tel:243897000227"> <span>+243897000227 </span> </a>
                         <a href="tel:243818772740"> <span>+243818772740</span> </a> --}}
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="contact-box">
                    <div class="contact-icon">
                        <i class="ti-email text-white"></i>
                    </div>
                    <div class="contact-info">
                        <h5 class="text-white"></h5>
                        {{-- <span class="text-white">eglisecmp@gmail.com
                            Support: dev@eglisecmp.com</span> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Google map --}}
<section class="google-map black-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="map-icon">
                </div>
            </div>
        </div>
    </div>
    <div class="map-open">
        <h6 class="lacks-heading d-none">Lacks Heading</h6> <!-- lacks heading for w3c -->
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.8351288872545!2d144.9556518!3d-37.8173306!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4c2b349649%3A0xb6899234e561db11!2sEnvato!5e0!3m2!1sen!2sin!4v1443621171568"
            style="border:0; width: 100%; height: 300px;"></iframe>
    </div>
</section>

{{-- <section class="white-bg">
    <div class="container">
        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-header align-items-start">
                    <button type="button" class="close btn btn-lg p-0 " data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="modal-onload" data-bs-target="#myModal1"></div>
                        <div class="modal1 mfp-hide text-center" id="myModal1">
                            <div class="modal-video">
                                <h4 class="mb-30">Nos actualités</h4>

                                <div class="js-video [youtube, widescreen] big">
                                    <iframe id="video" src="https://www.youtube.com/embed/D2EvaSgi3UQ"
                                        allowfullscreen></iframe>
                                </div>

                                <div class="owl-carousel" data-nav-dots="true" data-autoheight="true" data-items="1"
                                    data-md-items="1" data-sm-items="1" data-xs-items="1" data-xx-items="1"
                                    data-space="20">
                                    <div class="item">
                                        <img class="img-fluid " width="100" height="100"
                                            src="{{ asset('assets/site/images/actus/06.jpg') }}" alt="">
                                    </div>
                                    <div class="item">
                                        <img class="img-fluid " width="100" height="100"
                                            src="{{ asset('assets/site/images/actus/04.jpg') }}" alt="">
                                    </div>
                                    <div class="item">
                                        <img class="img-fluid " width="100" height="100"
                                            src="{{ asset('assets/site/images/actus/02.jpg') }}" alt="">
                                    </div>
                                    <div class="item">
                                        <img class="img-fluid " width="100" height="100"
                                            src="{{ asset('assets/site/images/actus/03.jpg') }}" alt="">
                                    </div>
                                    <div class="item">
                                        <img class="img-fluid " width="100" height="100"
                                            src="{{ asset('assets/site/images/actus/05.jpg') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                </div>
            </div>
        </div>
    </div>
</section> --}}
@endsection
