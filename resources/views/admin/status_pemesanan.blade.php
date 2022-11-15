@extends('layouts.master-pj')
@section('title', 'status_pemesanan')
@section('admin')

<div class="row">
    <center><h1>Status Pemesanan</h1></center>
    <form action="{{route('status_pemesanan_admin')}}" method="post">
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <a href="reservasi" class="btn btn-success"><span class="material-symbols-outlined">
            add</span></a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Nama</th>
                <th scope="col">No Telepon</th>
                <th scope="col">Alamat</th>
                <th scope="col">Hari/tanggal</th>
                <th scope="col">Waktu</th>
                <th scope="col">Keterangan</th>
                <th scope="col">Status Pemesanan</th>
                <th scope="col">aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($reservasi as $s) 
  <tr>
    <td>{{$s->name}}</td>
    <td>{{$s->notelepon}}</td>
    <td>{{$s->alamat}}</td>
    <td>{{$s->hari_tanggal}}</td>
    <td>{{$s->waktu}}</td>
    <td>{{$s->keterangan}}</td>
    <td></td>
    <td>  
    <a href="{{$s->name}}" class="btn btn-info"><span
        class="material-symbols-outlined">edit</span></a>
      <a href="{{$s->name}}" onclick="return confirm('Apakah Anda Yakin Menghapus Data?');" class="btn btn-danger"><span
                            class="material-symbols-outlined">delete</span></a>
    </td>
  </tr>
  @endforeach
        </tbody>
    </table>
</main>
<form action="">
    <footer class="blog-footer">
        <br>
        <center>Jl. Lohbener Lor, Lohbener, Indramayu, Jawa Barat 45252</center>
        <br>
    </footer>
</form>

@endsection
