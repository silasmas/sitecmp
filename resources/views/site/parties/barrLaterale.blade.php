<div class="col-lg-3">
    <div class="sidebar-widget">
        {{-- <h6 class="mb-20">@lang("miscellaneous.inner_page.our_vision.activities.list5")</h6> --}}
        {{-- <div class="widget-search">
            <i class="fa fa-search"></i>
            <input type="search" class="form-control" placeholder="@lang("miscellaneous.inner_page.news.search")" />
        </div> --}}
    </div>

    <div class="sidebar-widget">
        <h6 class="mt-40 mb-20">Recents articles </h6>
        @forelse ($posts as $ps)
           <div class="recent-post clearfix">
            <div class="recent-post-image">
                <img class="img-fluid" src="{{ asset('storage/'.$ps->image_url) }}" alt="">
            </div>
            <div class="recent-post-info">
                <a href="{{ route('show_article',['id'=>$ps->id]) }}">{{ $ps->title }}</a>
                <span><i class="fa fa-calendar-o"></i>{{ \Carbon\Carbon::parse($ps->date_publication)->isoFormat('LLL') }}</span>
            </div>
        </div>
        @empty

        @endforelse

    </div>
    {{-- <div class="sidebar-widget clearfix">
        <h6 class="mt-40 mb-20">Archives</h6>
        <ul class="widget-categories">
            <li><a href="#"><i class="fa fa-angle-double-right"></i> December 2021</a></li>
            <li><a href="#"><i class="fa fa-angle-double-right"></i> November 2021</a></li>
            <li><a href="#"><i class="fa fa-angle-double-right"></i> October 2021</a></li>
            <li><a href="#"><i class="fa fa-angle-double-right"></i> September 2021</a></li>
            <li><a href="#"><i class="fa fa-angle-double-right"></i> August 2021</a></li>
        </ul>
    </div> --}}
    {{-- <div class="sidebar-widget">
        <h6 class="mt-40 mb-20">Tags</h6>
        <div class="widget-tags">
            <ul>
                <li><a href="{{ route('about') }}">Ken Luamba</a></li>
                <li><a href="{{ route('about') }}">Roland Dalo</a></li>
                <li><a href="{{ route('about') }}">CMP</a></li>
                <li><a href="{{ route('articles') }}">Evangile</a></li>
                <li><a href="{{ route('articles') }}">Dimanche</a></li>
                <li><a href="{{ route('articles') }}">Foi</a></li>
                <li><a href="{{ route('articles') }}">Sacerdoce</a></li>
            </ul>
        </div>
    </div> --}}




    <div class="sidebar-widget">
        <h6 class="mt-40 mb-20">@lang('miscellaneous.footer.newsletter.title')</h6>
        <div class="widget-newsletter">
            <div class="newsletter-icon">
                <i class="fa fa-envelope-o"></i>
            </div>
            <div class="newsletter-content">
                <i>@lang('miscellaneous.footer.newsletter.description')</i>
            </div>
            <div class="newsletter-form mt-20">
                <form action="{{ route('newsletter') }}" method="POST" name="mc-embedded-subscribe-form"
                    class="validate" id="newsletter">
                    @csrf
                    <div class="mb-3">
                        <input type="email" class="form-control" placeholder="Email" name="email">
                    </div>
                    <button class="button d-grid" type="submit" name="submitbtn"
                        id="btnNews">@lang('miscellaneous.footer.newsletter.btn')</button>
                </form>
            </div>
        </div>
    </div>

</div>
