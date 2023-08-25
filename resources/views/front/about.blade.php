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
        class="back-img px-4 h-[200px] mx-auto w-full bg-no-repeat bg-center flex items-center bg-cover  justify-center"
        style="background-image: url('./src/public/images/back-img.jpg');">

        <div class="text-content max-w-screen-xl mx-auto w-full">
          <div
            class="title mt-10 max-md:w-full font-[400] md:w-[60%] max-lg:text-[25px] lg:text-[30px] uppercase text-[white]">
            О компании</div>
        </div>
      </div>
      <div class="w-full mx-auto px-3">
        <div class="div max-w-screen-xl mx-auto lg:my-10 max-lg:mt-0 pt-10 flex justify-between flex-wrap items-start">
          <div class="link-content lg:w-[15%] max-lg:w-max px-3">
            <div
              class="mb-3 text-dimgray before:text-orange active-link [&.active-link]:before:content-['_-'] [&.active-link]:text-orange [&.active-link]:before:-ml-[9px]">
              <a href="./about.html"
                class="text-[18px] text-inherit hover:text-orange uppercase transition-all duration-150 ease-linear">
                О компании
              </a>
            </div>
            <div
              class="mb-3 text-dimgray before:text-orange [&.active-link]:before:content-['_-'] [&.active-link]:text-orange [&.active-link]:before:-ml-2.5">
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
          <div class="body-content lg:w-[80%] max-lg:w-full px-1">
            <div class="breadcrumb text-[#A4A4A4] text-[16px] flex items-center">
              <a href="./index.html">Главная </a>
              <span class="mx-2">\</span>
              <a href="./about.html">О компании</a>
            </div>

            <div class="body mt-2 h-fit">
              <div class="title max-md:w-full md:w-[60%] max-lg:text-[25px] lg:text-[30px] uppercase text-dimgray">
                О компании</div>

              <div class="text-content text-dimgray sm:text-[18px] max-sm:text-[16px] mt-1">
                <div class="text ">
                  Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                  totam
                  rem aperiam eaque ipsa, quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt,
                  explicabo. Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit, sed quia
                  consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt, neque porro quisquam est, qui
                  dolorem ipsum, quia dolor sit, amet, consectetur, adipisci velit, sed quia non numquam eius modi
                  tempora
                  incidunt, ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis
                  nostrum
                  exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis
                  autem
                  vel eum iure reprehenderit, qui in ea voluptate velit esse, quam nihil molestiae consequatur, vel
                  illum,
                  qui dolorem eum fugiat, quo voluptas nulla pariatur? At vero eos et accusamus et iusto odio
                  dignissimos
                  ducimus, qui blanditiis praesentium voluptatum deleniti atque corrupti, quos dolores et quas molestias
                  excepturi sint, obcaecati cupiditate non provident, similique sunt in culpa, qui officia deserunt
                  mollitia
                  animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam
                  libero tempore, cum soluta nobis est eligendi optio, cumque nihil impedit, quo minus id, quod maxime
                  placeat, facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem
                  quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet, ut et voluptates repudiandae
                  sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut
                  reiciendis
                  voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.
                </div>

                <div class="some-inform-wrapper mt-10 mx-auto overflow-hidden h-fit w-full ">
                  <!-- foreach -->
                  <div
                    class="w-full mx-auto flex flex-wrap md:h-[330px] sm:h-[280px] max-sm:h-fit justify-between some-inform sm:mb-10 max-sm:mb-5">
                    <div class="text-content sm:w-[40%] max-sm:w-full h-full flex sm:items-center max-sm:items-start">
                      <div class="box p-5 pl-0 w-full">
                        <div class="icon md:w-[70px] md:h-[70px] max-md:w-[50px]  max-md:h-[50px] max-md:pl-1">
                          <img src="./src/public/icons/icon-1.jpg" alt="" class="w-full h-full -ml-3">
                        </div>
                        <div
                          class="title text-dimgray [@media(min-width:768px)]:text-[22px] [@media(min-width:576px)]:text-[19px] [@media(min-width:480px)]:text-[17px] [@media(max-width:480px)]:text-[15px] uppercase">
                          Производство</div>
                        <hr class="w-[30px] bg-orange border-none h-[2px] md:my-3 max-md:my-1">
                        <div class="description text-dimgray max-h-[78px] overflow-hidden text-[16px]">
                          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                          labore et
                          dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                          ut
                          aliqui
                          labore et
                          dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                          ut
                          aliqui
                          labore et
                          dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                          ut
                          aliqui
                          labore et
                          dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                          ut
                          aliqui
                        </div>

                      </div>
                    </div>
                    <div class="img-content sm:w-[60%] max-sm:w-full sm:h-full max-sm:h-[250px]">
                      <img src="./src/public/images/about-img-1.png" alt="" class="w-full h-full object-cover">
                    </div>
                  </div>
                  <!-- foreach -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

   @endsection