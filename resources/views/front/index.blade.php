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
          <a href="{{ $slider->link }}" class="border border-orange py-3 px-4 text-white text-[16px] uppercase">Подробнее</a>
        </div>
      </div>
      @endforeach

      <!-- remove 4th child -->
      <div class="wrapper-centered mx-auto max-w-screen-xl py-5 flex flex-wrap justify-center items-start">
        <!-- foreach start -->

        <div class="box p-5 [@media(min-width:768px)]:w-1/3 [@media(min-width:576px)]:w-1/2 [@media(max-width:576px)]:w-full">
          <div class="icon w-[100px] h-[100px] mx-auto">
            <img src="./src/public/icons/icon-1.jpg" alt="" class="w-full h-full">
          </div>
          <div class="title text-center text-dimgray text-[24px] uppercase">Производство</div>
          <hr class="mx-auto w-[30px] bg-orange border-none h-[2px] my-3">
          <div class="description text-center text-dimgray text-[16px] max-h-[100px] overflow-hidden">
            Ut enim ad minima
            veniam, quis nostrum
            exercitationem
            veniam, quis nostrum
            exercitationem
            veniam, quis nostrum
            exercitationem
          </div>
        </div>

        <!-- foreach end -->
      </div>


      <div id="videoWrapper" class="back-video w-full mx-auto max-sm:h-[300px] sm:h-[400px] md:h-[500px] lg:h-[600px] cursor-pointer mt-6 relative">
        <div class="video-play-wrapper absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">
          <div class="mx-auto  play w-[40px] h-[40px] sm:w-[60px] sm:h-[60px] border p-2 sm:p-3 rounded-full border-[rgba(255,255,255,0.30)] bg-[rgba(255,255,255,0.20)]">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-full h-full" viewBox="0 0 54 54" fill="none">
              <path d="M33.75 12.375H9C7.75737 12.375 6.75 13.3824 6.75 14.625V39.375C6.75 40.6177 7.75737 41.625 9 41.625H33.75C34.9927 41.625 36 40.6177 36 39.375V14.625C36 13.3824 34.9927 12.375 33.75 12.375Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
              <path d="M36 20.25L47.25 15.75V38.25L36 33.75" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
          </div>
          <div class="title sm:text-[30px] max-sm:text-[18px] mt-2 font-[100] text-center text-white uppercase">
            Смотреть видео
          </div>
        </div>
        <a data-fancybox href="./src/public/videos/test-video.MOV" class="w-full h-full">
          <img id="videoImg" class="w-full h-full object-cover" src="./src/public/images/video-img.jpg" />
        </a>
      </div>

      <div class="facade-wrapper mx-auto max-sm:h-[320px] sm:h-[390px] md:h-[490px] lg:h-[590px] w-full relative">
        <img src="./src/public/images/facade-img.jpg" alt="" class="w-full h-full object-cover">
        <div class="wrapper-centered w-1/2 absolute top-0 left-0 h-full bg-[#ffffffe8] z-10">
        </div>

        <div
          class="wrapper-centered max-w-screen-xl px-5 w-full absolute top-1/2 left-1/2 -translate-y-1/2 -translate-x-1/2  h-full bg-[#ff000000] z-20">
          <div class="left-part w-1/2 h-full flex justify-start items-center">
            <div class="box p-5 pl-0 w-full -mt-2">
              <div class="icon md:w-[100px] md:h-[100px] sm:w-[80px] sm:h-[80px] max-sm:w-[60px] max-sm:h-[60px] ">
                <img src="./src/public/icons/facade-icon.png" alt="" class="w-full h-full -ml-3">
              </div>
              <div
                class="title text-dimgray [@media(min-width:768px)]:text-[24px] [@media(min-width:576px)]:text-[20px] [@media(min-width:480px)]:text-[18px] [@media(max-width:480px)]:text-[16px] uppercase">
                O Компания</div>
              <hr class="w-[30px] bg-orange border-none h-[2px] md:my-3 max-md:my-1">
              <div
                class="description text-dimgray  [@media(min-width:768px)]:max-h-[145px] [@media(min-width:576px)]:max-h-[110px] [@media(max-width:576px)]:max-h-[55px] overflow-hidden [@media(min-width:768px)]:text-[16px] [@media(min-width:576px)]:text-[14px] [@media(max-width:576px)]:text-[12px]">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliqui
              </div>
              <div class="sm:mt-4 max-sm:mt-2">
                <a href="#"
                  class="border border-orange  py-2 px-3 text-orange uppercase [@media(min-width:768px)]:text-[14px] [@media(min-width:576px)]:text-[12px] [@media(max-width:576px)]:text-[10px]">Подробнее</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div
        class="efficiency-wrapper mx-auto overflow-hidden [@media(min-width:768px)]:h-[600px] [@media(min-width:576px)]:h-[520px] [@media(min-width:480px)]:h-[420px] [@media(max-width:480px)]:h-[380px] max-w-screen-xl flex justify-between">
        <div class="img-content w-1/2 h-full">
          <img src="./src/public/images/efficiency-img.png" alt="" class="w-full h-full object-cover">
        </div>
        <div class="text-content w-1/2 h-full flex items-center md:pl-10 max-md:pl-5">
          <div class="box p-5 pl-0 w-full -mt-2">
            <div class="icon md:w-[100px] md:h-[100px] sm:w-[80px] sm:h-[80px] max-sm:w-[60px] max-sm:h-[60px] ">
              <img src="./src/public/icons/efficiency-icon.png" alt="" class="w-full h-full -ml-3">
            </div>
            <div
              class="title text-dimgray [@media(min-width:768px)]:text-[24px] [@media(min-width:576px)]:text-[20px] [@media(min-width:480px)]:text-[18px] [@media(max-width:480px)]:text-[16px] uppercase">
              высокая ЭФФЕКТИВНОСТь</div>
            <hr class="w-[30px] bg-orange border-none h-[2px] md:my-3 max-md:my-1">
            <div
              class="description text-dimgray  [@media(min-width:768px)]:max-h-[145px] [@media(min-width:576px)]:max-h-[110px] [@media(max-width:576px)]:max-h-[55px] overflow-hidden [@media(min-width:768px)]:text-[16px] [@media(min-width:576px)]:text-[14px] [@media(max-width:576px)]:text-[12px]">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
              dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliqui
            </div>
            <hr class="bg-[#E0E0E0] sm:my-4 max-sm:my-2">
            <div class="flex justify-between flex-wrap">
              <div class="left-text md:w-1/2 max-md:w-full pr-3 mb-1">
                <div
                  class="title text-dimgray [@media(min-width:768px)]:text-[22px] [@media(min-width:576px)]:text-[18px] [@media(min-width:480px)]:text-[16px] [@media(max-width:480px)]:text-[14px] uppercase">
                  400 кВт*ч/год</div>
                <div
                  class="description text-dimgray  [@media(min-width:768px)]:max-h-[50px] [@media(min-width:576px)]:max-h-[42px] [@media(max-width:576px)]:max-h-[38px] overflow-hidden [@media(min-width:768px)]:text-[16px] [@media(min-width:576px)]:text-[14px] [@media(max-width:576px)]:text-[12px]">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit
                </div>
              </div>
              <div class="right-text md:w-1/2 max-md:w-full">
                <div
                  class="title text-dimgray [@media(min-width:768px)]:text-[22px] [@media(min-width:576px)]:text-[18px] [@media(min-width:480px)]:text-[16px] [@media(max-width:480px)]:text-[14px] uppercase">
                  до 20%</div>
                <div
                  class="description text-dimgray  [@media(min-width:768px)]:max-h-[50px] pr-2 [@media(min-width:576px)]:max-h-[42px] [@media(max-width:576px)]:max-h-[38px] overflow-hidden [@media(min-width:768px)]:text-[16px] [@media(min-width:576px)]:text-[14px] [@media(max-width:576px)]:text-[12px]">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>

      <div class="project-wrapper mx-auto max-sm:h-[320px] sm:h-[390px] md:h-[490px] lg:h-[590px] w-full relative">
        <img src="./src/public/images/project-img.png" alt="" class="w-full h-full object-cover">
        <div class="wrapper-centered w-1/2 absolute top-0 left-0 h-full bg-[#ffffffe8] z-10">
        </div>

        <div
          class="wrapper-centered max-w-screen-xl px-5 w-full absolute top-1/2 left-1/2 -translate-y-1/2 -translate-x-1/2  h-full bg-[#ff000000] z-20">
          <div class="left-part w-1/2 h-full flex justify-start items-center">
            <div class="box p-5 pl-0 w-full -mt-2">
              <div class="icon md:w-[100px] md:h-[100px] sm:w-[80px] sm:h-[80px] max-sm:w-[60px] max-sm:h-[60px] ">
                <img src="./src/public/icons/project-icon.png" alt="" class="w-full h-full -ml-3">
              </div>
              <div
                class="title text-dimgray [@media(min-width:768px)]:text-[24px] [@media(min-width:576px)]:text-[20px] [@media(min-width:480px)]:text-[18px] [@media(max-width:480px)]:text-[16px] uppercase">
                Наши проекты</div>
              <hr class="w-[30px] bg-orange border-none h-[2px] md:my-3 max-md:my-1">
              <div
                class="description text-dimgray  [@media(min-width:768px)]:max-h-[145px] [@media(min-width:576px)]:max-h-[110px] [@media(max-width:576px)]:max-h-[55px] overflow-hidden [@media(min-width:768px)]:text-[16px] [@media(min-width:576px)]:text-[14px] [@media(max-width:576px)]:text-[12px]">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliqui
              </div>
              <div class="sm:mt-4 max-sm:mt-2">
                <a href="#"
                  class="border border-orange  py-2 px-3 text-orange uppercase [@media(min-width:768px)]:text-[14px] [@media(min-width:576px)]:text-[12px] [@media(max-width:576px)]:text-[10px]">Подробнее</a>
              </div>

            </div>
          </div>
        </div>
      </div>

      <!-- remove 4th child -->
      <div class="news mx-auto max-w-screen-xl px-2 py-16">
        <div class="text-[30px] text-dimgray text-center uppercase">Новости</div>
        <div class="card-wrapper w-full flex justify-between flex-wrap mt-7">

          <!-- foreach start -->
          <div
            class="card [@media(min-width:850px)]:w-1/3 [@media(min-width:500px)]:w-1/2 [@media(max-width:500px)]:w-full px-2 mb-4">
            <a href="./news_in.html" class="card-content w-full block h-full border">
              <div class="img-content w-full [@media(min-width:500px)]:h-[230px] [@media(max-width:500px)]:h-[200px]">
                <img src="./src/public/images/news-img-1.png" alt="" class="w-full h-full object-cover">
              </div>
              <div class="text-content p-4">
                <div class="date text-orange text-[14px] max-sm:text-[12px]">10.08.2023</div>
                <div
                  class="title text-dimgray font-[600] my-1 [@media(min-width:768px)]:text-[20px] [@media(min-width:500px)]:text-[18px] [@media(max-width:500px)]:text-[16px] sm:max-h-[60px] max-sm:max-h-[54px] overflow-hidden">
                  Lorem ipsum imet</div>
                <div
                  class="description text-dimgray sm:text-[16px] max-sm:text-[14px] sm:max-h-[100px] max-sm:max-h-[65px] overflow-hidden">
                  Ut
                  enim ad minima
                  veniam, quis nostrum exercitationem
                  ullam corporis suscipitionem
                  ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur.</div>
              </div>
            </a>
          </div>
          <!-- foreach end -->

        </div>
        <div class="mx-auto mt-5 w-full flex justify-center items-center">
          <a href="#" class="border border-orange py-3 px-4 text-orange text-[16px] uppercase">Все новости</a>
        </div>
      </div>
    </div>


    @endsection
   