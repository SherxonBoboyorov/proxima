@extends('layouts.front')

@section('content')

    <div class="main mb-52 h-fit">
      <div class="back-img px-4 h-[200px] mx-auto w-full bg-no-repeat bg-center flex items-center bg-cover  justify-center" style="background-image: url('{{ asset('front/src/public/images/back-img.jpg') }}');">
        <div class="text-content max-w-screen-xl mx-auto w-full">
          <div
            class="title mt-10 max-md:w-full font-[400] md:w-[60%] max-lg:text-[25px] lg:text-[30px] uppercase text-[white]">
            @lang('main.savollar')
          </div>
        </div>
      </div>
      <div class="w-full mx-auto px-3">
        <div class="div max-w-screen-xl mx-auto lg:my-10 max-lg:mt-0 pt-10 flex justify-between flex-wrap items-start">
          <div class="breadcrumb text-[#A4A4A4] text-[16px] flex items-center">
            <a href="{{ route('/') }}">@lang('main.bosh_safiha')</a>
            <span class="mx-2">\</span>
            <a>@lang('main.savollar')</a>
          </div>
          <div class="body-content w-full">
            <div class="accordion w-full py-5 mx-auto bg-[white]">

              <div class="w-full mx-auto" x-data="{selected:null}">
                @foreach($questions as $question)
                <div class="accordion-item">
                  <button type="button" class="w-full border-t text-dimgray border-b py-5 text-left flex justify-between" @click="selected !== {{ $question->id }} ? selected = {{ $question->id }} : selected = null">
                    <div x-bind:style="selected == {{ $question->id }} ? 'color: #FC7E1F' : 'color:#646464'" class="title transition-all duration-100 ease-linear sm:text-[18px] max-sm:text-[16px] font-[600]">
                      {{ $question->{'title_' . app()->getLocale()} }}
                    </div>

                    <div class="icon w-[18px] ml-5 h-[10px] transition-all duration-300 ease-linear mt-2" x-bind:style="selected == {{ $question->id }} ? 'transform: rotateZ(0deg)' : 'transform: rotateZ(180deg)'">
                      <svg xmlns="http://www.w3.org/2000/svg" class="w-full h-full" viewBox="0 0 14 8" fill="none">
                        <path d="M13 7L7 1L1 7" stroke="#646464" stroke-width="2" x-bind:style="selected == {{ $question->id }} ? 'stroke: #FC7E1F' : 'stroke: #646464'" stroke-linecap="round" stroke-linejoin="round" />
                      </svg>
                    </div>
                  </button>

                  <div class="relative overflow-hidden transition-all max-h-0 duration-700" x-ref="container{{ $question->id }}" x-bind:style="selected == {{ $question->id }} ? 'max-height: ' + $refs.container{{ $question->id }}.scrollHeight + 'px' : ''">
                    <div class="py-5 sm:text-[17px] text-dimgray max-sm:text-[15px] text-description-accordion">
                      <p>
                       {!! $question->{'content_' . app()->getLocale()} !!}
                      </p>
                    </div>
                  </div>
                </div>
                @endforeach
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  @endsection