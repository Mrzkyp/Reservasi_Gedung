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

    <div class="container">
        <header class="blog-header lh-1 py-3">
            <div class="row flex-nowrap justify-content-between align-items-center">
                <div class="col-4 text-center">
                    <h2>Reservasi Gedung </h2>
                </div>

                <div class="col-4 d-flex justify-content-end align-items-center">
                    <div class="nav-scroller py-1 mb-2">
                        <nav class="nav d-flex justify-content-between">
                            @if (Str::length(Auth::guard('member')->user()) >0 )
                                {{ Auth::guard('member')->user()->name }}
                                <a class="btn btn-sm btn-outline-secondary" href="logout">Log out</a>
                            @else
                                <a class="btn btn-sm btn-outline-secondary" href="login">Log in</a>
                                <a class="btn btn-sm btn-outline-secondary" href="register">Register</a>
                            @endif

                    </div>
                </div>
        </header>
        </nav>
    </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="container col-9 mx-auto">
                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Jadwal</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Pemesanan</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

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

    <script src="{{ asset('assets/disc/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
