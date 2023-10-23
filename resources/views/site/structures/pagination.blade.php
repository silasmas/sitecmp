
<!-- Pagination Start -->
<nav class="pagination--nav text-center">
@if ($paginator->lastPage() > 1)
    <ul class="pagination">
        <li class="prev {{ ($paginator->currentPage() == 1) ? ' disabled' : '' }}"><a href="{{ $paginator->url(1) }}" class="btn btn-default active"><i class="fa fa-angle-double-left"></i></a></li>
        @for ($i = 1; $i <= $paginator->lastPage(); $i++)
        <li class="{{ ($paginator->currentPage() == $i) ? ' active' : '' }}"><a href="{{ $paginator->url($i) }}" class="btn btn-default">{{ $i }}</a></li>
        @endfor
        <li class="next {{ ($paginator->currentPage() == $paginator->lastPage()) ? ' disabled' : '' }}"><a href="{{ $paginator->url($paginator->currentPage()+1) }}" class="btn btn-default active"><i class="fa fa-angle-double-right"></i></a></li>
    </ul>
@endif
</nav>
<!-- Pagination End -->