<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>{{ config('app.name') }}</title>

    <!--<link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/blog/">-->

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
            background-color: rgba(70, 134, 165, 0.1);
            border: solid rgba(29, 125, 157, 0.15);
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
    <!-- <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet"> -->
    <!-- Custom styles for this template -->
    <link href="{{ asset('assets/dist/css/blog.css') }}" rel="stylesheet">
</head>

<body>
    <header class="navbar navbar-blue sticky-top bg-green flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6">Reservasi Gedung Abral</a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="col-4 d-flex justify-content-end align-items-center">
            <div class="nav-scroller py-1 mb-2">
                <nav class="nav d-flex justify-content-between">
                    @if (Str::length(auth()->user()) > 0)
                    {{ auth()->user()->name }}&nbsp;
                    <a class="btn btn-sm btn-outline-secondary" href="{{asset('logout')}}">Sign out</a>
                    @else
                    <a class="btn btn-sm btn-outline-secondary" href="login-admin">Log in admin</a>
                    <a class="btn btn-sm btn-outline-secondary" href="login">Log in</a>
                    <a class="btn btn-sm btn-outline-secondary" href="register">Register</a>
                    @endif

            </div>
        </div>
    </header>


    </header>
    </nav>
    </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="position-sticky pt-3 sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/">
                                <span data-feather="home" class="align-text-bottom"></span>
                                Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="reservasi">
                                <span data-feather="file" class="align-text-bottom"></span>
                                Reservasi
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="jadwal">
                                <span data-feather="file" class="align-text-bottom"></span>
                                Jadwal
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="profil_member">
                                <span data-feather="shopping-cart" class="align-text-bottom"></span>
                                Profil
                            </a>
                        </li>
            </nav>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="nav-scroller">
                </div>

                <main class="container">
                    <div class="col-md-6 bg">
                    </div>
                    @yield('content')
                </main>
                <footer class="blog-footer">
                    <br>
                    <center>Jl. Lohbener Lor, Lohbener, Indramayu, Jawa Barat 45252</center>
                    <br>
                </footer>
                <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>

        </div>

        <script src="{{ asset('assets/disc/js/bootstrap.bundle.min.js') }}"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>

</html>