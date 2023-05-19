@extends('layouts.admin');

@section('title')
create user
@endsection

@section('sidebar1')
<h3 class="ml-80 editData">EDIT DATA</h3>
<div class="ml-80 card-body">
<form action="{{ route('datauser.update', $user->id) }}" method="POST">
    @csrf
    <!-- Isi elemen formulir lainnya -->
    <input type="text" name="name" value="{{ $user->name }}">
    <input type="email" name="email" value="{{ $user->email }}">

    <button type="submit">Update</button>
</form>
</div>
@endsection
@section('foooter')
@endsection