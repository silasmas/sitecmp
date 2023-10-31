@extends('site.layout.template', ['titre' => 'Detail article'])

@section("content")
<section class="page-title bg-overlay-black-60 jarallax" data-speed="0.6"
  data-img-src="{{ asset('assets/site/images/bg/02.jpg') }}">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="page-title-name">
          {{-- <h1>{{ $post->title }}</h1> --}}
          <p></p>
        </div>
        <ul class="page-breadcrumb">
          <li><a href="{{ route('home') }}"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-double-right"></i></li>
          <li><a href="{{ route('articles') }}">Articles</a> <i class="fa fa-angle-double-right"></i></li>
          <li><span>{{ $post->title }}</span> </li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!--=================================
page-title -->


<!--=================================
 Blog-->

<section class="blog blog-single white-bg page-section-ptb">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12">
        <div class="blog-entry mb-50">
          <div class="entry-image clearfix">
            <img class="img-fluid" src="{{ asset("storage/".$post->image_url )}}" alt="">
          </div>
          <div class="blog-detail">
            <div class="entry-title mb-10">
              <a href="#">{{ $post->title }}/a>
            </div>
            <div class="entry-meta mb-10">
              <ul>
                <li> <i class="fa fa-user"></i> <a href="#"></a>
                    <a href="#"> {{ $post->minister->fullname??$post->author}}</a> </li>
                <li><a href="#"><i class="fa fa-comment-o"></i> 0</a></li>
                <li><a href="#"><i class="fa fa-calendar-o"></i>{{ \Carbon\Carbon::parse($post->date_publication)->isoFormat('LLL') }}</a></li>
            </ul>
            </div>
            <div class="entry-content">
              <p>{!!$post->body!!}</p>
            </div>
            <div class="entry-share clearfix">
              <div class="entry-button">
                <a class="button arrow" href="{{ route('articles') }}"><i class="fa fa-angle-left" aria-hidden="true"></i>Retour</a>
              </div>
              {{-- <div class="social list-style-none float-end">
                <strong>Share : </strong>
                <ul>
                  <li>
                    <a href="#"> <i class="fa fa-facebook"></i> </a>
                  </li>
                  <li>
                    <a href="#"> <i class="fa fa-twitter"></i> </a>
                  </li>
                  <li>
                    <a href="#"> <i class="fa fa-pinterest-p"></i> </a>
                  </li>
                  <li>
                    <a href="#"> <i class="fa fa-dribbble"></i> </a>
                  </li>
                </ul>
              </div> --}}
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

<section class="action-box theme-bg full-width">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 position-relative">
        <div class="action-box-text">
          <h3><strong> Webster: </strong> The most powerful template ever on the market</h3>
          <p>Create tailor-cut websites with the exclusive multi-purpose responsive template along with powerful
            features.</p>
        </div>
        <div class="action-box-button">
          <a class="button button-border white" href="#">
            <span>Purchase Now</span>
            <i class="fa fa-download"></i>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!--=================================
action box- -->
@endsection
