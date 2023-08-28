@if ($paginator->hasPages())
        <div class="other-btns md:w-fit flex justify-between items-center max-md:w-full max-md:-translate-y-6">
            @if (!$paginator->onFirstPage())
                    <a href="{{ $paginator->previousPageUrl() }}" class="sm:py-2 sm:px-3 max-sm:py-1 max-sm:px-2 uppercase text-dimgray sm:text-[14px] text-center max-sm:text-[12px] border border-[#E0E0E0] mr-2" rel="prev" aria-label="@lang('pagination.previous')"><i class="fas fa-angle-double-left"></i></a>
                    @lang('main.oldingi_yangiliklar')
            @endif

            @if ($paginator->hasMorePages())
                    <a href="{{ $paginator->nextPageUrl() }}" class="sm:py-2 sm:px-3 max-sm:py-1 max-sm:px-2 uppercase text-dimgray sm:text-[14px]  text-center max-sm:text-[12px] border border-[#E0E0E0]" rel="next" aria-label="@lang('pagination.next')"><i class="fas fa-angle-double-righ"></i></a>
                    @lang('main.keyingi_yangiliklar')
            @endif
        </div>
@endif
