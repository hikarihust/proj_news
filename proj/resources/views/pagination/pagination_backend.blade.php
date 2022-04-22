@if ($paginator->hasPages())
<nav aria-label="Page navigation example" class="zvn_pagination">
    <ul class="pagination zvn-pagination">
        {{-- First Link --}}
        <li class="{{ ($paginator->currentPage() == 1) ? ' disabled' : '' }}">
            <a href="{{ $paginator->url(1) }}">First</a>
        </li>
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="page-item disabled"><span>&laquo;</span></li>
        @else
            <li><a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev">&laquo;</a></li>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class=page-item "disabled"><span>{{ $element }}</span></li>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                <?php
                    $pageRanges = Config::get('zvn.pageRanges', 5);
                    $middle     = ceil($pageRanges/2);
                    $totalPages = $paginator->total();
                ?>
                @foreach ($element as $page => $url)
                    <?php
                        $min = $paginator->currentPage() - $middle + 1;
                        $max = $min + $pageRanges -1;
                        if($min <= 1){
                            $min = 1;
                            $max = $pageRanges;
                        }

                        if($max >= $totalPages){
                            $max = $totalPages;
                            $min = (($max - $pageRanges + 1) <= 1) ? 1 : ($max - $pageRanges + 1);
                        }
                    ?>

                    @if ($page == $paginator->currentPage())
                        <li class="page-item active"><span>{{ $page }}</span></li>
                    @else
                        @if ($page < $min || $page > $max)
                            <li class="page-item" style="display: none"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                        @else
                            <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li class="page-item"><a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next">&raquo;</a></li>
        @else
            <li class="page-item disabled"><span>&raquo;</span></li>
        @endif
        {{-- Last Link --}}
        <li class="{{ ($paginator->currentPage() == $paginator->lastPage()) ? ' disabled' : '' }}">
            <a href="{{ $paginator->url($paginator->lastPage()) }}">Last</a>
        </li>
    </ul>
</nav>
@endif
