@extends('layouts.front')

@section('content')

    <div class="main mb-20 h-fit">
      <div class="back-img px-4 h-[200px] mx-auto w-full bg-no-repeat bg-center flex items-center bg-cover  justify-center" style="background-image: url('{{ asset('front/src/public/images/back-img.jpg') }}');">
        <div class="text-content max-w-screen-xl mx-auto w-full">
          <div class="title mt-10 max-md:w-full font-[400] md:w-[60%] max-lg:text-[25px] lg:text-[30px] uppercase text-[white]">
            @lang('main.jamoa')
          </div>
        </div>
      </div>
      <div class="w-full mx-auto px-3">
        <div class="div max-w-screen-xl mx-auto lg:my-10 max-lg:mt-0 pt-10 flex justify-between flex-wrap items-start">
          <div class="link-content lg:w-[15%] max-lg:w-max px-3">
            <div
              class="mb-3 text-dimgray before:text-orange [&.active-link]:before:content-['_-'] [&.active-link]:text-orange [&.active-link]:before:-ml-[9px]">
              <a href="{{ route('about') }}" class="text-[18px] text-inherit hover:text-orange uppercase transition-all duration-150 ease-linear">
                @lang('main.kompaniya_haqida')
              </a>
            </div>
            <div
              class="mb-3  text-dimgray before:text-orange [&.active-link]:before:content-['_-'] [&.active-link]:text-orange [&.active-link]:before:-ml-2.5">
              <a href="{{ route('news') }}" class="text-[18px] text-inherit hover:text-orange uppercase transition-all duration-150 ease-linear">
                @lang('main.yangiliklar')
              </a>
            </div>
            <div
              class="mb-3 active-link text-dimgray before:text-orange [&.active-link]:before:content-['_-'] [&.active-link]:text-orange [&.active-link]:before:-ml-2.5">
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
          <div class="body-content lg:w-[80%] max-lg:w-full px-1">
            <div class="breadcrumb text-[#A4A4A4] text-[16px] flex items-center">
              <a href="{{ route('/') }}">@lang('main.bosh_safiha') </a>
              <span class="mx-2">\</span>
              <a href="{{ route('team') }}">@lang('main.jamoa')</a>
            </div>

            <div class="body mt-2 h-fit">
              <div class="accordion w-full py-5 mx-auto bg-[white]">
                <div class="w-full mx-auto" x-data="{selected:null}">
                  @foreach($teams as $team)
                  <div class="accordion-item mb-5 border">
                    <div class="w-full border-b text-dimgray sm:p-7 max-sm:p-4 text-left flex justify-start items-center">
                      <div class="content flex w-full justify-start items-center flex-wrap">
                        <div class="img-content max-sm:w-[150px] max-sm:h-[150px] sm:w-[200px] sm:h-[200px] [@media(max-width:576px)]:w-full rounded-full overflow-hidden mr-2">
                          <div class="w-full h-full [@media(max-width:576px)]:w-fit mx-auto">
                            <img src="{{ asset($team->image) }}" class="w-full h-full" alt="">
                          </div>
                        </div>
                        <div class="text-content [@media(max-width:576px)]:w-full [@media(min-width:576px)]:text-left [@media(max-width:576px)]:text-center [@media(max-width:576px)]:mt-3 [@media(max-width:576px)]:p-0 [@media(min-width:576px)]:pl-6">
                          <div class="name md:text-[28px] sm:text-[25px] max-sm:text-[22px] font-[600] text-dimgray">
                            {{ $team->{'name_' . app()->getLocale()} }}</div>
                          <div class="job-position md:text-[18px] sm:text-[16px] max-sm:text-[14px] my-2">
                            @lang('main.lavozim'): <span class="font-600] ml-2"> {{ $team->{'job_title_' . app()->getLocale()} }} </span>
                          </div>
                          <div class="phone-number md:text-[18px] sm:text-[16px] max-sm:text-[14px] my-2">
                            @lang('main.telefon_raqami'): <span class="font-600] ml-2"> {{ $team->phone_number }} </span>
                          </div>
                          <div class="email md:text-[18px] sm:text-[16px] max-sm:text-[14px] my-2">
                            @lang('main.email'): <span class="font-600] ml-2"> {{ $team->email }} </span>
                          </div>

                          <div class="sm:mt-5 max-sm:mt-3">
                            <button type="button" @click="selected !== {{ $team->id }} ? selected = {{ $team->id }} : selected = null"
                              class="border border-orange  py-2 px-3 text-orange uppercase [@media(min-width:768px)]:text-[14px] [@media(min-width:576px)]:text-[12px] [@media(max-width:576px)]:text-[10px]">@lang('main.koproq')</button>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="relative overflow-hidden transition-all max-h-0 duration-700" x-ref="container{{ $team->id }}" x-bind:style="selected == {{ $team->id }} ? 'max-height: ' + $refs.container{{ $team->id }}.scrollHeight + 'px' : ''">
                      <div class="sm:p-8 max-sm:p-5 sm:text-[17px] text-dimgray max-sm:text-[15px] text-description-accordion">
                        <p>
                         {!! $team->{'description_' . app()->getLocale()} !!}
                        </p>
                      </div>
                    </div>
                  </div>
                  @endforeach

                  
                  {{-- @endforeach --}}
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    
@endsection