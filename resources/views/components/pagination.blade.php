<div class="pager">



@if ($paginator->hasPages())

<ul class="pagination">
        @if ($paginator->onFirstPage())

<li class="pager_number"><span>&lt;</span></li>

        @else

<li class="pager_number"><a href="{{ $paginator->previousPageUrl() }}" rel="prev">&laquo;</a></li>

        @endif
        @foreach ($elements as $element)
            @if (is_string($element))

<li class="pager_number"><span>{{ $element }}</span></li>

            @endif
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())

<li class="pager_number activ_page"><a href="#">{{ $page }}</a></li>

                    @else

<li class="pager_number"><a href="{{ $url }}">{{ $page }}</a></li>

                    @endif
                @endforeach
            @endif
        @endforeach
        @if ($paginator->hasMorePages())

<li class="pager_number"><a href="{{ $paginator->nextPageUrl() }}" rel="next">&raquo;</a></li>

        @else

<li class="pager_number"><span>&raquo;</span></li>

        @endif
    </ul>


@endif
</div>
