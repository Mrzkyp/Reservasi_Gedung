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
                <label class="form-label" for="waktu_mulai">Waktu Mulai</label>
                <input name="waktu_mulai" type="time" class="form-control" id="waktu_mulai" placeholder="Masukan waktu">
            </div>
            <div class="form-outline mb-2">
                <label class="form-label" for="waktu_berakhir">Waktu Berakhir</label>
                <input name="waktu_berakhir" type="time" class="form-control" id="waktu_berakhir" placeholder="Masukan waktu">
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
{{-- 
<form class="row g-3 needs-validation" novalidate>
    <form action="{{route('reservasi-proses')}}" method="post">
    <div class="col-md-6 position-relative">
      <label for="validationTooltip01" class="form-label">Nama Lengkap</label>
      <input name="name" type="text" class="form-control" id="validationTooltip01" required>
      <div class="invalid-tooltip">
        Please provide a valid city.
      </div>
    </div>

    <div class="col-md-6 position-relative">
      <label for="validationTooltip02" class="form-label">No Telepon</label>
      <input name="notelepon" type="number" class="form-control" id="validationTooltip02" required>
      <div class="invalid-tooltip">
        Please provide a valid city.
      </div>
    </div>
    <div class="col-md-12 position-relative">
      <label for="validationTooltipalamat" class="form-label">Alamat</label>
      <div class="input-group has-validation">
        <input type="text" class="form-control" id="validationTooltipalamat" aria-describedby="validationTooltipalamatPrepend" required>
        <div class="invalid-tooltip">
            Please provide a valid city.
          </div>
      </div>
    </div>
    <div class="col-md-6 position-relative">
        <label for="validationTooltip01" class="form-label">Waktu Mulai</label>
        <input name="waktu_mulai" type="time" class="form-control" id="validationTooltip01" required>
        <div class="invalid-tooltip">
          Please provide a valid city.
        </div>
      </div>
    <div class="col-md-6 position-relative">
        <label for="validationTooltip01" class="form-label">Waktu Berakhir</label>
        <input name="waktu_berakhir" type="time" class="form-control" id="validationTooltip01" required>
        <div class="invalid-tooltip">
          Please provide a valid city.
        </div>
      </div>
    <div class="col-md-6 position-relative">
      <label for="validationTooltip03" class="form-label">Tanggal</label>
      <input name="hari_tanggal" type="Date" class="form-control" id="validationTooltip03" required>
      <div class="invalid-tooltip">
        Please provide a valid city.
      </div>
    </div>
    <div class="col-md-6 position-relative">
      <label for="validationTooltip04" class="form-label">State</label>
      <select class="form-select" id="validationTooltip04" required>
        <option selected disabled value="">Choose...</option>
        <option>...</option>
      </select>
      <div class="invalid-tooltip">
        Please select a valid state.
      </div>
    </div>
    <div class="col-md-12 position-relative">
        <label for="validationTooltiketerangan" class="form-label">Keterangan</label>
        <div class="input-group has-validation">
          <input namee="keterangan" type="text" class="form-control" id="validationTooltipketerangan" aria-describedby="validationTooltiketeranganPrepend" required>
          <div class="invalid-tooltip">
              Please provide a valid city.
            </div>
        </div>
      </div>
    <center>
    <div class="col-12">
      <button class="btn btn-primary" type="submit">Submit form</button>
    </div>
</center>
  </form> --}}

@endsection