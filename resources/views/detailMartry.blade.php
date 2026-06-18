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

            <div class="">

                <button  class="global__btn">
                    
                    <svg width="17" height="15" viewBox="0 0 17 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M9.01638 1.31431L8.33246 1.99973L7.64638 1.31369C5.89719 -0.435535 3.06114 -0.435535 1.31192 1.31369C-0.437306 3.06291 -0.437306 5.89896 1.31192 7.64821L7.89138 14.2276C8.13546 14.4717 8.53121 14.4717 8.77529 14.2276L15.3598 7.64696C17.1051 5.89196 17.1081 3.06385 15.3586 1.31431C13.6062 -0.438102 10.7688 -0.438102 9.01638 1.31431Z" fill="#FF0000"/>
                    </svg>

                </button>

                <button  class="global__btn">
                    
                    <svg width="16" height="18" viewBox="0 0 16 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                       <path d="M13.0918 0C14.6979 0 16 1.34258 16 2.99872C16 4.65487 14.6979 5.99743 13.0918 5.99743C12.2748 5.99743 11.5365 5.65011 11.0082 5.09085L5.71474 8.21111C5.78104 8.46246 5.81642 8.72702 5.81642 8.99997C5.81642 9.27303 5.78104 9.53749 5.71474 9.78884L11.009 12.9084C11.5372 12.3496 12.2752 12.0026 13.0918 12.0026C14.6979 12.0026 16 13.3451 16 15.0013C16 16.6574 14.6979 18 13.0918 18C11.4856 18 10.1835 16.6574 10.1835 15.0013C10.1835 14.7283 10.2189 14.4637 10.2853 14.2124L4.9917 11.0921C4.46342 11.6513 3.72515 11.9987 2.90821 11.9987C1.30205 11.9987 0 10.6561 0 8.99997C0 7.34382 1.30205 6.00128 2.90821 6.00128C3.72479 6.00128 4.46276 6.34831 4.99099 6.90713L10.2853 3.7876C10.2189 3.53624 10.1835 3.27174 10.1835 2.99872C10.1835 1.34258 11.4856 0 13.0918 0Z" fill="#212121"/>
                    </svg>

                </button>

            </div>

            <img  class="w-full" src="{{asset('assets/images/img__martry.png')}}" alt="عکس شهید">
            <h2 class="martry__name absolute ">نعمت الله شیخ فندرسکی</h2>
            <p class="text-right text-white">پاسدار</p>

            <button class="main__btn absolute bottom-5  flex items-center gap-1 left-2"> 
                    <span>
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12.6083 0.581941C13.3841 -0.193948 14.6422 -0.193987 15.4181 0.581865C16.1939 1.35765 16.194 2.61544 15.4182 3.39127L14.5662 4.24334L11.7564 1.43385L12.6083 0.581941ZM10.7426 2.44771L13.5524 5.2572L3.995 14.8148C3.79412 15.0157 3.54141 15.1569 3.26503 15.2227L0 16L0.777439 12.7351C0.843215 12.4588 0.984364 12.2062 1.18517 12.0054L10.7426 2.44771Z" fill="#212121"/>
                        </svg>
                    </span>
                    
                    <span class="text-lg text-bold font-bold">
                        ارسال مغایرت 
                    </span>
            </button>
            
        </div>

        <!-- martry info section -->
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
  <!-- martry info section -->

        <div class="martry__lifeStyle text-white  px-5 py-2 text-right ">
            <h1 class="text-2xl  flex items-center gap-4 font-bold text-right pb-2"> 
                <span>
                    <svg class=" mt-2" width="15" height="10" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4.99262 6.05328C5.28551 6.34617 5.76039 6.34617 6.05328 6.05328L10.8263 1.28031C11.1191 0.987415 11.1191 0.512542 10.8263 0.219648C10.5334 -0.073245 10.0585 -0.073245 9.76559 0.219648L5.52295 4.46229L1.28031 0.219648C0.987415 -0.073245 0.512542 -0.073245 0.219648 0.219648C-0.073245 0.512542 -0.073245 0.987415 0.219648 1.28031L4.99262 6.05328ZM5.52295 4.52295H4.77295V5.52295H5.52295H6.27295V4.52295H5.52295Z" fill="#D3A051"/>
                    </svg>
               </span>
               <span>زندگی نامه</span>
            </h1>    

            <hr class="time__line mb-5 ">  

            <p>
                دوازدهم تیر 1346، در روستای محله جنگلده از توابع شهرستان علی آباد کتول به دنیا آمد. پدرش نورعلی، ‏آهنگر بود و مادرش زهرا نام داشت. تا چهارم ابتدایی درس خواند. کشاورزی می کرد. به عنوان سرباز ارتش 
                  ‏در جبهه حضور یافت. <br/>
هفدهم آذر 1365، با سمت نیروی واحد توپخانه در بمباران هوایی قصرشیرین بر اثر ‏اصابت ترکش خمپاره به سر، شهید شد. مزار او در گلزار شهدای امامزاده الازمن تابعه شهرستان زادگاهش ‏قرار دارد.‏
            </p>
        </div>

        
        <div class="martry__lifeStyle text-white px-5 py-2 text-right ">
            <h1 class="text-2xl flex items-center gap-4 font-bold text-right pb-2"> 
            
            
               <span>
                 <svg class=" mt-2" width="15" height="10" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M4.99262 6.05328C5.28551 6.34617 5.76039 6.34617 6.05328 6.05328L10.8263 1.28031C11.1191 0.987415 11.1191 0.512542 10.8263 0.219648C10.5334 -0.073245 10.0585 -0.073245 9.76559 0.219648L5.52295 4.46229L1.28031 0.219648C0.987415 -0.073245 0.512542 -0.073245 0.219648 0.219648C-0.073245 0.512542 -0.073245 0.987415 0.219648 1.28031L4.99262 6.05328ZM5.52295 4.52295H4.77295V5.52295H5.52295H6.27295V4.52295H5.52295Z" fill="#D3A051"/>
                </svg>
               </span>

            
            <span>وصیتنامه</span> </h1>

            <hr class="time__line mb-5 ">  

            <p>
                دوازدهم تیر 1346، در روستای محله جنگلده از توابع شهرستان علی آباد کتول به دنیا آمد. پدرش نورعلی، ‏آهنگر بود و مادرش زهرا نام داشت. تا چهارم ابتدایی درس خواند. کشاورزی می کرد. به عنوان سرباز ارتش ‏در جبهه حضور یافت.
هفدهم آذر 1365، با سمت نیروی واحد توپخانه در بمباران هوایی قصرشیرین بر اثر ‏اصابت ترکش خمپاره به سر، شهید شد. مزار او در گلزار شهدای امامزاده الازمن تابعه شهرستان زادگاهش ‏قرار دارد.‏
            </p>
        </div>

        <div class="martry__lifeStyle text-white px-5 py-2 text-right">

            <h1 class="text-2xl  flex items-center gap-4 font-bold text-right pb-2"> 

                <span>
                    <svg class="mt-2" width="15" height="10" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4.99262 6.05328C5.28551 6.34617 5.76039 6.34617 6.05328 6.05328L10.8263 1.28031C11.1191 0.987415 11.1191 0.512542 10.8263 0.219648C10.5334 -0.073245 10.0585 -0.073245 9.76559 0.219648L5.52295 4.46229L1.28031 0.219648C0.987415 -0.073245 0.512542 -0.073245 0.219648 0.219648C-0.073245 0.512542 -0.073245 0.987415 0.219648 1.28031L4.99262 6.05328ZM5.52295 4.52295H4.77295V5.52295H5.52295H6.27295V4.52295H5.52295Z" fill="#D3A051"/>
                    </svg>
               </span>

               <span>خاطرات</span>

            </h1>
            
            <hr class="time__line mb-5">

            <ul>

                <li class="memory__item flex justify-between mb-2 cursor-pointer hover:shadow-custome-shadow items-center px-5 py-3 ">

                    <p>خاطره ای به نقل از مادر شهید</p>
                    <span class="flex items-center gap-2">                        
                         <button class="" >بیشتر ...</button>
                        <span>
                            
                            <svg class="mt-2  width="7" height="12" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0.21967 6.05328C-0.0732234 5.76039 -0.0732234 5.28551 0.21967 4.99262L4.99264 0.219648C5.28553 -0.073245 5.76041 -0.073245 6.0533 0.219648C6.34619 0.512542 6.34619 0.987415 6.0533 1.28031L1.81066 5.52295L6.0533 9.76559C6.34619 10.0585 6.34619 10.5334 6.0533 10.8263C5.76041 11.1191 5.28553 11.1191 4.99264 10.8263L0.21967 6.05328ZM1.75 5.52295V6.27295H0.75V5.52295V4.77295H1.75V5.52295Z" fill="#D3A051"/>
                            </svg>

                        </span>
                    </span>
                </li>

                <li class="memory__item flex justify-between mb-2 cursor-pointer hover:shadow-custome-shadow items-center px-5 py-3 ">
                    <p>خاطره ای به نقل از مادر شهید</p>
                    <span class="flex items-center  gap-2 ">
                        <button class="" >بیشتر ...</button>
                        <span>
                            
                        <svg class="mt-2  width="7" height="12" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.21967 6.05328C-0.0732234 5.76039 -0.0732234 5.28551 0.21967 4.99262L4.99264 0.219648C5.28553 -0.073245 5.76041 -0.073245 6.0533 0.219648C6.34619 0.512542 6.34619 0.987415 6.0533 1.28031L1.81066 5.52295L6.0533 9.76559C6.34619 10.0585 6.34619 10.5334 6.0533 10.8263C5.76041 11.1191 5.28553 11.1191 4.99264 10.8263L0.21967 6.05328ZM1.75 5.52295V6.27295H0.75V5.52295V4.77295H1.75V5.52295Z" fill="#D3A051"/>
                        </svg>

                        </span>
                    </span>
                </li>

                <li class="memory__item flex justify-between mb-2 cursor-pointer hover:shadow-custome-shadow items-center px-5 py-3 ">

                    <p>خاطره ای به نقل از مادر شهید</p>

                    <span class="flex items-center gap-2">

                        <button class="" >بیشتر ...</button>

                        <span>
                            
                            <svg class="mt-2  width="7" height="12" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0.21967 6.05328C-0.0732234 5.76039 -0.0732234 5.28551 0.21967 4.99262L4.99264 0.219648C5.28553 -0.073245 5.76041 -0.073245 6.0533 0.219648C6.34619 0.512542 6.34619 0.987415 6.0533 1.28031L1.81066 5.52295L6.0533 9.76559C6.34619 10.0585 6.34619 10.5334 6.0533 10.8263C5.76041 11.1191 5.28553 11.1191 4.99264 10.8263L0.21967 6.05328ZM1.75 5.52295V6.27295H0.75V5.52295V4.77295H1.75V5.52295Z" fill="#D3A051"/>
                            </svg>

                        </span>
                    </span>

                </li>

            </ul>

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

    <!-- end martry box -->
@endsection