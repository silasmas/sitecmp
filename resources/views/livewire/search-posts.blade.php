
<div>
    <div class="sidebar-widget">
        <h6 class="mb-20">@lang("miscellaneous.inner_page.our_vision.activities.list5")</h6>
        {{-- <div class="widget-search">
            <i class="fa fa-search">{{ $query }}</i>
            <input type="search" class="form-control" placeholder="@lang("miscellaneous.inner_page.news.search")"
                wire:model="query" />
            <!-- Indicateur de chargement -->
            <div wire:loading>
                <div class="text-center">
                    <div class="spinner-border text-primary" role="status">
                        <span class="">{{ $query }}</span>
                    </div>
                </div>
            </div> --}}
            <ul class="list-group">
                @forelse ($results as $result)
                <li class="list-group-item">
                    <a href="{{ route('show_article', ['slug' => creatSlug($result->id)]) }}">
                        {{ $result->title }}
                    </a>
                    <small class="text-muted d-block">
                        Publié le {{ \Carbon\Carbon::parse($result->date_publication)->isoFormat('LLL') }}
                    </small>
                </li>
                @empty
                <li class="list-group-item">Aucun article trouvé.</li>
                @endforelse
            </ul>
        </div>
    </div>
</div>
