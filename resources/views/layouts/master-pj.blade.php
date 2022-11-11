<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>Dashboard Admin - Reservasi Gedung</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/dashboard/">





    <link href="{{ asset('assets/dist/css/bootstrap.min.css') }}" rel="stylesheet">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .b-example-divider {
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }

    </style>


    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
</head>

<body>

    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6">Reservasi Gedung Abral</a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <input class="form-control form-control-dark w-100 rounded-0 border-0" type="text" placeholder="Search"
            aria-label="Search">
        <div class="navbar-nav">
            <div class="nav-item text-nowrap">
                <a class="nav-link px-3" href="{{asset('logout')}}">Sign out</a>
            </div>
        </div>
    </header>

    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="position-sticky pt-3 sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="dashboard-admin">
                                <span data-feather="home" class="align-text-bottom"></span>
                                Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="file" class="align-text-bottom"></span>
                                Jadwal Reservasi
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="shopping-cart" class="align-text-bottom"></span>
                                Status Pemesanan
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="users" class="align-text-bottom"></span>
                                Member
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="bar-chart-2" class="align-text-bottom"></span>
                                Profil
                            </a>
                        </li>
                    </ul>
            </nav>

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
                            <a href="#" class="card-link">Selengkapnya.</a>
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
                            <a href="#" class="card-link">Selengkapnya.</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 mb-3">
                    <div class="card">

                        <div class="card-body">
                            <img src="{{ asset('assets/img/memberr.png') }}" style="width:100px" class="card-img-top"
                                alt="...">
                            <div class="card-title">
                            </div>
                            Member
                        </div>
                        <div class="card-footer">
                            <a href="#" class="card-link">Selengkapnya.</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 mb-3">
                    <div class="card">

                        <div class="card-body">
                            <img src="{{ asset('assets/img/profil.png') }}" style="width:100px" class="card-img-top"
                                alt="...">
                            <div class="card-title">
                            </div>
                            Profil
                        </div>
                        <div class="card-footer">
                            <a href="#" class="card-link">Selengkapnya.</a>
                        </div>
                    </div>
                </div>
                </div>
            </main>
        </div>
    </div>
    @yield('admin')

    <script src="{{ asset('assets/dist/js/bootstrap.bundle.min.js')}}"></script>

    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"
        integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"
        integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous">
    </script>
    <script src="dashboard.js"></script>
</body>

</html>
