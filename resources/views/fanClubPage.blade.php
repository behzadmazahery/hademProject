@extends('v1.layout.master')


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

    <main class="main__content">

      <section class="fan__banner relative w-[85%] mx-auto bg-gradient-to-r from-[#FFF6DA] to-[#E5B569] flex items-center gap-5 px-5 py-3 rounded-[40px]">

        <img  class="w-[55px] h-[55px]" src="{{asset('assets/images/profile__photo.png')}}" alt="fan banner"/>

        <div class="text-right">
          <h1 class="font-bold text-[25px]">محمدامیر سرایی</h1>
          <p>0910 000 1050</p>
        </div>

        <span class="absolute left-20 top-5 ">
          
              <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M9.16944 17.8147C13.9441 17.8147 17.8148 13.944 17.8148 9.16933C17.8148 4.3946 13.9441 0.523926 9.16944 0.523926C4.39472 0.523926 0.52404 4.3946 0.52404 9.16933C0.52404 13.944 4.39472 17.8147 9.16944 17.8147Z" stroke="#449D32" stroke-width="1.04808" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M4.84685 9.60172L7.44047 12.1953L13.4923 6.14355" stroke="#449D32" stroke-width="1.57212" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>

        </span>

      </section>

      <section class="fan__content text-right w-[85%] mx-auto mt-5">
        <h2 class="text-[30px] text-[#e5b569] font-bold mb-1">باشگاه هواداران</h2>
        <p class="text-[14px] text-white font-bold ">مجموع امتیاز : 1305</p>
      </section>

      <div>
        <button>ماموریت ها</button>
        <button>تاریخچه امتیازات</button>
      </div>

    </main>


@endsection