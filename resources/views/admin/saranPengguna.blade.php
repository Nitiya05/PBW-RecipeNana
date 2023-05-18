@extends('layouts.admin');

@section('title')
    Permintaan Pengguna
@endsection

@section('content')
<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Username
                </th>
                <th scope="col" class="px-6 py-3">
                    Nama Pengguna
                </th>
                <th scope="col" class="px-6 py-3">
                    Nama Makanan
                </th>
                <th scope="col" class="px-6 py-3">
                    Keterangan
                </th>
                <th scope="col" class="px-6 py-3">
                    <span class="sr-only">Aksi</span>
                </th>
            </tr>
        </thead>
        <tbody>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    ayunara
                </th>
                <td class="px-6 py-4">
                    Ayuniara
                </td>
                <td class="px-6 py-4">
                    Jagung Bakar Madu
                </td>
                <td class="px-6 py-4">   
                    Cara membuat: 1. bla bla bla 
                    2. Bla bla bla 
                </td>
                <td class="px-6 py-4 text-right">
                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Done</a>
                </td>
            </tr>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    nala
                </th>
                <td class="px-6 py-4">
                    Nala Qaisara
                </td>
                <td class="px-6 py-4">
                    Es Selasih Semangka Kuning
                </td>
                <td class="px-6 py-4">   
                    Cara membuat: 1. bla bla bla 
                    2. Bla bla bla 
                </td>
                <td class="px-6 py-4 text-right">
                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Done</a>
                </td>
            </tr>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    refaar
                </th>
                <td class="px-6 py-4">
                    Refa Faris
                </td>
                <td class="px-6 py-4">
                    Kue Coklat Tanpa Oven
                </td>
                <td class="px-6 py-4">   
                    Cara membuat: 1. bla bla bla 
                    2. Bla bla bla 
                </td>
                <td class="px-6 py-4 text-right">
                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Done</a>
                </td>
            </tr>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    amiratta
                </th>
                <td class="px-6 py-4">
                    Amir Muatta
                </td>
                <td class="px-6 py-4">
                    Pasta Avocado Creamy
                </td>
                <td class="px-6 py-4">   
                    Cara membuat: 1. bla bla bla 
                    2. Bla bla bla 
                </td>
                <td class="px-6 py-4 text-right">
                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Done</a>
                </td>
            </tr>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    fahiratr
                </th>
                <td class="px-6 py-4">
                    Fahira Tarani
                </td>
                <td class="px-6 py-4">
                    Es Krim Rumahan 
                </td>
                <td class="px-6 py-4">   
                    Cara membuat: 1. bla bla bla 
                    2. Bla bla bla 
                </td>
                <td class="px-6 py-4 text-right">
                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Done</a>
                </td>
            </tr>
        </tbody>
    </table>
</div>

@endsection

@section('footer')
@endsection