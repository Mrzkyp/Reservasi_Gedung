@extends('layouts.master-pj')
@section('title', 'status_pemesanan')
@section('admin')

    <div class="row">
        <center>
            <h1>Status Pemesanan</h1>
        </center>
        <form action="{{ route('status_pemesanan_admin') }}" method="post">
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <a href="reservasi" class="btn btn-success"><span class="material-symbols-outlined">
                        add</span></a>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">No Telepon</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Hari/tanggal</th>
                            <th scope="col">waktu_mulai</th>
                            <th scope="col">waktu_berakhir</th>
                            <th scope="col">Keterangan</th>
                            <th scope="col">Status Pemesanan</th>
                            <th scope="col">aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                                $no = 1;
                            @endphp
                        @foreach ($reservasi as $row)
                            <tr>
                                <th scope="row">{{ $no++ }}</th>
                                <td>{{ $row->name }}</td>
                                <td>{{ $row->notelepon }}</td>
                                <td>{{ $row->alamat }}</td>
                                <td>{{ $row->hari_tanggal }}</td>
                                <td>{{ $row->waktu_mulai }}</td>
                                <td>{{ $row->waktu_berakhir }}</td>
                                <td>{{ $row->keterangan }}</td>
                                <td>
                                    @if ($row->status == 0)
                                        <span>Belum Lunas</span>
                                    @else
                                        <span>Lunas</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('accreservasi', $row->id) }}" class="btn btn-info">Edit</a>
                                    <a href="{{ route('delete', $row->id) }}" onclick="return confirm('Apakah Ingin menghapus data ini?')" class="btn btn-danger delete" reservasi-id="{{ $row->id }}" reservasi-name="{{ $row->name }}">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $reservasi->links() }}
            </main>
            <form action="">
                <footer class="blog-footer">
                    <br>
                    <center>Jl. Lohbener Lor, Lohbener, Indramayu, Jawa Barat 45252</center>
                    <br>
                </footer>
            </form>

        @endsection
