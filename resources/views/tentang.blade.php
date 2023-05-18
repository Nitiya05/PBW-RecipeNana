@extends('layouts.app')

@section('content')

    <div class="pt-20 bg-[442626] my-20 w-full">
        <div class="m-auto">
            <img
            class="ml-80 pl-80"
            src="{{asset('image/title.png')}}"
            alt="..." />
        </div>
        <p class="text-3xl text-[#B78484] text-center font-extrabold font-[arial] ">
            Resep Terbaik Kami</p>
        <p class="text-2xl text-white text-center font-Arial ">
            Recipe NaNa memberikan rekomendasi beberapa resep makanan terbaik<br>
        </p>

        <div id="default-carousel" class="relative w-full pt-10 " data-carousel="slide">

            <div class="relative overflow-hidden rounded-lg md:h-96">

            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <a href="#">
                    <img src="/image/krimsaus.jpg" class="absolute block w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 object-cover" alt="..." >
                    <h3 class="absolute text-[arial] text-6xl ml-20 text-black font-bold top-5 pt-10 left-5">Steak Krim Saus</h3>
                </a>
            </div>

            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <a href="#">
                    <img src="/image/pizza.jpg" class="absolute block w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 object-cover" alt="...">
                    <h3 class="absolute text-[arial] text-6xl ml-20 text-white font-bold top-5 pt-10 left-5">Pizza HomeMade</h3>
                </a>
            </div>

            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <a href="#">
                    <img src="/image/cimol.jpg" class="absolute block w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 object-cover" alt="...">
                    <h3 class="absolute text-[arial] text-6xl ml-20 text-white font-bold top-5 pt-10 left-5">Cimol</h3>
                </a>    
            </div>

            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <a href="#">
                    <img src="/image/crepes.jpg" class="absolute block  w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 object-cover" alt="...">
                    <h3 class="absolute text-[arial] text-6xl ml-20 text-black font-bold top-5 pt-10 left-5">Krepes</h3>
                </a>
            </div>
        </div>

        <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
            <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
        </div>

            <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                    <span class="sr-only">Previous</span>
                </span>
            </button>
            <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>
        </div>  
    
        <div class="grid md:grid-cols-2 xl:mx-10 pt-10 mb-10 w-full">
        <p class="ml-20 text-white text-2xl text-justify font-Arial">
            <a href="/recipe" class =" py-2 pl-3 pr-4 md:py-2 font-bold text-white rounded-xl md:border-2 border-white">
                Selengkapnya
            </a>
        </p>
        
    </div>
    <div class="bg-[F0D1D1]">
        <div class=" flex ">
            <div class="ml-10 my-20 sm:mx-50 ">
                <img class="ml-20 mb-8" src="{{('image/about-img.jpg') }}">
            </div>
            <div class="ml-20 ">
                <form action="/simpan-saran" method="post">
                    @csrf
                    <br>
                    <br>
                    <p class="uppercase text-center font-bold text-3xl font-arial">
                        SARANKAN RESEP
                    </p>
                    <label for="nama" class="text-[#F0D1D1]">aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
                        <p class="form-label block mb-2 text-sm font-medium text-gray-900 ">
                            Nama Anda
                        </p>
                    </label>
                    <input type="text"
                        class="form-control bg-gray-200 hover:bg-gray-300 rounded-3xl flex-wrap w-full p-2.5" name="nama"
                        id="nama" placeholder="Tuliskan nama anda">

                    <label for="nama_makanan" class="text-white">
                        <p class="form-label block mb-2 text-sm font-medium text-gray-900 ">
                            <br>Nama Makanan
                        </p>
                    </label>
                    <input type="text"
                        class="form-control bg-gray-200 hover:bg-gray-300 rounded-3xl flex-wrap w-full p-2.5" name="nama_makanan"
                        id="nama_makanan" placeholder="Tuliskan nama makanan">

                    <label for="keterangan" class="text-white">
                        <p class="form-label block mb-2 text-sm font-medium text-gray-900 ">
                            <br>Keterangan
                        </p>
                    </label>
                    <textarea class="form-control bg-gray-200 hover:bg-gray-300 rounded-3xl flex-wrap w-full p-2.5"
                        placeholder="Tuliskan kritik dan saran anda" name="keterangan" id="keterangan" style="height: 150px"></textarea>

                    <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                        <button type="submit"
                            class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                            type="button">
                            Kirim
                        </button>
                    </div>
                </form>

            </div>

        </div>
    