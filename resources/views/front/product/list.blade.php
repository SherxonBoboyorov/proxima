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
        <div class="div max-w-screen-xl mx-auto lg:my-10 max-lg:mt-0 pt-10 flex justify-between flex-wrap items-start">
          <div class="breadcrumb text-[#A4A4A4] text-[16px] flex items-center">
            <a href="./index.html">Главная </a>
            <span class="mx-2">\</span>
            <a href="./products.html">Продукция</a>
          </div>
          <div class="body-content w-full">
            <div class="products my-7 justify-between flex flex-wrap">
              <!-- foreach start -->

              <div
                class="product-item [@media(min-width:768px)]:w-[32%] [@media(min-width:768px)]:mb-5 [@media(max-width:768px)]:mb-3 [@media(min-width:500px)]:w-[49%] [@media(max-width:500px)]:w-full">
                <a href="./product_in.html" class="h-full border p-3 block w-full">
                  <div
                    class="img-content overflow-hidden flex justify-center items-center [@media(min-width:900px)]:h-[300px] [@media(min-width:830px)]:h-[250px] [@media(min-width:768px)]:h-[220px] [@media(min-width:650px)]:h-[300px] [@media(min-width:600px)]:h-[260px]  [@media(min-width:500px)]:h-[220px]">
                    <img src="./src/public/images/product-3.png" alt="" class="w-full h-fit max-h-full max-w-full ">
                  </div>
                  <div class="text-content px-2 mt-2 auto">
                    <div class="title text-dimgray sm:text-[20px] max-sm:[18px] font-[600] mb-1 truncate">
                      Lorem
                      ipsumt
                      Lorem
                      ipsumt fd dfhdhfsxd
                    </div>
                    <div class="price text-orange font-[600] sm:text-[20px] max-sm:text-[18px]">1 200 000 <span
                        class="ml-1 sm:text-[16px] max-sm:text-[14px] text-dimgray font-[500]">сум</span></div>
                  </div>
                </a>
              </div>

              <!-- foreach end -->
            </div>
          </div>
        </div>
      </div>
    </div>
    
@endsection