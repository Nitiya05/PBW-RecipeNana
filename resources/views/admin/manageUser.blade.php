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
                        <input type="text" id="table-search-users" class="block pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search for users">
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
                Nama
            </th>

            <th scope="col" class="px-40 py-3  border border-blue-300 shadow rounded-md">
                Email
            </th>
            <th scope="col" class="px-20 py-3 border border-blue-300 shadow rounded-md">
                Role
            </th>
            <th scope="col" class="px-20 py-3 border border-blue-300 shadow rounded-md">
                Action
            </th>
        </tr>
    </thead>
    <tbody>
        @if (isset($user))
        @foreach ($user as $item)
        <tr>
            <td class="w-4 p-4 text-base font-semibold  items-center  text-gray-900 whitespace-nowrap dark:text-white border border-blue-300 shadow rounded-md">
                {{ $item->id }}
            </td>
            <td class="px-20 w-4 p-4 text-base font-semibold  items-center  text-gray-900 whitespace-nowrap dark:text-white border border-blue-300 shadow rounded-md">
                {{ $item->name }}
            </td>
            <td class="px-20 py-3  w-4 p-8 text-base font-semibold  items-center  text-gray-900 whitespace-nowrap dark:text-white border border-blue-300 shadow rounded-md">
                {{ $item->email }}
            </td>
            <td class="px-20 w-4 p-4 text-base font-semibold  items-center  text-gray-900 whitespace-nowrap dark:text-white border border-blue-300 shadow rounded-md ">
                {{ $item->role }}
            </td>
            <td class="px-20 border border-blue-300 shadow rounded-md">
                <!-- Modal toggle -->
                <a href="/tampilkanDataUser/{{ $item->id }}" data-modal-target="editUserModal" data-modal-show="editUserModal" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5  mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Edit</a>
                <a href="/deleteDataUser/{{ $item->id }}" data-modal-target="editUserModal" data-modal-show="editUserModal" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Hapus</a>

            </td>
        </tr>
        @endforeach
        <div>
            <a href="{{ route('create-user') }}" class="ml-60 mb-5 inline-flex items-center text-gray-500 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-3 py-1.5 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700" type="button">
                Crete User
            </a>
        </div>
        @endif
        {{-- <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <td class="w-4 p-4">
                        <div class="flex items-center">
                            <input id="checkbox-table-search-1" type="checkbox"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                        </div>
                    </td>
                    <th scope="row" class="flex items-center  text-gray-900 whitespace-nowrap dark:text-white">
                        <img class="w-10 h-10 rounded-full" src="/docs/images/people/profile-picture-1.jpg"
                            alt="Jese image">
                        <div class="pl-3">
                            <div class="text-base font-semibold">Khairil</div>
                            <div class="font-normal text-gray-500">kiusers\</div>
                        </div>
                    </th>
                    <td class="">
                        ki@gmail.com
                    </td>
                    <td class="">
                        <!-- Modal toggle -->
                        <a href="#" type="button" data-modal-target="editUserModal"
                            data-modal-show="editUserModal"
                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit user</a>
                    </td>
                </tr> --}}
    </tbody>
</table>

<!-- Edit user modal -->
<div id="editUserModal" tabindex="-1" aria-hidden="true" class="ml-80 fixed top-0 left-0 right-0 z-50 items-center justify-center hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <form action="#" class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                <h3 class="ml-80 text-xl font-semibold text-gray-900 dark:text-white">
                    Edit user
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="editUserModal">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-6 space-y-6">
                <div class="grid grid-cols-6 gap-6">
                    <div class="col-span-6 sm:col-span-3">
                        <label for="first-name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">First Name</label>
                        <input type="text" name="first-name" id="first-name" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Bonnie" required="">
                    </div>
                    <div class="col-span-6 sm:col-span-3">
                        <label for="last-name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Last Name</label>
                        <input type="text" name="last-name" id="last-name" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Green" required="">
                    </div>
                    <div class="col-span-6 sm:col-span-3">
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                        <input type="email" name="email" id="email" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="example@company.com" required="">
                    </div>
                    <div class="col-span-6 sm:col-span-3">
                        <label for="phone-number" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone
                            Number</label>
                        <input type="number" name="phone-number" id="phone-number" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="e.g. +(12)3456 789" required="">
                    </div>
                    <div class="col-span-6 sm:col-span-3">
                        <label for="department" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Department</label>
                        <input type="text" name="department" id="department" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Development" required="">
                    </div>
                    <div class="col-span-6 sm:col-span-3">
                        <label for="company" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Company</label>
                        <input type="number" name="company" id="company" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="123456" required="">
                    </div>
                    <div class="col-span-6 sm:col-span-3">
                        <label for="current-password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Current
                            Password</label>
                        <input type="password" name="current-password" id="current-password" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="••••••••" required="">
                    </div>
                    <div class="col-span-6 sm:col-span-3">
                        <label for="new-password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">New
                            Password</label>
                        <input type="password" name="new-password" id="new-password" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="••••••••" required="">
                    </div>
                </div>
            </div>
            <!-- Modal footer -->
            <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Save
                    all</button>
            </div>

        </form>

    </div>

</div>
</div>


@section('foooter')
@endsection