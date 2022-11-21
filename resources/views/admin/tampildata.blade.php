@extends('layouts.master-pj')

@section('title', 'Edit')

@section('admin')

    <center><h1>Edit Jadwal</h1></center>
<div class="row">
    <div class="col-4"></div>
    <div class="col-4">
        <center>
        <form action="/updatedata/{{ $jadwal->id }}" method="POST">
            @csrf
            <div class="form-outline mb-2">
                <label class="form-label" for="name">Nama</label>
                <input name="name" class="form-control" value="{{ $jadwal->name }}" id="name" placeholder="Masukan Nama">   
            </div>
            <div class="form-outline mb-2">
                <label class="form-label" for="hari_tanggal">Hari/Tanggal</label>
                <input name="hari_tanggal" value="{{ $jadwal->hari_tanggal }}" type="date" class="form-control" id="hari_tanggal" placeholder="Masukan hari/tanggal">
            </div>
            <div class="form-outline mb-2">
                <label class="form-label" for="waktu">Waktu</label>
                <input name="waktu" value="{{ $jadwal->waktu }}" type="time" class="form-control" id="waktu" placeholder="Masukan waktu">
            </div>
            <div class="form-outline mb-2">
                <label class="form-label" for="keterangan">Keterangan</label>
                <input name="keterangan" value="{{ $jadwal->keterangan }}" type="text" class="form-control" id="keterangan" placeholder="Masukan keterangan">
            </div>

            <button type="submit" class="btn btn-primary btn-block mb-1">kirim</button>
            </div>
        </center>
    </div>
    <div class="col-4"></div>
</div>
        
    @endsection
