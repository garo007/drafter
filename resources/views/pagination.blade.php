@if ($paginator->lastPage() > 1)
    <div class="pagination_num_wrapper">
        <div class="{{ ($paginator->currentPage() == 1) ? ' disabled' : '' }}">
            <a class="pagination_number " href=" {{ $paginator->url(1) }}">Previous</a>
        </div>
        @for ($i = 1; $i <= $paginator->lastPage(); $i++)
            <div class="{{ ($paginator->currentPage() == $i) ? ' active' : '' }}">
                <a class="pagination_number" href="{{ $paginator->url($i) }}">{{ $i }}</a>
            </div>
        @endfor
        <div {{ ($paginator->currentPage() == $paginator->lastPage()) ? ' disabled' : '' }}">
            <a class="pagination_number" href="{{ $paginator->url($paginator->currentPage()+1) }}" >Next</a>
        </div>
    </div>
@endif
