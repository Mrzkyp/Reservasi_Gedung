@extends('layouts.master-member');
@section('title', 'Home')
@section('content')

<div class="container">
    <div class="bd-example">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('assets/img/abral.jpg') }}" class="d-block w-100" width="130"
                        alt="...">
                </div>
                <div class="carousel-item active">
                    <img src="{{ asset('assets/img/foto.jpg') }}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item active">
                    <img src="{{ asset('assets/img/abral2.png') }}" class="d-block w-100" alt="...">
                </div>
            </div>
            <<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
        </div>
    </div>
</div>
    <br>
    <form action="">
        <div class="row">
            <div class="col">
                <h3 class="text-center">Gedung serba guna merupakan bangunan yang dapat dipergunakan oleh umum untuk berbagai macam kepentingan sesuai kapasitas bangunannya</h3>
            </div>
        </div>
    </form>

@endsection
