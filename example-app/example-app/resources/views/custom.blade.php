@if ($paginator->hasPages())
    <nav class="custom-pagination">
        <ul class="pagination">
            @if ($paginator->onFirstPage())
                <li class="page-item disabled"><span>&laquo; Anterior</span></li>
            @else
                <li class="page-item"><a href="{{ $paginator->previousPageUrl() }}" rel="prev">&laquo; Anterior</a></li>
            @endif

            @foreach ($elements as $element)
                @if (is_string($element))
                    <li class="page-item disabled"><span>{{ $element }}</span></li>
                @endif

                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="page-item active"><span>{{ $page }}</span></li>
                        @else
                            <li class="page-item"><a href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            @if ($paginator->hasMorePages())
                <li class="page-item"><a href="{{ $paginator->nextPageUrl() }}" rel="next">Siguiente &raquo;</a></li>
            @else
                <li class="page-item disabled"><span>Siguiente &raquo;</span></li>
            @endif
        </ul>
    </nav>
@endif