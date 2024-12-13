@extends('site.layout.template', ['titre' => 'Detail article'])
@section("metaPartage")
<meta property="og:title" 		content="{{ $postt->title }}">
    <meta property="og:type" 		content="website">
    <meta property="og:author" 		content="{{ $postt->minister->fullname??$postt->author }}">
    <meta property="og:url" 		content="document.URL">
    <!--meta property="og:summary" 	content="Maintaining cultural coherence across a companies portfolio should be an essential factor when determining a corporate strategy."-->
    <meta property="og:image" 		content="{{ url('/storage/'.$postt->image_url) }}">
    <!--meta property="og:description" content="Maintaining cultural coherence across a companies portfolio should be an essential factor when determining a corporate strategy."-->
    <meta name="twitter:card" 		content="summary_large_image">
    <meta name="twitter:site" 		content="@eglisecmp">
    <meta name="twitter:creator" 	content="@eglisecmp">
    <meta name="twitter:title" 		content="{{ $postt->title }}" />
    <!--meta name="twitter:description" content="Maintaining cultural coherence across a companies portfolio should be an essential factor when determining a corporate strategy." /-->
    <meta name="twitter:image" 		content="{{ url('/storage/'.$postt->image_url) }}" />
@endsection
@section("content")
{{-- <section class="page-title bg-overlay-black-60 jarallax" data-speed="0.6"
  data-img-src="{{ asset('assets/site/images/bg/02.jpg') }}">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="page-title-name">
          <p></p>
        </div>
        <ul class="page-breadcrumb">
          <li><a href="{{ route('home') }}"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-double-right"></i>
          </li>
          <li><a href="{{ route('articles') }}">Articles</a> <i class="fa fa-angle-double-right"></i></li>
          <li><span>{{ $post->title }}</span> </li>
        </ul>
      </div>
    </div>
  </div>
</section> --}}
<section class="page-title about-mission-title center bg-overlay-black-50 jarallax" data-speed="0.6"
  data-img-src="{{ asset('assets/site/images/bg/B21-2024-fbc.jpg') }}">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="page-title-name">
          <h1 class="text-black">{{ $postt->title }}</h1>
          <p class="text-black">{{ $postt->event_id?"événement : ".$postt->event->designation:"Culte hebdomadaire"}}</p>
        </div>
        <ul class="page-breadcrumb">
          <li><a href="{{ route('home') }}"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-double-right"></i>
          </li>
          <li><a href="{{ route('articles') }}">Articles</a> <i class="fa fa-angle-double-right"></i></li>
          <li><span></span> </li>
        </ul>
      </div>
    </div>
  </div>
</section>
<!--=================================
page-title -->

<section class="about-mission">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12">
        {{-- {{ dd($postt) }} --}}
        <div class="clearfix">
          <div class="popup-video-image popup-gallery">
            <img class="img-fluid full-width" src="{{ asset("storage/".$postt->image_url )}}" alt="">
            <div class="popup-content">
            @if ($postt->link_url!=null)
            <a class="popup-youtube" href="{{$postt->link_url}}"> <i class="fa fa-play"></i>
            </a>
            @endif
              <h2 class="text-white">{{ $postt->title }}</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--=================================
 Blog-->

<section class="blog blog-single white-bg page-section-ptb">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12">
        <div class="blog-entry mb-50">
          <div class="entry-image clearfix">
            <img class="img-fluid" src="{{ asset(" storage/".$postt->image_url )}}" alt="">
          </div>
          <div class="blog-detail">
            <div class="entry-title mb-10">
              <a href="#">{{ $postt->title }}</a>
            </div>
            <div class="entry-meta mb-10">
              <ul>
                <li> <i class="fa fa-user"></i> <a href="#"></a>
                  <a href="#"> {{ $postt->minister->fullname??$postt->author}}</a>
                </li>
                <li><a href="#"><i class="fa fa-comment-o"></i> 0</a></li>
                <li><a href="#"><i class="fa fa-calendar-o"></i>{{\Carbon\Carbon::parse($postt->date_publication)->isoFormat('LLL') }}</a></li>
                Partager :
                <li><div class="fb-share-button" data-layout="button_count" data-size="large" style="cursor: pointer">
                    <a target="_blank" onclick="facebookShared()" class="fb-xfbml-parse-ignore">Facebook <i class="fa-brands fa-facebook"></i></a></div></li>
                <li>
                    <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-size="large" data-via="eglisecmp" data-hashtags="eglisecmp" data-related="" data-show-count="true">
                Tweetter <i class="fa-brands fa-x-twitter"></i></a></li>
                <li style="cursor: pointer"><a onclick="whatsappShared()" class="whatsapp wa_btn activeWhatsapp" style="margin-top:0; color:rgb(12, 11, 11);padding: 1px 1px 1px 9px;" target="_blank">
                    Whatsapp <i class="fa-brands fa-whatsapp"></i></a></li>

            </ul>
            </div>
            <div class="entry-content">
              <p>{!!$postt->body!!}</p>
            </div>
            <div class="entry-share clearfix">
              <div class="entry-button">
                <a class="button arrow" href="{{ route('articles') }}">
                  <i class="fa fa-angle-left" aria-hidden="true"></i>Retour</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!--=================================
 Blog-->


<!--=================================
action box- -->
<script>

    function whatsappShared(){
        var LinkTextToShare = 'https://wa.me/?text=' + encodeURIComponent(window.location.href) ;
        window.open(LinkTextToShare,"_blank");

    }
    function facebookShared(){
        var LinkTextToShare = 'https://www.facebook.com/sharer/sharer.php?u=' + encodeURIComponent(document.URL) + '&t=' + encodeURIComponent(document.URL) ;
        window.open(LinkTextToShare,"_blank");

    }
    </script>
        @include('site.parties.linkBottom')
    <script>
    $("#btnMore").on("click", function() {
        $("#more").css("display", "block");
        $("#baseView").css("display", "none");
        $("#btnLess").css("display", "block");
        $("#btnMore").css("display", "none");
    });

    $("#btnLess").on("click", function() {
        $("#more").css("display", "none");
        $("#baseView").css("display", "block");
        $("#btnMore").css("display", "block");
        $("#btnLess").css("display", "none");
    });


    </script>
@include("site.parties.info")

<!--=================================
action box- -->
@endsection
