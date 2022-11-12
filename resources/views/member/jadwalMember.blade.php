@extends('layouts.master-member');
@section('title', 'jadwal')
@section('content')

<h1>Ini Halaman Jadwal Reservasi</h1>
<table class="table">
    <thead>
        <tr>
            <th scope="col"></th>
            <th scope="col">Hari/tanggal</th>
            <th scope="col">Waktu</th>
            <th scope="col">Pengguna</th>
            <th scope="col">Keterangan</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Senin, 26/9/2022</td>
            <td>08.00 s.d 10.00</td>
            <td>Polindra</td>
            <td></td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>Selasa, 27/9/2022</td>
            <td>13.00 s.d 15.00</td>
            <td>PKH</td>
            <td></td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td>Kamis, 29/9/2022</td>
            <td>14.00 s.d 17.00</td>
            <td>PB. Fajar</td>
            <td></td>
        </tr>
    </tbody>
</table>

@endsection