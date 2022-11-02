@extends('layouts.master-member')
@section('title','register')
@section('content')

<div class="row">
    <div class="col-4"></div>
    <div class="col-4">
        <center>
            <h2>Register</h2>
        <form action="{{route('register-proses')}}" method="post">
            @csrf
            <div class="form-outline mb-2">
                <label class="form-label" for="name">Nama</label>
                <input name="name" type="text" id="name" class="form-control">
            </div>
            <div class="form-outline mb-2">
                <label class="form-label" for="email">Email</label>
                <input name="email" type="text" id="email" class="form-control">
            </div>
            <div class="form-outline mb-2">
                <label class="form-label" for="alamat">Alamat</label>
                <textarea name="alamat" class="form-control" id="alamat"></textarea>
            </div>
            <div class="form-outline mb-2">
                <label class="form-label" for="notelepon">No Telepon</label>
                <input name="notelepon" type="number" id="notelepon" class="form-control">
            </div>
            <div class="form-outline mb-2">
                <label class="form-label" for="form2Example2">Password</label>
                <input name="password" type="password" id="form2Example2" class="form-control"/>
            </div>

            <button type="submit" class="btn btn-primary btn-block mb-1">register</button>
            </div>
        </center>
    </div>
    <div class="col-4"></div>
</div>

@endsection