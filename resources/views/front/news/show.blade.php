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
            Новости</div>
        </div>
      </div>
      <div class="w-full mx-auto px-3">
        <div class="div max-w-screen-xl mx-auto lg:my-10 max-lg:mt-0 pt-10 flex justify-between flex-wrap items-start">
          <div class="link-content lg:w-[15%] max-lg:w-max px-3">
            <div
              class="mb-3 text-dimgray before:text-orange [&.active-link]:before:content-['_-'] [&.active-link]:text-orange [&.active-link]:before:-ml-[9px]">
              <a href="./about.html"
                class="text-[18px] text-inherit hover:text-orange uppercase transition-all duration-150 ease-linear">
                О компании
              </a>
            </div>
            <div
              class="mb-3 active-link text-dimgray before:text-orange [&.active-link]:before:content-['_-'] [&.active-link]:text-orange [&.active-link]:before:-ml-2.5">
              <a href="./news.html"
                class="text-[18px] text-inherit hover:text-orange uppercase transition-all duration-150 ease-linear">
                новости
              </a>
            </div>
            <div
              class="mb-3 text-dimgray before:text-orange [&.active-link]:before:content-['_-'] [&.active-link]:text-orange [&.active-link]:before:-ml-2.5">
              <a href="./team.html"
                class="text-[18px] text-inherit hover:text-orange uppercase transition-all duration-150 ease-linear">
                команда
              </a>
            </div>
            <div
              class="mb-3 text-dimgray before:text-orange [&.active-link]:before:content-['_-'] [&.active-link]:text-orange [&.active-link]:before:-ml-2.5">
              <a href="./contacts.html"
                class="text-[18px] text-inherit hover:text-orange uppercase transition-all duration-150 ease-linear">
                контакты
              </a>
            </div>
          </div>
          <div class="body-content lg:w-[80%] max-lg:w-full overflow-hidden px-1">
            <div class="breadcrumb text-[#A4A4A4] text-[16px] flex items-center">
              <a href="./index.html">Главная </a>
              <span class="mx-2">\</span>
              <a href="./news.html">Новости</a>
            </div>

            <div class="btns flex w-full justify-between items-center sm:mt-2 max-sm:mt-4 flex-wrap">
              <div
                class="all-news-btn w-fit max-md:w-full h-full max-md:flex max-md:justify-end max-md:items-start max-md:-translate-y-[38px]">
                <a href="./news.html" class="flex justify-between items-center w-fit">
                  <svg xmlns="http://www.w3.org/2000/svg" width="9" height="16" viewBox="0 0 9 16" fill="none">
                    <path d="M8 1L0.999999 8L8 15" stroke="#FC7E1F" stroke-width="2" stroke-linecap="round"
                      stroke-linejoin="round" />
                  </svg>
                  <span class="ml-3 text-dimgray sm:text-[16px] max-sm:text-[14px] uppercase">Все новости</span>
                </a>
              </div>
              <div class="other-btns md:w-fit flex justify-between items-center max-md:w-full max-md:-translate-y-6">
                <a href="#"
                  class="sm:py-2 sm:px-3 max-sm:py-1 max-sm:px-2 uppercase text-dimgray sm:text-[14px] text-center max-sm:text-[12px] border border-[#E0E0E0] mr-2">Предыдущая
                  новость</a>
                <a href="#"
                  class="sm:py-2 sm:px-3 max-sm:py-1 max-sm:px-2 uppercase text-dimgray sm:text-[14px]  text-center max-sm:text-[12px] border border-[#E0E0E0]">следующая
                  новость</a>


              </div>
            </div>

            <div class="date text-orange sm:text-[16px] max-sm:text-[14px] mt-3">10.08.2023</div>
            <div class="title text-dimgray md:text-[34px] sm:text-[28px] max-sm:text-[24px] font-[600]">
              Lorem ipsum dolor sit amet
            </div>

            <div class="body mt-2 h-fit">
              <div class="text-content text-dimgray sm:text-[18px] max-sm:text-[15px] mt-1">
                <!-- Text -->
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Commodi dignissimos exercitationem, sapiente
                illum enim repellendus impedit corrupti repudiandae, temporibus maxime ducimus hic repellat nostrum
                vitae quis modi aspernatur nesciunt debitis.
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    @endsection