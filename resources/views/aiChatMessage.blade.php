@extends('v1.layout.master')


@section('content')

    <section class="main__box ai_main__box relative">
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

    <!-- ai section box -->

        <section class="ai__box">

                    <!-- setting -->
                    <article class="text-white ai__setting gap-2 w-full pointer ">
                        <button id="toggleButton" class="ai__addNewItem"  onClick="toggleMenu()">
                            <img src="{{asset('assets/images/img__addMessage.png')}}" alt="اضافه کردن متن">
                        </button>
                        <span class="border border-x-zinc-500"></span>
                        <button>
                            <img src="{{asset('assets/images/img__timeMessage.png')}}" alt="اضافه کردن متن">
                        </button>
                    </article>

                    <!-- message -->
                    <article class="ai__text__box pt-10 m-10 flex flex-col">

                        <p class="ai__text__message p-5 max-w-64 mb-8 max-h-auto  bg-[var(--main__color)] self-start">
                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف 
                        </p>

                        <p class="text-white self-end mb-10  ai__text__waiting "> در حال فکر کردن ... </p>


                        <p class="ai__text__response  p-5 max-w-64 mb-8 max-h-auto bg-black text-white text-left self-end ">     

                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف 
                        </p>


                                <!-- کانتینر اصلی ویجت، در سمت چپ (مشابه پیام دوم) -->
                                <div class="self-start max-w-64 w-full mb-10">
                                    <!-- استایل‌های شیشه‌ای (Glassmorphism) برای ظاهر مدرن AI -->
                                    <div class="bg-white/5 backdrop-blur-sm border border-white/10 p-3 rounded-2xl flex items-center gap-3">
                                        
                                        <!-- دکمه پلی با جلوه پالس (حالت ضبط/پخش) -->
                                        <button id="playButton" class="w-10 h-10 min-w-[2.5rem] rounded-full bg-blue-500/20 hover:bg-blue-500/40 flex items-center justify-center transition-all duration-300 group relative">
                                            <svg id="playIcon" class="w-5 h-5 text-blue-400 group-hover:text-white" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M8 5v14l11-7z"/>
                                            </svg>
                                            <!-- حلقه‌های پالس (برای نشان دادن ضبط/پخش فعال) -->
                                            <span id="pulseRing" class="absolute inset-0 rounded-full border-2 border-blue-400 opacity-0"></span>
                                        </button>
                                        
                                        <!-- محوطه نمایش امواج (Waveform) با نوارهای متحرک -->
                                        <div class="flex-1 flex items-center justify-center gap-[2px] h-8 overflow-hidden">
                                            <!-- با جاوااسکریپت 30 نوار برای نمایش حرکت تولید می‌شود -->
                                            <div id="waveformBars" class="flex items-center gap-[2px] h-full">
                                                <!-- نوارها به صورت داینامیک ساخته می‌شوند -->
                                            </div>
                                        </div>
                                        
                                        <!-- تایمر نمایش مدت زمان -->
                                        <span id="timerDisplay" class="text-xs text-white/50 font-mono min-w-[45px] text-right">0:00</span>
                                    </div>
                                </div>




                    </article>

                    
                    <!-- input  -->
                    <article class="ai__inpox__message absolute bottom-10 flex items-center justify-between gap-2 right-0 left-0 px-10 ">

                        <div class=" bottom-5 self-end ">
                            <button class="ai__send__message__btn   bg-[#000] p-4 rounded-2xl">
                            <img src="{{asset('assets/images/img__sendMessage.png')}}" alt="send message btn">
                            </button>
                        </div>

                        
                        <div class="bg-[#000] p-3 rounded-2xl ai__chat__box">
                            <form class="flex justify-between items-end h-full">  <!-- اضافه کردن items-end و h-full -->
                                
                                <button>
                                    <img src="{{asset('assets/images/img__microphone-2.png')}}" alt="">
                                </button>
                                
                                <span class="border border-x-zinc-500 mr-2"></span>
                                
                                <input class="w-72 mx-2 bg-inherit border-none outline-none text-white aiInput ai__input" type="text" />
                                
                                <button>
                                    <img src="{{asset('assets/images/img__attach.png')}}" alt="">
                                </button>
                                
                            </form>
                        </div>
                    </article>  




        </section>


        <!-- ai menu section  -->
        <div id="ai__menu__box" class="ai__menu__box absolute top-0 left-0 w-[210px] z-20 mr-2 min-h-screen text-right text-white">
            <h2 class="font-bold text-2xl text-right mb-5 mr-5 mt-28"> موارد اخیر </h2>
            <ul class="px-2">
                <li class=" cursor-pointer ai__search__list  py-2 text-[10px] ">لورم ایپسوم متن ساختگی...</li>
                <li class=" cursor-pointer ai__search__list  py-2 text-[10px] ">لورم ایپسوم متن ساختگی...</li>
                <li class=" cursor-pointer ai__search__list  py-2 text-[10px] ">لورم ایپسوم متن ساختگی...</li>
                <li class=" cursor-pointer ai__search__list  py-2 text-[10px] ">لورم ایپسوم متن ساختگی...</li>
                <li class=" cursor-pointer ai__search__list  py-2 text-[10px] ">لورم ایپسوم متن ساختگی...</li>
            </ul>
        </div>
        <!-- ai menu section  -->
    
    <!--end ai section box -->
    


    <script src="../js/app.js"> </script>
    </section>

@endsection