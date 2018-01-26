@if ($paginator->hasPages())
    <nav class="pagination">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <a href="" class="pagination__page pagination__icon pagination__page--prev disabled"><i class="ui-arrow-right"></i></a>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" class="pagination__page pagination__icon pagination__page--prev" rel="prev"><i class="ui-arrow-right"></i></a>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <a href="" class="disabled pagination__page">{{ $element }}</a>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <span class="pagination__page pagination__page--current">{{ $page }}</span>
                    @else
                        <a href="{{ $url }}" class="pagination__page">{{ $page }}</a>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" class="pagination__page pagination__icon pagination__page--next"><i class="ui-arrow-left" rel="next"></i></a>
        @else
            <a href="" class="pagination__page pagination__icon pagination__page--next disabled"><i class="ui-arrow-left" rel="next"></i></a>
        @endif
    </nav>
@endif
