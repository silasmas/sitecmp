@extends('site.layout.template', ['titre' => 'Articles'])


@section("content")

<style>
    ********** jQuery Ellipsis **********/ .ellip {
        display: block;
        height: 100%;
        transition: .3s;
    }

    .ellip-line {
        display: inline-block;
        text-overflow: ellipsis;
        white-space: nowrap;
        word-wrap: normal;
        max-width: 100%;
    }

    .ellip,
    .ellip-line {
        position: relative;
        overflow: hidden;
    }
</style>

@include("site.parties.banniere",["t1"=>"Bunda 21","t2"=>"Notre play liste Bunda","img"=>"slide1.png"])

@include("site.parties.info")
<section class="white-bg page-section-ptb">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                <div class="isotope-filters">
                    <button data-filter="" class="active">Tout</button>
                    @forelse ($eventbunda as $ps)
                    <button data-filter="{{ " .".$ps->year}}">{{ $ps->designation }}</button>
                    @empty

                    @endforelse
                </div>
                <div class="isotope popup-gallery full-screen columns-3 no-padding">
                    <div class="container">
                        <div class="row">
                            @forelse ($eventbunda as $ps)
                            @forelse ($ps->posts as $p)
                            <div class="grid-item {{ $ps->year }} m-0" style="padding: 2px !important">
                                <div class="portfolio-item ">
                                    <div class="portfolio-item">
                                        <a href="{{ route('show_article',['slug'=>creatSlug($p->id)]) }}">
                                            <img src="{{ asset('storage/'.$p->image_url) }}" alt="">
                                        </a>
                                        <div class="portfolio-overlay">
                                            {{-- <h4 class="text-white"> <a
                                                    href="{{ route('show_article',['slug'=>creatSlug($p->id)]) }}">{{
                                                    $p->title.'-'.$p->id }}</a> </h4> --}}
                                            <span class="text-white">
                                                <a href="{{ route('show_article',['slug'=>creatSlug($p->id)]) }}"> {{
                                                    $p->title }} </a>|
                                                <a href="{{ route('show_article',['slug'=>creatSlug($p->id)]) }}">{{\Carbon\Carbon::parse($p->date_publication)->isoFormat('LLL')
                                                    }}</a>
                                            </span>
                                        </div>
                                        <a class="popup popup-youtube" href="{{ $p->link_url }}"><i
                                                class="fa fa-play"></i></a>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="grid-item {{ $ps->year }} branding">
                                <div class="portfolio-item">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="blog-entry mb-50">
                                            <div class="entry-image clearfix">
                                                <img class="img-fluid" src="{{ asset('storage/'.$p->image_url) }}"
                                                    alt="">
                                            </div>
                                            <div class="blog-detail">
                                                <div class="entry-title mb-10">
                                                    <a href="#">{{ $p->title }}</a>
                                                </div>
                                                <div class="entry-meta mb-10">
                                                    <ul>
                                                        <li> <i class="fa fa-folder-open-o"></i> <a href="#">Bunda {{
                                                                $ps->year }}</a>

                                                        </li>
                                                        <li><a href="#"><i class="fa fa-user"></i>
                                                                {{ $p->minister->fullname??$p->author}}
                                                            </a></li>
                                                        <li><a href="#"><i class="fa fa-calendar-o"></i>
                                                                {{\Carbon\Carbon::parse($p->date_publication)->isoFormat('LLL')
                                                                }}</a></li>
                                                    </ul>
                                                </div>
                                                <div class="entry-content">
                                                    <p>{{ $p->count}}</p>
                                                </div>
                                                <div class="entry-share clearfix">
                                                    <div class="entry-button">
                                                        <a class="button arrow"
                                                            href="">@lang('miscellaneous.inner_page.news.link')<i
                                                                class="fa fa-angle-right" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                            @empty

                            @endforelse
                            @empty

                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- <section class="page-title bg-overlay-black-60 jarallax" data-speed="0.6"
    data-img-src="{{ asset('assets/site/images/bg/B21-2024-fbc.jpg') }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-title-name">
                    <h1>Notre Play liste</h1>
                    <p>Dernières parutions</p>
                </div>

            </div>
        </div>
    </div>
</section> --}}


@endsection
