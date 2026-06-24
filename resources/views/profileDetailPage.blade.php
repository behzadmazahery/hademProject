@extends('v1.layout.master')


@section('content')

<!-- فایل اصلی CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

<!-- فایل اصلی JS -->
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

<!-- پلاگین فارسی (Jalali) -->
<script src="https://cdn.jsdelivr.net/npm/flatpickr@4.6.13/dist/plugins/jalali.min.js"></script>


<!-- CSS -->
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

<!-- JS -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>


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
            <section class="profile__info relative w-[85%] mx-auto  ">
                <h1 class="profile__edit__title">  ویرایش پروفایل </h1>
                <div class="flex flex-col justify-center items-center ">
                    <img class=" w-[125px] h-[125px] mb-2" src="{{asset('assets/images/profile__photo.png')}}" alt="profile image">
                    <p class="profile__number  " > ۰۹۳۸-۴۴۰-۴۴۳۷ </p>
                </div>

                
                <section class="profile__edit__form my-5 ">
                    <form>
                        <div class="global__input mb-1">
                            <label class="whitespace-nowrap" > نام و نام خانوادگی </label>
                            <input  class="" type="text" value="بهزاد مظاهری">
                        </div>


                        <section class=" flex gap-2 ">

                                <div class="global__input mb-1 w-[50%]">
                                    <label class="whitespace-nowrap"> کد ملی</label>
                                    <input type="text" value="۳۴۵۵۷۴۶۷">
                                </div>


                        
                        </section>

                <section>
                    <div class="global__input mb-1 w-[100%] flex justify-between items-center hover:bg-yellow-600 hover:text-black p-3">
                        
                        <!-- label که به عنوان دکمه آپلود عمل می‌کند -->
                        <label for="fileUpload" class="cursor-pointer flex justify-between items-center w-full">
                            <span>تصویر کارت ملی با شناسنامه</span>
                            <span class="text-white">در انتظار تایید</span>
                        </label>
                        
                        <!-- input فایل مخفی -->
                        <input type="file" id="fileUpload" class="hidden" accept="image/*">
                        
                    </div>
                </section>
                        <section class="grid grid-cols-2 gap-2">

                            <div class="global__input mb-1">
                                <label class="whitespace-nowrap">تاریخ تولد</label>
                                <input type="text" placeholder=" ۱۴۰۲/۰۵/۱۵" />
                                <span>
                                    
                                    <svg width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.27295 0.75C6.27295 0.335786 5.93716 0 5.52295 0C5.10874 0 4.77295 0.335786 4.77295 0.75H5.52295H6.27295ZM4.99262 12.2803C5.28551 12.5732 5.76039 12.5732 6.05328 12.2803L10.8263 7.50736C11.1191 7.21447 11.1191 6.73959 10.8263 6.4467C10.5334 6.15381 10.0585 6.15381 9.76559 6.4467L5.52295 10.6893L1.28031 6.4467C0.987415 6.15381 0.512542 6.15381 0.219648 6.4467C-0.073245 6.73959 -0.073245 7.21447 0.219648 7.50736L4.99262 12.2803ZM5.52295 0.75H4.77295V11.75H5.52295H6.27295V0.75H5.52295Z" fill="white"/>
                                    </svg>
                                </span>
                            </div>

                            <div class="global__input mb-1" id="genderWrapper">
                                <label class="whitespace-nowrap">جنسیت</label>

                                <select class="bg-transparent sex_option__box appearance-none" id="genderSelect">
                                    <option value="آقا">آقا</option>
                                    <option value="خانم">خانم</option>
                                </select>
                                
                                <span>
                                    
                                    <svg width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.27295 0.75C6.27295 0.335786 5.93716 0 5.52295 0C5.10874 0 4.77295 0.335786 4.77295 0.75H5.52295H6.27295ZM4.99262 12.2803C5.28551 12.5732 5.76039 12.5732 6.05328 12.2803L10.8263 7.50736C11.1191 7.21447 11.1191 6.73959 10.8263 6.4467C10.5334 6.15381 10.0585 6.15381 9.76559 6.4467L5.52295 10.6893L1.28031 6.4467C0.987415 6.15381 0.512542 6.15381 0.219648 6.4467C-0.073245 6.73959 -0.073245 7.21447 0.219648 7.50736L4.99262 12.2803ZM5.52295 0.75H4.77295V11.75H5.52295H6.27295V0.75H5.52295Z" fill="white"/>
                                    </svg>
                                </span>
                            </div>
                        
                        
                        </section>

                        <div class="global__input mb-1">
                            <label class="whitespace-nowrap" > آدرس </label>
                            <input type="text" value="گرگان">
                        </div>

                        <p  class=" alert__message text-right py-2 text-red-600 text-bold">اطلاعات وارد شده  شما درست نمیباشد.</p>

                        <div class="global__input mb-1">
                            <label class="whitespace-nowrap" > کد پستی </label>
                            <input type="text" value="۲۳۴۵۶۷۴۷۸۸۶۷۵">
                        </div>


                        </div>

                        <div class="global__input mb-1">
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