@extends('v1.layout.master')


@section('content')
<div class="main__box">
              <!-- profile info box -->
            <section class="mt-14 relative ">
                <div class="flex flex-col justify-center items-center ">
                    <img class=" w-[150px] h-[150px] " src="{{asset('assets/images/profile__photo.png')}}" alt="profile image">
                    <h1 class="profile__name"> محمدامیر سرایی </h1>
                    <p class="profile__number" > 0938-440-4437 </p>

                    <button class="absolute cursor-pointer bg-white hover:bg-yellow-600 p-2 rounded-full top-28 right-[110px]">
                        
                        <svg width="20" height="20" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0.0266588 11.9653C0.0708873 11.7207 0.148147 11.4715 0.17614 11.3467C0.309385 10.756 0.513172 10.1839 0.660974 9.59714C0.784142 9.10726 1.01032 8.67674 1.36807 8.31899C3.40482 6.28168 5.44157 4.24493 7.47888 2.20818C7.51135 2.17571 7.54662 2.14547 7.55894 2.13428C8.53533 3.11234 9.50667 4.08593 10.4948 5.07575C10.4629 5.11046 10.3974 5.18548 10.3274 5.25547C8.36401 7.22056 6.39724 9.18285 4.43775 11.1524C4.01842 11.5734 3.53807 11.8589 2.9575 11.9967C2.46706 12.1131 1.98671 12.2671 1.4974 12.388C1.1654 12.4703 0.832849 12.5716 0.490778 12.6047C0.014342 12.6506 -0.047242 12.3718 0.0255391 11.9659L0.0266588 11.9653Z" fill="#2E2E2E"/>
                            <path d="M12.6251 2.33853C12.5865 2.65933 12.4633 2.97732 12.2545 3.27405C12.1884 3.36754 11.3682 4.28178 11.3279 4.24148C10.3448 3.26061 9.37292 2.29094 8.39093 1.3112C8.29912 1.21938 9.58062 0.235156 9.72171 0.168534C10.5626 -0.231762 11.539 0.122066 12.1224 0.79781C12.5199 1.25857 12.6901 1.80219 12.6251 2.33853Z" fill="#2E2E2E"/>
                        </svg>

                    </button>

                    <button class="absolute left-[45px] top-[160px] ">
                        
                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8.74883 16.9977C13.3045 16.9977 16.9977 13.3045 16.9977 8.74883C16.9977 4.19312 13.3045 0.5 8.74883 0.5C4.19312 0.5 0.5 4.19312 0.5 8.74883C0.5 13.3045 4.19312 16.9977 8.74883 16.9977Z" stroke="#449D32" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M4.62451 9.16135L7.09916 11.636L12.8733 5.86182" stroke="#449D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>

                    </button>

                </div>
            </section>
            <!-- end profile info box -->

            <br><br>

            <!-- inputs component -->

            <!-- type = text  اینپوت معمولی -->
             <!--  از کلاس سراسری global__input__box  استفاده شده   -->

                <div class="global__input__box">
                    <p class="p-2 px-4 text-[#e5b569]"> نام  </p>
                    <input class="text-white flex-1 p-2 bg-transparent " type="text" value="بهزاد مظاهری" />
                </div>

            <!-- end inputs component  -->
</div>
@endsection