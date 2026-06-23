@extends('v1.layout.master')


@section('content')

            <section class="main__box min-h-screen">
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

                    <section class="salavate__reset__counter">
                        <button class="mt-[60px]">
                            
                            <svg   width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="17.8242" cy="17.8242" r="15.3657" fill="#E5B569"/>
                                <path d="M17.8247 1.229C26.9897 1.22927 34.4194 8.65972 34.4194 17.8247C34.4192 26.9895 26.9895 34.4192 17.8247 34.4194C8.65972 34.4194 1.22927 26.9897 1.229 17.8247C1.229 16.9626 1.29522 16.1147 1.42236 15.2866L1.46924 15.0522C1.75799 13.908 2.81024 13.1804 3.92139 13.1802C5.55605 13.1802 6.58375 14.6981 6.37451 16.1128C6.29194 16.6706 6.24854 17.2425 6.24854 17.8247C6.2488 24.2174 11.4319 29.3999 17.8247 29.3999C24.2172 29.3996 29.3996 24.2172 29.3999 17.8247C29.3999 11.4319 24.2174 6.2488 17.8247 6.24854C15.9416 6.24854 14.1643 6.69826 12.5933 7.49561C13.3889 7.9165 13.9311 8.75164 13.9312 9.71436C13.9312 11.1004 12.8075 12.2241 11.4214 12.2241H6.30029C4.91421 12.2241 3.79053 11.1004 3.79053 9.71436V4.59229C3.79071 3.20636 4.91432 2.08252 6.30029 2.08252C7.46227 2.08269 8.43662 2.87373 8.72217 3.9458C11.3355 2.22867 14.4646 1.229 17.8247 1.229Z" fill="#2E2E2E" stroke="#E5B569" stroke-width="2.45852"/>
                            </svg>

                        </button>
                    </section>


                    <section class="salavat__counter mt-[60px] flex flex-col justify-center items-center">
                            <p class="text-white font-bold text-2xl">ذکر روز</p>
                            <h1 class="font-bold text-4xl salavat__title ">یا ذاالجلال و الاکرام</h1>

                            <div class="mt-10" style="position: relative; display: inline-block;">
                                <!-- حلقه‌های تپنده -->
                                <span class="ripple-ring"></span>
                                <span class="ripple-ring"></span>
                                <span class="ripple-ring"></span>
                                <span class="ripple-ring"></span>
                                
                                <!-- دایره اصلی -->
                                <div class="salavat__count">1</div>

                            </div>

                        </div>
                    </section>

                    <section class="salavat__list global__box  ">
                        <div class="salavat__list__containe ">
                            <h1 class=" border-b-2 salavat__title py-5 title flex items-center gap-5 "> 
                                <svg width="22" height="22" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4.99262 6.05328C5.28551 6.34617 5.76039 6.34617 6.05328 6.05328L10.8263 1.28031C11.1191 0.987415 11.1191 0.512542 10.8263 0.219648C10.5334 -0.073245 10.0585 -0.073245 9.76559 0.219648L5.52295 4.46229L1.28031 0.219648C0.987415 -0.073245 0.512542 -0.073245 0.219648 0.219648C-0.073245 0.512542 -0.073245 0.987415 0.219648 1.28031L4.99262 6.05328ZM5.52295 4.52295H4.77295V5.52295H5.52295H6.27295V4.52295H5.52295Z" fill="#D3A051"/>
                                </svg>
                                <span>انواع اذکار</span>
                            </h1>
                        </div>

                        <ul class="text-right">
                            <li class="zekr__item">
                                <h2 class="zekr">لا إلهَ إلاَّ اللهُ المَلِکُ الحَقُّ المُبینُ</h2>
                                <p class="zekr__translate">برای افزایش روزی این ذکر را ( 100 مرتبه)، بعد از نماز صبح بگویید</p>
                            </li>
                             <li class="zekr__item">
                                <h2 class="zekr">لا إلهَ إلاَّ اللهُ المَلِکُ الحَقُّ المُبینُ</h2>
                                <p class="zekr__translate">برای افزایش روزی این ذکر را ( 100 مرتبه)، بعد از نماز صبح بگویید</p>
                            </li>
                             <li class="zekr__item">
                                <h2 class="zekr">لا إلهَ إلاَّ اللهُ المَلِکُ الحَقُّ المُبینُ</h2>
                                <p class="zekr__translate">برای افزایش روزی این ذکر را ( 100 مرتبه)، بعد از نماز صبح بگویید</p>
                            </li>
                             <li class="zekr__item">
                                <h2 class="zekr">لا إلهَ إلاَّ اللهُ المَلِکُ الحَقُّ المُبینُ</h2>
                                <p class="zekr__translate">برای افزایش روزی این ذکر را ( 100 مرتبه)، بعد از نماز صبح بگویید</p>
                            </li>
                        </ul>
                    </section>

            </section>


       
@endsection