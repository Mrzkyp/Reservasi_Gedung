@extends('layouts.master-member')
@section('title', 'dashboard')
@section('member')


<div class="row">
    <div class="col-4"></div>
    <div class="col-4">
        <center>
            <h1>Profil</h1>
        <form action="{{route('profil')}}" method="post">
            @csrf
            <div class="form-outline mb-2">
                <label class="form-label" for="name">Nama</label>
                <input name="name" type="text" id="name" class="form-control" placeholder="Masukan Nama">
            </div>
            <div class="form-outline mb-2">
                <label class="form-label" for="notelepon">No Telepon</label>
                <input name="notelepon" type="number" id="notelepon" class="form-control" placeholder="No telepon">
            </div>
            <div class="form-outline mb-2">
                <label class="form-label" for="alamat">Alamat</label>
                <textarea name="alamat" class="form-control" id="alamat" placeholder="Masukan Alamat"></textarea>
            </div>
            <div class="form-outline mb-2">
                <label class="form-label" for="email">Email</label>
                <input name="email" type="text" id="email" class="form-control" placeholder="Masukan Email">
            </div>
            <div class="form-outline mb-2">
                <label class="form-label" for="form2Example2">Password</label>
                <input name="password" type="password" id="form2Example2" class="form-control" placeholder="password">
            </div>

            <button type="submit" class="btn btn-primary btn-block mb-1">Simpan</button>
            </div>
        </center>
    </div>
    <div class="col-4"></div>
</div>


@endsection
