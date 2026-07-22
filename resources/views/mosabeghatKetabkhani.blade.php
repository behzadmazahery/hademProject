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

         <section class="mosabeghat__ketabkhani__title px-2 text-white text-right w-[80%] mx-auto font-bold mt-16">
            <h1 class="text-[20px] " > مسابقه کتابخوانی <br/><span class="text-[16px]">قربانگاه اسماعیل</span> </h1>
         </section>

         

         <!-- time section  -->
         <section class=" text-white question__timer inline-block px-10 border-[#E5B569] text-[21px] font-bold rounded-xl my-10 ">
            <span id="h">۱۲</span> : 
            <span id="m" >۳۰</span> :
            <span id="s" >۰۰</span>
         </section>

         <!-- end time section -->


         <!-- question section  -->

         <section class=" w-[80%] mx-auto">
            <div class=" text-[#E5B569] flex items-center gap-3 font-bold">
               <p class="text-[25px] border-[white] question__counter self-start py-4 px-2 rounded-2xl ">۲۵</p>
               <p class="text-[12px] text-justify">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است؟</p>
            </div>

            <ul class="font-bold text-justify">

             <button class=" answer__btn block w-full">
                 <div class="flex items-center gap-5 text-white border-2 p-2 mt-5  border-[#E5B569] text-[11px] font-bold rounded-3xl  ">
                  <span class="text-[#E5B569] text-[23px] mr-3"> ۱ </span>
                  <li class="text-justify pl-6"> دفاع مقدس با بهره گیری از مضامین عاشورایی  </li>
               </div>
             </button>


            <button class="block w-full">
                  <div onclick="this.classList.add('text-black', 'select__item')" 
                  class="flex items-center gap-5 text-right text-white border-2 py-4 my-5 border-[#E5B569] text-[11px] font-bold rounded-3xl cursor-pointer">
                  
                  <span class="text-[#E5B569] text-[23px] mr-3 ">۲</span>
                  <li class="text-justify pl-6">  دفاع مقدس با بهره گیری از مضامین عاشورایی شعر دفاع مقدس، ولایت محوری و جهاد تبییــن پرچم، ایمــــان </li>
               </div>
            </button>

            <button class="block w-full">
                 <div class="flex items-center gap-5 text-white border-2 p-2  border-[#E5B569] text-[11px] font-bold rounded-3xl  ">
                  <span class="text-[#E5B569] text-[23px] mr-3"> ۳ </span>
                  <li class="text-justify pl-6"> دفاع مقدس با بهره گیری از مضامین عاشورایی شعر دفاع مقدس، ولایت محوری و جهاد تبییــن پرچم، ایمــــان </li>
               </div>
            </button>

            <button class="block w-full">
                <div class="flex items-center gap-5 text-white border-2 p-2 my-5 border-[#E5B569] text-[11px] font-bold rounded-3xl  ">
                  <span class="text-[#E5B569] text-[23px] mr-3"> ۴ </span>
                  <li class="text-justify pl-6">دفاع مقدس با بهره گیری از مضامین عاشورایی شعر دفاع مقدس، ولایت محوری و جهاد تبییــن پرچم، ایمــــان </li>
               </div>
             </button> 

            </ul>
         </section>

         <!-- end question section  -->


         <section class="mt-10">

         <button  class="main__btn text-[18px]">  سوال بعدی</button>

         </section>


         <script src="../js/app.js" > </script>



@endsection