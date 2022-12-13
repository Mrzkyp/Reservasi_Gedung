{{-- @extends('layouts.master-pj')
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
                <th scope="col">waktu_mulai</th>
                <th scope="col">waktu_berakhir</th>
                <th scope="col">Keterangan</th>
                <th scope="col">Status Pemesanan</th>
                <th scope="col">aksi</th>
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
                <td>{{ $row->notelepon }}</td>
                <td>{{ $row->alamat }}</td>
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
                <td>
                    <a href="{{ route('accreservasi', $row->id) }}" class="btn btn-info">Edit</a>
                    <a href="{{ route('delete', $row->id) }}"
                        onclick="return confirm('Apakah Ingin menghapus data ini?')" class="btn btn-danger delete"
                        reservasi-id="{{ $row->id }}" reservasi-name="{{ $row->name }}">Delete</a>
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

@endsection --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Status Pemesanan</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
              * Template Name: NiceAdmin - v2.4.1
              * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
              * Author: BootstrapMade.com
              * License: https://bootstrapmade.com/license/
            ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
            <a href="dashboard-admin" class="logo d-flex align-items-center">
                <span class="d-none d-lg-block">Reservasi Gedung</span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div><!-- End Logo -->

        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">
                <li class="nav-item dropdown pe-3">
                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="{{ asset('logout') }}"
                        data-bs-toggle="dropdown">
                        <span class="d-none d-md-block dropdown-toggle ps-2">{{ auth()->user()->name }}&nbsp;</span>
                    </a><!-- End Profile Iamge Icon -->
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="{{ asset('logout') }}">
                                <i class="bi bi-box-arrow-right"></i>
                                <span>Sign Out</span>
                            </a>
                        </li>
                    </ul><!-- End Profile Dropdown Items -->
                </li><!-- End Profile Nav -->
            </ul>
        </nav><!-- End Icons Navigation -->

    </header><!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item">
                <a class="nav-link " href="dashboard-admin">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li><!-- End Dashboard Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="jadwal_reservasi">
                    <i class="bi bi-person"></i>
                    <span>Jadwal Reservasi</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="status_pemesanan">
                    <i class="bi bi-person"></i>
                    <span>Status Pemesanan</span>
                </a>
            </li><!-- End Profile Page Nav -->
    </aside><!-- End Sidebar-->

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Status Pemesanan</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="dashboard-admin">Home</a></li>
                    <li class="breadcrumb-item active">Status Pemesanan</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <section class="section dashboard">
            <div class="row">
                <!-- Recent Sales -->
                <div class="col-12">
                    <div class="card recent-sales overflow-auto">
                        <div class="card-body">
                            <h5 class="card-title">Status Pemesanan</h5>
                            <table class="table table-borderless">
                                <a href="reservasiadmin" class="btn btn-success"><span class="ri-add-box-fill"></span></a>
                            <br>
                            <br>
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">No Telepon</th>
                                        <th scope="col">Alamat</th>
                                        <th scope="col">Hari/tanggal</th>
                                        <th scope="col">waktu_mulai</th>
                                        <th scope="col">waktu_berakhir</th>
                                        <th scope="col">Jenis Reservasi</th>
                                        <th scope="col">Keterangan</th>
                                        <th scope="col">Status Pemesanan</th>
                                        <th scope="col">Download Data</th>
                                        <th scope="col">aksi</th>
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
                                        <td>{{ $row->notelepon }}</td>
                                        <td>{{ $row->alamat }}</td>
                                        <td>{{ $row->hari_tanggal }}</td>
                                        <td>{{ $row->waktu_mulai }}</td>
                                        <td>{{ $row->waktu_berakhir }}</td>
                                        <td>{{ $row->jenis_reservasi }}</td>
                                        <td>{{ $row->keterangan }}</td>
                                        <td>
                                            @if ($row->status == 0)
                                            <span class="badge bg-warning">Belum Lunas</span>
                                            @else
                                            <span class="badge bg-success">Lunas</span>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{route('download_data', $row->id)}}" <button type="button"
                                                class="btn btn-secondary">
                                                <i class="bx bxs-download"></i></button>
                                            </a>
                                        </td>
                                        <td>
                                            <a href="/edit_pemesanan/{{$row->id}}"
                                                class="btn btn-warning"><i class="ri-edit-2-line"></i>
                                                <a href="{{ route('delete', $row->id) }}"
                                                    onclick="return confirm('Apakah Ingin menghapus data ini?')"
                                                    class="btn btn-danger delete" reservasi-id="{{ $row->id }}"
                                                    reservasi-name="{{ $row->name }}"> <i class="bi bi-trash"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $reservasi->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
    </footer><!-- End Footer -->

    <!-- Vendor JS Files -->
    <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/chart.js/chart.min.js"></script>
    <script src="assets/vendor/echarts/echarts.min.js"></script>
    <script src="assets/vendor/quill/quill.min.js"></script>
    <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>
