<div class="col-lg-3">
    {{-- @livewire("search-posts") --}}
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

    <div class="sidebar-widget">
        <h6 class="mb-20">Recents articles</h6>

            @forelse ($posts->take(5) as $p)

            <div class="recent-post clearfix">
                <div class="recent-post-image">
                    <img class="img-fluid" src="{{ asset('storage/'.$p->image_url) }}" alt="">
                </div>
                <div class="recent-post-info">
                    <a href="{{ route('show_article', ['slug' => creatSlug($p->id)]) }}">{{ $p->title }}</a>
                    <span><i class="fa fa-calendar-o"></i>{{\Carbon\Carbon::parse($p->date_publication)->isoFormat('LLL') }}</span>
                </div>
            </div>
            @empty
            <li class="list-group-item">Aucun article trouvé.</li>
            @endforelse
        <h6 class="mt-40 mb-20">Tags</h6>
        <div class="widget-tags">
            <ul>
                <li><a href="{{ route('articles') }}">Touts les articles</a></li>
                <li><a href="{{ route('article',['slug'=>" Roland Dalo"]) }}">Roland Dalo</a></li>
                @forelse ($pasteurs as $p)
                <li><a href="{{ route('article',['slug'=>$p->fullname]) }}">{{ $p->fullname }}</a></li>
                @empty

                @endforelse
                <br>
                <h6 class="mt-40 mb-20">Tags</h6>
                <li><a href="{{ route('articles_event',['slug'=>"bunda"]) }}">Bunda</a></li>
                <li><a href="{{ route('articles_day',['slug'=>"Dimanche"]) }}">Dimanche</a></li>
                <li><a href="{{ route('articles_day',['slug'=>"Mercredi"]) }}">Mercredi</a></li>
                <li><a href="{{ route('articles_day',['slug'=>"Jeudi"]) }}">Jeudi Etoko</a></li>
                {{-- <li><a href="{{ route('articles') }}">Sacerdoce</a></li> --}}
            </ul>
        </div>
    </div>


</div>
