@extends('site.layout.template', ['titre' => 'Articles'])


@section("content")

<style>
    ********** jQuery Ellipsis **********/
.ellip {
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
<section class="page-title bg-overlay-black-60 jarallax" data-speed="0.6"
    data-img-src="{{ asset('assets/site/images/bg/B21-2024-fbc.jpg') }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-title-name">
                    <h1>Nos articles</h1>
                    <p>Dernières parutions</p>
                </div>

            </div>
        </div>
    </div>
</section>
@include("site.parties.info")
<section class="blog white-bg page-section-ptb">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                @forelse ($post as $p)
                <div class="blog-entry mb-50">
                    <div class="entry-image clearfix">
                        <img class="img-fluid" src="{{ asset('storage/'.$p->image_url) }}" alt="">
                    </div>
                    <div class="blog-detail">
                        <div class="entry-title mb-10">
                            <a href="{{ route('show_article',['slug'=>creatSlug($p->id)]) }}">{{ $p->title }}</a>
                        </div>
                        <div class="entry-meta mb-10">
                            <ul>
                                <li> <i class="fa fa-user"></i> <a href="#"></a>
                                    <a href="#">{{ $p->minister->fullname??$p->author}} </a>
                                </li>
                                <li><a href="#"><i class="fa fa-comment-o"></i> 0</a></li>
                                <li><a href="#"><i class="fa fa-calendar-o"></i>{{
                                        \Carbon\Carbon::parse($p->date_publication)->isoFormat('LLL') }}</a></li>
                            </ul>
                        </div>
                        <div class="entry-content paragraph-ellipsis">
                            {{-- <p class="paragraph">{{ htmlspecialchars($p->body) }}</p> --}}
                        </div>
                        <div class="entry-share clearfix">
                            <div class="entry-button">
                                <a class="button arrow"
                                    href="{{ route('show_article',['slug'=>creatSlug($p->id)]) }}">@lang('miscellaneous.inner_page.news.link')<i
                                        class="fa fa-angle-right" aria-hidden="true"></i></a>
                            </div>
                            <div class="social list-style-none float-end">
                                <strong>@lang("miscellaneous.share") </strong>
                                <ul>
                                    <li><a href="https://facebook.com/sharer.php?u={{ "eglisecmp.com" }}"
                                            target="blank"><span class="ti-facebook"></span></a></li>
                                    <li><a href="https://instagram.com/eglisecmp?igshid=OGQ5ZDc2ODk2ZA=="
                                            target="blank"><span class="ti-instagram"></span></a></li>
                                    <li><a href="https://twitter.com/EgliseCMP" target="blank"><i
                                                class="fa-brands fa-x-twitter"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                @empty
                {{-- <div class="bd-callout bd-callout-danger">
                    <h4>Info</h4>
                    Pas d'informations trouvées!
                </div> --}}
                <div class="alert alert-danger" role="alert">
                    Pas d'informations trouvées!
                </div>
                @endforelse
                {{-- <div class="entry-pagination mb-40">

                </div> --}}
            </div>
            <!-- ================================================ -->
            @include("site.parties.barrLaterale")
            <!-- ================================= -->
        </div>
    </div>
</section>


@endsection
