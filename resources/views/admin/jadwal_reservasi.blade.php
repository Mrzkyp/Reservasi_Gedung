@extends('layouts.master-pj');
@section('title', 'jadwal_reservasi')
@section('admin')

<div class="row">
    <center><h1>Jadwal Reservasi</h1></center>
    <form action="{{route('jadwal')}}" method="post">
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <button type="button" class="btn btn-success"><span class="material-symbols-outlined">
            add</span></button>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Hari/tanggal</th>
                <th scope="col">Waktu</th>
                <th scope="col">Pengguna</th>
                <th scope="col">aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Senin, 26/9/2022</td>
                <td>08.00 s.d 10.00</td>
                <td>Polindra</td>
                <td>
                    <button type="button" class="btn btn-danger"><span
                            class="material-symbols-outlined">delete</span></button>
                    <button type="button" class="btn btn-info"><span
                            class="material-symbols-outlined">edit</span></button>
                </td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Selasa, 27/9/2022</td>
                <td>13.00 s.d 15.00</td>
                <td>PKH</td>
                <td>
                    <button type="button" class="btn btn-danger"><span
                            class="material-symbols-outlined">delete</span></button>
                    <button type="button" class="btn btn-info"><span
                            class="material-symbols-outlined">edit</span></button>
                </td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Kamis, 29/9/2022</td>
                <td>14.00 s.d 17.00</td>
                <td>PB. Fajar</td>
                <td>
                    <button type="button" class="btn btn-danger"><span
                            class="material-symbols-outlined">delete</span></button>
                    <button type="button" class="btn btn-info"><span
                            class="material-symbols-outlined">edit</span></button>
                </td>
            </tr>
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
