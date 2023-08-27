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
            <div class="mb-3 text-dimgray before:text-orange [&.active-link]:before:content-['_-'] [&.active-link]:text-orange [&.active-link]:before:-ml-[9px]">
              <a href="{{ route('about') }}"
                class="text-[18px] text-inherit hover:text-orange uppercase transition-all duration-150 ease-linear">
                @lang('main.kompaniya_haqida')
              </a>
            </div>
            <div class="mb-3  text-dimgray before:text-orange [&.active-link]:before:content-['_-'] [&.active-link]:text-orange [&.active-link]:before:-ml-2.5">
              <a href="{{ route('news') }}" class="text-[18px] text-inherit hover:text-orange uppercase transition-all duration-150 ease-linear">
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
              class="mb-3 active-link text-dimgray before:text-orange [&.active-link]:before:content-['_-'] [&.active-link]:text-orange [&.active-link]:before:-ml-2.5">
              <a href="{{ route('contact') }}"
                class="text-[18px] text-inherit hover:text-orange uppercase transition-all duration-150 ease-linear">
                @lang('main.kontaktlar')
              </a>
            </div>
          </div>
          <div class="body-content lg:w-[80%] max-lg:w-full px-1">
            <div class="breadcrumb text-[#A4A4A4] text-[16px] flex items-center">
              <a href="{{ route('/') }}">@lang('main.bosh_safiha') </a>
              <span class="mx-2">\</span>
              <a href="{{ route('contact') }}">
                @lang('main.kontaktlar')
              </a>
            </div>

            <div class="body mt-2 h-fit">
              <div class="map-content border mt-6 sm:h-[350px] max-sm:h-fit flex justify-between flex-wrap items-center">
                <div class="left-side sm:w-[50%] max-sm:w-full max-sm:py-5 pl-8 pr-5">
                  <div class="title flex w-fit items-center">
                    <span>
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="20" viewBox="0 0 16 20" fill="none">
                        <path d="M8 9C8.82843 9 9.5 8.32843 9.5 7.5C9.5 6.67157 8.82843 6 8 6C7.17157 6 6.5 6.67157 6.5 7.5C6.5 8.32843 7.17157 9 8 9Z" fill="#FC7E1F" />
                        <path  d="M8 1.00149e-08C5.89206 -0.00010539 3.86926 0.831759 2.37124 2.31479C0.873231 3.79782 0.0210794 5.81216 0 7.92C0 13.4 7.05 19.5 7.35 19.76C7.53113 19.9149 7.76165 20.0001 8 20.0001C8.23835 20.0001 8.46887 19.9149 8.65 19.76C9 19.5 16 13.4 16 7.92C15.9789 5.81216 15.1268 3.79782 13.6288 2.31479C12.1307 0.831759 10.1079 -0.00010539 8 1.00149e-08ZM8 11C7.30777 11 6.63108 10.7947 6.0555 10.4101C5.47993 10.0256 5.03133 9.47893 4.76642 8.83939C4.50151 8.19985 4.4322 7.49612 4.56725 6.81718C4.7023 6.13825 5.03564 5.51461 5.52513 5.02513C6.01461 4.53564 6.63825 4.2023 7.31718 4.06725C7.99612 3.9322 8.69985 4.00151 9.33939 4.26642C9.97893 4.53133 10.5256 4.97993 10.9101 5.5555C11.2947 6.13108 11.5 6.80777 11.5 7.5C11.5 8.42826 11.1313 9.3185 10.4749 9.97487C9.8185 10.6313 8.92826 11 8 11Z" fill="#FC7E1F" />
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
                <div class="right-side sm:w-[50%] max-sm:w-full sm:h-full max-sm:h-[300px]">
                  {!! $options->where('key', 'map')->first()->value !!}

                </div>
              </div>

              <div  class="other-content flex  [@media(min-width:576px)]:justify-between  [@media(max-width:576px)]:justify-center mt-8 items-start flex-wrap">
                @foreach($offices as $office)
                <div class="item [@media(min-width:768px)]:w-1/3 mb-2 [@media(max-width:576px)]:text-center [@media(min-width:576px)]:w-1/2  [@media(max-width:576px)]:w-full ">
                  <div class="title">
                    <span class=" text-dimgray [@media(max-width:576px)]:text-center  mt-1 font-[600] md:text-[24px] max-md:text-[21px]">
                      {{ $office->{'title_' . app()->getLocale()} }}
                    </span>
                  </div>
                  <div class="text-item text-dimgray [@media(max-width:576px)]:flex justify-center md:text-[18px] [@media(max-width:576px)]:text-center max-md:text-[16px] my-4">
                    <span class="mr-2">@lang('main.telefon_raqami'):</span>
                    <br>
                    <a href="tel:{{ $office->phone_number }}" class="font-[600]">
                      {{ $office->phone_number }}
                    </a>
                  </div>
                  <div class="text-item text-dimgray [@media(max-width:576px)]:flex justify-center md:text-[18px] [@media(max-width:576px)]:text-center max-md:text-[16px] my-4">
                    <span class="mr-2">
                      @lang('main.email'):
                    </span>
                    <br>
                    <a href="mailto:{{ $office->email }}" class="font-[600]">
                      {{ $office->email }}
                    </a>
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