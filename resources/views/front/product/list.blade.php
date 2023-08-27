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
        <div class="div max-w-screen-xl mx-auto lg:my-10 max-lg:mt-0 pt-10 flex justify-between flex-wrap items-start">
          <div class="breadcrumb text-[#A4A4A4] text-[16px] flex items-center">
            <a href="{{ route('/') }}">@lang('main.bosh_safiha') </a>
            <span class="mx-2">\</span>
            <a href="{{ route('products') }}">@lang('main.mahsulotlar')</a>
          </div>
          <div class="body-content w-full">
            <div class="products my-7 justify-between flex flex-wrap">
              @foreach($products as $product)
              <div class="product-item [@media(min-width:768px)]:w-[32%] [@media(min-width:768px)]:mb-5 [@media(max-width:768px)]:mb-3 [@media(min-width:500px)]:w-[49%] [@media(max-width:500px)]:w-full">
                <a href="{{ route('product', $product->{'slug_' . app()->getLocale()}) }}" class="h-full border p-3 block w-full">
                  <div class="img-content overflow-hidden flex justify-center items-center [@media(min-width:900px)]:h-[300px] [@media(min-width:830px)]:h-[250px] [@media(min-width:768px)]:h-[220px] [@media(min-width:650px)]:h-[300px] [@media(min-width:600px)]:h-[260px]  [@media(min-width:500px)]:h-[220px]">
                    <img src="{{ asset($product->image) }}" alt="" class="w-full h-fit max-h-full max-w-full ">
                  </div>
                  <div class="text-content px-2 mt-2 auto">
                    <div class="title text-dimgray sm:text-[20px] max-sm:[18px] font-[600] mb-1 truncate">
                      {!! $product->{'title_' . app()->getLocale()} !!}
                    </div>
                    <div class="price text-orange font-[600] sm:text-[20px] max-sm:text-[18px]">{{ $product->{'price_' . app()->getLocale()} }} <span class="ml-1 sm:text-[16px] max-sm:text-[14px] text-dimgray font-[500]">@lang('main.som')</span></div>
                  </div>
                </a>
              </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
    
@endsection