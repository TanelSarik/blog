@if ($paginator->hasPages())
    <nav class="flex justify-center py-4">
        <div class="join w-full max-w-md">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <button class="join-item btn btn-outline btn-disabled w-1/2">
                    @lang('pagination.previous')
                </button>
            @else
                <a href="{{ $paginator->previousPageUrl() }}" rel="prev" class="join-item btn btn-outline w-1/2">
                    @lang('pagination.previous')
                </a>
            @endif

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <a href="{{ $paginator->nextPageUrl() }}" rel="next" class="join-item btn btn-outline w-1/2">
                    @lang('pagination.next')
                </a>
            @else
                <button class="join-item btn btn-outline btn-disabled w-1/2">
                    @lang('pagination.next')
                </button>
            @endif
        </div>
    </nav>
@endif
