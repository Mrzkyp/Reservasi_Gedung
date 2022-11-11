@extends('layouts.master-member');
@section('title', 'reservasi')
@section('content')


<h1>Form Reservasi Gedung</h1>
<div class="row">
    <div class="col-4"></div>
    <div class="col-4">
        <center>
        <form action="{{route('register-proses')}}" method="post">
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
                <label class="form-label" for="hari/tanggal">Hati/Tanggal</label>
                <textarea name="hari/tanggal" class="form-control" id="hari/tanggal" placeholder="Masukan hari/tanggal"></textarea>
            </div>
            <div class="form-outline mb-2">
                <label class="form-label" for="waktu">Waktu</label>
                <textarea name="waktu" class="form-control" id="waktu" placeholder="Masukan waktu"></textarea>
            </div>
            <div class="form-outline mb-2">
                <label class="form-label" for="keterangan">Keterangan</label>
                <textarea name="keterangan" class="form-control" id="keterangan" placeholder="Masukan keterangan"></textarea>
            </div>

            <button type="submit" class="btn btn-primary btn-block mb-1">kirim</button>
            </div>
        </center>
    </div>
    <div class="col-4"></div>
</div>

@endsection