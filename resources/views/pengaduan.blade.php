@extends('layouts.template-pengaduan')

@section('judul')
Pengaduan Saya
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
      <a href="{{'/'}}" class="logo d-flex align-items-center">
        <img src="{{asset('/tema/asset/img/logo.png')}}" alt="">
        <span class="d-none d-lg-block">LASPIKA</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div>

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

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
    <h1>Pengaduan Saya</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item active">Pengaduan Saya</li>
      </ol>
    </nav>
  </div>

  <a href="{{url('/buatpengaduan')}}" class="btn btn-primary mb-4">
    Buat Pengaduan
  </a>

  <section class="section">
    <div class="row">

      <!-- Pengaduan -->
      <div class="col-12">
          <div class="card recent-sales overflow-auto">

            <div class="card-body">
              <h5 class="card-title">Pengaduan</h5>

              <table class="table table-borderless datatable table-hover">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nomor Aduan</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Status</th>
                  </tr>
                </thead>
                <tbody >
                  <tr data-href="{{url('/rincianpengaduan')}}">
                    <th scope="row">1</th>
                    <td>2457</td>
                    <td>####</td>
                    <td>####</td>
                    <td>####</td>
                    <td><span class="badge bg-success">Pengaduan Selesai</span></td>
                  </tr>
                </tbody>
              </table>

              {{-- Membuat tabel interaktif di mana pengguna dapat mengklik baris dan diarahkan ke halaman yang sesuai --}}
              <script>
                document.addEventListener("DOMContentLoaded", function() {
                  var rows = document.querySelectorAll("tr[data-href]");
                  rows.forEach(function(row) {
                    row.addEventListener("click", function() {
                      window.location.href = this.dataset.href;
                    });
                  });
                });
                </script>

            </div>

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


