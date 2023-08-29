@extends('layouts.front')

@section('content')

    <div class="main mb-20 h-fit">
      <div class="back-img px-4 h-[200px] mx-auto w-full bg-no-repeat bg-center flex items-center bg-cover  justify-center" style="background-image: url('{{ asset('front/src/public/images/back-img.jpg') }}');">

        <div class="text-content max-w-screen-xl mx-auto w-full">
          <div class="title mt-10 max-md:w-full font-[400] md:w-[60%] max-lg:text-[25px] lg:text-[30px] uppercase text-[white]">
            @lang('main.yangiliklar')</div>
        </div>
      </div>
      <div class="w-full mx-auto px-3">
        <div class="div max-w-screen-xl mx-auto lg:my-10 max-lg:mt-0 pt-10 flex justify-between flex-wrap items-start">
          <div class="link-content lg:w-[15%] max-lg:w-max px-3">
            <div class="mb-3 text-dimgray before:text-orange [&.active-link]:before:content-['_-'] [&.active-link]:text-orange [&.active-link]:before:-ml-[9px]">
              <a href="{{ route('about') }}" class="text-[18px] text-inherit hover:text-orange uppercase transition-all duration-150 ease-linear">
                @lang('main.kompaniya_haqida')
              </a>
            </div>
            <div
              class="mb-3 active-link text-dimgray before:text-orange [&.active-link]:before:content-['_-'] [&.active-link]:text-orange [&.active-link]:before:-ml-2.5">
              <a href="{{ route('news') }}"
                class="text-[18px] text-inherit hover:text-orange uppercase transition-all duration-150 ease-linear">
                @lang('main.yangiliklar')
              </a>
            </div>
            <div
              class="mb-3 text-dimgray before:text-orange [&.active-link]:before:content-['_-'] [&.active-link]:text-orange [&.active-link]:before:-ml-2.5">
              <a href="{{ route('team') }}"
                class="text-[18px] text-inherit hover:text-orange uppercase transition-all duration-150 ease-linear">
                @lang('main.jamoa')
              </a>
            </div>
            <div
              class="mb-3 text-dimgray before:text-orange [&.active-link]:before:content-['_-'] [&.active-link]:text-orange [&.active-link]:before:-ml-2.5">
              <a href="{{ route('contact') }}"
                class="text-[18px] text-inherit hover:text-orange uppercase transition-all duration-150 ease-linear">
                @lang('main.kontaktlar')
              </a>
            </div>
          </div>
          <div class="body-content lg:w-[80%] max-lg:w-full overflow-hidden px-1">
            <div class="breadcrumb text-[#A4A4A4] text-[16px] flex items-center">
              <a href="{{ route('/') }}">@lang('main.bosh_safiha') </a>
              <span class="mx-2">\</span>
              <a href="{{ route('news') }}">@lang('main.yangiliklar')</a>
            </div>

            <div class="btns flex w-full justify-between items-center sm:mt-2 max-sm:mt-4 flex-wrap">
              <div
                class="all-news-btn w-fit max-md:w-full h-full max-md:flex max-md:justify-end max-md:items-start max-md:-translate-y-[38px]">
                <a href="{{ route('news') }}" class="flex justify-between items-center w-fit">
                  <svg xmlns="http://www.w3.org/2000/svg" width="9" height="16" viewBox="0 0 9 16" fill="none">
                    <path d="M8 1L0.999999 8L8 15" stroke="#FC7E1F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                  <span class="ml-3 text-dimgray sm:text-[16px] max-sm:text-[14px] uppercase">@lang('main.barcha_yangiliklar')</span>
                </a>
              </div>
              
              {{-- <div class="other-btns md:w-fit flex justify-between items-center max-md:w-full max-md:-translate-y-6">
                <a href="#" class="sm:py-2 sm:px-3 max-sm:py-1 max-sm:px-2 uppercase text-dimgray sm:text-[14px] text-center max-sm:text-[12px] border border-[#E0E0E0] mr-2">
                  @lang('main.oldingi_yangiliklar')
                </a>
                <a href="#" class="sm:py-2 sm:px-3 max-sm:py-1 max-sm:px-2 uppercase text-dimgray sm:text-[14px]  text-center max-sm:text-[12px] border border-[#E0E0E0]">
                    @lang('main.keyingi_yangiliklar')
                </a>
              </div> --}}
            </div>

            <div class="date text-orange sm:text-[16px] max-sm:text-[14px] mt-3">{{  date('d.m.Y', strtotime($new->created_at)) }}</div>
            <div class="title text-dimgray md:text-[34px] sm:text-[28px] max-sm:text-[24px] font-[600]">
              {{ $new->{'title_' . app()->getLocale()} }}
            </div>
            <div class="body mt-2 h-fit">
              <div class="text-content text-dimgray sm:text-[18px] max-sm:text-[15px] mt-1">
                <div class="img-content w-full mt-6 md:h-[500px] sm:h-[400px] max-sm:h-[250px]">
                  <img src="{{ asset($new->image) }}" class="w-full h-full object-cover" alt="">  
                </div><br>
                 {!! $new->{'content_' . app()->getLocale()} !!}
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    @endsection