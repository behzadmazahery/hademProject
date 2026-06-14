@extends('v1.layout.master')


@section('content')
    <section>
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

     
        <section class="global__box">

            <div class=" flex justify-between items-center m-5">

                <h2 class="global__title flex items-center gap-3 "> 

                    <span>
                        <svg width="15" height="12" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4.99262 6.05328C5.28551 6.34617 5.76039 6.34617 6.05328 6.05328L10.8263 1.28031C11.1191 0.987415 11.1191 0.512542 10.8263 0.219648C10.5334 -0.073245 10.0585 -0.073245 9.76559 0.219648L5.52295 4.46229L1.28031 0.219648C0.987415 -0.073245 0.512542 -0.073245 0.219648 0.219648C-0.073245 0.512542 -0.073245 0.987415 0.219648 1.28031L4.99262 6.05328ZM5.52295 4.52295H4.77295V5.52295H5.52295H6.27295V4.52295H5.52295Z" fill="#D3A051"/>
                        </svg>
                    </span>    

                    <span>
                        فیلتر
                    </span>

                </h2>
                
                <img class="w-[20px]" src=" {{asset('assets/images/img__filter.png')}} " alt="filter logo" />
            </div>

            <article class="input__search__box border-2 border-amber-500 flex items-center gap-2 px-3">
                <label class="pl-2"> عنوان  یادمان</label>
                <input class="bg-transparent py-2 border-none outline-none flex-1" type="text" value="یادمان شهدای گمنام رامیان">
            </article>

            <article class="filter__martyr">

            </article>

            <div>
                <button class="main__btn">جستجو</button>
            </div>

        </section>


              <section class="video__list__item flex justify-center  ">

            <!-- video item -->
            <article class="video__item memory__item  relative">
                <img class="w-[450px]" src=" {{asset('assets/images/img__video.png')}} " alt="ویدیو">
                <span class="relative  flex  w-[230px] text-right top-[-55px] right-3 font-bold memory__title ">
                    یادمان شهید گمنام رامیان
                </span>
                
                <p class=" text-white relative text-sm flex w-[230px] text-right top-[-55px] right-3 " > رامیان - آرامگاه شهید گمنام </p>
            </article>

            <article class="video__item memory__item  relative">
                <img class="w-[450px]" src=" {{asset('assets/images/img__video.png')}} " alt="ویدیو">
                <span class="relative flex  w-[230px] text-right top-[-55px] right-3 font-bold ">تدفین شهید گمنام دانشگاه
                    فرهنگیان گلستان 
                    
                </span>
                
                <p class=" text-white relative text-sm flex w-[230px] text-right top-[-55px] right-3 " > رامیان - آرامگاه شهید گمنام </p>

            </article>
            <article class="video__item memory__item  relative">
                <img class="w-[450px]" src=" {{asset('assets/images/img__video.png')}} " alt="ویدیو">
                <span class="relative  flex  w-[230px] text-right top-[-55px] right-3 font-bold ">تدفین شهید گمنام دانشگاه
                    فرهنگیان گلستان
                </span>
                
                <p class=" text-white relative text-sm flex w-[230px] text-right top-[-55px] right-3 " > رامیان - آرامگاه شهید گمنام </p>

            </article>

        </section>

    </section>
@endsection