@extends('layouts.app')

@section('content')

    <div class="pt-20 bg-[#442626] text-white">
        
    <br>
        <div class=" flex ">
            <div class="ml-10 my-20 sm:mx-50 ">
                <img class="ml-20 mb-8" src="{{('image/about-img.jpg') }}">
                <br>
                <button type="submit"
                            class="ml-20 block text-white bg-gray-600 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800"
                            type="button">
                            pilih gambar
                        </button>
            </div>
            <div class="ml-20 pt-20 ">
                <form action="/" method="post">
                    @csrf
                    <br>
                    <br>
                    
                    <input type="text"
                        class="form-control bg-gray-200 hover:bg-gray-300 rounded-3xl flex-wrap w-full p-2.5" name="nama"
                        id="nama" placeholder="Nama">
                        <br><br><br>

                        <input type="text"
                        class="form-control bg-gray-200 hover:bg-gray-300 rounded-3xl flex-wrap w-full p-2.5" name="username"
                        id="username" placeholder="username">
                    <br><br><br>

                    <input type="text"
                        class="form-control bg-gray-200 hover:bg-gray-300 rounded-3xl flex-wrap w-full p-2.5" name="email"
                        id="email" placeholder="Email">

                

                    <div class="flex items-center ml-40 pl-40 p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                        <button type="submit"
                            class="ml-20 block text-white bg-gray-600 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800"
                            type="button">
                            save
                        </button>
                    </div>
                </form>

            </div>

    </div>
    </div>
