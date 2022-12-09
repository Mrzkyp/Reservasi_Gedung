<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Reservasi Gedung Abral</title>
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
    <main>
        <div class="container">

            <section
                class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
                            <form action="{{ route('reservasi-proses2') }}" method="post">
                                @csrf
                                <div class="d-flex justify-content-center py-4">
                                    <a href="dashboard-admin" class="logo d-flex align-items-center w-auto">
                                        {{-- <img src="assets/img/logo.png" alt=""> --}}
                                        <span class="d-none d-lg-block">Reservasi Gedung</span>
                                    </a>
                                </div><!-- End Logo -->
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <div class="pt-4 pb-2">
                                            <h5 class="card-title text-center pb-0 fs-4">Membuat Reservasi</h5>
                                            <p class="text-center small">Masukan detail Reservasi</p>
                                        </div>
                                        <form class="row g-3 needs-validation" novalidate>
                                            <div class="col-md-12 position-relative">
                                                <label for="validationTooltip01" class="form-label">Nama Lengkap</label>
                                                <input name="name" type="text" class="form-control"
                                                    id="validationTooltip01" required>
                                                <div class="invalid-tooltip">
                                                    Please provide a valid city.
                                                </div>
                                            </div>
                                            <div class="col-md-12 position-relative">
                                                <label for="validationTooltip02" class="form-label">No Telepon</label>
                                                <input name="notelepon" type="number" class="form-control"
                                                    id="validationTooltip02" required>
                                                <div class="invalid-tooltip">
                                                    Please provide a valid city.
                                                </div>
                                            </div>
                                            <div class="col-md-12 position-relative">
                                                <label for="validationTooltipalamat" class="form-label">Alamat</label>
                                                <div class="input-group has-validation">
                                                <input name="alamat" type="text" class="form-control"
                                                        id="validationTooltipalamat"
                                                        aria-describedby="validationTooltipalamatPrepend" required>
                                                    <div class="invalid-tooltip">
                                                        Please provide a valid city.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 position-relative">
                                                <label for="validationTooltip01" class="form-label">Waktu Mulai</label>
                                                <input name="waktu_mulai" type="time" class="form-control"
                                                    id="validationTooltip01" required>
                                                <div class="invalid-tooltip">
                                                    Please provide a valid city.
                                                </div>
                                            </div>
                                            <div class="col-md-12 position-relative">
                                                <label for="validationTooltip01" class="form-label">Waktu
                                                    Berakhir</label>
                                                <input name="waktu_berakhir" type="time" class="form-control"
                                                    id="validationTooltip01" required>
                                                <div class="invalid-tooltip">
                                                    Please provide a valid city.
                                                </div>
                                            </div>
                                            <div class="col-md-12 position-relative">
                                                <label for="validationTooltip03" class="form-label">Tanggal</label>
                                                <input name="hari_tanggal" type="Date" class="form-control"
                                                    id="validationTooltip03" required>
                                                <div class="invalid-tooltip">
                                                    Please provide a valid city.
                                                </div>
                                            </div>
                                            <div class="col-md-12 position-relative">
                                                <label for="validationTooltip03" class="form-label">Jenis Reservasi</label>
                                                <select name="jenis_reservasi" class="form-select" aria-label="Default select example">
                                                    <option value="Badminto">Badminton</option>
                                                    <option value="Resepsi">Resepsi</option>
                                                    <option value="Kegiatan Desa">Kegiatan Desa</option>
                                                  </select>
                                            </div>
                                            <div class="col-md-12 position-relative">
                                                <label for="validationTooltiketerangan"
                                                    class="form-label">Keterangan</label>
                                                <div class="input-group has-validation">
                                                    <input name="keterangan" type="text" class="form-control"
                                                        id="validationTooltipketerangan"
                                                        aria-describedby="validationTooltiketeranganPrepend" required>
                                                    <div class="invalid-tooltip">
                                                        Please provide a valid city.
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

</body>

</html>

{{-- <center><h1>Form Reservasi Gedung</h1></center>
  <div class="row">
      <div class="col-4"></div>
      <div class="col-4">
          <center>
          <form action="{{route('reservasi-proses')}}" method="post">
              @csrf
              <div class="form-outline mb-2">
                  <label class="form-label" for="name">Nama</label>
                  <input name="name" type="text" id="name" class="form-control" placeholder="Masukan Nama">
              </div>
              <div class="form-outline mb-2">
                  <label class="form-label" for="notelepon">No Telepon</label>
                  <input name="notelepon" type="number" id="notelepon" class="form-control" placeholder="No telepon">
              </div>
              <div class="form-outline mb-2">
                  <label class="form-label" for="alamat">Alamat</label>
                  <textarea name="alamat" class="form-control" id="alamat" placeholder="Masukan Alamat"></textarea>
              </div>
              <div class="form-outline mb-2">
                  <label class="form-label" for="hari/tanggal">Hari/Tanggal</label>
                  <input name="hari_tanggal" type="date" class="form-control" id="hari_tanggal" placeholder="Masukan hari/tanggal">
              </div>
              <div class="form-outline mb-2">
                  <label class="form-label" for="waktu_mulai">Waktu Mulai</label>
                  <input name="waktu_mulai" type="time" class="form-control" id="waktu_mulai" placeholder="Masukan waktu">
              </div>
              <div class="form-outline mb-2">
                  <label class="form-label" for="waktu_berakhir">Waktu Berakhir</label>
                  <input name="waktu_berakhir" type="time" class="form-control" id="waktu_berakhir" placeholder="Masukan waktu">
              </div>
              <div class="form-outline mb-2">
                  <label class="form-label" for="keterangan">Keterangan</label>
                  <input name="keterangan" type="text" class="form-control" id="keterangan" placeholder="Masukan keterangan">
              </div>
              <button type="submit" class="btn btn-primary btn-block mb-1">kirim</button>
              </div>
          </center>
      </div>
      <div class="col-4"></div>
  </div> --}}
{{-- @endsection --}}
