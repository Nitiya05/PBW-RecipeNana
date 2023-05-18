@extends('layouts.admin');

@section('title')
Edit Resep
@endsection

@section('sidebar1')

<!-- Content -->
<div class="ml-60 mb-6 items-left border border-blue-300 shadow rounded-md p-4 max-w-sm w-full mx-auto">
    <div class="animate-pulse flex space-x-4">
    <span class="relative flex h-3 w-3">
        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-sky-400 opacity-75"></span>
        <span class="relative inline-flex rounded-full h-3 w-3 bg-sky-500"></span>
    </span>
        <div class="h-7 w-15 text-3xl mb-8 rounded">welocome min !!
            <br> Kelola data disini ya
        </div>
        <div class="space-y-3">
            <div class="grid grid-cols-3 gap-4">
                <div class="h-2 bg-slate-200 rounded col-span-2"></div>
                <div class="h-2 bg-slate-200 rounded col-span-1"></div>
            </div>
            <div class="h-2 bg-slate-200 rounded"></div>
        </div>
    </div>
</div>
</div>

<div class=" w-full bg-gray-50  text-center" id="content">
    <div class="main ">
        <div class=" mr-20 ml-80 search items-center">
            <form action="#" method="GET">
                @csrf
                <label for="keyword">
                    <input type="text" placeholder="Search here" id="keyword" class="form-control" name="keyword value=" {{ old('keyword') }} required>
                    <ion-icon name="search-outline"></ion-icon>
                </label>
            </form>
        </div>

        <div class="user">
            {{-- <img src="assets/imgs/putin.jpeg" alt=""> --}}
        </div>
    </div>

    <div class="mt-20 mr-20 ml-80 grid grid-cols-2 gap-6">
        <!--Metric Card-->
        <div class="bg-gradient-to-b from-pink-200 to-pink-100 border-b-4 border-pink-500 rounded-lg shadow-xl p-5">
            <div class="flex flex-row items-center">
                <div class="flex-shrink pr-4">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="mb-4 h-auto rounded-full align-middle" style="max-width: 50px;">
                        <!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                        <path d="M399 384.2C376.9 345.8 335.4 320 288 320H224c-47.4 0-88.9 25.8-111 64.2c35.2 39.2 86.2 63.8 143 63.8s107.8-24.7 143-63.8zM512 256c0 141.4-114.6 256-256 256S0 397.4 0 256S114.6 0 256 0S512 114.6 512 256zM256 272c39.8 0 72-32.2 72-72s-32.2-72-72-72s-72 32.2-72 72s32.2 72 72 72z" />
                    </svg>
                    <div class="mt-6 rounded-full p-5 bg-pink-600"><i class="fas fa-users fa-2x fa-inverse"></i></div>

                </div>
                <div class="mt-6 flex-1 text-right md:text-center">
                    <h2 class="font-bold uppercase text-gray-600">Total Users</h2>
                    <p class="font-bold text-3xl">249 <span class="text-pink-500"><i class="fas fa-exchange-alt"></i></span></p>
                </div>
                <div class="mt-6 flex-1 text-right md:text-center">
                    <a href="{{ route('manage-user') }}" class="bg-white rounded-full bg-gradient-to-b from-yellow-200 to-yellow-100 border-b-4 border-yellow-500 rounded-lg shadow-xl p-5inline block p-3 px-19 text-center text-black font-medium font-Arial ml-0">
                        Kelola User
                    </a>
                </div>
            </div>
        </div>

        <!--/Metric Card-->
        <div class="ml-10 bg-gradient-to-b from-pink-200 to-pink-100 border-b-4 border-pink-500 rounded-lg shadow-xl p-5">
            <div class="flex flex-row items-center">
                <div class="flex-shrink pr-4">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                        <!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                        <path d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H288V368c0-26.5 21.5-48 48-48H448V96c0-35.3-28.7-64-64-64H64zM448 352H402.7 336c-8.8 0-16 7.2-16 16v66.7V480l32-32 64-64 32-32z" />
                    </svg>
                    <div class="mt-6 rounded-full p-5 bg-pink-600"><i class="fas fa-users fa-2x fa-inverse"></i></div>
                </div>
                <div class="flex-1 text-right md:text-center">
                    <h2 class="font-bold uppercase text-gray-600">Total Resep</h2>
                    <p class="font-bold text-3xl">249 <span class="text-pink-500"><i class="fas fa-exchange-alt"></i></span></p>
                </div>
                <div class="mt-6 flex-1 text-right md:text-center">
                    <a href="#" class="bg-white rounded-full bg-gradient-to-b from-yellow-200 to-yellow-100 border-b-4 border-yellow-500 rounded-lg shadow-xl p-5inline block p-3 px-19 text-center text-black font-medium font-Arial ml-0">
                        Kelola Resep
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-20 mr-20 ml-80 items-center">
        <!--Metric Card-->
        <div class="bg-gradient-to-b from-pink-200 to-pink-100 border-b-4 border-pink-500 rounded-lg shadow-xl p-5">
            <div class="flex flex-row items-center">
                <div class="flex-shrink pr-4">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                        <path d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z" />
                    </svg>
                    <div class="mt-6 rounded-full p-5 bg-pink-600"><i class="fas fa-users fa-2x fa-inverse"></i></div>

                </div>
                <div class="mt-6 flex-1 text-right md:text-center">
                    <h2 class="font-bold uppercase text-gray-600">Total Saran</h2>
                    <p class="font-bold text-3xl">249 <span class="text-pink-500"><i class="fas fa-exchange-alt"></i></span></p>
                </div>
                <div class="mt-6 flex-1 text-right md:text-center">
                    <a href="#" class="bg-white rounded-full bg-gradient-to-b from-yellow-200 to-yellow-100 border-b-4 border-yellow-500 rounded-lg shadow-xl p-5inline block p-3 px-19 text-center text-black font-medium font-Arial ml-0">
                        Lihat Request
                    </a>
                </div>
            </div>
        </div>
    </div>


    @section('content1')
</div>



@endsection

@section('footer')