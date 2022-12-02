@extends('layouts.master-member')
@section('title', 'Home')
@section('content')

<div class="container">
    <div class="bd-example">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('assets/img/abral.jpg') }}" class="d-block w-100" width="130" alt="...">
                </div>
            </div>
        </div>
    </div>
</div>
<br>

<br>
<div class="row">
    <div class="row">
        <center>
            <h1>Jadwal Reservasi</h1>
        </center>
    <table class="table">
        <thead>
            <tr>
                <td class="table-primary">No</td>
                <td class="table-primary">Nama</td>
                <td class="table-primary">Hari_tanggal</td>
                <td class="table-primary">Waktu_mulai</td>
                <td class="table-primary">waktu_berakhir</td>
                <td class="table-primary">Keterangan</td>
                <td class="table-primary">Status</td>
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
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $reservasi->links() }}
</table>



<div class="container">
    <div class="row">
        <div class="col" width=150>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.9585273035837!2d108.28161241446749!3d-6.399345864369081!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6eb91b623ff43d%3A0x7b8478531337733b!2sGedung%20Serba%20Guna%20ABRAL!5e0!3m2!1sid!2sid!4v1667542722580!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="col">
            <div>
                <h5 class="text-center">Gedung serba guna merupakan bangunan yang dapat dipergunakan oleh umum untuk
                berbagai macam kepentingan sesuai kapasitas bangunannya</h5>
            </div>
        </div>
    </div>
</div>

    </form>

    @endsection