@extends('layouts.master-pj');
@section('title', 'status_pemesanan')
@section('admin')

<div class="row">
    <center><h1>Status Pemesanan</h1></center>
    <form action="{{route('status_pemesanan_admin')}}" method="post">
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <button type="button" class="btn btn-success"><span class="material-symbols-outlined">
            add</span></button>
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
                <th scope="col">aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Rizky</td>
                <td>088102370987</td>
                <td>Cirebon</td>
                <td>Senin, 16/9/2022</td>
                <td>08.00-10.00</td>
                <td>Polindra</td>
                <td>Selesai</td>
                <td>
                    <button type="button" class="btn btn-danger"><span
                            class="material-symbols-outlined">delete</span></button>
                    <button type="button" class="btn btn-info"><span
                            class="material-symbols-outlined">edit</span></button>
                </td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Andi</td>
                <td>08345679880</td>
                <td>jatisawit</td>
                <td>Selasa, 27/9/2022</td>
                <td>13.00-15.00</td>
                <td>PKH</td>
                <td>Selesai</td>
                <td>
                    <button type="button" class="btn btn-danger"><span
                            class="material-symbols-outlined">delete</span></button>
                    <button type="button" class="btn btn-info"><span
                            class="material-symbols-outlined">edit</span></button>
                </td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Maul</td>
                <td>0897654343221</td>
                <td>Lohbener</td>
                <td>Rabu, 28/9/2022</td>
                <td>10.00-12.00</td>
                <td>PB.Fajar</td>
                <td>Selesai</td>
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
