@extends('layouts.master-member');
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
<br>

<div class="container">
    <div class="row">
        <div class="col" width=150>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.9585273035837!2d108.28161241446749!3d-6.399345864369081!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6eb91b623ff43d%3A0x7b8478531337733b!2sGedung%20Serba%20Guna%20ABRAL!5e0!3m2!1sid!2sid!4v1667542722580!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="col">
            <div<h5 class="text-center">Gedung serba guna merupakan bangunan yang dapat dipergunakan oleh umum untuk
                berbagai macam kepentingan sesuai kapasitas bangunannya</h5>
            </div>
        </div>
    </div>
</div>

    </form>

    @endsection