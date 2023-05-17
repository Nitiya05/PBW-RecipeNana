<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body style="font-family: Poppins" class="text-gray-900 antialiased">
    <div class="min-h-screen bg-gray-100 py-6 flex flex-col justify-center sm:py-12">
        <div class="relative py-3 sm:max-w-xl sm:mx-auto">
            <div class="absolute inset-0 bg-gradient-to-r from-blue-300 to-blue-600 shadow-lg transform -skew-y-6 sm:skew-y-0 sm:-rotate-6 sm:rounded-3xl">
            </div>
            <div class="relative px-4 py-10 bg-white shadow-lg sm:rounded-3xl sm:p-20">
                <div class="max-w-md mx-auto">
                    <div class="flex justify-center">
                        <img src="{{ asset('image/logoawal.png') }}">
                        
                    </div>
                    <div>
                        <p class="text-white">aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</p>
                    <div class="flex justify-center">
                        <h1 class="text-2xl font-semibold mb-10">Recipe Nana</h1>
                    </div>
                    <div class="divide-gray-200">
                        <div class="h-full content-center justify-center">
                            <div class="flex justify-center">
                                <form method="POST" action="{{ route('login') }}" class="md:w-1/2 w-full mx-5 grid grid-cols-1 gap-3">
                                    @csrf
                                    
                                    <input type="email" name="email" id="input-email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Email">
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                    <input type="password" name="password" id="input-password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Password">
                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />

                                    <div class="flex justify-first">
                                        <!-- Remember Me -->
                                        <div class="block mt-4">
                                            <label for="remember_me" class="inline-flex items-center">
                                                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                                                <span class="ml-2 text-sm text-gray-600">{{ __('Ingat Saya') }}</span>
                                            </label>
                                        </div>
                                    </div>

                                    <div class="flex justify-center">
                                        <button type="submit" class="py-2 pl-3 pr-4 md:py-2 font-bold text-black rounded-xl md:border-4  mb-10">Masuk</button>
                                    </div>

                                    <div class="flex justify-center">
                                        <a href="{{ url('/register') }}" class=" text-xs font-medium text-black hover:text-blue">{{__('Belum buat akun? Daftarkan disini!')}}</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>