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


    <!-- filter box -->
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

                
        <article class="flex justify-between gap-1">

                <div class="global__input__box ">
                    <p> نام  </p>
                    <input type="text" placeholder="محسن سرایی" />
                </div>

                <div class="global__input__box ">
                    <p>  نام خانوادگی  </p>
                    <input type="text" placeholder="محسن سرایی" />
                </div>
        </article>

        <article class="flex justify-between gap-1">

            <div class="global__input__box  first__input__child">
                <p> سن  </p>
                <input type="text" placeholder="۴۲" />
            </div>

            <div class="global__input__box ">
                <p> مذهب</p>
                <input type="text" placeholder="شیعه" />
            </div>

           <div class="global__input__box text-xs">
                <p>تاهل</p>
                <label>
                    <input type="radio" name="marital" value="single">
                    مجرد
                </label>
                <label>
                    <input type="radio" name="marital" value="married">
                    متاهل
                </label>
            </div>
        </article>



        <article class="flex justify-between gap-2  ">

                <div class="global__input__box  first__input__child">
                    <p> محل تولد  </p>
                    <input type="text" placeholder="گرگان" />
                </div>

                <div class="global__input__box ">
                    <p>  محل شهادت  </p>
                    <input type="text" placeholder="کردستان" />
                </div>
        </article>


        <article class="flex justify-between gap-2  ">

                <div class="global__input__box  first__input__child">
                    <p> تاریخ تولد  </p>
                    <input type="text" placeholder="محسن سرایی" />
                </div>

                <div class="global__input__box ">
                    <p>  تاریخ شهادت  </p>
                    <input type="text" placeholder="محسن سرایی" />
                </div>
        </article>



        <article class="flex justify-between gap-2  ">

                <div class="global__input__box  first__input__child">
                    <p> درجه  </p>
                    <input type="text" placeholder="سردار" />
                </div>

                <div class="global__input__box ">
                    <p>  سمت  </p>
                    <input type="text" placeholder="بیسیمچی" />
                </div>
        </article>

        <button class="main__btn">جستجو</button>
    
    </section>

    <!-- end filter box -->


    <!-- martry main box -->

    <section class="martry__box grid grid-cols-2 gap-5 mx-5 pb-5">

        <article class="martry__item">
            <img src="{{asset('assets/images/img__mortry.png')}}" alt="martry image" />
            <h2>محمد مهدی محمدی نجات</h2>
            <hr>
            <p>وظیفه ناجا</p>

            <div class="mb-2" >
                <span>تاریخ شهادت: 1364/04/10</span>
            </div>

            <div>
                <span>محل شهادت: ابوغریب</span>
            </div>
        </article>
         <article class="martry__item">
            <img src="{{asset('assets/images/img__mortry.png')}}" alt="martry image" />
            <h2>محمد مهدی محمدی نجات</h2>
            <hr>
            <p>وظیفه ناجا</p>

            <div class="mb-2" >
                <span>تاریخ شهادت: 1364/04/10</span>
            </div>

            <div>
                <span>محل شهادت: ابوغریب</span>
            </div>
        </article>
         <article class="martry__item">
            <img src="{{asset('assets/images/img__mortry.png')}}" alt="martry image" />
            <h2>محمد مهدی محمدی نجات</h2>
            <hr>
            <p>وظیفه ناجا</p>

            <div class="mb-2" >
                <span>تاریخ شهادت: 1364/04/10</span>
            </div>

            <div>
                <span>محل شهادت: ابوغریب</span>
            </div>
        </article>
         <article class="martry__item">
            <img src="{{asset('assets/images/img__mortry.png')}}" alt="martry image" />
            <h2>محمد مهدی محمدی نجات</h2>
            <hr>
            <p>وظیفه ناجا</p>

            <div class="mb-2" >
                <span>تاریخ شهادت: 1364/04/10</span>
            </div>

            <div>
                <span>محل شهادت: ابوغریب</span>
            </div>
        </article>
         <article class="martry__item">
            <img src="{{asset('assets/images/img__mortry.png')}}" alt="martry image" />
            <h2>محمد مهدی محمدی نجات</h2>
            <hr>
            <p>وظیفه ناجا</p>

            <div class="mb-2" >
                <span>تاریخ شهادت: 1364/04/10</span>
            </div>

            <div>
                <span>محل شهادت: ابوغریب</span>
            </div>
        </article>
         <article class="martry__item">
            <img src="{{asset('assets/images/img__mortry.png')}}" alt="martry image" />
            <h2>محمد مهدی محمدی نجات</h2>
            <hr>
            <p>وظیفه ناجا</p>

            <div class="mb-2" >
                <span>تاریخ شهادت: 1364/04/10</span>
            </div>

            <div>
                <span>محل شهادت: ابوغریب</span>
            </div>
        </article>

    </section>

    <!-- end martry main box -->





@endsection