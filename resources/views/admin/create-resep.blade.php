@extends('layouts.admin');

@section('title')
create user
@endsection

@section('sidebar1')
<h3 class="ml-80 tambahAdmin">TAMBAH RESEP<br></h3>
<div class="mt-10 ml-80 card-body">
    <form action="{{ route('simpan-resep') }}" method="post" >
        {{ csrf_field() }}
        @csrf
        <div class="form-group">
            <label for="nama_makanan">Nama Makanan<br></label>
            <input type="text" id="nama_makanan" name="nama_makanan" class="form-control flex-wrap " placeholder="Nama Makanan">
        </div>
        <div class="form-group">
            <label for="resep">resep<br></label>
            <textarea name="resep" id="resep" name="resep" cols="30" rows="10"></textarea>
        </div>
        <div class="form-group">
                <label for="gambar">Gambar</label>
                <input type="file" name="gambar"
                    class="block w-full text-sm text-slate-500
                file:mr-4 file:py-2 file:px-4
                file:rounded-full file:border-0
                file:text-sm file:font-semibold
                file:bg-violet-50 file:text-violet-700
                hover:file:bg-violet-100" />
            </div>
        

            <div class="form-group mt-10">
            <button type="submit" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                Simpan
            </button>
        </div>
    </form>
</div>
@endsection
@section('foooter')
@endsection