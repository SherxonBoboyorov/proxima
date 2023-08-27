@extends('layouts.front')

@section('content')

    <div class="main mb-20 h-fit">
      <div class="back-img px-4 h-[200px] mx-auto w-full bg-no-repeat bg-center flex items-center bg-cover  justify-center" style="background-image: url('{{ asset('front/src/public/images/back-img.jpg') }}');">

        <div class="text-content max-w-screen-xl mx-auto w-full">
          <div class="title mt-10 max-md:w-full font-[400] md:w-[60%] max-lg:text-[25px] lg:text-[30px] uppercase text-[white]">
            @lang('main.kompaniya_haqida')</div>
        </div>
      </div>
      <div class="w-full mx-auto px-4">
        <div class="div max-w-screen-xl mx-auto lg:my-10 max-lg:mt-0 pt-10">
          <div class="breadcrumb text-[#A4A4A4] sm:text-[16px] max-sm:text-[14px] flex items-start">
            <a href="{{ route('/') }}">@lang('main.bosh_safiha') </a>
            <span class="mx-2">\</span>
            <a href="{{ route('projects') }}">@lang('main.loyihalar')</a>
          </div>
          <div class="body-content h-fit w-full">

            <div class="title mt-3 text-dimgray md:text-[32px] sm:text-[26px] max-sm:text-[22px] font-[600]">
              {{ $project->{'title_' . app()->getLocale()} }}
            </div>

            <div class="text text-dimgray sm:text-[17px] max-sm:text-[15px]">
              {!! $project->{'sub_content_' . app()->getLocale()} !!}
            </div>

            <div class="numbers mt-5 flex flex-wrap  w-full">
              {!! $project->{'statistic_' . app()->getLocale()} !!}</div>
            </div>

            <div class="swiper mySwiper mt-16">
              <div class="swiper-wrapper">
                @foreach($project->gallaries as $gallary)
                <div class="swiper-slide border md:h-[500px] sm:h-[400px] max-sm:h-[260px] flex justify-center items-center">
                  <img src="{{ $gallary->image }}" class="w-full h-full object-cover" alt="{{ $gallary->name }}">
                </div>
                @endforeach
              </div>
              <div class="swiper-button-next project-swiper-btns top-[54%] right-[4%] flex sm:w-[40px] max-sm:w-[30px] sm:h-[40px] max-sm:h-[30px] rounded-full bg-[#ebebeb3e]  ">
              </div>
              <div class="swiper-button-prev project-swiper-btns top-[54%] left-[4%] flex sm:w-[40px] max-sm:w-[30px] sm:h-[40px] max-sm:h-[30px] rounded-full bg-[#ebebeb3e]">
              </div>
            </div>

            <div class="text text-dimgray sm:text-[17px] mt-10 max-sm:text-[15px]">
              {!! $project->{'content_' . app()->getLocale()} !!}
            </div>

          </div>
        </div>
      </div>
    </div>

   @endsection