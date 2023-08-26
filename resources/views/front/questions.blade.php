@extends('layouts.front')

@section('content')

    <div class="main mb-52 h-fit">
      <div class="back-img px-4 h-[200px] mx-auto w-full bg-no-repeat bg-center flex items-center bg-cover  justify-center" style="background-image: url('./src/public/images/back-img.jpg');">
        <div class="text-content max-w-screen-xl mx-auto w-full">
          <div
            class="title mt-10 max-md:w-full font-[400] md:w-[60%] max-lg:text-[25px] lg:text-[30px] uppercase text-[white]">
            Вопросы
          </div>
        </div>
      </div>
      <div class="w-full mx-auto px-3">
        <div class="div max-w-screen-xl mx-auto lg:my-10 max-lg:mt-0 pt-10 flex justify-between flex-wrap items-start">
          <div class="breadcrumb text-[#A4A4A4] text-[16px] flex items-center">
            <a href="./index.html">Главная </a>
            <span class="mx-2">\</span>
            <a href="./questions.html">Вопросы</a>
          </div>
          <div class="body-content w-full">
            <div class="accordion w-full py-5 mx-auto bg-[white]">

              <div class="w-full mx-auto" x-data="{selected:null}">
                <!-- foreach start -->

                <div class="accordion-item">
                  <button type="button" class="w-full border-t text-dimgray border-b py-5 text-left flex justify-between" @click="selected !== 1 ? selected = 1 : selected = null">
                    <div x-bind:style="selected == 1 ? 'color: #FC7E1F' : 'color:#646464'" class="title transition-all duration-100 ease-linear sm:text-[18px] max-sm:text-[16px] font-[600]">
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit?
                    </div>

                    <div class="icon w-[18px] ml-5 h-[10px] transition-all duration-300 ease-linear mt-2" x-bind:style="selected == 1 ? 'transform: rotateZ(0deg)' : 'transform: rotateZ(180deg)'">
                      <svg xmlns="http://www.w3.org/2000/svg" class="w-full h-full" viewBox="0 0 14 8" fill="none">
                        <path d="M13 7L7 1L1 7" stroke="#646464" stroke-width="2" x-bind:style="selected == 1 ? 'stroke: #FC7E1F' : 'stroke: #646464'" stroke-linecap="round" stroke-linejoin="round" />
                      </svg>
                    </div>
                  </button>

                  <div class="relative overflow-hidden transition-all max-h-0 duration-700" x-ref="container1" x-bind:style="selected == 1 ? 'max-height: ' + $refs.container1.scrollHeight + 'px' : ''">
                    <div class="py-5 sm:text-[17px] text-dimgray max-sm:text-[15px] text-description-accordion">
                      <p>
                        Sed ut perspiciatis, unde omnis iste natus error sit
                        voluptatem accusantium doloremque laudantium totam rem
                        aperiam eaque ipsa, quae ab illo inventore veritatis et
                        quasi architecto beatae vitae dicta sunt, explicabo. Nemo
                        enim ipsam voluptatem, quia voluptas sit, aspernatur aut
                        odit aut fugit, libero tempore, cum soluta nobis est
                        eligendi optio, cumque nihil impedit, quo minus id, quod
                        maxime placeat, facere possimus, omnis voluptas assumenda
                        est, omnis dolor repellendus. Temporibus autem quibusdam et
                        aut officiis debitis aut rerum necessitatibus saepe eveniet,
                        ut et voluptates repudiandae sint et molestiae non
                        recusandae. Itaque earum rerum hic tenetur a sapiente
                        delectus, ut aut reiciendis voluptatibus maiores alias
                        consequatur aut perferendis doloribus asperiores repellat.
                      </p>
                    </div>
                  </div>
                </div>

                <!-- foreach end -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  @endsection