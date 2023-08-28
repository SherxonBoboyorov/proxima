@extends('layouts.front')

@section('content')

    <div class="main mb-52 h-fit">
      <div class="back-img px-4 h-[200px] mx-auto w-full bg-no-repeat bg-center flex items-center bg-cover  justify-center" style="background-image: url('{{ asset('front/src/public/images/back-img.jpg') }}');">

        <div class="text-content max-w-screen-xl mx-auto w-full">
          <div class="title mt-10 max-md:w-full font-[400] md:w-[60%] max-lg:text-[25px] lg:text-[30px] uppercase text-[white]">
            @lang('main.kompaniya_haqida')</div>
        </div>
      </div>
      <div class="w-full mx-auto px-3">
        <div class="div max-w-screen-xl mx-auto lg:my-10 max-lg:mt-0 pt-10 flex justify-between flex-wrap items-start">
          <div class="link-content lg:w-[15%] max-lg:w-max px-3">
            <div class="mb-3 text-dimgray before:text-orange active-link [&.active-link]:before:content-['_-'] [&.active-link]:text-orange [&.active-link]:before:-ml-[9px]">
              <a href="{{ route('about') }}" class="text-[18px] text-inherit hover:text-orange uppercase transition-all duration-150 ease-linear">
                @lang('main.kompaniya_haqida')
              </a>
            </div>
            <div class="mb-3 text-dimgray before:text-orange [&.active-link]:before:content-['_-'] [&.active-link]:text-orange [&.active-link]:before:-ml-2.5">
              <a href="{{ route('news') }}" class="text-[18px] text-inherit hover:text-orange uppercase transition-all duration-150 ease-linear">
                @lang('main.yangiliklar')
              </a>
            </div>
            <div
              class="mb-3 text-dimgray before:text-orange [&.active-link]:before:content-['_-'] [&.active-link]:text-orange [&.active-link]:before:-ml-2.5">
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
              <a href="{{ route('about') }}">@lang('main.kompaniya_haqida')</a>
            </div>

            <div class="body mt-2 h-fit">
              <div class="title max-md:w-full md:w-[60%] max-lg:text-[25px] lg:text-[30px] uppercase text-dimgray">
                @lang('main.kompaniya_haqida')</div>

              <div class="text-content text-dimgray sm:text-[18px] max-sm:text-[16px] mt-1">
                
                <div class="text ">
                  @foreach($pages as $page)
                  {!! $page->{'content_' . app()->getLocale()} !!}
                  @endforeach
                </div>

                <div class="some-inform-wrapper mt-10 mx-auto overflow-hidden h-fit w-full ">
                  @foreach($pageins as $pagein)
                    
                  <div class="w-full mx-auto flex flex-wrap md:h-[330px] sm:h-[280px] max-sm:h-fit justify-between some-inform sm:mb-10 max-sm:mb-5">
                    <div class="text-content sm:w-[40%] max-sm:w-full h-full flex sm:items-center max-sm:items-start">
                      <div class="box p-5 pl-0 w-full">
                        <div class="icon md:w-[70px] md:h-[70px] max-md:w-[50px]  max-md:h-[50px] max-md:pl-1">
                          <img src="{{ asset($pagein->icon) }}" alt="" class="w-full h-full -ml-3">
                        </div>
                        <div class="title text-dimgray [@media(min-width:768px)]:text-[22px] [@media(min-width:576px)]:text-[19px] [@media(min-width:480px)]:text-[17px] [@media(max-width:480px)]:text-[15px] uppercase">
                          {{ $pagein->{'title_' . app()->getLocale()} }}</div>
                        <hr class="w-[30px] bg-orange border-none h-[2px] md:my-3 max-md:my-1">
                        <div class="description text-dimgray max-h-[78px] overflow-hidden text-[16px]">
                        {!! $pagein->{'content_' . app()->getLocale()} !!}
                        </div>

                      </div>
                    </div>
                    <div class="img-content sm:w-[60%] max-sm:w-full sm:h-full max-sm:h-[250px]">
                      <img src="{{ asset($pagein->image) }}" alt="" class="w-full h-full object-cover">
                    </div>
                  </div>
                  @endforeach
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="map w-full mx-auto">
      <div class="sm:text-[30px] max-sm:text-[25px] text-dimgray text-center uppercase">@lang('main.tugallangan_loyihalar')</div>
      <div class="sm:text-[30px] max-sm:text-[25px] text-orange text-center font-[600]">1000 МВт</div>

      <div class="map-block  md:h-[600px] sm:h-[450px] max-sm:h-[370px] border mx-auto w-full mt-10">
        <iframe src="https://www.google.com/maps/d/embed?mid=1mdqhxOpUiquQr0a4s6M0bV5VhUUOZDI&amp;ehbc=2E312F" class="w-full h-full" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" style="border: 0" allowTransparency="true" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
  </div>

   @endsection