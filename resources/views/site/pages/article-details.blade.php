@extends('site.layout.template', ['titre' => 'Detail article'])

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
  data-img-src="{{ asset('assets/site/images/bg/02.jpg') }}">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="page-title-name">
          <h1 class="text-black">About our mission</h1>
          <p class="text-black">We know the secret of your success</p>
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
</section>
<!--=================================
page-title -->

<section class="about-mission">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12">
        {{-- {{ dd($post) }} --}}
        <div class="clearfix">
          <div class="popup-video-image popup-gallery">
            <img class="img-fluid full-width" src="{{ asset("storage/".$post->image_url )}}" alt="">
            <div class="popup-content">
            @if ($post->link_url!=null)
            <a class="popup-youtube" href="{{$post->link_url}}"> <i class="fa fa-play"></i>
            </a>
            @endif
              <h2 class="text-white">{{ $post->title }}</h2>
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
            <img class="img-fluid" src="{{ asset(" storage/".$post->image_url )}}" alt="">
          </div>
          <div class="blog-detail">
            <div class="entry-title mb-10">
              <a href="#">{{ $post->title }}</a>
            </div>
            <div class="entry-meta mb-10">
              <ul>
                <li> <i class="fa fa-user"></i> <a href="#"></a>
                  <a href="#"> {{ $post->minister->fullname??$post->author}}</a>
                </li>
                <li><a href="#"><i class="fa fa-comment-o"></i> 0</a></li>
                <li><a href="#"><i class="fa fa-calendar-o"></i>{{\Carbon\Carbon::parse($post->date_publication)->isoFormat('LLL') }}</a></li>
              </ul>
            </div>
            <div class="entry-content">
              <p>{!!$post->body!!}</p>
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

@include("site.parties.info")

<!--=================================
action box- -->
@endsection
