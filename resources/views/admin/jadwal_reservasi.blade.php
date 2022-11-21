@extends('layouts.master-pj')
@section('title', 'jadwal_reservasi')
@section('admin')

    <div class="row">
        <div class="row">
            <center>
                <h1>Jadwal Reservasi</h1>
            </center>
            <form action="{{ route('jadwal_admin') }}" method="post">
                <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                    <a href="tambah_data" class="btn btn-success"><span class="material-symbols-outlined">
                            add</span></a>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Hari_Tanggal</th>
                                <th scope="col">Waktu</th>
                                <th scope="col">Keterangan</th>
                                <th scope="col">Status</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 1;
                            @endphp
                            @foreach ($jadwal as $row)
                                <tr>
                                    <th scope="row">{{ $no++ }}</th>
                                    <td>{{ $row->name }}</td>
                                    <td>{{ $row->hari_tanggal }}</td>
                                    <td>{{ $row->waktu }}</td>
                                    <td>{{ $row->keterangan }}</td>
                                    <td>{{ $row->created_at->diffForHumans() }}</td>
                                    <td>
                                        <a href="/tampilkandata/{{$row->id}}" class="btn btn-info">Edit</a>
                                        <a href="/delete/{{ $row->id }}" class="btn btn-danger delete" jadwal-id="{{ $row->id }}" jadwal-nama="{{ $row->nama }}">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $jadwal->links() }}
                </main>
            @endsection
