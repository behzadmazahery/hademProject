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

    <!-- momMemories content box -->
    <section class="momMemories__content">
        

        <div class="momMemories__title"> خاطره ای به نقل از مادر شهید </div>


    
        <div class="martry__lifeStyle text-white  px-5 py-2 text-right ">
      

                <p>
                    در صورتی که اطلاعات این شهید عزیز دارای مغایرت می باشد، اصلاحیه آن را برای ما ارسال کنید.
        همچنین اگر تصویر و یا سندی از این شهید بزرگوار در دسترس دارید از طریق این سامانه با سایر کاربران به اشتراک بگذارید
      <br/>
        در صورتی که اطلاعات این شهید عزیز دارای مغایرت می باشد، اصلاحیه آن را برای ما ارسال کنید.
        همچنین اگر تصویر و یا سندی از این شهید بزرگوار در دسترس دارید از طریق این سامانه با سایر کاربران به اشتراک بگذارید    
            </p>
        </div>
        

           <div class="martry__lifeStyle text-white px-5 py-2 text-right">

                <h1 class="text-2xl  flex items-center gap-4 font-bold text-right pb-2"> 

                <span>
                    <svg class="mt-2" width="15" height="10" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4.99262 6.05328C5.28551 6.34617 5.76039 6.34617 6.05328 6.05328L10.8263 1.28031C11.1191 0.987415 11.1191 0.512542 10.8263 0.219648C10.5334 -0.073245 10.0585 -0.073245 9.76559 0.219648L5.52295 4.46229L1.28031 0.219648C0.987415 -0.073245 0.512542 -0.073245 0.219648 0.219648C-0.073245 0.512542 -0.073245 0.987415 0.219648 1.28031L4.99262 6.05328ZM5.52295 4.52295H4.77295V5.52295H5.52295H6.27295V4.52295H5.52295Z" fill="#D3A051"/>
                    </svg>
                </span>

               <span> گالری تصاویر </span>

            </h1>
            
            <hr class="time__line mb-5">


            <!--  gallary box  -->
            <div class="gallary__box">
                <article></article>
                <section>
                    <div></div>
                    <div></div>
                </section>
                <article></article>
  
                
            </div>

            <!-- end gallary box  -->

        </div>

    </section>
    <!-- end momMemories content box -->

@endsection