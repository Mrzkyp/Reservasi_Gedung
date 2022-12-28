<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Edit Reservasi Gedung Abral</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/dashboard/">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
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
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- =======================================================
  * Template Name: NiceAdmin - v2.4.1
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
    <main>
        <x-alert />
        <div class="container">
            <section
                class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
                            <form action="/updatedata/{{$data->id}}" method="post">
                                @csrf
                                <div class="d-flex justify-content-center py-4">
                                    <a href="dashboard-admin" class="logo d-flex align-items-center w-auto">
                                        <img src="assets/img/logo.png" alt="">
                                    </a>
                                </div><!-- End Logo -->
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <div class="pt-4 pb-2">
                                            <h5 class="card-title text-center pb-0 fs-4">Mengubah Status Pemesanan</h5>
                                        </div>
                                        <form class="row g-3 needs-validation" novalidate>
                                            <div class="col-md-12 position-relative">
                                                <label for="validationTooltip01" class="form-label">Nama Lengkap</label>
                                                <input name="name" type="text" class="form-control"
                                                    id="validationTooltip01" required value="{{ $data->name }}"> 
                                                <div class="invalid-tooltip">
                                                    Masukan Nama Lengkap.
                                                </div>
                                            </div>
                                            <div class="col-md-12 position-relative">
                                                <label for="validationTooltip02" class="form-label">No Telepon</label>
                                                <input name="notelepon" type="number" class="form-control"
                                                    id="validationTooltip02" required value="{{ $data->notelepon }}">
                                                <div class="invalid-tooltip">
                                                    Masukan Nomor Telepon.
                                                </div>
                                            </div>
                                            <div class="col-md-12 position-relative">
                                                <label for="validationTooltipalamat" class="form-label">Alamat</label>
                                                <div class="input-group has-validation">
                                                <input name="alamat" type="text" class="form-control"
                                                        id="validationTooltipalamat"
                                                        aria-describedby="validationTooltipalamatPrepend" required value="{{ $data->alamat }}">
                                                    <div class="invalid-tooltip">
                                                        Masukan Alamat dengan Benar.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 position-relative">
                                                <label for="validationTooltip01" class="form-label">Waktu Mulai</label>
                                                <input name="waktu_mulai" type="time" class="form-control"
                                                    id="validationTooltip01" required value="{{ $data->waktu_mulai }}">
                                                <div class="invalid-tooltip">
                                                    Masukan Waktu Mulai.
                                                </div>
                                            </div>
                                            <div class="col-md-12 position-relative">
                                                <label for="validationTooltip01" class="form-label">Waktu
                                                    Berakhir</label>
                                                <input name="waktu_berakhir" type="time" class="form-control"
                                                    id="validationTooltip01" required value="{{ $data->waktu_berakhir }}">
                                                <div class="invalid-tooltip">
                                                    Masukan Waktu berakhir.
                                                </div>
                                            </div>
                                            <div class="col-md-12 position-relative">
                                                <label for="validationTooltip03" class="form-label">Tanggal</label>
                                                <input name="hari_tanggal" type="Date" class="form-control"
                                                    id="validationTooltip03" required value="{{ $data->hari_tanggal }}">
                                                <div class="invalid-tooltip">
                                                    Masukan Tanggal Reservasi.
                                                </div>
                                            </div>
                                            <div class="col-md-12 position-relative">
                                                <label for="validationTooltip03" class="form-label">Jenis Reservasi</label>
                                                <select name="jenis_reservasi" class="form-select" aria-label="Default select example">
                                                    <option selected>{{ $data->jenis_reservasi }}</option>
                                                    <option value="Badminton">Badminton</option>
                                                    <option value="Reserpsi">Resepsi</option>
                                                    <option value="Kegiatan Desa">Kegiatan Desa</option>
                                                </select>
                                            </div>
                                            <div class="col-md-12 position-relative">
                                                <label for="validationTooltiketerangan"
                                                    class="form-label">Keterangan</label>
                                                <div class="input-group has-validation">
                                                    <input name="keterangan" type="text" class="form-control"
                                                        id="validationTooltipketerangan"
                                                        aria-describedby="validationTooltiketeranganPrepend" required value="{{ $data->keterangan }}">
                                                    <div class="invalid-tooltip">
                                                        Masukan Keterangan.
                                                    </div>
                                                </div>
                                            </div>
                                            <center>
                                                <div class="col-12">
                                                    <button class="btn btn-primary" type="submit">Submit</button>
                                                </div>
                                            </center>
                                        </form>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        </div>
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
        <script src="{{ asset('assets/dist/js/bootstrap.bundle.min.js')}}"></script>

        <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"
            integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"
            integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous">
        </script>
        <script src="dashboard.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</body>

</html>