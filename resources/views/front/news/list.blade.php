@extends('layouts.front')

@section('content')

    <div class="main mb-52 h-fit">
      <div class="back-img px-4 h-[200px] mx-auto w-full bg-no-repeat bg-center flex items-center bg-cover  justify-center" style="background-image: url('{{ asset('front/src/public/images/back-img.jpg') }}');">
        <div class="text-content max-w-screen-xl mx-auto w-full">
          <div class="title mt-10 max-md:w-full font-[400] md:w-[60%] max-lg:text-[25px] lg:text-[30px] uppercase text-[white]">
            Новости</div>
        </div>
      </div>
      <div class="w-full mx-auto px-3">
        <div class="div max-w-screen-xl mx-auto lg:my-10 max-lg:mt-0 pt-10 flex justify-between flex-wrap items-start">
          <div class="link-content lg:w-[15%] max-lg:w-max px-3">
            <div class="mb-3 text-dimgray before:text-orange [&.active-link]:before:content-['_-'] [&.active-link]:text-orange [&.active-link]:before:-ml-[9px]">
              <a href="{{ route('about') }}" class="text-[18px] text-inherit hover:text-orange uppercase transition-all duration-150 ease-linear">
                О компании
              </a>
            </div>
            <div
              class="mb-3 active-link text-dimgray before:text-orange [&.active-link]:before:content-['_-'] [&.active-link]:text-orange [&.active-link]:before:-ml-2.5">
              <a href="{{ route('news') }}" class="text-[18px] text-inherit hover:text-orange uppercase transition-all duration-150 ease-linear">
                новости
              </a>
            </div>
            <div class="mb-3 text-dimgray before:text-orange [&.active-link]:before:content-['_-'] [&.active-link]:text-orange [&.active-link]:before:-ml-2.5">
              <a href=".{{ route('team') }}" class="text-[18px] text-inherit hover:text-orange uppercase transition-all duration-150 ease-linear">
                команда
              </a>
            </div>
            <div class="mb-3 text-dimgray before:text-orange [&.active-link]:before:content-['_-'] [&.active-link]:text-orange [&.active-link]:before:-ml-2.5">
              <a href="{{ route('contact') }}" class="text-[18px] text-inherit hover:text-orange uppercase transition-all duration-150 ease-linear">
                контакты
              </a>
            </div>
          </div>
          <div class="body-content lg:w-[80%] max-lg:w-full overflow-hidden px-1">
            <div class="breadcrumb text-[#A4A4A4] text-[16px] flex items-center">
              <a href="{{ route('/') }}">Главная </a>
              <span class="mx-2">\</span>
              <a href="{{ route('news') }}">Новости</a>
            </div>

            <div class="years flex justify-start items-center my-4 overflow-auto">
              <a href="#" class="mr-3 text-dimgray active-year [&.active-year]:text-orange text-[16px]">2023</a>
              <a href="#" class="mr-3 text-dimgray [&.active-year]:text-orange text-[16px]">2022</a>
            </div>

            <div class="body mt-2 h-fit">
              <div class="card-wrapper w-full mt-7">
                @foreach($news as $new)
                <div class="card w-full mb-7 sm:h-[280px] max-sm:h-[200px] [@media(max-width:450px)]:h-fit">
                  <a href="{{ route('new', $new->{'slug_' . app()->getLocale()}) }}" class="card-content flex flex-wrap w-full h-full  border">
                    <div class="img-content h-full [@media(min-width:450px)]:w-[45%] [@media(max-width:450px)]:w-full [@media(max-width:450px)]:h-[200px]">
                      <img src="{{ asset($new->image) }}" alt="" class="w-full h-full object-cover">
                    </div>
                    <div class="text-content [@media(min-width:450px)]:w-[55%] [@media(max-width:450px)]:w-full sm:px-7 max-sm:px-4 py-4 flex items-center">
                      <div class="text-body h-fit w-full">
                        <div class="date text-orange text-[14px]">{{  date('d.m.Y', strtotime($new->created_at)) }}</div>
                        <div class="title text-dimgray font-[600] my-1 sm:text-[20px] max-sm:text-[18px] overflow-hidden">
                          {{ $new->{'title_' . app()->getLocale()} }}
                        </div>
                        <div class="description text-dimgray sm:text-[16px] max-sm:text-[14px] sm:max-h-[125px] max-sm:max-h-[65px] overflow-hidden">
                          {!! $new->{'content_' . app()->getLocale()} !!}
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
                @endforeach
              </div>

              <div class="mx-auto mt-10 w-full flex justify-center items-center">
                <!-- pagination start -->
                <div class="pagination flex justify-between items-center">
                  <a href="#"
                    class="pagination-prev w-fit h-fit flex justify-center items-center text-[18px] font-[600] m-3 group">
                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="22" viewBox="0 0 12 22" fill="none">
                      <path d="M11 1L0.999999 11L11 21" stroke="#E0E0E0" class="group-hover:stroke-orange"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                  </a>

                  <a href="#"
                    class="pagination-item sm:w-[50px] max-sm:w-[40px] max-sm:h-[40px] sm:h-[50px] flex justify-center items-center sm:text-[18px] max-sm:text-[16px] font-[600] m-3 text-dimgray border transition-all duration-100 ease-linear [&.active-pagination]:text-white hover:bg-orange hover:border-orange hover:text-white [&.active-pagination]:border-orange [&.active-pagination]:bg-orange ">1</a>
                  <a href="#"
                    class="pagination-item sm:w-[50px] max-sm:w-[40px] max-sm:h-[40px] sm:h-[50px] flex justify-center items-center sm:text-[18px] max-sm:text-[16px] font-[600] m-3 text-dimgray border transition-all duration-100 ease-linear [&.active-pagination]:text-white hover:bg-orange hover:border-orange hover:text-white [&.active-pagination]:border-orange [&.active-pagination]:bg-orange active-pagination">2</a>
                  <a href="#"
                    class="pagination-item sm:w-[50px] max-sm:w-[40px] max-sm:h-[40px] sm:h-[50px]  flex justify-center items-center sm:text-[18px] max-sm:text-[16px] font-[600] m-3 text-dimgray border transition-all duration-100 ease-linear [&.active-pagination]:text-white hover:bg-orange hover:border-orange hover:text-white [&.active-pagination]:border-orange [&.active-pagination]:bg-orange ">3</a>

                  <a href="#"
                    class="pagination-next w-fit h-fit flex justify-center items-center text-[18px] font-[600] m-3 group">
                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="22" viewBox="0 0 12 22" fill="none">
                      <path d="M1 1L11 11L1 21" stroke="#E0E0E0" class="group-hover:stroke-orange" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                  </a>

                </div>
                <!-- pagination end -->
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>

 @endsection