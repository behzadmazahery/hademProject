@extends('v1.layout.master')


@section('content')
<section class="main__box">
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

    <p> 
        <img class=" w-[95%] block mx-auto " src="{{asset('assets/images/img-banner.png')}}"></p>
        <!-- main category -->
       <section class="grid grid-cols-3 auto-rows-fr mx-10 gap-10 category">
            <!-- category items -->
            <article class="border border[color: #D9D9D9] text-white text-center  ">
                <img src="{{asset('assets/images/img__plak.png')}}" alt="img plak">
                <p> شهدای استـان گلستان </p> 
            </article>
               <article class="border border[color: #D9D9D9] text-white text-center  ">
                <img src="{{asset('assets/images/img__plak.png')}}" alt="img plak">
                <p>  مسابقات</p> 
            </article>
               <article class="border border[color: #D9D9D9] text-white text-center  ">
                <img src="{{asset('assets/images/img__plak.png')}}" alt="img plak">
                <p> ویدیوها 360 </p> 
            </article>
               <article class="border border[color: #D9D9D9] text-white text-center  ">
                <img src="{{asset('assets/images/img__plak.png')}}" alt="img plak">
                <p> نمایشگاه مجازی </p> 
            </article>
               <article class="border border[color: #D9D9D9] text-white text-center  ">
                <img src="{{asset('assets/images/img__plak.png')}}" alt="img plak">
                <p> قرآن و ادعیه </p> 
            </article>
               <article class="border border[color: #D9D9D9] text-white text-center  ">
                <img src="{{asset('assets/images/img__plak.png')}}" alt="img plak">
                <p> خبرگزاری دفاع </p> 
            </article>
            <article class="border border[color: #D9D9D9] text-white text-center  ">
                <img src="{{asset('assets/images/img__plak.png')}}" alt="img plak">
                <p> کتاب ها</p> 
            </article>
               <article class="border border[color: #D9D9D9] text-white text-center  ">
                <img src="{{asset('assets/images/img__plak.png')}}" alt="img plak">
                <p> یادمان ها</p> 
            </article>
               <article class="border border[color: #D9D9D9] text-white text-center  ">
                <img src="{{asset('assets/images/img__plak.png')}}" alt="img plak">
                <p> تقویم </p> 
            </article>
               <article class="border border[color: #D9D9D9] text-white text-center  ">
                <img src="{{asset('assets/images/img__plak.png')}}" alt="img plak">
                <p> راهیان نور</p> 
            </article>
               <article class="border border[color: #D9D9D9] text-white text-center  ">
                <img src="{{asset('assets/images/img__plak.png')}}" alt="img plak">
                <p> مقالات تخصصی</p> 
            </article>
               <article class="border border[color: #D9D9D9] text-white text-center  ">
                <img src="{{asset('assets/images/img__plak.png')}}" alt="img plak">
                <p> کتاب صوتی</p> 
            </article>

        </section>

        <!-- end main category -->


        <!-- middle banner -->
        <section>
                <img class="flex justify-self-end w-[80px] " src=" {{asset('assets/images/starLogo.png')}} " alt="star logo">
                <img class="px-10" src="{{asset('assets/images/img-banner-2.png')}}" alt="middle banner">
        </section>

        <!-- end middle banner -->

        <!-- time and date box -->

        <section class="time__box m-10 p-5 ">
            <!-- top time menu -->
            <article class="flex justify-between items-center ">
                <!-- right box -->
                <div class=" text-[var(--main__color)] ">
                    <label class="time__title text-2xl font-bold"> اوقات شرعی </label>
                    <!-- <select>
                        <option value=""></option>
                    </select> -->
                </div>


                <!-- left box -->
                <div>
                    <span class="text-white font-bold " > ۱۴۰۴/۰۶/۱۹ - </span> 
                    <span  class="mounth" >۱۷ ربیع الاول</span>
                </div>
            </article>

            <!-- end time menu -->


            <!-- time box -->
            <section class=" my-5 flex justify-between items-center gap-2 " >
                    <!-- time items -->
                    <article>
                        <p class="title">اذان صبح</p>
                        <hr class="time__line my-2 " >
                        <p class="text-white  font-bold " >۰۲:۴۸</p>
                    </article>
                     <article>
                        <p class="title">اذان صبح</p>
                        <hr class="time__line my-2 " >
                        <p class="text-white  font-bold " >۰۲:۴۸</p>
                    </article>
                     <article>
                        <p class="title">اذان صبح</p>
                        <hr class="time__line my-2 " >
                        <p class="text-white  font-bold " >۰۲:۴۸</p>
                    </article>
                     <article>
                        <p class="title">اذان صبح</p>
                        <hr class="time__line my-2 " >
                        <p class="text-white  font-bold " >۰۲:۴۸</p>
                    </article>
                     <article>
                        <p class="title">اذان صبح</p>
                        <hr class="time__line my-2 " >
                        <p class="text-white  font-bold " >۰۲:۴۸</p>
                    </article>
                     <article>
                        <p class="title">اذان صبح</p>
                        <hr class="time__line my-2 " >
                        <p class="text-white  font-bold " >۰۲:۴۸</p>
                    </article>

                </section>

                <!-- day time - mornint to night -->
                <section> 
                    <img class="w-[100%]" src="{{asset('assets/images/img__day.png')}}" alt="day image">    
                </section>

                <!--end day time - mornint to night -->


                <!-- subject box -->
                 <section class="mt-5 border border-white rounded-3xl  p-5">
                    <label class="time__title text-2xl font-bold flex "> مناسبت روز </label>
                    <hr class="time__line my-4 ">
                    <h3 class="text-white text-right " > میلاد رسول اکرم و امام جعفر صادق (ع) </h3>

                 </section>
                 <!-- end subject box -->


        </section>
        <!-- end time and date box -->


        <!-- martry main day -->

        <section  class="time__box m-10 p-5 "class="">
         <label class="time__title text-2xl font-bold flex "> شهید روز </label>

         <!-- mortry box -->
         <article class="mortry__box grid grid-cols-3 gap-3 my-5 ">
            <!-- mortry items -->
            <div class="mortry__card rounded-3xl text-right p-3 ">
                <!-- عکس شهید -->
                <img class="mortry__img w-100 " src="{{asset('assets/images/img__mortry.png')}}" alt="mortry img">
                <!-- نام شهید -->
                <h2 class="mortry__name text-white">محمد مهدی محمدی نجات</h2>
                <hr class="mortry__line" >
                <!-- شغل و رسته شهید -->
                <p class="mortry__job text-xs mb-2 ">وظیفه ناجا</p>
                    
                <div class="mortry__content">
                    <!-- زمان شهادت  -->
                    <span class="mortry__date inline-block mb-1 border border-solid rounded-xl p-1 "> تاریخ شهادت: 1364/04/10</span>
                    <div></div>
                    <!-- محل شهادت -->
                    <span class="mortry__location mortry__date border border-solid rounded-xl p-1 ">محل شهادت: ابوغریب </span>

                </div>
                

            </div>

               <div class="mortry__card rounded-3xl text-right p-3 ">
                <!-- عکس شهید -->
                <img class="mortry__img w-100 " src="{{asset('assets/images/img__mortry.png')}}" alt="mortry img">
                <!-- نام شهید -->
                <h2 class="mortry__name text-white">محمد مهدی محمدی نجات</h2>
                <hr class="mortry__line" >
                <!-- شغل و رسته شهید -->
                <p class="mortry__job text-xs mb-2 ">وظیفه ناجا</p>
                    
                <div class="mortry__content">
                    <!-- زمان شهادت  -->
                    <span class="mortry__date inline-block mb-1 border border-solid rounded-xl p-1 "> تاریخ شهادت: 1364/04/10</span>
                    <div></div>
                    <!-- محل شهادت -->
                    <span class="mortry__location mortry__date border border-solid rounded-xl p-1 ">محل شهادت: ابوغریب </span>

                </div>
                

            </div>  

            <div class="mortry__card rounded-3xl text-right p-3 ">
                <!-- عکس شهید -->
                <img class="mortry__img w-100 " src="{{asset('assets/images/img__mortry.png')}}" alt="mortry img">
                <!-- نام شهید -->
                <h2 class="mortry__name text-white">محمد مهدی محمدی نجات</h2>
                <hr class="mortry__line" >
                <!-- شغل و رسته شهید -->
                <p class="mortry__job text-xs mb-2 ">وظیفه ناجا</p>
                    
                <div class="mortry__content">
                    <!-- زمان شهادت  -->
                    <span class="mortry__date inline-block mb-1 border border-solid rounded-xl p-1 "> تاریخ شهادت: 1364/04/10</span>
                    <div></div>
                    <!-- محل شهادت -->
                    <span class="mortry__location mortry__date border border-solid rounded-xl p-1 ">محل شهادت: ابوغریب </span>

                </div>
                

            </div>  
            
            <div class="mortry__card rounded-3xl text-right p-3 ">
                <!-- عکس شهید -->
                <img class="mortry__img w-100 " src="{{asset('assets/images/img__mortry.png')}}" alt="mortry img">
                <!-- نام شهید -->
                <h2 class="mortry__name text-white">محمد مهدی محمدی نجات</h2>
                <hr class="mortry__line" >
                <!-- شغل و رسته شهید -->
                <p class="mortry__job text-xs mb-2 ">وظیفه ناجا</p>
                    
                <div class="mortry__content">
                    <!-- زمان شهادت  -->
                    <span class="mortry__date inline-block mb-1 border border-solid rounded-xl p-1 "> تاریخ شهادت: 1364/04/10</span>
                    <div></div>
                    <!-- محل شهادت -->
                    <span class="mortry__location mortry__date border border-solid rounded-xl p-1 ">محل شهادت: ابوغریب </span>

                </div>
                

            </div>  
            
            <div class="mortry__card rounded-3xl text-right p-3 ">
                <!-- عکس شهید -->
                <img class="mortry__img w-100 " src="{{asset('assets/images/img__mortry.png')}}" alt="mortry img">
                <!-- نام شهید -->
                <h2 class="mortry__name text-white">محمد مهدی محمدی نجات</h2>
                <hr class="mortry__line" >
                <!-- شغل و رسته شهید -->
                <p class="mortry__job text-xs mb-2 ">وظیفه ناجا</p>
                    
                <div class="mortry__content">
                    <!-- زمان شهادت  -->
                    <span class="mortry__date inline-block mb-1 border border-solid rounded-xl p-1 "> تاریخ شهادت: 1364/04/10</span>
                    <div></div>
                    <!-- محل شهادت -->
                    <span class="mortry__location mortry__date border border-solid rounded-xl p-1 ">محل شهادت: ابوغریب </span>

                </div>
                

            </div>  
            
            <div class="mortry__card rounded-3xl text-right p-3 ">
                <!-- عکس شهید -->
                <img class="mortry__img w-100 " src="{{asset('assets/images/img__mortry.png')}}" alt="mortry img">
                <!-- نام شهید -->
                <h2 class="mortry__name text-white">محمد مهدی محمدی نجات</h2>
                <hr class="mortry__line" >
                <!-- شغل و رسته شهید -->
                <p class="mortry__job text-xs mb-2 ">وظیفه ناجا</p>
                    
                <div class="mortry__content">
                    <!-- زمان شهادت  -->
                    <span class="mortry__date inline-block mb-1 border border-solid rounded-xl p-1 "> تاریخ شهادت: 1364/04/10</span>
                    <div></div>
                    <!-- محل شهادت -->
                    <span class="mortry__location mortry__date border border-solid rounded-xl p-1 ">محل شهادت: ابوغریب </span>

                </div>
                

            </div>

         </article>


         <button class="main__btn font-bold"> بیشتر </button>

        </section>

          <!--end martyr main day -->

          <!-- medias -->

          <section class=" media__box p-10">
            <label class="time__title text-2xl font-bold flex  mb-5"> شهید روز </label>
            <!-- top boxes -->
            <div class="grid grid-cols-2 items-center gap-3">
                <article class=" media__card text-right" >
                    <img class="w-[100%]" src="{{asset('assets/images/img__media01.png')}}" alt="media img">
                    <p class="text-white text-[10px] py-2 " > هفته دولت یادآورایثار خدمت و تلاش صادقانه </p>
                    <hr class="media__line block" >
                    <span class="text-[7px]" > کلیپ </span>
                </article>
                    <article class=" media__card text-right" >
                    <img class="w-[100%]" src="{{asset('assets/images/img__media02.png')}}" alt="media img">
                    <p class="text-white text-[10px] py-2 " > چقدر جای امام خالیست</p>
                    <hr class="media__line block">
                    <span class="text-[7px]" > کلیپ </span>
                </article>


            </div>

            <!-- bottom boxex -->
            <div class="grid grid-cols-3 items-center gap-3 mt-5">
                <article class=" media__card text-right" >
                    <img class="w-[100%]" src="{{asset('assets/images/img__media03.png')}}" alt="media img">
                     <p class="text-white text-[10px] py-2 " > چقدر جای امام خالیست</p>
                    <hr class="media__line block" >
                    <span class="text-[7px]" > کلیپ </span>
                </article>
                    <article class=" media__card text-right" >
                    <img class="w-[100%]" src="{{asset('assets/images/img__media03.png')}}" alt="media img">
                    <p class="text-white text-[10px] py-2 " > چقدر جای امام خالیست</p>
                    <hr class="media__line block">
                    <span class="text-[7px]" > کلیپ </span>
                </article>   </article>
                    <article class=" media__card text-right" >
                    <img class="w-[100%]" src="{{asset('assets/images/img__media03.png')}}" alt="media img">
                    <p class="text-white text-[10px] py-2 " > چقدر جای امام خالیست</p>
                    <hr class="media__line block">
                    <span class="text-[7px]" > کلیپ </span>
                </article>


            </div>



          </section>

          <!-- end medias -->



        <br><br><br><br><br><br><br><br><br><br>
        <br><br><br><br><br><br><br><br><br><br>



</section>
@endsection