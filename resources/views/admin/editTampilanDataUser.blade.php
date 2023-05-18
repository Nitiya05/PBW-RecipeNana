@extends('layouts.admin');

@section('title')
create user
@endsection

@section('sidebar1')
<h3 class="ml-80 editData">EDIT DATA</h3>
<div class="ml-80 card-body">
    <form action="{{ route('update', {{'id' => $user->id}}) }}" method="POST">
        @csrf
        @method('PUT')
        <!-- Form fields for editing data -->
        <input type="text" name="name" value="{{ $data->name }}">
        <input type="text" name="email" value="{{ $data->email }}">
        <!-- ... -->

        <button type="submit">Update</button>
    </form>
    <!-- <form action="{{ route('update', $data->id) }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" id="name" name="name" class="form-control" placeholder="nama" value="{{ $data->name }}">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" id="email" name="email" class="form-control" placeholder="Email" value="{{ $data->email }}">
        </div>

        <div class="form-group">
            <button class="transition ease-in-out delay-150 bg-blue-500 hover:-translate-y-1 hover:scale-110 hover:bg-indigo-500 duration-300 ... rounded-full ..." type="submit">Simpan</button>
        </div>

    </form> -->
</div>
@endsection
@section('foooter')
@endsection