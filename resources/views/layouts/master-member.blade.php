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
                            @if (Str::length(auth()->user()) > 0)
                                {{ auth()->user()->name }}&nbsp;
                                <a class="btn btn-sm btn-outline-secondary" href="{{asset('logout')}}">Log out</a>
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

    <div class="nav-scroller">
        <div class="row">
            <div class="col">
                <nav class="nav d-flex flex-row">
                    <h3>Abral</h3>
                </nav>
            </div>
            <div class="col">
                <nav class="nav d-flex flex-row-reverse">
                    @if (Str::length(auth()->user()) > 0)
                        <a class="p-2 link-secondary" href="">History</a>
                        <a class="p-2 link-secondary" href="">Reservasi</a>
                        <a class="p-2 link-secondary" href="">jadwal</a>
                        <a class="p-2 link-secondary" href="">pemesanan</a>
                        <a class="p-2 link-secondary" href="">home</a>
                    @else
                        <a class="p-2 link-secondary" href="">home</a>
                        <a class="p-2 link-secondary" href="">jadwal</a>
                        <a class="p-2 link-secondary" href="">pemesanan</a>
                    @endif
                </nav>
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
