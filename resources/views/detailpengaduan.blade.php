@extends('layouts.template-detailpengaduan')

@section('judul')
Detail Pengaduan
@endsection

@section('extracss')
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">

<title>@yield('judul')- LASPIKA</title>
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
<div class="pagetitle">
    <h1>Detail Pengaduan</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{url('/dashboard')}}">Dashboard</a></li>
        <li class="breadcrumb-item active">Detail Pengaduan</li>
      </ol>
    </nav>
  </div>


  <section class="section">

    <div class="col-lg-12">

      <!-- Detail Table -->
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Detail Informasi</h5>
          <table class="table">
            <tbody>
              <tr>
                <td>Kategori Pelanggaran</td>
                <td>-</td>
              </tr>
              <tr>
                <td>Judul Pelanggaran</td>
                <td>-</td>
              </tr>
              <tr>
                <td>Uraian</td>
                <td>-</td>
              </tr>
              <tr>
                <td>Tanggal</td>
                <td>-</td>
              </tr>
              <tr>
                <td>Waktu Perkiraan</td>
                <td>-</td>
              </tr>
              <tr>
                <td>Lampiran</td>
                <td>
                    <a href="{{asset('/tema/asset/pdf/contoh.pdf')}}" download class="btn btn-warning"><i class="bi bi-download"></i></a>
                </td>
              </tr>
              <tr>
                <th scope="row">Pihak Yang Terlibat</th>
                <td> </td>
              </tr>
              <tr>
                <td>Nama Lengkap</td>
                <td>-</td>
              </tr>
              <tr>
                <td>Jabatan</td>
                <td>-</td>
              </tr>
              <tr>
                <td>Klasifikasi Jabatan</td>
                <td>-</td>
              </tr>

            </tbody>
          </table>
        </div>
      </div>
    </div>

    <div class="row">
    <!-- =========== Dokumen =========== -->
    <div class="col-12">
      <div class="card recent-sales overflow-auto">

        <div class="card-body">
          <h5 class="card-title">Lampiran Dokumen</h5>

          <table class="table table-borderless datatable">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nomor Aduan</th>
                <th scope="col">Hasil Verifikasi</th>
                <th scope="col">Identitas Pelapor</th>
                <th scope="col">Materi Laporan</th>
                <th scope="col">Hasil Telaah</th>
                <th scope="col">Laporan Hasil</th>
                <th scope="col">Kesimpulan Laporan</th>
                <th scope="col">Laporan Monitoring</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>-</td>
                <td>
                  <button type="button" class="btn btn-warning"><i class="bi bi-download"></i></button>
                </td>
                <td>
                  <button type="button" class="btn btn-warning"><i class="bi bi-download"></i></button>
                </td>
                <td>
                  <button type="button" class="btn btn-warning"><i class="bi bi-download"></i></button>
                </td>
                <td>
                  <button type="button" class="btn btn-warning"><i class="bi bi-download"></i></button>
                </td>
                <td>
                  <button type="button" class="btn btn-warning"><i class="bi bi-download"></i></button>
                </td>
                <td>
                  <button type="button" class="btn btn-warning"><i class="bi bi-download"></i></button>
                </td>
                <td>
                  <button type="button" class="btn btn-warning"><i class="bi bi-download"></i></button>
                </td>
              </tr>

            </tbody>
          </table>

        </div>

      </div>
    </div>

</main>

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

