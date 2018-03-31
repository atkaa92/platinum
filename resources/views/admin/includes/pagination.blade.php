@if ($paginator->lastPage() > 1)
<div class="paginate text-center">
    <a href="#" class="page">Previous</a>
    @for ($i = 1; $i <= $paginator->lastPage(); $i++)
        @if($paginator->currentPage() == $i)
            <span class="page active">{{ $i }}</span>
        @else
            <a href="{{ $paginator->url($i) }}" class="page">{{ $i }}</a>
        @endif
    @endfor
    <a href="{{ $paginator->url($paginator->currentPage()+1) }}" class="page {{ ($paginator->currentPage() == $paginator->lastPage()) ? ' disabled' : '' }}">Next</a>
</div>
@endif