@extends('site.layout.template', ['titre' => 'Projets'])

@section("content")
<section class="page-title center jarallax" data-speed="0.6" data-img-src="{{ asset('assets/site/images/bg/14.jpg') }}">
  <div class="container">
    <div class="row">
     <div class="col-lg-12">
      <div class="page-title-name">
          <h2 class="text-white"></h2>
        </div>
     </div>
    </div>
  </div>
</section>

@include("site.parties.info")

<section class="page-section-pb" style="padding-top: 50px;">
  <div class="container">
    <div class="row">
     <div class="col-md-12">
          <h2 class="text-black text-center">Nos projects récents </h2>
     </div>
    </div>

    <div class="row mt-30">
      <div class="col-md-12">
        <div class="owl-carousel" data-nav-dots="true" data-items="3" data-md-items="3" data-sm-items="3" data-xs-items="2" data-xx-items="1" data-space="20">
          <div class="item">
            <div class="portfolio-item">
             <img src="{{ asset('assets/site/images/portfolio/color-image-related/01.jpg') }}" alt="">
              <div class="portfolio-overlay">
                  <h4 class="text-white"> <a href="{{ route('detailProjet',["id"=>1]) }}"> Titre du projet </a> </h4>
                    <span> <a href="#"> Branding </a> | <a href="#"> Web Design </a> </span>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="portfolio-item">
             <img src="{{ asset('assets/site/images/portfolio/color-image-related/02.jpg') }}" alt="">
              <div class="portfolio-overlay">
                  <h4 class="text-white"> <a href="{{ route('detailProjet',["id"=>1]) }}"> Titre du projet </a> </h4>
                    <span> <a href="#"> Branding </a> | <a href="#"> Web Design </a> </span>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="portfolio-item">
             <img src="{{ asset('assets/site/images/portfolio/color-image-related/03.jpg') }}" alt="">
              <div class="portfolio-overlay">
                  <h4 class="text-white"> <a href="{{ route('detailProjet',["id"=>1]) }}"> Titre du projet </a> </h4>
                    <span> <a href="#"> Branding </a> | <a href="#"> Web Design </a> </span>
              </div>
            </div>
          </div>

       </div>
      </div>
      <div class="col-md-12" style="padding-top: 20px;">
        <div class="owl-carousel" data-nav-dots="true" data-items="3" data-md-items="3" data-sm-items="3" data-xs-items="2" data-xx-items="1" data-space="20">
          <div class="item">
            <div class="portfolio-item">
             <img src="{{ asset('assets/site/images/portfolio/color-image-related/04.jpg') }}" alt="">
              <div class="portfolio-overlay">
                  <h4 class="text-white"> <a href="{{ route('detailProjet',["id"=>1]) }}"> Titre du projet </a> </h4>
                    <span> <a href="#"> Branding </a> | <a href="#"> Web Design </a> </span>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="portfolio-item">
             <img src="{{ asset('assets/site/') }}images/portfolio/color-image-related/05.jpg" alt="">
              <div class="portfolio-overlay">
                  <h4 class="text-white"> <a href="{{ route('detailProjet',["id"=>1]) }}"> Titre du projet </a> </h4>
                    <span> <a href="#"> Branding </a> | <a href="#"> Web Design </a> </span>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="portfolio-item">
             <img src="{{ asset('assets/site/') }}images/portfolio/color-image-related/06.jpg" alt="">
              <div class="portfolio-overlay">
                  <h4 class="text-white"> <a href="{{ route('detailProjet',["id"=>1]) }}"> Titre du projet </a> </h4>
                    <span> <a href="#"> Branding </a> | <a href="#"> Web Design </a> </span>
              </div>
            </div>
          </div>

       </div>
      </div>
    </div>
  </div>
</section>
@endsection
