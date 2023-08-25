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
            Продукция
          </div>
        </div>
      </div>
      <div class="w-full mx-auto px-4">
        <div class="div max-w-screen-xl mx-auto lg:my-10 max-lg:mt-0 pt-10">

          <div class="breadcrumb text-[#A4A4A4] sm:text-[16px] max-sm:text-[14px] flex items-start">
            <a href="./index.html">Главная </a>
            <span class="mx-2">\</span>
            <a href="./products.html">Продукция</a>
            <span class="mx-2">\</span>
            <a href="./product_in.html" class="truncate">Consectetur adipiscing elit</a>
          </div>
          <div class="back-btn w-fit mt-5">
            <a href="./products.html" class="flex justify-between items-center w-fit">
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
                      <div class="swiper-slide h-fit max-h-[400px] flex justify-center items-center">
                        <img src="./src/public/images/product-1.png" class="w-fit h-fit max-w-full max-h-full" alt="">
                      </div>
                      <div class="swiper-slide h-fit max-h-[400px] flex justify-center items-center">
                        <img src="./src/public/images/product-1.png" class="w-fit h-fit max-w-full max-h-full" alt="">
                      </div>
                      <div class="swiper-slide h-fit max-h-[400px] flex justify-center items-center">
                        <img src="./src/public/images/product-1.png" class="w-fit h-fit max-w-full max-h-full" alt="">
                      </div>
                    </div>
                    <div class="swiper-button-next right-[5%] flex w-[30px] h-[30px] rounded-full bg-[#EBEBEB] ">
                    </div>
                    <div class="swiper-button-prev left-[5%] flex w-[30px] h-[30px] rounded-full bg-[#EBEBEB]">
                    </div>
                  </div>
                </div>
                <div class="right-side md:w-[55%] h-full sm:w-[50%] max-sm:w-full px-5">
                  <div class="title md:text-[25px] max-md:text-[22px] text-dimgray">Consectetur adipiscing elit</div>
                  <div
                    class="description mt-3 md:text-[17px] max-md:text-[15px] text-dimgray overflow-hidden md:max-h-[80px] max-md:max-h-[50px]">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua.
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua.
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua.
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua.
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua.
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua.
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua.
                  </div>

                  <div class="product-info-table-content  mt-5">
                    <!-- foreach start -->

                    <div class="item flex justify-between text-dimgray py-3 border-b">
                      <div class="key w-fit md-text-[15px] max-md:text-[13px] ">
                        Номинальная
                      </div>
                      <div class="value font-[600] md:text-[17px] max-md:text-[15px] w-fit">
                        445 Вт
                      </div>
                    </div>

                    <!-- foreach end -->
                  </div>

                  <div class="price text-orange font-[600] sm:text-[20px] max-sm:text-[18px]">
                    1 200 000
                    <span class="ml-1 sm:text-[16px] max-sm:text-[14px] text-dimgray font-[500]">
                      сум
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
                      Описание
                    </a>
                    <a class="block sm:text-[16px] max-sm:text-[14px] uppercase sm:ml-10 max-sm:ml-5 transition-all duration-150 ease-linear py-5 hover:border-b-4 hover:text-orange  hover:border-orange"
                      :class="{'text-orange border-b-4 border-orange': tab === 2, 'text-dimgray': tab !== 3}" href="#"
                      @click.prevent="tab = 2">
                      Технические характеристики
                    </a>
                  </div>

                  <div class="" x-show="tab === 1">
                    <p class="py-4 sm:text-[17px] text-dimgray max-sm:text-[15px]">Lorem ipsum dolor sit amet
                      consectetur adipisicing elit. Possimus officia
                      maiores ipsum illum enim repudiandae quaerat tenetur sunt dolore, voluptatem blanditiis quo
                      doloremque commodi illo? Fugiat reiciendis aliquam omnis aperiam beatae? Officia, quas
                      consequuntur numquam laboriosam dolorem totam est, vitae at nam iste autem inventore eveniet amet
                      ex minima in asperiores debitis repudiandae eligendi. Sint esse dolorem est aperiam. Delectus!
                    </p>
                  </div>

                  <div class="" x-show="tab === 2">
                    <p class="py-4 sm:text-[17px] text-dimgray max-sm:text-[15px]"> ipsum dolor sit amet
                      consectetur adipisicing elit. Possimus officia
                      maiores ipsum illum enim repudiandae quaerat tenetur sunt dolore, voluptatem blanditiis quo
                      doloremque commodi illo? Fugiat reiciendis aliquam omnis aperiam beatae? Officia, quas
                      consequuntur numquam laboriosam dolorem totam est, vitae at nam iste autem inventore eveniet amet
                      ex minima in asperiores debitis repudiandae eligendi. Sint esse dolorem est aperiam. Delectus!
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