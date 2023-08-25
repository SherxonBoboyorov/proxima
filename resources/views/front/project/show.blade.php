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

    <div class="main mb-20 h-fit">
      <div
        class="back-img px-4 h-[200px] mx-auto w-full bg-no-repeat bg-center flex items-center bg-cover  justify-center"
        style="background-image: url('./src/public/images/back-img.jpg');">

        <div class="text-content max-w-screen-xl mx-auto w-full">
          <div
            class="title mt-10 max-md:w-full font-[400] md:w-[60%] max-lg:text-[25px] lg:text-[30px] uppercase text-[white]">
            О компании</div>
        </div>
      </div>
      <div class="w-full mx-auto px-4">
        <div class="div max-w-screen-xl mx-auto lg:my-10 max-lg:mt-0 pt-10">
          <div class="breadcrumb text-[#A4A4A4] sm:text-[16px] max-sm:text-[14px] flex items-start">
            <a href="#">Главная </a>
            <span class="mx-2">\</span>
            <a href="#">Продукция</a>
          </div>
          <div class="body-content h-fit w-full">

            <div class="title mt-3 text-dimgray md:text-[32px] sm:text-[26px] max-sm:text-[22px] font-[600]">
              Lorem ipsum dolor sit amet
            </div>

            <div class="text text-dimgray sm:text-[17px] max-sm:text-[15px]">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed incidunt excepturi similique numquam
              accusamus magni non impedit neque aliquid quis esse reprehenderit ut fuga, error minima explicabo ipsa
              aliquam provident.
            </div>

            <div class="numbers mt-5 flex flex-wrap  w-full">
              <div class="item mr-10 sm:w-fit max-sm:w-full ">
                <div class="title md:text-[36px] sm:text-[32px] max-sm:text-[28px] text-orange font-[600]">
                  60 сум
                </div>
                <div class="description text-dimgray md:text-[18px] sm:text-[16px] max-sm:text-[14px]">
                  за 1 КВт/ч
                </div>
              </div>
              <div class="item mr-10 sm:w-fit max-sm:w-full">
                <div class="title md:text-[36px] sm:text-[32px] max-sm:text-[28px] text-orange font-[600]">
                  1200
                </div>
                <div class="description text-dimgray md:text-[18px] sm:text-[16px] max-sm:text-[14px]">
                  КВт мощность электростанции
                </div>
              </div>
              <div class="item mr-10 sm:w-fit max-sm:w-full">
                <div class="title md:text-[36px] sm:text-[32px] max-sm:text-[28px] text-orange font-[600]">
                  1
                </div>
                <div class="description text-dimgray md:text-[18px] sm:text-[16px] max-sm:text-[14px]">
                  млн КВт/ч выработка
                </div>
              </div>
            </div>

            <div class="swiper mySwiper mt-16">
              <div class="swiper-wrapper">
                <div
                  class="swiper-slide border md:h-[500px] sm:h-[400px] max-sm:h-[260px] flex justify-center items-center">
                  <img src="./src/public/images/back-img.jpg" class="w-full h-full object-cover" alt="">
                </div>
              </div>
              <div
                class="swiper-button-next project-swiper-btns top-[54%] right-[4%] flex sm:w-[40px] max-sm:w-[30px] sm:h-[40px] max-sm:h-[30px] rounded-full bg-[#ebebeb3e]  ">
              </div>
              <div
                class="swiper-button-prev project-swiper-btns top-[54%] left-[4%] flex sm:w-[40px] max-sm:w-[30px] sm:h-[40px] max-sm:h-[30px] rounded-full bg-[#ebebeb3e]">
              </div>
            </div>


            <div class="text text-dimgray sm:text-[17px] mt-10 max-sm:text-[15px]">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed incidunt excepturi similique numquam
              accusamus magni non impedit neque aliquid quis esse reprehenderit ut fuga, error minima explicabo ipsa
              aliquam provident.
            </div>

          </div>
        </div>
      </div>
    </div>

   @endsection