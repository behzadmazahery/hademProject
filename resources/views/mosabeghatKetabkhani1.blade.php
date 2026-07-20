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

      <!-- ketabkhani content  -->
      <main class=" w-[80%] mx-auto">
         <section class="mosabeghat__ketabkhani__title px-2 text-white text-right font-bold mt-10">
            <h1 class="text-[20px] " > مسابقه کتابخوانی <br/><span class="text-[16px]">قربانگاه اسماعیل</span> </h1>
         </section>

         <!-- time section  -->

         <section class=" text-white question__timer inline-block px-10 border-[#E5B569] text-[21px] font-bold rounded-xl my-10 ">
            <span>۱۲</span> : 
            <span>۳۰</span> :
            <span>۰۰</span>
         </section>

         <!-- end time section -->


      <!-- question box  -->
         <section class=" text-[#E5B569] flex items-center gap-3 font-bold">
            <p class="text-[25px] border-[white] question__counter self-start py-4 px-2 rounded-2xl ">۲۵</p>
            <p class="text-[12px] text-justify ">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است؟</p>
         </section>
      <!-- end question box  -->

      <!-- question items -->
         <ul class="grid grid-cols-2 gap-5 my-10">
            <li class=" question__card bg-[#E5B569] rounded-xl h-[230px] relative overflow-hidden">
               <a href="#" class="w-full h-full">
                     <img src="{{asset('assets/images/img__question.jpg')}} " alt="question image" class="w-full h-full object-cover rounded-lg">

                     <span class=" question__card__item text-[#e3b569]  w-[100px] inline-block absolute bottom-[-1px] right-[-1px] z-10 text-[23px]  ">۱</span>
               </a>
            </li>

            <li class=" question__card bg-[#E5B569] rounded-xl  h-[230px] relative overflow-hidden">
               <a href="#" class="w-full h-full">
                     <img src="{{asset('assets/images/img__question.jpg')}} " alt="question image" class="w-full h-full object-cover rounded-lg">

                     <span class="question__card__item over text-[#e3b569] focus:bg-[e3b569] w-[100px] inline-block absolute bottom-[-1px] right-[-1px] z-10 text-[23px]">۲</span>
               </a>
            </li>
            
            <li class=" question__card bg-[#E5B569] rounded-xl  h-[230px] relative overflow-hidden">
               <a href="#" class="w-full h-full">
                     <img src="{{asset('assets/images/img__question.jpg')}} " alt="question image" class="w-full h-full object-cover rounded-lg">

                     <span class="question__card__item over text-[#e3b569]  focus:bg-[e3b569] w-[100px] inline-block absolute bottom-[-1px] right-[-1px] z-10 text-[23px]">۳</span>
               </a>
            </li>
            
            <li class=" question__card bg-[#E5B569] rounded-xl  h-[230px] relative overflow-hidden">
               <a href="#" class="w-full h-full">
                     <img src="{{asset('assets/images/img__question.jpg')}} " alt="question image" class="w-full h-full object-cover rounded-lg">

                     <span class="question__card__item text-[#e3b569] focus:text-[#000] w-[100px] inline-block absolute bottom-[-1px] right-[-1px] z-10 text-[23px]">۴</span>
               </a>
            </li>

         </ul>


         <button class="main__btn" > سوال بعدی </button>

      </main>

@endsection