@if(!empty($paginator) && $paginator->hasPages())
    <footer class="panel-footer">
        <div class="row">
            <div class="col-sm-4 hidden-xs">
                <small class="text-muted inline m-t-sm m-b-sm">
                    显示数据 {{ ($paginator->currentPage() - 1) ? ($paginator->currentPage() - 1) *$paginator->perPage() : 1}}
                    - {{($paginator->lastPage() == $roles->currentPage()) ? $paginator->total() : $paginator->currentPage() * $paginator->perPage()}} 共 {{$paginator->total()}} 条
                </small>
            </div>
            <div class="col-sm-4 text-center">
            </div>
            <div class="col-sm-4 text-right text-center-xs">
                @if ($paginator->hasPages())
                    <ul class="pagination pagination-sm m-t-none m-b-none">
                        @if ($paginator->onFirstPage())
                            <li class="disabled"><span>&laquo;</span></li>
                        @else
                            <li><a href="{{ $paginator->previousPageUrl() }}" rel="prev">&laquo;</a></li>
                        @endif
                        @for ($i = 1; $i <= $paginator->lastPage(); $i++)
                            <li class="{{ ($paginator->currentPage() == $i) ? ' active' : '' }}">
                                <a href="{{ $paginator->url($i) }}">{{ $i }}</a>
                            </li>
                        @endfor
                        @if ($paginator->hasMorePages())
                            <li><a href="{{ $paginator->nextPageUrl() }}" rel="next">&raquo;</a></li>
                        @else
                            <li class="disabled"><span>&raquo;</span></li>
                            @endif
                            </a>
                            </li>
                    </ul>
                @endif
            </div>
        </div>
    </footer>
@endif

