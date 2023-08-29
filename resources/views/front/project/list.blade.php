@extends('layouts.front')

@section('content')

<div class="main mb-20 h-fit">
    <div class="back-img px-4 h-[200px] mx-auto w-full bg-no-repeat bg-center flex items-center bg-cover  justify-center" style="background-image: url('{{ asset('front/src/public/images/back-img.jpg') }}');">

      <div class="text-content max-w-screen-xl mx-auto w-full">
        <div class="title mt-10 max-md:w-full font-[400] md:w-[60%] max-lg:text-[25px] lg:text-[30px] uppercase text-[white]">
            @lang('main.loyihalar')
        </div>
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
            <div id="project-wrapper" class="project-wrapper flex flex-wrap mt-5 w-full justify-between">
                 @foreach($projects as $project)
                   <a href="{{ route('project', $project->id) }}" class="project mb-2 md:h-[400px] sm:h-[350px] max-sm:h-[280px] border w-full bg-no-repeat bg-cover bg-center flex flex-wrap items-stretch relative" style="background-image: url({{ asset($project->image) }});">
                      <div class="top-text w-full h-fit absolute left-0 top-0 px-7 py-5">
                         <div class="title md:text-[30px] sm:text-[26px] max-sm:text-[22px] text-white max-md:truncate">
                           {{ $project->{'title_' . app()->getLocale()} }}</div>
                          <div class="description mt-3 sm:text-[20px] max-sm:text-[17px] overflow-hidden sm:max-h-[65px] max-md:max-h-[50px] text-white">
                              {!! $project->{'sub_content_' . app()->getLocale()} !!}
                            </div>
                          </div>
          
                          <div class="bottom-text w-full h-fit bottom-0 text-orange absolute left-0 px-7 py-5">
                            <!-- text is here -->
                            <div class="title md:text-[30px] sm:text-[26px] max-sm:text-[22px] max-sm:truncate">
                              {!! $project->{'statistic_' . app()->getLocale()} !!}</div>
                          </div>
                        </a>
                    @endforeach
                </div>
               <div class="flex justify-center items-center w-full mt-5">
            <button id="moreProjectBtn" onclick="moreProject()" class="border border-orange py-3 px-4 text-orange text-[16px] uppercase">@lang('main.koproq_korsatish')</button>
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