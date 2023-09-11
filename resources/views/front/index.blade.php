@extends('layouts.front')

@section('content')

    <div class="main mb-52 h-fit">
      @foreach($sliders as $slider)
      <div class="back-img px-4 max-lg:h-[550px] lg:h-[700px] mx-auto w-full bg-no-repeat bg-center flex items-center bg-cover  justify-center" style="background-image: url({{ asset($slider->image) }});">
        <div class="text-content max-w-screen-xl mx-auto w-full">
          <div class="title max-md:w-full md:w-[60%] max-lg:text-[30px] lg:text-[40px] uppercase text-[white]">{{ $slider->{'title_' . app()->getLocale()} }}</div>
          <div class="description max-lg:text-[16px] lg:text-[20px] my-2 mb-10 text-white max-md:w-full md:w-[60%]">
              {{ $slider->{'description_' . app()->getLocale()} }}
          </div>
          <a href="{{ $slider->link }}" class="border border-orange py-3 px-4 text-white text-[16px] uppercase">@lang('main.koproq')</a>
        </div>
      </div>
      @endforeach

      <!-- remove 4th child -->
      <div class="wrapper-centered mx-auto max-w-screen-xl py-5 flex flex-wrap justify-center items-start">
        @foreach($promotionals as $promotional)
        <div class="box p-5 [@media(min-width:768px)]:w-1/3 [@media(min-width:576px)]:w-1/2 [@media(max-width:576px)]:w-full">
          <div class="icon w-[100px] h-[100px] mx-auto">
            <img src="{{ asset($promotional->image) }}" alt="" class="w-full h-full">
          </div>
          <div class="title text-center text-dimgray text-[24px] uppercase">{{ $promotional->{'title_' . app()->getLocale()} }}</div>
          <hr class="mx-auto w-[30px] bg-orange border-none h-[2px] my-3">
          <div class="description text-center text-dimgray text-[16px] max-h-[100px] overflow-hidden">
            {!! $promotional->{'content_' . app()->getLocale()} !!}
          </div>
        </div>

        @endforeach
      </div>


      <div id="videoWrapper" class="back-video w-full mx-auto max-sm:h-[300px] sm:h-[400px] md:h-[500px] lg:h-[600px] cursor-pointer mt-6 relative">
        @foreach($videos as $video)
          
        <div class="video-play-wrapper absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">
          <div class="mx-auto  play w-[40px] h-[40px] sm:w-[60px] sm:h-[60px] border p-2 sm:p-3 rounded-full border-[rgba(255,255,255,0.30)] bg-[rgba(255,255,255,0.20)]">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-full h-full" viewBox="0 0 54 54" fill="none">
              <path d="M33.75 12.375H9C7.75737 12.375 6.75 13.3824 6.75 14.625V39.375C6.75 40.6177 7.75737 41.625 9 41.625H33.75C34.9927 41.625 36 40.6177 36 39.375V14.625C36 13.3824 34.9927 12.375 33.75 12.375Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
              <path d="M36 20.25L47.25 15.75V38.25L36 33.75" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
          </div>
          <div class="title sm:text-[30px] max-sm:text-[18px] mt-2 font-[100] text-center text-white uppercase">
            @lang('main.videoni_tomosha_qiling')
          </div>
        </div>
        <a data-fancybox href="{{ $video->video }}" class="w-full h-full video-href">
          <img id="videoImg" class="w-full h-full object-cover" src="{{ asset($video->image) }}" />
        </a>
        @endforeach
      </div>

      <div class="facade-wrapper mx-auto max-sm:h-[320px] sm:h-[390px] md:h-[490px] lg:h-[590px] w-full relative">
        @foreach($pages as $page)
        <img src="{{ asset($page->image) }}" alt="" class="w-full h-full object-cover">
        <div class="wrapper-centered w-1/2 absolute top-0 left-0 h-full bg-[#ffffffe8] z-10">
        </div>

        <div class="wrapper-centered max-w-screen-xl px-5 w-full absolute top-1/2 left-1/2 -translate-y-1/2 -translate-x-1/2  h-full bg-[#ff000000] z-20">
          <div class="left-part w-1/2 h-full flex justify-start items-center">
            <div class="box p-5 pl-0 w-full -mt-2">
              <div class="icon md:w-[100px] md:h-[100px] sm:w-[80px] sm:h-[80px] max-sm:w-[60px] max-sm:h-[60px] ">
                <img src="{{ asset('front/src/public/icons/facade-icon.png') }}" alt="" class="w-full h-full -ml-3">
              </div>
              <div class="title text-dimgray [@media(min-width:768px)]:text-[24px] [@media(min-width:576px)]:text-[20px] [@media(min-width:480px)]:text-[18px] [@media(max-width:480px)]:text-[16px] uppercase">
                @lang('main.kompaniya_haqida')</div>
              <hr class="w-[30px] bg-orange border-none h-[2px] md:my-3 max-md:my-1">
              <div class="description text-dimgray [@media(min-width:768px)]:max-h-[265px] [@media(min-width:640px)]:max-h-[210px] [@media(max-width:640px)]:max-h-[180px] overflow-hidden [@media(min-width:768px)]:text-[16px] [@media(min-width:640px)]:text-[14px] [@media(max-width:640px)]:text-[12px]">
                {{ $page->{'sub_content_' . app()->getLocale()} }}
              </div>
              <div class="sm:mt-4 max-sm:mt-2">
                <a href="{{ route('about') }}" class="border border-orange  py-2 px-3 text-orange uppercase [@media(min-width:768px)]:text-[14px] [@media(min-width:576px)]:text-[12px] [@media(max-width:576px)]:text-[10px]">@lang('main.koproq')</a>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>

    <div class="efficiency-wrapper mx-auto overflow-hidden [@media(min-width:768px)]:h-[600px] [@media(min-width:576px)]:h-[520px] [@media(min-width:480px)]:h-[420px] [@media(max-width:480px)]:h-[380px] max-w-screen-xl flex justify-between">
        @foreach($efficiencies as $efficiency)
        <div class="img-content w-1/2 h-full">
        <img src="{{ asset($efficiency->image) }}" alt="" class="w-full h-full object-cover">
      </div>
      <div class="text-content w-1/2 h-full flex items-center md:pl-10 max-md:pl-5">
        <div class="box p-5 pl-0 w-full -mt-2">
          <div class="icon md:w-[100px] md:h-[100px] sm:w-[80px] sm:h-[80px] max-sm:w-[60px] max-sm:h-[60px] ">
            <img src="{{ asset($efficiency->icon) }}" alt="" class="w-full h-full -ml-3">
          </div>
          <div class="title text-dimgray [@media(min-width:768px)]:text-[24px] [@media(min-width:576px)]:text-[20px] [@media(min-width:480px)]:text-[18px] [@media(max-width:480px)]:text-[16px] uppercase">
            {!! $efficiency->{'content_' . app()->getLocale()} !!}</div>
          <hr class="w-[30px] bg-orange border-none h-[2px] md:my-3 max-md:my-1">
          <div
            class="description text-dimgray [@media(min-width:768px)]:max-h-[360px] mt-2 [@media(min-width:576px)]:max-h-[340px] [@media(max-width:576px)]:max-h-[255px] overflow-hidden [@media(min-width:768px)]:text-[16px] [@media(min-width:576px)]:text-[14px] [@media(max-width:576px)]:text-[12px]">
            {!! $efficiency->{'statistic_content_' . app()->getLocale()} !!}
          </div>

        </div>
      </div>
      @endforeach
    </div>
      
      <div class="project-wrapper mx-auto max-sm:h-[320px] sm:h-[390px] md:h-[490px] lg:h-[590px] w-full relative">
        <img src="{{ asset('front/src/public/images/project-img.png') }}" alt="" class="w-full h-full object-cover">
        <div class="wrapper-centered w-1/2 absolute top-0 left-0 h-full bg-[#ffffffe8] z-10">
        </div>
        <div class="wrapper-centered max-w-screen-xl px-5 w-full absolute top-1/2 left-1/2 -translate-y-1/2 -translate-x-1/2  h-full bg-[#ff000000] z-20">
          <div class="left-part w-1/2 h-full flex justify-start items-center">
            <div class="box p-5 pl-0 w-full -mt-2">
              <div class="icon md:w-[100px] md:h-[100px] sm:w-[80px] sm:h-[80px] max-sm:w-[60px] max-sm:h-[60px] ">
                <img src="{{ asset('front//src/public/icons/project-icon.png') }}" alt="" class="w-full h-full -ml-3">
              </div>
              <div
                class="title text-dimgray [@media(min-width:768px)]:text-[24px] [@media(min-width:576px)]:text-[20px] [@media(min-width:480px)]:text-[18px] [@media(max-width:480px)]:text-[16px] uppercase">
                @lang('main.bizning_loyihalarimiz')</div>
              <hr class="w-[30px] bg-orange border-none h-[2px] md:my-3 max-md:my-1">
              <div
                class="description text-dimgray max-sm:max-h-[165px] sm:max-h-[210px] md:maxh-[265px] lg:max-h-[340px] overflow-hidden [@media(min-width:768px)]:text-[16px] [@media(min-width:576px)]:text-[14px] [@media(max-width:576px)]:text-[12px]">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliqui
              </div>
              <div class="sm:mt-4 max-sm:mt-2">
                <a href="{{ route('projects') }}"
                  class="border border-orange  py-2 px-3 text-orange uppercase [@media(min-width:768px)]:text-[14px] [@media(min-width:576px)]:text-[12px] [@media(max-width:576px)]:text-[10px]">@lang('main.koproq')</a>
              </div>

            </div>
          </div>
        </div>
      </div>


      <!-- remove 4th child -->
      <div class="news mx-auto max-w-screen-xl px-2 py-16">
        <div class="text-[30px] text-dimgray text-center uppercase">@lang('main.yangiliklar')</div>
        <div class="card-wrapper w-full flex justify-between flex-wrap mt-7">
          @foreach($news as $new)
          <div class="card [@media(min-width:850px)]:w-1/3 [@media(min-width:500px)]:w-1/2 [@media(max-width:500px)]:w-full px-2 mb-4">
            <a href="{{ route('new.show', $new->{'slug_' . app()->getLocale()}) }}" class="card-content w-full block h-full border">
              <div class="img-content w-full [@media(min-width:500px)]:h-[230px] [@media(max-width:500px)]:h-[200px]">
                <img src="{{ asset($new->image) }}" alt="" class="w-full h-full object-cover">
              </div>
              <div class="text-content p-4">
                <div class="date text-orange text-[14px] max-sm:text-[12px]">{{  date('d.m.Y', strtotime($new->created_at)) }}</div>
                <div class="title text-dimgray font-[600] my-1 [@media(min-width:768px)]:text-[20px] [@media(min-width:500px)]:text-[18px] [@media(max-width:500px)]:text-[16px] sm:max-h-[60px] max-sm:max-h-[54px] overflow-hidden">
                  {{ $new->{'title_' .app()->getLocale()} }}</div>
                <div class="description text-dimgray sm:text-[16px] max-sm:text-[14px] sm:max-h-[100px] max-sm:max-h-[65px] overflow-hidden">
                  {!! $new->{'content_' . app()->getLocale()} !!}
                </div>
              </div>
            </a>
          </div>
          @endforeach
        </div>
        <div class="mx-auto mt-5 w-full flex justify-center items-center">
          <a href="{{ route('news') }}" class="border border-orange py-3 px-4 text-orange text-[16px] uppercase">@lang('main.barcha_yangiliklar')</a>
        </div>
      </div>
    </div>

    <div class="text-content w-full mx-auto mb-5">
      <div class="sm:text-[30px] max-sm:text-[25px] text-dimgray text-center uppercase">@lang('main.tugallangan_loyihalar')</div>
      <div class="sm:text-[30px] max-sm:text-[25px] text-orange text-center font-[600]">1000 МВт</div>
    </div>

    <div class="map-content mt-6 md:h-[450px] max-md:h-fit flex justify-between flex-wrap items-center">
      <div class="left-side md:w-[50%] max-md:w-full max-md:py-5 px-5 flex justify-end">
        <div class="md:max-w-[600px] max-md:w-full w-full">
          <div class="title flex w-fit items-center">
            <span>
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="20" viewBox="0 0 16 20" fill="none">
                <path d="M8 9C8.82843 9 9.5 8.32843 9.5 7.5C9.5 6.67157 8.82843 6 8 6C7.17157 6 6.5 6.67157 6.5 7.5C6.5 8.32843 7.17157 9 8 9Z" fill="#FC7E1F" />
                <path d="M8 1.00149e-08C5.89206 -0.00010539 3.86926 0.831759 2.37124 2.31479C0.873231 3.79782 0.0210794 5.81216 0 7.92C0 13.4 7.05 19.5 7.35 19.76C7.53113 19.9149 7.76165 20.0001 8 20.0001C8.23835 20.0001 8.46887 19.9149 8.65 19.76C9 19.5 16 13.4 16 7.92C15.9789 5.81216 15.1268 3.79782 13.6288 2.31479C12.1307 0.831759 10.1079 -0.00010539 8 1.00149e-08ZM8 11C7.30777 11 6.63108 10.7947 6.0555 10.4101C5.47993 10.0256 5.03133 9.47893 4.76642 8.83939C4.50151 8.19985 4.4322 7.49612 4.56725 6.81718C4.7023 6.13825 5.03564 5.51461 5.52513 5.02513C6.01461 4.53564 6.63825 4.2023 7.31718 4.06725C7.99612 3.9322 8.69985 4.00151 9.33939 4.26642C9.97893 4.53133 10.5256 4.97993 10.9101 5.5555C11.2947 6.13108 11.5 6.80777 11.5 7.5C11.5 8.42826 11.1313 9.3185 10.4749 9.97487C9.8185 10.6313 8.92826 11 8 11Z" fill="#FC7E1F" />
              </svg>
            </span>
            <span class="ml-2 text-dimgray mt-1 font-[600] md:text-[24px] max-md:text-[21px]">
              @lang('main.toshkent_shahridagi_ofis')
            </span>
          </div>

          <div class="text-item text-dimgray md:text-[18px] max-md:text-[16px] my-5">
            <span>@lang('main.manzil'):</span>
            <br>
            <a class="font-[600]">
              {{ $options->where('key', 'address_' . app()->getLocale())->first()->value }}
            </a>
          </div>
          <div class="text-item text-dimgray md:text-[18px] max-md:text-[16px] my-5">
            <span>@lang('main.telefon_raqami'):</span>
            <br>
            <a href="tel:{{ $options->where('key', 'phone')->first()->value }}" class="font-[600]">
              {{ $options->where('key', 'phone')->first()->value }}
            </a>
          </div>
          <div class="text-item text-dimgray md:text-[18px] max-md:text-[16px] my-5">
            <span>
              @lang('main.email'):
            </span>
            <br>
            <a href="mailto:{{ $options->where('key', 'email')->first()->value }}" class="font-[600]">
              {{ $options->where('key', 'email')->first()->value }}
            </a>
          </div>
        </div>
      </div>
      <div class="right-side md:w-[50%] max-md:w-full md:h-full max-md:h-[300px]">
        {!! $options->where('key', 'map')->first()->value !!}

      </div>
    </div>


    @endsection
   