@extends('layouts.template-buatlaporan')

@section('judul')
Edit Status Pengaduan
@endsection

@section('extracss')
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>@yield('judul') - LASPIKA</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Icons -->
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
      <a href="{{url('/')}}" class="logo d-flex align-items-center">
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
        <a class="nav-link collapsed" href="{{url('/dashboard')}}">
            <i class="bi bi-columns-gap"></i>
          <span>Dashboard</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{url('/buatlaporan')}}">
          <i class="bi bi-upload"></i>
          <span>Upload Laporan</span>
        </a>
      </li>

  </aside>
@endsection

@section('main')
    <div class="row">
      <div class="card">
          <div class="card-body">
            <h5 class="card-title">Rincian Pengaduan</h5>

            <!-- Form -->
            <form class="row g-3">

              <div class="col-sm-12">
                  <label for="floatingName">Kategori Pelanggaran : </label>
              </div>

              <div class="col-md-12">
                  <label for="floatingName">Judul Pengaduan : </label>
              </div>

              <div class="col-sm-12">
                  <label for="floatingName">Uraian : </label>
              </div>

              <div class="col-sm-12">
                  <label for="floatingName">Lampiran : </label>
              </div>

              <div class="col-sm-12">
                <embed src="{{asset('/tema/asset/pdf/contoh.pdf')}}" type="application/pdf" width="500" height="400">
              </div>

              <div class="col-sm-12">
                  <label for="floatingName">Pihak Yang Diduga Terlibat </label>
              </div>

              <div class="col-sm-12">
                  <label for="floatingName">Nama Lengkap : </label>
              </div>

              <div class="col-sm-12">
                  <label for="floatingName">Jabatan : </label>
              </div>

              <div class="col-sm-12">
                  <label for="floatingName">Klasifikasi Jabatan : </label>
              </div>

              <div class="col-sm-12">
                  <label for="floatingName">Tanggal : </label>
              </div>

              <div class="col-sm-12">
                  <label for="floatingName">Waktu Perkiraan : </label>
              </div>

              <label class="col-sm-2 col-form-label">Ubah Status</label>
                  <div class="col-sm-10">
                    <select class="form-select" aria-label="Default select example">
                      <option selected disabled>Ubah Status</option>
                      <option value="1">Pengaduan Baru</option>
                      <option value="2">Pengaduan Selesai</option>
                      <option value="3">Sedang Ditelaah</option>
                      <option value="4">Pengaduan Ditolak</option>
                    </select>
                  </div>

              <div class="text-center">
                  <button type="submit" class="btn btn-primary">Kirim</button>
              </div>

            </form>

          </div>
      </div>

    </div>
@endsection

@section('footer')
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright. 2024. <strong><span>SPI UNSIKA</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
        Designed by <a href="https://instagram.com/fzhraa21_/">Fathimatuz Zahra</a>
    </div>
  </footer>
@endsection


@section('footer')
<!-- ======= Footer ======= -->
<footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright. 2024. <strong><span>SPI UNSIKA</span></strong>. All Rights Reserved
    </div>
  </footer>
@endsection
