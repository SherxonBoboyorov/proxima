@extends('layouts.front')

@php
    $months = [
      // 2024 => 2024,
      2023 => 2023,
      2022 => 2022,
      2021 => 2021,
      2020 => 2020,
      2019 => 2019,
      2018 => 2018,
      2017 => 2017,
    ];

@endphp

@section('content')

    <div class="main mb-52 h-fit">
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
              <a href="{{ route('news') }}" class="text-[18px] text-inherit hover:text-orange uppercase transition-all duration-150 ease-linear">
                @lang('main.yangiliklar')
              </a>
            </div>
            <div class="mb-3 text-dimgray before:text-orange [&.active-link]:before:content-['_-'] [&.active-link]:text-orange [&.active-link]:before:-ml-2.5">
              <a href="{{ route('team') }}" class="text-[18px] text-inherit hover:text-orange uppercase transition-all duration-150 ease-linear">
                @lang('main.jamoa')
              </a>
            </div>
            <div class="mb-3 text-dimgray before:text-orange [&.active-link]:before:content-['_-'] [&.active-link]:text-orange [&.active-link]:before:-ml-2.5">
              <a href="{{ route('contact') }}" class="text-[18px] text-inherit hover:text-orange uppercase transition-all duration-150 ease-linear">
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

            @foreach($years as $value)
            <div id="filterForm" class="years flex justify-start items-center my-4 overflow-auto">
                 @csrf
                 @foreach($months as $k=>$item)
                   <a href="{{ route('news', ["year" => $k]) }}" class="mr-3 text-dimgray [&.active-year]:text-orange text-[16px]" name="year">{{ $item }}</a>
                 @endforeach
                </div>
            @endforeach

          <div id="result_section">
            <div class="body mt-2 h-fit">

              <div class="card-wrapper w-full mt-7">
                @foreach($news as $new)
                <div class="card w-full mb-7 sm:h-[280px] max-sm:h-[200px] [@media(max-width:450px)]:h-fit">
                  <a href="http://proxima.sosgroup.uz/ru/news/solnechnye-paneli-eto-ekologicheski-chistyy-istochnik-energii" class="card-content flex flex-wrap w-full h-full  border">
                    <div
                      class="img-content h-full [@media(min-width:450px)]:w-[45%] [@media(max-width:450px)]:w-full [@media(max-width:450px)]:h-[200px]">
                      <img src="{{ asset($new->image) }}" alt="" class="w-full h-full object-cover">
                    </div>
                    <div
                      class="text-content [@media(min-width:450px)]:w-[55%] [@media(max-width:450px)]:w-full sm:px-7 max-sm:px-4 py-4 flex items-center">
                      <div class="text-body h-fit w-full">
                        <div class="date text-orange text-[14px]">{{  date('d.m.Y', strtotime($new->created_at)) }}</div>
                        <div
                          class="title text-dimgray font-[600] my-1 sm:text-[20px] max-sm:text-[18px] overflow-hidden">
                          {{ $new->{'title_' . app()->getLocale()} }}
                        </div>
                        <div
                          class="description text-dimgray sm:text-[16px] max-sm:text-[14px] sm:max-h-[121px] max-sm:max-h-[65px] overflow-hidden">
                          {!! $new->{'content_' . app()->getLocale()} !!}
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
                @endforeach
              </div>
            
             {{ $news->links("vendor.pagination.pagination")}}

            </div>
          </div>
          </div>
        </div>
      </div>
    </div>

 @endsection
 @section('pageScripts')
    <!-- flot charts scripts-->
    <script src="{{ asset('front/js/filter.js') }}"></script>
@endsection