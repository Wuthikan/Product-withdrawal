<div class="page-showing-pagination" style="display:flex">
    
    <div class="showing" style="flex:1">
        Showing {{ $paginator->firstItem() }}-{{ $paginator->lastItem() }} of {{ $paginator->total() }}
    </div>

    <div class="page-pagination">
    <nav aria-label="Page navigation">
    <ul class="pagination">

        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="page-number"><a href="#" aria-label="Previous" class="not-active">Previous</a></li>
        @else
            <li class="page-number"><a href="{{ $paginator->previousPageUrl() }}" aria-label="Pervious" rel="prev">Previous</a></li>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class="page-number"><span>{{ $element }}</span></li>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="active page-number"><a href="#">{{ $page }}</a></li>
                    @else
                        <li class="page-number"><a href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li class="page-number"><a href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="Next">Next</a></li>
        @else
            <li class="page-number"><a href="#" class="not-active" aria-label="Next">Next</a></li>
        @endif
    
    </ul>
    </nav>
    </div>
</div>
