@extends('layouts.master-pj')
@section('title', 'jadwal_reservasi')
@section('admin')

    <div class="row">
        <div class="row">
            <center><h1>Jadwal Reservasi</h1></center>
            <form action="{{route('jadwal_admin')}}" method="post">
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <a href="tambah_data" class="btn btn-success"><span class="material-symbols-outlined">
                    add</span></a>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Hari/tanggal</th>
                        <th scope="col">Waktu</th>
                        <th scope="col">pengguna</th>
                        <th scope="col">keterangan</th>
                        <th scope="col">aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($jadwal as $s) 
          <tr>
            <td>{{$s->hari_tanggal}}</td>
            <td>{{$s->waktu}}</td>
            <td>{{$s->pengguna}}</td>
            <td>{{$s->keterangan}}</td>
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

        @endsection
