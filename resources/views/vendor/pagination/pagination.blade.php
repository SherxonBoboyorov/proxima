@if ($paginator->hasPages())
    <div class="mx-auto mt-10 w-full flex justify-center items-center">
        <div class="pagination flex justify-between items-center">
            @if (!$paginator->onFirstPage())
                    <a href="{{ $paginator->previousPageUrl() }}" class="pagination-prev w-fit h-fit flex justify-center items-center text-[18px] font-[600] m-3 group"rel="prev" aria-label="@lang('pagination.previous')"><i class="fas fa-angle-double-left"></i><svg xmlns="http://www.w3.org/2000/svg" width="12" height="22" viewBox="0 0 12 22" fill="none">
                        <path d="M11 1L0.999999 11L11 21" stroke="#E0E0E0" class="group-hover:stroke-orange"
                          stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                      </svg>
                    </a>
            @endif

            @foreach ($elements as $element)
                @if (is_string($element))
                    <li class="disabled" aria-disabled="true"><span>{{ $element }}</span></li>
                @endif

                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <a class="pagination-item sm:w-[50px] max-sm:w-[40px] max-sm:h-[40px] sm:h-[50px] flex justify-center items-center sm:text-[18px] max-sm:text-[16px] font-[600] m-3 text-dimgray border transition-all duration-100 ease-linear [&.active-pagination]:text-white hover:bg-orange hover:border-orange hover:text-white [&.active-pagination]:border-orange [&.active-pagination]:bg-orange active-pagination">{{ $page }}</a>
                        @else
                            <a class="pagination-item sm:w-[50px] max-sm:w-[40px] max-sm:h-[40px] sm:h-[50px]  flex justify-center items-center sm:text-[18px] max-sm:text-[16px] font-[600] m-3 text-dimgray border transition-all duration-100 ease-linear [&.active-pagination]:text-white hover:bg-orange hover:border-orange hover:text-white [&.active-pagination]:border-orange [&.active-pagination]:bg-orange" href="{{ $url }}">{{ $page }}</a>
                        @endif
                    @endforeach
                @endif
            @endforeach

            @if ($paginator->hasMorePages())
                    <a href="{{ $paginator->nextPageUrl() }}" class="pagination-next w-fit h-fit flex justify-center items-center text-[18px] font-[600] m-3 group" rel="next" aria-label="@lang('pagination.next')"><i class="fas fa-angle-double-righ"></i><svg xmlns="http://www.w3.org/2000/svg" width="12" height="22" viewBox="0 0 12 22" fill="none">
                        <path d="M1 1L11 11L1 21" stroke="#E0E0E0" class="group-hover:stroke-orange" stroke-width="2"
                          stroke-linecap="round" stroke-linejoin="round" />
                      </svg>
                    </a>
            @endif
        </div>
    </div>
@endif






