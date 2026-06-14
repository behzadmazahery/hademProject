@extends('v1.layout.master')


@section('content')

<div class="login__box pt-20 pb-20">
    <img class="pb-20" src=" {{asset('assets/images/main__logo.png')}} " alt="logo">

    <div class="login__content">
            <h1 class="title__style text-[22px] font-bold pb-7"> ورود یا ثبت نام  </h1>
    <form class="text-center" >
        <input class="login__input" type="tel" placeholder="۰۹۳۸ - ۴۴۰ - ۴۴۳۷" required>
        <p class="text py-7 px-20 text-center text-[12px]">با ورود و با ثبت نام شما شرایط و قوانین استفاده از سرویس های اپلیکیشن حادم و قوانین حریم خصوصی آن را میپذیرم</p>
        
        <button class="main__btn">ارسال</button>

    </form>
    </div>

   <img class="block mt-40" src=" {{asset('assets/images/main__logo-01.png')}} " alt="logo 2">
</div>

@endsection