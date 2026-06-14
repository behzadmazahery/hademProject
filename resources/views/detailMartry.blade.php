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


    <!-- martry box -->
     <section class="martry__detail__box">
        <div class="top__info relative m-10">
                <img  class="w-full" src="{{asset('assets/images/img__martry.png')}}" alt="عکس شهید">
                <h2 class="martry__name absolute ">نعمت الله شیخ فندرسکی</h2>
                <p class="text-right text-white">پاسدار</p>
        </div>

        <article class="martry__info grid grid-cols-2 text-right mr-10">

            <ul>
                <li>
                    <span class="martry__title"> نام پدر </span>
                    <span> عباسعلی </span>
                </li>
                <li>
                    <span class="martry__title"> محل تولد </span>
                    <span> گرگان </span>
                </li>
                <li>
                    <span class="martry__title"> تاریخ شهادت </span>
                    <span> 1340 / 09 / 01 </span>
                </li>
            </ul>
            <ul>
                <li>
                    <span class="martry__title">  تاریخ تولد </span>
                    <span> 1340 / 09 / 01 </span>
                </li>
                <li>
                    <span class="martry__title"> محل شهادت </span>
                    <span> گیلان غرب </span>
                </li>
                <li>
                    <span class="martry__title"> آرامگاه </span>
                    <span> شهدای امامزاده عبدالله شهرستان گرگان </span>

                </li>
            </ul>


        </article>


        <div class="martry__lifeStyle text-white p-5 text-right ">
            <h1 class="text-2xl font-bold text-right py-5"> زندگی نامه </h1>
            <hr class="time__line mb-5 ">  

            <p>
                دوازدهم تیر 1346، در روستای محله جنگلده از توابع شهرستان علی آباد کتول به دنیا آمد. پدرش نورعلی، ‏آهنگر بود و مادرش زهرا نام داشت. تا چهارم ابتدایی درس خواند. کشاورزی می کرد. به عنوان سرباز ارتش ‏در جبهه حضور یافت.
هفدهم آذر 1365، با سمت نیروی واحد توپخانه در بمباران هوایی قصرشیرین بر اثر ‏اصابت ترکش خمپاره به سر، شهید شد. مزار او در گلزار شهدای امامزاده الازمن تابعه شهرستان زادگاهش ‏قرار دارد.‏
            </p>
        </div>

        
        <div class="martry__lifeStyle text-white p-5 text-right ">
            <h1 class="text-2xl font-bold text-right py-5"> وصیتنامه </h1>
            <hr class="time__line mb-5 ">  

            <p>
                دوازدهم تیر 1346، در روستای محله جنگلده از توابع شهرستان علی آباد کتول به دنیا آمد. پدرش نورعلی، ‏آهنگر بود و مادرش زهرا نام داشت. تا چهارم ابتدایی درس خواند. کشاورزی می کرد. به عنوان سرباز ارتش ‏در جبهه حضور یافت.
هفدهم آذر 1365، با سمت نیروی واحد توپخانه در بمباران هوایی قصرشیرین بر اثر ‏اصابت ترکش خمپاره به سر، شهید شد. مزار او در گلزار شهدای امامزاده الازمن تابعه شهرستان زادگاهش ‏قرار دارد.‏
            </p>
        </div>



        <div class="martry__lifeStyle text-white p-5 text-right ">
            <h1 class="text-2xl font-bold text-right py-5"> خاطرات </h1>
            <hr class="time__line mb-5 ">
            <ul>
                <li class="memory__item flex justify-between justify-between items-center px-5 py-3 ">
                    <p>خاطره ای به نقل از مادر شهید</p>
                    <span>
                        <img src="{{asset('assets/images/img__arrow.png')}}" alt="">
                    </span>
                </li>
                <li class="memory__item flex justify-between justify-between items-center px-5 py-3 ">
                    <p>خاطره ای به نقل از مادر شهید</p>
                    <span>
                        <img src="{{asset('assets/images/img__arrow.png')}}" alt="">
                    </span>
                </li>
                <li class="memory__item flex justify-between justify-between items-center px-5 py-3 ">
                    <p>خاطره ای به نقل از مادر شهید</p>
                    <span>
                        <img src="{{asset('assets/images/img__arrow.png')}}" alt="">
                    </span>
                </li>
            </ul>
        </div>


        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        
    </section>

    <!-- end martry box -->
@endsection