@extends('layouts.template-buatpengaduan')

@section('judul')
Buat Pengaduan
@endsection

@section('extracss')
<meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>@yield('judul') - LASPIKA</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('/tema/asset/img/unsikalogo.png')}}" rel="icon">
  <link href="{{asset('/tema/asset/img/unsikalogo.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('/tema/asset/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('/tema/asset/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('/tema/asset/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('/tema/asset/vendor/quill/quill.snow.css')}}" rel="stylesheet">
  <link href="{{asset('/tema/asset/vendor/quill/quill.bubble.css')}}" rel="stylesheet">
  <link href="{{asset('/tema/asset/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('/tema/asset/vendor/simple-datatables/style.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('/tema/asset/css/style.css')}}" rel="stylesheet">
@endsection

@section('header')
<!-- ======= Header ======= -->
<header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="{{'/'}}" class="logo d-flex align-items-center">
        <img src="{{asset('/tema/asset/img/logo.png')}}" alt="">
        <span class="d-none d-lg-block">LASPIKA</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div>

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li>

        <li class="nav-item dropdown pe-3">
          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <span class="d-none d-md-block dropdown-toggle ps-2">Fathimatuz Zahra</span>
          </a>

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li>
              <a class="dropdown-item d-flex align-items-center" href="{{url('/login')}}">
                <i class="bi bi-box-arrow-right"></i>
                <span>Keluar</span>
              </a>
            </li>
          </ul>
        </li>

      </ul>
    </nav>

  </header>
@endsection

@section('sidebar')
<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{'/buatpengaduan'}}">
              <i class="bi bi-file-earmark-plus"></i>
              <span>Buat Pengaduan Baru</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link collapsed" href="{{'/pengaduan'}}">
              <i class="bi bi-file-earmark-text"></i>
              <span>Pengaduan Saya</span>
            </a>
          </li>

  </aside>
@endsection

@section('main')
<div class="pagetitle">
    <h1>Aduan Baru</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{'/pengaduan'}}">Home</a></li>
        <li class="breadcrumb-item active">Aduan Baru</li>
      </ol>
    </nav>
  </div>

  <section class="section">
    <div class="row">
      <div class="card">
          <div class="card-body">
            <h5 class="card-title">Form Pengaduan</h5>

            <!-- Form -->
            <form class="row g-3">

              <div class="col-sm-12">
                <select class="form-select" aria-label="Default select example">
                  <option selected disabled>Pilih Kategori Pelanggaran</option>
                  <option value="1">Korupsi</option>
                  <option value="2">Pengadaan Barang/Jasa</option>
                  <option value="3">Pelanggaran Pengelolaan Keuangan</option>
                  <option value="4">Pelanggaran Kepegawaian</option>
                  <option value="5">Penyalahgunaan Wewenang</option>
                </select>
              </div>

              <div class="col-md-12">
                <div class="form-floating">
                  <input type="text" class="form-control" id="floatingName" placeholder="Your Name">
                  <label for="floatingName">Judul Pengaduan</label>
                </div>
              </div>

              <div class="col-12">
                <div class="form-floating">
                  <textarea class="form-control" placeholder="Address" id="floatingTextarea" style="height: 100px;"></textarea>
                  <label for="floatingTextarea">Uraian Pengaduan</label>
                </div>
              </div>

              <div class="col-sm-12">
                <label for="inputNumber" class="col-sm-2 col-form-label">Lampiran</label>
                  <input class="form-control" type="file" id="formFile">
              </div>

              <label for="inputColor">Pihak Yang Diduga Terlibat</label>
              <div class="col-md-6">
                <div class="col-md-12">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="floatingCity" placeholder="City">
                    <label for="floatingCity">Nama Lengkap</label>
                  </div>
                </div>
              </div>

              <div class="col-md-3">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="floatingZip" placeholder="Zip">
                    <label for="floatingZip">Jabatan</label>
                  </div>
              </div>

              <div class="col-md-3">
                  <div class="form-floating mb-3">
                    <select class="form-select" id="floatingSelect" aria-label="State">
                      <option selected>Klasifikasi Jabatan</option>
                      <option value="1">PNS</option>
                      <option value="2">Non PNS</option>
                    </select>
                    <label for="floatingSelect">Pilih</label>
                  </div>
              </div>

              <div class="row mb-12">
                <label for="inputDate" class="col-sm-2 col-form-label">Tanggal</label>
                    <input type="date" class="form-control mb-3">
              </div>
              <div class="row mb-12">
                <label for="inputTime" class="col-sm-2 col-form-label">Waktu Perkiraan</label>
                    <input type="time" class="form-control mb-3">
              </div>

              <div class="row mb-2">
                <legend class="col-form-label col-sm-4 pt-0">Pengadu Anonymous</legend>
                <div class="col-sm-10">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck1">
                    <label class="form-check-label" for="gridCheck1">
                      Kirim sebagai anonymous
                    </label>
                  </div>
                </div>
              </div>

              <div class="text-center">
                  <button type="submit" class="btn btn-primary">Kirim</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
              </div>

            </form>

          </div>
      </div>

    </div>
  </section>
@endsection

@section('footer')
<!-- ======= Footer ======= -->
<footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright. 2024. <strong><span>SPI UNSIKA</span></strong>. All Rights Reserved
    </div>
  </footer>
@endsection
