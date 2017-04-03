@if ($paginator->hasPages())
    <ul class="Pagination">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="Pagination__item Pagination__item--disabled"><a href="#">&laquo;</a></li>
        @else
            <li class="Pagination__item"><a href="{{ $paginator->previousPageUrl() }}" rel="prev">&laquo;</a></li>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class="Pagination__item Pagination__item--disabled"><a href="#">{{ $element }}</a></li>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="Pagination__item Pagination__item--active"><a href="#">{{ $page }}</a></li>
                    @else
                        <li class="Pagination__item"><a href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li class="Pagination__item"><a href="{{ $paginator->nextPageUrl() }}" rel="next">&raquo;</a></li>
        @else
            <li class="Pagination__item Pagination__item--disabled"><a href="#">&raquo;</a></li>
        @endif
    </ul>
@endif
