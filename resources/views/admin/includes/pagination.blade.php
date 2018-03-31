@if ($paginator->lastPage() > 1)
<div class="paginate text-center">
    @if($paginator->currentPage() != 1)
        <a href="{{ $paginator->url($paginator->currentPage()-1) }}" class="page">Previous</a>
    @endif
    @for ($i = 1; $i <= $paginator->lastPage(); $i++)
        @if($paginator->currentPage() == $i)
            <span class="page active">{{ $i }}</span>
        @else
            <a href="{{ $paginator->url($i) }}" class="page">{{ $i }}</a>
        @endif
    @endfor
    @if($paginator->currentPage() != $paginator->lastPage())
        <a href="{{ $paginator->url($paginator->currentPage()+1) }}" class="page {{ ($paginator->currentPage() == $paginator->lastPage()) ? ' disabled' : '' }}">Next</a>
    @endif
</div>
@endif