<section class="blog blog-grid-3-column white-bg page-section-ptb">
    <div class="container">
        <div class="row">
            @forelse ($eventbunda as $ps)
            @forelse ($ps->posts as $p)
            <div class="col-lg-4 col-md-4">
                <div class="blog-entry mb-50">
                    <div class="entry-image clearfix">
                        <img class="img-fluid" src="{{ asset('storage/'.$p->image_url) }}" alt="">
                    </div>
                    <div class="blog-detail">
                        <div class="entry-title mb-10">
                            <a href="#">{{ $p->title }}</a>
                        </div>
                        <div class="entry-meta mb-10">
                            <ul>
                                <li> <i class="fa fa-folder-open-o"></i> <a href="#">Bunda</a>
                                    <a href="#">{{ $p->minister->fullname??$p->author}}
                                    </a> </li>
                                <li><a href="#"><i class="fa fa-comment-o"></i> {{ $ps->total}}</a></li>
                                <li><a href="#"><i class="fa fa-calendar-o"></i>
                                {{\Carbon\Carbon::parse($p->date_publication)->isoFormat('LLL') }}</a></li>
                            </ul>
                        </div>
                        <div class="entry-content">
                            <p>{{ $p->count}}</p>
                        </div>
                        <div class="entry-share clearfix">
                            <div class="entry-button">
                                <a class="button arrow" href="">@lang('miscellaneous.inner_page.news.link')<i class="fa fa-angle-right"
                                        aria-hidden="true"></i></a>
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
            @empty

            @endforelse
            @empty

            @endforelse
        </div>
    </div>
</section>


{{-- <div class="col-lg-12">
    <div class="isotope-filters">
        @forelse ($eventbunda as $ev)
        <button data-filter="" class="active">Tous</button>
        <button data-filter="{{'.'.$ev->year}}">{{ $ev->designation }}</button>
        @empty

        @endforelse
    </div>
    <div class="isotope full-screen columns-4">
        <div class="row">
            @include("site.pages.bunda.playliste")
            <div class="col-lg-4 col-md-4">
                <div class="blog-entry mb-50">
                    <div class="entry-image clearfix">
                        <img class="img-fluid" src="images/blog/01.jpg" alt="">
                    </div>
                    <div class="blog-detail">
                        <div class="entry-title mb-10">
                            <a href="#">Blogpost With Image</a>
                        </div>
                        <div class="entry-meta mb-10">
                            <ul>
                                <li> <i class="fa fa-folder-open-o"></i> <a href="#"> Design,</a> <a href="#"> HTML5
                                    </a> </li>
                                <li><a href="#"><i class="fa fa-comment-o"></i> 5</a></li>
                                <li><a href="#"><i class="fa fa-calendar-o"></i> 12 Aug 2021</a></li>
                            </ul>
                        </div>
                        <div class="entry-content">
                            <p>Quae laboriosam sunt hic perspiciatis, asperiores mollitia excepturi voluptatibus sequi
                                nostrum ipsam veniam omnis nihil! A ea maiores corporis. Lorem ipsum dolor sit amet,
                                consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                aliqua. Consectetur, assumenda provident lorem ipsum dolor sit amet, consectetur
                                adipisicing elit. </p>
                        </div>
                        <div class="entry-share clearfix">
                            <div class="entry-button">
                                <a class="button arrow" href="#">Read More<i class="fa fa-angle-right"
                                        aria-hidden="true"></i></a>
                            </div>
                            <div class="social list-style-none float-end">
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
