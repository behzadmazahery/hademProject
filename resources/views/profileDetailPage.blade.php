@extends('v1.layout.master')


@section('content')

   <section class="main__box min-h-screen ">
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

               <!-- profile info box -->
            <section class="profile__info mt-14 relative w-[85%] mx-auto  ">
                <h1 class="profile__edit__title">  ویرایش پروفایل </h1>
                <div class="flex flex-col justify-center items-center ">
                    <img class=" w-[150px] h-[150px] mb-4" src="{{asset('assets/images/profile__photo.png')}}" alt="profile image">
                    <p class="profile__number  " > ۰۹۳۸-۴۴۰-۴۴۳۷ </p>
                </div>

                <section class="profile__edit__form my-10 ">
                    <form>
                        <div class="global__input mb-3">
                            <label class="whitespace-nowrap" > نام و نام خانوادگی </label>
                            <input type="text" value="بهزاد مظاهری">
                        </div>



                        <section class=" flex gap-2 ">

                                <div class="global__input mb-3 w-[50%]">
                                    <label class="whitespace-nowrap"> کد ملی</label>
                                    <input type="text" value="۳۴۵۵۷۴۶۷">
                                </div>

                                <div class="global__input mb-3 w-[50%] hover:bg-yellow-600 ">
                                    <label class="text-xs"> تصویر کارت ملی با شناسنامه  </label>
                                    <span class="text-white text-xs " > در انتظار تایید </span>
                                </div>

                        
                        </section>


                        <section class=" flex  gap-2 text-xs ">

                                <div class="global__input  mb-3 ">
                                    <label class="whitespace-nowrap" > تاریخ تولد </label>
                                    <input type="date" />
                                </div>

                                  <div class="global__input  mb-3 flex-grow flex justify-between">

                                    <label class="whitespace-nowrap"> حنسیت </label>

                                    <select class="bg-transparent">
                                        <option value=""></option>
                                        <option value=""></option>
                                        <option value=""></option>
                                    </select>

                                </div>

                        
                        </section>

                        <div class="global__input mb-3">
                            <label class="whitespace-nowrap" > آدرس </label>
                            <input type="text" value="گرگان">
                        </div>

                            <div class="global__input mb-3">
                            <label class="whitespace-nowrap" > کد پستی </label>
                            <input type="text" value="۲۳۴۵۶۷۴۷۸۸۶۷۵">
                        </div>


                        </div>

                        <div class="global__input mb-3">
                            <label class="whitespace-nowrap" > شماره شبا </label>
                            <input type="text" value="۲۳۴۵۶۷۴۷۸۸۶۷۵">
                            <span class="text-white">IR</span>
                        </div>


                        <button class="main__btn">
                                اعمال تغییرات
                        </button>
                        
                    </form>
                </section>

            </section>
            <!-- end profile info box -->

   </section>

@endsection