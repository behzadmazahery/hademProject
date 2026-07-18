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

   <main class="mosabeghat__content  w-[85%] mx-auto overflow-scroll">
      
      <section class="mosabeghat__item bg-[#212121] p-2 rounded-3xl  mb-5"> 
         <div class="relative">
            <img class=" w-full  h-[160px]" src=" {{asset('assets/images/img__mosabeghat__baner.png')}} " alt="mosabeghat image">
            <!-- وقتی مسابقه تمام میشود display : block  میشود . -->
            <div class="mosabeghat__hover__box absolute bg-[#d39f51dc] w-full h-full top-0 right-0 rounded-2xl grid items-center   backdrop-blur-sm">
               <span class="mosabeghat__hover__line"></span>
               <p class="text-white font-bold text-[20px]"> مسابقه به <br />  پایان رسیده است</p>
               <span class="mosabeghat__hover__line"></span>
            </div>

         </div>
         <p class="text-[#d3a051] text-[12px] font-bold p-2 border-b inline-block mb-2 border-[#9E9691]"> جایز ادبی یوسف داستان کوتاه دفاع مقدس و مقاومت </p>
         
         <article class="flex gap-2 justify-between w-[80%] mx-auto text-[12px] font-bold text-nowrap ">
            <div class="font-btn-outline-danger w-[50%] ">
               <p class="border-[#d3a051] border p-2 rounded-3xl mb-2"> <span class="text-[#d3a051] border-l-2 border-[#777777] pl-1 ">شروع مسابقه</span> <span class="text-white">   ۱۴۰۴/۰۶/۱۱ </span>  </p>
               <p class="border-[#d3a051] border p-2 rounded-3xl"> <span class="text-[#d3a051] border-l-2 border-[#777777] pl-1 ">پایان مسابقه</span> <span class="text-white"> ۱۴۰۴/۰۶/۱۱ </span>  </p>
            </div>

            <div class="border-[#d3a051] border p-2 rounded-3xl w-[50%]">
                  <p class="flex items-center mb-1">
                     <span class="text-[#d3a051] border-l-2 border-[#777777] pl-1 text-nowrap w-16">اول</span>
                     <span class="text-white pr-2">۳۰.۰۰۰.۰۰۰ ریال</span>
                  </p>
                  <p class="flex items-center mb-1">
                     <span class="text-[#d3a051] border-l-2 border-[#777777] pl-1 text-nowrap w-16">دوم</span>
                     <span class="text-white pr-2">۳۰.۰۰۰.۰۰۰ ریال</span>
                  </p>
                  <p class="flex items-center mb-1">
                     <span class="text-[#d3a051] border-l-2 border-[#777777] pl-1 text-nowrap w-16">سوم</span>
                     <span class="text-white pr-2">۳۰.۰۰۰.۰۰۰ ریال</span>
                  </p>
               </div>

         </article>


      </section>
       <section class="mosabeghat__item bg-[#212121] p-2 rounded-3xl  mb-5"> 
         <div class="relative">
            <img class=" w-full h-[160px] " src=" {{asset('assets/images/img__mosabeghat__baner.png')}} " alt="mosabeghat image">
            
            <!-- وقتی مسابقه تمام میشود display : block  میشود . -->
            <!-- <div class="mosabeghat__hover__box absolute bg-[#d39f51dc] w-full h-full top-0 right-0 rounded-2xl grid items-center   backdrop-blur-sm">
               <span class="mosabeghat__hover__line"></span>
               <p class="text-white font-bold text-[20px]"> مسابقه به <br />  پایان رسیده است</p>
               <span class="mosabeghat__hover__line"></span>
            </div> -->
            <!-- وقتی مسابقه تمام میشود display : block  میشود . -->


         </div>
         <p class="text-[#d3a051] text-[12px] font-bold p-2 border-b inline-block mb-2 border-[#9E9691]"> جایز ادبی یوسف داستان کوتاه دفاع مقدس و مقاومت </p>
         
         <article class="flex gap-2 justify-between w-[80%] mx-auto text-[12px] font-bold text-nowrap ">
            <div class="font-btn-outline-danger w-[50%] ">
               <p class="border-[#d3a051] border p-2 rounded-3xl mb-2"> <span class="text-[#d3a051] border-l-2 border-[#777777] pl-1 ">شروع مسابقه</span> <span class="text-white">   ۱۴۰۴/۰۶/۱۱ </span>  </p>
               <p class="border-[#d3a051] border p-2 rounded-3xl"> <span class="text-[#d3a051] border-l-2 border-[#777777] pl-1 ">پایان مسابقه</span> <span class="text-white"> ۱۴۰۴/۰۶/۱۱ </span>  </p>
            </div>

            <div class="border-[#d3a051] border p-2 rounded-3xl w-[50%]">
                  <p class="flex items-center mb-1">
                     <span class="text-[#d3a051] border-l-2 border-[#777777] pl-1 text-nowrap w-16">اول</span>
                     <span class="text-white pr-2">۳۰.۰۰۰.۰۰۰ ریال</span>
                  </p>
                  <p class="flex items-center mb-1">
                     <span class="text-[#d3a051] border-l-2 border-[#777777] pl-1 text-nowrap w-16">دوم</span>
                     <span class="text-white pr-2">۳۰.۰۰۰.۰۰۰ ریال</span>
                  </p>
                  <p class="flex items-center mb-1">
                     <span class="text-[#d3a051] border-l-2 border-[#777777] pl-1 text-nowrap w-16">سوم</span>
                     <span class="text-white pr-2">۳۰.۰۰۰.۰۰۰ ریال</span>
                  </p>
               </div>

         </article>


      </section>
      
   </main>
         
@endsection