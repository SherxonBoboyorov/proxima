@extends('layouts.front')

@section('content')

    <!-- submit application start -->
    <div id="submit-application"
      class="hidden backdrop px-5 fixed z-50 justify-stretch items-start top-0 left-0 w-full h-full bg-[rgb(0,0,0,0.60)]">
      <div class="transition-all duration-[0.2s] ease-linear max-w-[500px] w-full bg-white h-fit mx-auto p-3 mt-32">
        <div class="close-btn float-right m-2 cursor-pointer" id="applicationCloseBtn"
          onclick="submitApplicationModalClose()">
          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 22 22" fill="none">
            <path
              d="M0.292993 0.292893C0.683518 -0.0976311 1.31668 -0.097631 1.70721 0.292893L21.5062 20.0919C21.8967 20.4824 21.8967 21.1156 21.5062 21.5061C21.1157 21.8966 20.4825 21.8966 20.092 21.5061L0.292994 1.70711C-0.0975304 1.31658 -0.097531 0.683417 0.292993 0.292893Z"
              fill="#D5D5D5" />
            <path
              d="M21.5061 0.293125C21.1156 -0.0973988 20.4824 -0.0973988 20.0919 0.293125L0.292893 20.0921C-0.0976308 20.4826 -0.0976314 21.1158 0.292893 21.5063C0.683417 21.8969 1.31658 21.8969 1.70711 21.5063L21.5061 1.70734C21.8966 1.31682 21.8966 0.68365 21.5061 0.293125Z"
              fill="#D5D5D5" />
          </svg>
        </div>
        <!-- Text content start -->
        <div class="text-content pl-3 pr-4 mx-auto max-w-[1000px] overflow-hidden">
          <!-- Title start -->
          <div
            class="title text-dimgray mt-5 [@media(min-width:576px)]:text-[36px] [@media(max-width:576px)]:text-[30px] font-[300]">
            Оставить заявку
          </div>
          <!-- Title end -->
        </div>
        <!-- Text content end -->

        <!-- Form Content start -->
        <div class="form-content mx-auto px-2 ">
          <form action="" method="get" class="my-3">
            <div class="input-content">
              <input required type="text"
                class="w-full [@media(min-width:576px)]:h-[50px] [@media(max-width:576px)]:h-[45px] px-3 my-2 [@media(min-width:576px)]:text-[18px] [@media(max-width:576px)]:text-[16px] text-dimgray outline-none border"
                placeholder="ФИО" />
              <input required type="number"
                class="w-full [@media(min-width:576px)]:h-[50px] [@media(max-width:576px)]:h-[45px] px-3 my-2 [@media(min-width:576px)]:text-[18px] [@media(max-width:576px)]:text-[16px] text-dimgray outline-none border"
                placeholder="Телефонный номер" />

            </div>
            <div class="button-content my-3 w-full flex justify-center items-center">
              <button type="submit"
                class="border-none uppercase w-full [@media(min-width:576px)]:py-3 [@media(min-width:576px)]:px-6 [@media(max-width:576px)]:py-2 [@media(max-width:576px)]:px-5 [@media(min-width:576px)]:text-[18px] [@media(max-width:576px)]:text-[16px] text-[white] bg-orange">
                Отправить
              </button>
            </div>
          </form>
        </div>
        <!-- Form Content end -->
      </div>
    </div>

    <!-- submit application end -->

    <div class="main mb-52 h-fit">
      <div
        class="back-img px-4 max-lg:h-[550px] lg:h-[700px] mx-auto w-full bg-no-repeat bg-center flex items-center bg-cover  justify-center"
        style="background-image: url('./src/public/images/back-img.jpg');">

        <div class="text-content max-w-screen-xl mx-auto w-full">
          <div class="title max-md:w-full md:w-[60%] max-lg:text-[30px] lg:text-[40px] uppercase text-[white]">Солнечные
            панели для бизнеса и
            дома</div>
          <div class="description max-lg:text-[16px] lg:text-[20px] my-2 mb-10 text-white max-md:w-full md:w-[60%]">Ut
            enim ad minim veniam,
            quis nostrud
            exercitation
            ullamco laboris nisi ut
            aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
            dolore eu fugiat nulla pariatur.</div>
          <a href="#" class="border border-orange py-3 px-4 text-white text-[16px] uppercase">Подробнее</a>
        </div>
      </div>

      <!-- remove 4th child -->
      <div class="wrapper-centered mx-auto max-w-screen-xl py-5 flex flex-wrap justify-center items-start">
        <!-- foreach start -->

        <div
          class="box p-5 [@media(min-width:768px)]:w-1/3 [@media(min-width:576px)]:w-1/2 [@media(max-width:576px)]:w-full">
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


      <div id="videoWrapper"
        class="back-video w-full mx-auto max-sm:h-[300px] sm:h-[400px] md:h-[500px] lg:h-[600px] cursor-pointer mt-6 relative">
        <div class="video-play-wrapper absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">
          <div
            class="mx-auto  play w-[40px] h-[40px] sm:w-[60px] sm:h-[60px] border p-2 sm:p-3 rounded-full border-[rgba(255,255,255,0.30)] bg-[rgba(255,255,255,0.20)]">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-full h-full" viewBox="0 0 54 54" fill="none">
              <path
                d="M33.75 12.375H9C7.75737 12.375 6.75 13.3824 6.75 14.625V39.375C6.75 40.6177 7.75737 41.625 9 41.625H33.75C34.9927 41.625 36 40.6177 36 39.375V14.625C36 13.3824 34.9927 12.375 33.75 12.375Z"
                stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
              <path d="M36 20.25L47.25 15.75V38.25L36 33.75" stroke="white" stroke-width="1.5" stroke-linecap="round"
                stroke-linejoin="round" />
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
   