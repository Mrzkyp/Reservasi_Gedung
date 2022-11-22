@extends('layouts.master-member')
@section('title', 'jadwal')
@section('content')

<div class="row">
    <div class="row">
        <center>
            <h1>Jadwal Reservasi</h1>
        </center>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Hari_Tanggal</th>
                <th scope="col">Waktu</th>
                <th scope="col">Keterangan</th>
                <th scope="col">Status</th>
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
                    <td>{{ $row->hari_tanggal }}</td>
                    <td>{{ $row->waktu }}</td>
                    <td>{{ $row->keterangan }}</td>
                    <td>
                        @if ($row->status == 0)
                            <span>Belum Aktif</span>
                        @else
                            <span>Sudah Aktif</span>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $reservasi->links() }}
</table>

@endsection