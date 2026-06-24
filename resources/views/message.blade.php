@extends('v1.layout.master')


@section('content')
  <section class="main__box min-h-screen message__page ">
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


            <!-- message box content -->

            <section class="message__header">
                <h1 class="message__title"> صندوق پیام </h1>
                <p class="message__counter "> مجموع پیام ها:5  </p>

                <div class="message__menu flex gap-2 mt-14">
                    <button class="message__btn px-3 py-2 font-bold text-white hover:text-black hover:bg-[#e5b669] ">همه پیام ها</button>
                    <button class="message__btn px-3 py-2 font-bold text-white hover:text-black hover:bg-[#e5b669] ">خوانده نشده</button>
                </div>

                <div class="message__list__box">

                    <ul class="message__list">

                        <li class="message__item p-2 flex justify-between ">

                            <div>
                                <h1 class="message__item__title mb-2"> درست نبودن اطلاعات شهید</h1>
                                <p  class="text-white text-sm ">پشتیبانی: ممنون از شما مدارک ارسالی بررسی ...</p>
                            </div>

                            <div class="text-white message__time self-end text-left mb-1">
                                <p class="mb-2 category__item ">8:30 بعدازظهر 1403/11/8</p>
                                <p class="border inline px-2 category__time  border-s-white rounded-lg">دسته بندی: اذان</p>
                            </div>


                        </li>
                               <li class="message__item p-2 flex justify-between ">

                            <div>
                                <h1 class="message__item__title mb-2"> درست نبودن اطلاعات شهید</h1>
                                <p  class="text-white text-sm ">پشتیبانی: ممنون از شما مدارک ارسالی بررسی ...</p>
                            </div>

                            <div class="text-white message__time self-end text-left mb-1">
                                <p class="mb-2 category__item ">8:30 بعدازظهر 1403/11/8</p>
                                <p class="border inline px-2 category__time  border-s-white rounded-lg">دسته بندی: اذان</p>
                            </div>


                        </li>
                        
                               <li class="message__item p-2 flex justify-between ">

                            <div>
                                <h1 class="message__item__title mb-2"> درست نبودن اطلاعات شهید</h1>
                                <p  class="text-white text-sm ">پشتیبانی: ممنون از شما مدارک ارسالی بررسی ...</p>
                            </div>

                            <div class="text-white message__time self-end text-left mb-1">
                                <p class="mb-2 category__item ">8:30 بعدازظهر 1403/11/8</p>
                                <p class="border inline px-2 category__time  border-s-white rounded-lg">دسته بندی: اذان</p>
                            </div>


                        </li>
                        
                               <li class="message__item p-2 flex justify-between ">

                            <div>
                                <h1 class="message__item__title mb-2"> درست نبودن اطلاعات شهید</h1>
                                <p  class="text-white text-sm ">پشتیبانی: ممنون از شما مدارک ارسالی بررسی ...</p>
                            </div>

                            <div class="text-white message__time self-end text-left mb-1">
                                <p class="mb-2 category__item ">8:30 بعدازظهر 1403/11/8</p>
                                <p class="border inline px-2 category__time  border-s-white rounded-lg">دسته بندی: اذان</p>
                            </div>


                        </li>
                        
                        

                    </ul>
                </div>
            </section>

    


            <!-- end message box content -->
    </section>


@endsection