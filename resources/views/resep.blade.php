@extends('layouts.app')

@section('content')

    <div class="pt-20">
        
        <table border="3" class="w-full bg-[#442626] text-sm text-left text-gray-500 dark:text-gray-400">
        <thead>
            <tr>
                <th scope="col" class="px-6 py-3 text-center">
                    
                </th>
                <th scope="col" class="px-6 py-3 text-center">
                    
                </th>
                
            </tr>
            @foreach  ($reseps as $ks)
            <tr>
                <td class="text-white text-xl text-center">
                {{ $ks->nama_makanan}}<br><br>
                    <button>
                        <a href="/recipe" class =" py-2 pl-3 pr-4 md:py-2 font-bold text-white rounded-xl md:border-2 border-white mb-10">
                            Selengkapnya
                        </a>
                    </button><br><br><br>
                </td>
                <td >
                {{ $ks->gambar }}<br>
                </td>
            </tr>
            @endforeach
        </thead>
    </div>

    <table border="3" class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="p-4 text-center">
                    {{-- <div class="flex items-center">
                        <input id="checkbox-all-search" type="checkbox"
                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="checkbox-all-search" class="sr-only">checkbox</label>
                    </div> --}}
                    
            </tr>
        
          

@endsection