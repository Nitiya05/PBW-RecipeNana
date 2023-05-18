@extends('layouts.admin');

@section('title')
create user
@endsection

@section('sidebar1')
<h3 class="ml-80 tambahAdmin">TAMBAH USER</h3>
<div class="ml-80 card-body">
    <form action="{{ route('simpan-user') }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        @csrf
        <div class="form-group">
            <label for="nama">Nama<br></label>
            <input type="text" id="name" name="name" class="form-control flex-wrap " placeholder="nama user">
        </div>
        <div class="form-group">
            <label for="email">Email<br></label>
            <input type="text" id="email" name="email" class="form-control" placeholder="Email">
        </div>
        <div class="form-group">
            <label for="password]">Password<br></label>
            <input type="password" id="password" name="password" class="form-control" placeholder="Email">
        </div>
        <div class="form-group">
            <label for="role"><br>Role:</label>
            <select name="role" id="role">
                <option value=""></option>
                <option value="admin">Admin</option>
                <option value="user">User</option>
            </select>
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