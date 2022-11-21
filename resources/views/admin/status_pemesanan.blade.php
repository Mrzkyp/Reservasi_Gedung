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
                            <th scope="col">Waktu</th>
                            <th scope="col">Keterangan</th>
                            <th scope="col">Status Pemesanan</th>
                            <th scope="col">Status </th>
                            <th scope="col">aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                                $no = 1;
                            @endphp
                        @foreach ($reservasi as $row)
                            <tr>
                                <td>{{ $row->id }}</td>
                                <td>{{ $row->name }}</td>
                                <td>{{ $row->notelepon }}</td>
                                <td>{{ $row->alamat }}</td>
                                <td>{{ $row->hari_tanggal }}</td>
                                <td>{{ $row->waktu }}</td>
                                <td>{{ $row->keterangan }}</td>
                                <td>{{ $row->created_at->diffForHumans() }}</td>
                                <td></td>
                                <td>
                                    <a href="/tampilkandata1/{{$row->id}}" class="btn btn-info">Edit</a>
                                        <a href="/delete1/{{ $row->id }}" class="btn btn-danger delete" reservasi-id="{{ $row->id }}" reservasi-name="{{ $row->name }}">Delete</a>
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
