@extends('v1.layout.master')


@section('content')

    <section class="main__box ai_main__box relative">
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

    <!-- ai section box -->

        <section class="ai__box ">

            <!-- setting -->
            <article class="text-white ai__setting gap-2 w-full pointer ">
                <button>
                    <img src="{{asset('assets/images/img__addMessage.png')}}" alt="اضافه کردن متن">
                </button>
                <span class="border border-x-zinc-500"></span>
                <button>
                    <img src="{{asset('assets/images/img__timeMessage.png')}}" alt="اضافه کردن متن">
                </button>
            </article>

            <!-- message -->
            <article class="text-center ai__text__box pt-40">
                <h1 class="ai__title text-3xl "> سلام </h1>
                <h2 class="text-white text-xl "> چه اطلاعاتی در مورد شهدا میخوای ؟ </h2>
            </article>

            
            <!-- input  -->
            <article class="ai__inpox__message absolute bottom-10 flex items-center justify-between right-0 left-0 px-10 ">

                <div>
                    <button class="ai__send__message__btn bg-[#000] p-3 rounded-2xl">
                    <img src="{{asset('assets/images/img__sendMessage.png')}}" alt="send message btn">
                    </button>
                </div>

                <div class="bg-[#000] p-3 rounded-2xl">
                    <form class="flex justify-between ">

                        <button>
                            <img src="{{asset('assets/images/img__microphone-2.png')}}" alt="">
                        </button>

                        <span class="border border-x-zinc-500 mr-2"></span>

                        <input class="w-72 mx-2 bg-inherit border-none outline-none  text-white" class="ai__input"  type="text" />

                        <button>
                            <img src="{{asset('assets/images/img__attach.png')}}" alt="">
                        </button>

                    </form>
                </div>

            </article>




        </section>
    
                    <!--end ai section box -->
    
    </section>

@endsection