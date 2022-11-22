@extends('layouts.master-member')
@section('title', 'edit')
@section('content')

<center><h1>Form Reservasi Gedung</h1></center>
<div class="row">
    <div class="col-4"></div>
    <div class="col-4">
        <center>
        <form action="/updatedata1/{{ $reservasi->id }}" method="POST">
            @csrf
            <div class="form-outline mb-2">
                <label class="form-label" for="name">Nama</label>
                <input name="name" type="text" id="name" value="{{$reservasi->name}}" class="form-control" placeholder="Masukan Nama">
            </div>
            <div class="form-outline mb-2">
                <label class="form-label" for="notelepon">No Telepon</label>
                <input name="notelepon" type="number" id="notelepon" value="{{$reservasi->notelepon}}" class="form-control" placeholder="No telepon">
            </div>
            <div class="form-outline mb-2">
                <label class="form-label" for="alamat">Alamat</label>
                <input name="alamat" type="text" value="{{$reservasi->alamat}}" class="form-control" id="alamat" placeholder="Masukan Alamat">
            </div>
            <div class="form-outline mb-2">
                <label class="form-label" for="hari/tanggal">Hari/Tanggal</label>
                <input name="hari_tanggal" type="date" value="{{$reservasi->hari_tanggal}}" class="form-control" id="hari_tanggal" placeholder="Masukan hari/tanggal">
            </div>
            <div class="form-outline mb-2">
                <label class="form-label" for="waktu">Waktu</label>
                <input name="waktu" type="time" value="{{$reservasi->waktu}}" class="form-control" id="waktu" placeholder="Masukan waktu">
            </div>
            <div class="form-outline mb-2">
                <label class="form-label" for="keterangan">Keterangan</label>
                <input name="keterangan" type="text" value="{{$reservasi->keterangan}}" class="form-control" id="keterangan" placeholder="Masukan keterangan">
            </div>
            <button type="submit" class="btn btn-primary btn-block mb-1">kirim</button>
            </div>
        </center>
    </div>
    <div class="col-4"></div>
</div>

@endsection