@extends('layouts.front')

@section('content')


    <div class="main mb-20 h-fit">
      <div class="back-img px-4 h-[200px] mx-auto w-full bg-no-repeat bg-center flex items-center bg-cover  justify-center" style="background-image: url('{{ asset('front/src/public/images/back-img.jpg') }}');">

        <div class="text-content max-w-screen-xl mx-auto w-full">
          <div class="title mt-10 max-md:w-full font-[400] md:w-[60%] max-lg:text-[25px] lg:text-[30px] uppercase text-[white]">
            @lang('main.mahsulotlar')
          </div>
        </div>
      </div>
      <div class="w-full mx-auto px-4">
        <div class="div max-w-screen-xl mx-auto lg:my-10 max-lg:mt-0 pt-10">

          <div class="breadcrumb text-[#A4A4A4] sm:text-[16px] max-sm:text-[14px] flex items-start">
            <a href="{{ route('/') }}">@lang('main.bosh_safiha')</a>
            <span class="mx-2">\</span>
            <a href="{{ route('products') }}">@lang('main.mahsulotlar')</a>
            <span class="mx-2">\</span>
            <a class="truncate">{{ $product->{'title_' . app()->getLocale()} }}</a>
          </div>
          <div class="back-btn w-fit mt-5">
            <a href="{{ route('products') }}" class="flex justify-between items-center w-fit">
              <svg xmlns="http://www.w3.org/2000/svg" width="9" height="16" viewBox="0 0 9 16" fill="none">
                <path d="M8 1L0.999999 8L8 15" stroke="#FC7E1F" stroke-width="2" stroke-linecap="round"
                  stroke-linejoin="round" />
              </svg>
              <span class="ml-3 text-dimgray sm:text-[16px] max-sm:text-[14px] uppercase">Назад</span>
            </a>
          </div>

          <div class="body-content h-fit w-full">
            <div class="product-full-info-content mt-7">
              <div class="head-section sm:h-[400px] max-sm:h-fit flex justify-between items-center flex-wrap">
                <div class="left-side h-fit md:w-[45%] sm:w-[50%] max-sm:w-full bg-white">
                  <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                      @foreach($product->gallaries as $gallary)
                      <div class="swiper-slide h-fit max-h-[400px] flex justify-center items-center">
                        <img src="{{ $gallary->image }}" class="w-fit h-fit max-w-full max-h-full" alt="{{ $product->name }}">
                      </div>
                      @endforeach
                    </div>
                    <div class="swiper-button-next right-[5%] flex w-[30px] h-[30px] rounded-full bg-[#EBEBEB] ">
                    </div>
                    <div class="swiper-button-prev left-[5%] flex w-[30px] h-[30px] rounded-full bg-[#EBEBEB]">
                    </div>
                  </div>
                </div>
                <div class="right-side md:w-[55%] h-full sm:w-[50%] max-sm:w-full px-5">
                  <div class="title md:text-[25px] max-md:text-[22px] text-dimgray">{{ $product->{'title_' . app()->getLocale()} }} </div>
                  <div class="description mt-3 md:text-[17px] max-md:text-[15px] text-dimgray overflow-hidden md:max-h-[80px] max-md:max-h-[50px]">
                    {!! $product->{'sub_content_' . app()->getLocale()} !!}
                  </div>

                  <div class="product-info-table-content  mt-5">
                    @foreach($product->characters as $character)
                    <div class="item flex justify-between text-dimgray py-3 border-b">
                      <div class="key w-fit md-text-[15px] max-md:text-[13px] ">
                        {{ $character->key }}
                      </div>
                      <div class="value font-[600] md:text-[17px] max-md:text-[15px] w-fit">
                        {{ $character->value }}
                      </div>
                    </div>
                    @endforeach
                  </div>

                  <div class="price text-orange font-[600] sm:text-[20px] max-sm:text-[18px]">
                    {{ $product->{'price_' . app()->getLocale()} }}
                    <span class="ml-1 sm:text-[16px] max-sm:text-[14px] text-dimgray font-[500]">
                      @lang('main.som')
                    </span>
                  </div>
                </div>
              </div>

              <div class="footer-section  mt-16">
                <div class="" x-data="{tab: 1}">
                  <div class="flex justify-start border-b mb-4">
                    <a class="block sm:text-[16px] max-sm:text-[14px] uppercase transition-all duration-150 ease-linear py-5 hover:border-b-4 hover:text-orange  hover:border-orange"
                      :class="{'text-orange border-b-4 border-orange': tab === 1, 'text-dimgray  ': tab !== 1}" href="#"
                      @click.prevent="tab = 1">
                      @lang('main.tavsif')
                    </a>
                    <a class="block sm:text-[16px] max-sm:text-[14px] uppercase sm:ml-10 max-sm:ml-5 transition-all duration-150 ease-linear py-5 hover:border-b-4 hover:text-orange  hover:border-orange"
                      :class="{'text-orange border-b-4 border-orange': tab === 2, 'text-dimgray': tab !== 3}" href="#"
                      @click.prevent="tab = 2">
                      @lang('main.texnik_xususiyatlari')
                    </a>
                  </div>

                  <div class="" x-show="tab === 1">
                    <p class="py-4 sm:text-[17px] text-dimgray max-sm:text-[15px]">
                      {!! $product->{'description_' . app()->getLocale()} !!}
                    </p>
                  </div>

                  <div class="" x-show="tab === 2">
                    <p class="py-4 sm:text-[17px] text-dimgray max-sm:text-[15px]">
                      {!! $product->{'specifications_' . app()->getLocale()} !!}
                    </p>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

   @endsection