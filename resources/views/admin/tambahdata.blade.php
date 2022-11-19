@extends('layouts.master-member')
@section('title', 'tambahdata')
@section('content')


<h1>Form Jadwal Gedung</h1>
<div class="row">
    <div class="col-4"></div>
    <div class="col-4">
        <center>
        <form action="{{asset('tambah-proses')}}" method="post">
            @csrf
            <div class="form-outline mb-2">
                <label class="form-label" for="name">Nama</label>
                <textarea name="name" class="form-control" id="name" placeholder="Masukan Nama"></textarea>
            </div>
            <div class="form-outline mb-2">
                <label class="form-label" for="hari_tanggal">Hari/Tanggal</label>
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