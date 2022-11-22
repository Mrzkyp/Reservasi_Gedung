@extends('layouts.master-member')
@section('title', 'reservasi')
@section('content')


<center><h1>Form Reservasi Gedung</h1></center>
<div class="row">
    <div class="col-4"></div>
    <div class="col-4">
        <center>
        <form action="{{route('reservasi-proses')}}" method="post">
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
                <label class="form-label" for="hari/tanggal">Hari/Tanggal</label>
                <input name="hari_tanggal" type="date" class="form-control" id="hari_tanggal" placeholder="Masukan hari/tanggal">
            </div>
            <div class="form-outline mb-2">
                <label class="form-label" for="waktu">Waktu</label>
                <input name="waktu" type="time" class="form-control" id="waktu" placeholder="Masukan waktu">
            </div>
            <div class="form-outline mb-2">
                <label class="form-label" for="keterangan">Keterangan</label>
                <input name="keterangan" type="text" class="form-control" id="keterangan" placeholder="Masukan keterangan">
            </div>
            <button type="submit" class="btn btn-primary btn-block mb-1">kirim</button>
            </div>
        </center>
    </div>
    <div class="col-4"></div>
</div>

@endsection