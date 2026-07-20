@extends('v1.layout.master')
<script src="https://cdn.jsdelivr.net/npm/flowbite@2/dist/flowbite.min.js"></script>

@section('content')

      <!-- header box -->
         <section class="flex items-center justify-between mx-11 mb-8 pt-10">
               <!-- right box _ menu icon -->
               <article>
                  <img class="w-[30px]"  src=" {{asset('assets/images/menuIcon.png')}} " alt="menu icon">
               </article>

               <!-- left box _ logos -->
               <article class="flex gap-6">
                  <img class="w-[50px]" src=" {{asset('assets/images/main__logo.png')}} " alt="website logo 1">
                  <img src=" {{asset('assets/images/main__logo-01.png')}} " alt="website logo 2">
               </article>
         </section>
      <!-- end header box -->


         <main class="sendWork__content w-[85%] mx-auto">
            <!-- send work banner -->
            <section class="senrWord__banner w-full h-[520px] relative">
               <div class="sendWork__layer__btn bg-[#2e2e2e] p-4  absolute left-0 top-0 z-10  ">
                     <button class="main__btn sendWork__btn">ارسال اثر</button>
               </div>
               <img class="w-full h-full object-cover rounded-2xl" src="{{asset('assets/images/img__sendWord__banner.jpg')}}" alt="send word banner">
            </section>


            <section>
               <h1 class="text-[#d3a051] font-bold text-right my-10 w-[60%] text-[20px] " > هفدهمین جشنواره شعر تپش های ماندگار </h1>
                           
                  <div id="accordion1" data-accordion="collapse" class=" mb-4 rounded-base overflow-hidden shadow-xs bg-[#212121] px-3 rounded-xl">
                        <h2 id="accordion1-heading-1">
                           <button type="button" class="flex items-center w-full p-5 font-medium rtl:text-right text-body rounded-t-base border border-t-0 border-x-0 border-b-[#d3d3d357] hover:text-heading hover:bg-neutral-secondary-medium gap-3" data-accordion-target="#accordion1-body-1" aria-expanded="true" aria-controls="accordion1-body-1">
                              <svg width="20" height="20" viewBox="0 0 12 7" data-accordion-icon class="w-5 h-5 " aria-hidden="true" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M4.99262 6.05328C5.28551 6.34617 5.76039 6.34617 6.05328 6.05328L10.8263 1.28031C11.1191 0.987415 11.1191 0.512542 10.8263 0.219648C10.5334 -0.073245 10.0585 -0.073245 9.76559 0.219648L5.52295 4.46229L1.28031 0.219648C0.987415 -0.073245 0.512542 -0.073245 0.219648 0.219648C-0.073245 0.512542 -0.073245 0.987415 0.219648 1.28031L4.99262 6.05328ZM5.52295 4.52295H4.77295V5.52295H5.52295H6.27295V4.52295H5.52295Z" fill="#D3A051"/>
                              </svg>
                              <span class="text-[#d3a051] font-bold text-[13px]">بخش های جشنواره</span>
                           </button>
                        </h2>
                        <div id="accordion1-body-1" class="hidden" aria-labelledby="accordion1-heading-1">
                           <div class="p-4 md:p-5">
                              <p class="mb-2 text-body text-justify text-white text-[11px]">
                              -بخش میراث های ماندگار دفاع مقدس شهدا ، رزمندگان،آزادگان، جانبازان و … دفاع مقدس و شعر مقاومت اسلامی و امنیت ملی (داخلی و خارجی)
                              -بخش ویژه جنگ 12 روزه تحمیلی رژیم صهیونیستی علیه ایران شعر دفاع مقدس با بهره گیری از مضامین عاشورایی شعر دفاع مقدس، ولایت محوری و جهاد تبییــن پرچم، ایمــــان و‌امیــــد ، ایران قوی،هویت ملـــــی، محرومیــــــت زدایـــــی و حرکت های جهـــــــــــادی تجلی مــــردم در شعـــــــــــــر دفاع مقــــــــدس ( نقش زنان، روحانیون، دانشجویان، دانش آموزان،کارگران و …)
                              - شعر دفاع مقــــــــــدس در موضــــــوعات (کودک و نوجوان،طنز ، سرود،ترانه،غزل،سپیـــــد و…)
                              </p>
                           </div>
                        </div>
                  </div>

                  <div id="accordion2" data-accordion="collapse" class=" mb-4 rounded-base overflow-hidden shadow-xs bg-[#212121] px-3 rounded-xl">
                        <h2 id="accordion2-heading-1">
                           <button type="button" class="flex items-center w-full p-5 font-medium rtl:text-right text-body rounded-t-base border border-t-0 border-x-0 border-b-[#d3d3d357] hover:text-heading hover:bg-neutral-secondary-medium gap-3" data-accordion-target="#accordion2-body-1" aria-expanded="false" aria-controls="accordion2-body-1">
                              <svg width="20" height="20" viewBox="0 0 12 7" data-accordion-icon class="w-5 h-5 " aria-hidden="true" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M4.99262 6.05328C5.28551 6.34617 5.76039 6.34617 6.05328 6.05328L10.8263 1.28031C11.1191 0.987415 11.1191 0.512542 10.8263 0.219648C10.5334 -0.073245 10.0585 -0.073245 9.76559 0.219648L5.52295 4.46229L1.28031 0.219648C0.987415 -0.073245 0.512542 -0.073245 0.219648 0.219648C-0.073245 0.512542 -0.073245 0.987415 0.219648 1.28031L4.99262 6.05328ZM5.52295 4.52295H4.77295V5.52295H5.52295H6.27295V4.52295H5.52295Z" fill="#D3A051"/>
                              </svg>
                              <span class="text-[#d3a051] font-bold text-[13px]">بخش های جشنواره</span>
                           </button>
                        </h2>
                        <div id="accordion2-body-1" class="hidden" aria-labelledby="accordion2-heading-1">
                           <div class="p-4 md:p-5">
                              <p class="mb-2 text-body text-justify text-white text-[11px]">
                              -بخش میراث های ماندگار دفاع مقدس شهدا ، رزمندگان،آزادگان، جانبازان و … دفاع مقدس و شعر مقاومت اسلامی و امنیت ملی (داخلی و خارجی)
                              -بخش ویژه جنگ 12 روزه تحمیلی رژیم صهیونیستی علیه ایران شعر دفاع مقدس با بهره گیری از مضامین عاشورایی شعر دفاع مقدس، ولایت محوری و جهاد تبییــن پرچم، ایمــــان و‌امیــــد ، ایران قوی،هویت ملـــــی، محرومیــــــت زدایـــــی و حرکت های جهـــــــــــادی تجلی مــــردم در شعـــــــــــــر دفاع مقــــــــدس ( نقش زنان، روحانیون، دانشجویان، دانش آموزان،کارگران و …)
                              - شعر دفاع مقــــــــــدس در موضــــــوعات (کودک و نوجوان،طنز ، سرود،ترانه،غزل،سپیـــــد و…)
                              </p>
                           </div>
                        </div>
                  </div>

                  <div id="accordion3" data-accordion="collapse" class=" mb-4 rounded-base overflow-hidden shadow-xs bg-[#212121] px-3 rounded-xl">
                     <h2 id="accordion3-heading-1">
                        <button type="button" class="flex items-center w-full p-5 font-medium rtl:text-right text-body rounded-t-base border border-t-0 border-x-0 border-b-[#d3d3d357] hover:text-heading hover:bg-neutral-secondary-medium gap-3" data-accordion-target="#accordion3-body-1" aria-expanded="false" aria-controls="accordion3-body-1">
                        <svg width="20" height="20" viewBox="0 0 12 7" data-accordion-icon class="w-5 h-5 " aria-hidden="true" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4.99262 6.05328C5.28551 6.34617 5.76039 6.34617 6.05328 6.05328L10.8263 1.28031C11.1191 0.987415 11.1191 0.512542 10.8263 0.219648C10.5334 -0.073245 10.0585 -0.073245 9.76559 0.219648L5.52295 4.46229L1.28031 0.219648C0.987415 -0.073245 0.512542 -0.073245 0.219648 0.219648C-0.073245 0.512542 -0.073245 0.987415 0.219648 1.28031L4.99262 6.05328ZM5.52295 4.52295H4.77295V5.52295H5.52295H6.27295V4.52295H5.52295Z" fill="#D3A051"/>
                        </svg>
                        <span class="text-[#d3a051] font-bold text-[13px]">بخش های جشنواره</span>
                        </button>
                     </h2>
                     <div id="accordion3-body-1" class="hidden" aria-labelledby="accordion3-heading-1">
                        <div class="p-4 md:p-5">
                        <p class="mb-2 text-body text-justify text-white text-[11px]">
                        -بخش میراث های ماندگار دفاع مقدس شهدا ، رزمندگان،آزادگان، جانبازان و … دفاع مقدس و شعر مقاومت اسلامی و امنیت ملی (داخلی و خارجی)
                        -بخش ویژه جنگ 12 روزه تحمیلی رژیم صهیونیستی علیه ایران شعر دفاع مقدس با بهره گیری از مضامین عاشورایی شعر دفاع مقدس، ولایت محوری و جهاد تبییــن پرچم، ایمــــان و‌امیــــد ، ایران قوی،هویت ملـــــی، محرومیــــــت زدایـــــی و حرکت های جهـــــــــــادی تجلی مــــردم در شعـــــــــــــر دفاع مقــــــــدس ( نقش زنان، روحانیون، دانشجویان، دانش آموزان،کارگران و …)
                        - شعر دفاع مقــــــــــدس در موضــــــوعات (کودک و نوجوان،طنز ، سرود،ترانه،غزل،سپیـــــد و…)
                        </p>
                        </div>
                     </div>
                  </div>

            </section>


            <button class="main__btn"> ارسال اثر </button>
         
         </main>

@endsection