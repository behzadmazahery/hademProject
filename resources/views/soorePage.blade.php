@extends('v1.layout.master')


@section('content')

 <section class="main__box min-h-screen">
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

    <section class="soore__content w-[85%] m-auto h-[570px] relative ">
        <ul>

            <li class="soore__list hover:bg-black p-2 rounded-2xl text-right">
                <h2 class="font-bold flex items-center gap-2 text-right">
        
                    بِسْمِ اللَّهِ الرَّحْمَٰنِ الرَّحِيمِ
                    <span class="bg-white w-6 h-6 rounded-full text-center inline-flex justify-center items-center text-sm">
                        1
                    </span>
                </h2>
                <p class="text-white">ستایش خدای را که پروردگار جهانیان است.</p>
            </li>
                  <li class="soore__list hover:bg-black p-2 rounded-2xl text-right">
                <h2 class="font-bold flex items-center gap-2 text-right">
        
                    الْحَمْدُ لِلَّهِ رَبِّ الْعَالَمِينَ                   
                    <span class="bg-white w-6 h-6 rounded-full text-center inline-flex justify-center items-center text-sm">
                        2
                    </span>
                </h2>
                <p class="text-white">ستایش خدای را که پروردگار جهانیان است.  </p>
            </li>
                  <li class="soore__list hover:bg-black p-2 rounded-2xl text-right">
                <h2 class="font-bold flex items-center gap-2 text-right">
        
                    بِسْمِ اللَّهِ الرَّحْمَٰنِ الرَّحِيمِ
                    <span class="bg-white w-6 h-6 rounded-full text-center inline-flex justify-center items-center text-sm">
                        3
                    </span>
                </h2>
                <p class="text-white">ستایش خدای را که پروردگار جهانیان است.</p>
            </li>
                  <li class="soore__list hover:bg-black p-2 rounded-2xl text-right">
                <h2 class="font-bold flex items-center gap-2 text-right">
        
                    بِسْمِ اللَّهِ الرَّحْمَٰنِ الرَّحِيمِ
                    <span class="bg-white w-6 h-6 rounded-full text-center inline-flex justify-center items-center text-sm">
                        4
                    </span>
                </h2>
                <p class="text-white">ستایش خدای را که پروردگار جهانیان است.</p>
            </li>
                  <li class="soore__list hover:bg-black p-2 rounded-2xl text-right">
                <h2 class="font-bold flex items-center gap-2 text-right">
        
                    بِسْمِ اللَّهِ الرَّحْمَٰنِ الرَّحِيمِ
                    <span class="bg-white w-6 h-6 rounded-full text-center inline-flex justify-center items-center text-sm">
                        5
                    </span>
                </h2>
                <p class="text-white">ستایش خدای را که پروردگار جهانیان است.</p>
            </li>
            <li class="soore__list hover:bg-black p-2 rounded-2xl text-right">
                <h2 class="font-bold flex items-center gap-2 text-right">
        
                    بِسْمِ اللَّهِ الرَّحْمَٰنِ الرَّحِيمِ
                    <span class="bg-white w-6 h-6 rounded-full text-center inline-flex justify-center items-center text-sm">
                        6
                    </span>
                </h2>
                <p class="text-white">ستایش خدای را که پروردگار جهانیان است.</p>
            </li>
             <li class="soore__list hover:bg-black p-2 rounded-2xl text-right">
                <h2 class="font-bold flex items-center gap-2 text-right">
        
                    بِسْمِ اللَّهِ الرَّحْمَٰنِ الرَّحِيمِ
                    <span class="bg-white w-6 h-6 rounded-full text-center inline-flex justify-center items-center text-sm">
                        6
                    </span>
                </h2>
                <p class="text-white">ستایش خدای را که پروردگار جهانیان است.</p>
            </li>
             <li class="soore__list hover:bg-black p-2 rounded-2xl text-right">
                <h2 class="font-bold flex items-center gap-2 text-right">
        
                    بِسْمِ اللَّهِ الرَّحْمَٰنِ الرَّحِيمِ
                    <span class="bg-white w-6 h-6 rounded-full text-center inline-flex justify-center items-center text-sm">
                        6
                    </span>
                </h2>
                <p class="text-white">ستایش خدای را که پروردگار جهانیان است.</p>
            </li>
        </ul>
    </section>


    <!-- <section class="soore__audio w-100 bg-black m-10 ">
        <h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic, repudiandae?</h2>
        <audio  controls>
            <source src="audio-file.mp3" type="audio/mpeg">
            <source src="audio-file.ogg" type="audio/ogg">
        </audio>
    </section> -->





       <div class="container w-[85%] mx-auto  overflow-y-scroll soore__audio">
        <div class="title">📖 لیست سوره‌ها</div>
        
        <!-- سوره ۱: فاتحه -->
        <div class="surah-item">
            <div class="surah-info">
                <span class="surah-name">سوره فاتحه</span>
                <span class="surah-number">شماره سوره ۱</span>
            </div>
            <span class="surah-time">۱۵:۲۳:۰۰</span>
        </div>
        
        <!-- سوره ۳: آل عمران -->
        <div class="surah-item">
            <div class="surah-info">
                <span class="surah-name">سوره آل عمران</span>
                <span class="surah-number">شماره سوره ۳</span>
            </div>
            <span class="surah-time">۴۵:۴۲:۰۰</span>
        </div>
        
        <!-- سوره ۱۱۳: فلق (اصلاح شده) -->
        <div class="surah-item">
            <div class="surah-info">
                <span class="surah-name">سوره فلق</span>
                <span class="surah-number">شماره سوره ۱۱۳</span>
            </div>
            <span class="surah-time">--:--:--</span>
        </div>
        
        <hr class="divider">
        
        <!-- بخش زمان‌ها -->
        <div class="time-section">
            <div class="label">⏱️ زمان‌های تلاوت</div>
            <div style="display: flex; justify-content: space-between; margin-top: 10px;">
                <div>
                    <span style="color: rgba(255,255,255,0.3); font-size: 12px;">شروع</span>
                    <div class="time-value">۱۵:۲۳:۰۰</div>
                </div>
                <div>
                    <span style="color: rgba(255,255,255,0.3); font-size: 12px;">پایان</span>
                    <div class="time-value">۴۵:۴۲:۰۰</div>
                </div>
            </div>
        </div>
    </div>



 </section>


@endsection