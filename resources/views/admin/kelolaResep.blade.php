@extends('layouts.admin');

@section('title')
Manage User
@endsection

<div class="relative overflow-x-auto shadow-md sm:rounded-lg">

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <div class="flex items-center justify-between py-4 bg-white dark:bg-gray-800">
            <div class="ml-80 relative">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                    </svg>
                </div>
                <form action="#" method="GET">
                    @csrf
                    <label for="keyword">
                        <input type="text" id="table-search-users" class="block pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search for Resep">
                        {{-- <ion-icon name="search-outline"></ion-icon> --}}
                    </label>
                </form>
            </div>
            
        </div>
    </div>
</div>
    <table class="ml-60 mr-60 text-sm text-left text-gray-500 dark:text-gray-400 border border-blue-300 shadow rounded-md">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400 border border-blue-300 shadow rounded-md">
            <tr>
                <th scope="col" class="p-4 border border-blue-300 shadow rounded-md ">

                    Id
                </th>
                <th scope="col" class="px-20 py-3 border border-blue-300 shadow rounded-md ">
                    Nama makanan
                </th>

                <th scope="col" class="px-40 py-3  border border-blue-300 shadow rounded-md">
                    Resep
                </th>
                <th scope="col" class="px-20 py-3 border border-blue-300 shadow rounded-md">
                    Gambar makanan
                </th>
                <th scope="col" class="px-20 py-3 border border-blue-300 shadow rounded-md">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($reseps as $item)
            <tr>
                <td class="w-4 p-4 text-base font-semibold  items-center  text-gray-900 whitespace-nowrap dark:text-white border border-blue-300 shadow rounded-md">
                    {{ $item->id }}
                </td>
                <td class="px-20 w-4 p-4 text-base font-semibold  items-center  text-gray-900 whitespace-nowrap dark:text-white border border-blue-300 shadow rounded-md">
                    {{ $item->nama_makanan }}
                </td>
                <td class="px-20 py-3  w-4 p-8 text-base font-semibold  items-center  text-gray-900 whitespace-nowrap dark:text-white border border-blue-300 shadow rounded-md">
                    {{ $item->resep }}
                </td>
                <td class="px-20 w-4 p-4 text-base font-semibold  items-center  text-gray-900 whitespace-nowrap dark:text-white border border-blue-300 shadow rounded-md ">
                    {{ $item->gambar }}
                </td>
                <td class="px-20 border border-blue-300 shadow rounded-md">
                    <!-- Modal toggle -->
                    <a href="/tampilkanDataUser/{{ $item->id }}" data-modal-target="editUserModal" data-modal-show="editUserModal" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5  mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Edit </a>
                    <a href="/deleteResep/{{ $item->id }}" data-modal-target="editUserModal" data-modal-show="editUserModal" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Hapus</a>

                </td>
            </tr>
            @endforeach
            <div class="flex items-center justify-between py-4 bg-white dark:bg-gray-800">
                <div>
                    <a href="{{ route('create-resep') }}" class="ml-60 inline-flex items-center text-gray-500 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-3 py-1.5 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700" type="button">
                        Buat Resep
                    </a>
                </div>
            </div>

</div>


</div>
</div>