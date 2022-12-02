@extends('layouts.master-pj')
@section('title', 'dashboard_admin')
@section('admin')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="row mt-5">
                <div class="col-md-4 col-sm-12 mb-3">
                    <div class="card">
                        
                        <div class="card-body">
                            <img src="{{ asset('assets/img/jadwal.png') }}" style="width:100px" class="card-img-top"
                                alt="...">
                            <div class="card-title">
                            </div>
                            Jadwal Reservasi
                        </div>
                        <div class="card-footer">
                            <a href="jadwal_admin" class="card-link">Selengkapnya.</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 mb-3">
                    <div class="card">

                        <div class="card-body">
                            <img src="{{ asset('assets/img/pemesanan.png') }}" style="width:100px" class="card-img-top"
                                alt="...">
                            <div class="card-title">
                            </div>
                            Status Pemesanan
                        </div>
                        <div class="card-footer">
                            <a href="status_pemesanan" class="card-link">Selengkapnya.</a>
                        </div>
                    </div>
                </div>
                </div>
            </main>
    <br>
    <form action="">
    <footer class="blog-footer">
                    <br>
                    <center>Jl. Lohbener Lor, Lohbener, Indramayu, Jawa Barat 45252</center>
                    <br>
                </footer>
    </form>

@endsection
