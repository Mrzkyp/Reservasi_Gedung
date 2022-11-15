@extends('layouts.master-member')
@section('title', 'jadwal')
@section('content')

<h1>Jadwal Reservasi</h1>
<table class="table">
    <thead>
        <tr>
            <th scope="col">Hari/tanggal</th>
            <th scope="col">Waktu</th>
            <th scope="col">Pengguna</th>
            <th scope="col">Keterangan</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($jadwal as $s)
                            <tr>
                                <td>{{ $s->hari_tanggal }}</td>
                                <td>{{ $s->waktu }}</td>
                                <td>{{ $s->pengguna }}</td>
                                <td>{{ $s->keterangan}}</td>
                            </tr>
                        @endforeach
    </tbody>
</table>

@endsection