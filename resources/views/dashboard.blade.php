@extends('layouts.template-dashboard')

@section('judul')
Dashboard
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
                  
                  <form class="dropdown-item d-flex align-items-center" action = "{{'/logout'}}">
                    <button type="submit" class="border-0 bg-transparent">
                      <i class="bi bi-box-arrow-right"></i>
                      <span>Keluar</span>
                    </button>
                  </form>
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
    <h1>Dashboard</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item active">Dashboard</li>
      </ol>
    </nav>
  </div>

  <section class="section dashboard">
    <div class="row">

      <!-- Left side columns -->
      <div class="col-lg-8">
        <div class="row">

          <!-- Korupsi Card -->
          <div class="col-xxl-4 col-md-6">
            <div class="card info-card korupsi-card">

              <div class="card-body">
                <h5 class="card-title">Pidana Korupsi</h5>

                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-safe"></i>
                  </div>
                  <div class="ps-3">
                    <h6>-</h6>
                    <span class="text-muted small pt-2 ps-1">laporan</span>
                  </div>
                </div>
              </div>

            </div>
          </div>

          <!-- Pengadaan Barang/Jasa Card -->
          <div class="col-xxl-4 col-md-6">
            <div class="card info-card jasa-card">

              <div class="card-body">
                <h5 class="card-title">Pengadaan Barang/Jasa</h5>

                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-briefcase"></i>
                  </div>
                  <div class="ps-3">
                    <h6>-</h6>
                    <span class="text-muted small pt-2 ps-1">laporan</span>

                  </div>
                </div>
              </div>

            </div>
          </div>

          <!-- Pelanggaran Kepegawaian Card -->
          <div class="col-xxl-4 col-md-6">
            <div class="card info-card pegawai-card">

              <div class="card-body">
                <h5 class="card-title">Pelanggaran Kepegawaian</h5>

                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-person-workspace"></i>
                  </div>
                  <div class="ps-3">
                    <h6>-</h6>
                    <span class="text-muted small pt-2 ps-1">laporan</span>

                  </div>
                </div>
              </div>

            </div>
          </div>

          <!-- Penyalahgunaan Wewenang Card -->
          <div class="col-xxl-4 col-md-6">
            <div class="card info-card wewenang-card">

              <div class="card-body">
                <h5 class="card-title">Penyalahgunaan Wewenang</h5>

                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-puzzle"></i>
                  </div>
                  <div class="ps-3">
                    <h6>-</h6>
                    <span class="text-muted small pt-2 ps-1">laporan</span>

                  </div>
                </div>
              </div>

            </div>
          </div>

          <!-- Pengelolaan Keuangan Card -->
          <div class="col-xxl-4 col-md-6">
            <div class="card info-card kelola-card">

              <div class="card-body">
                <h5 class="card-title">Pelanggaran Pengelolaan Keuangan</h5>

                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-currency-dollar"></i>
                  </div>
                  <div class="ps-3">
                    <h6>-</h6>
                    <span class="text-muted small pt-2 ps-1">laporan</span>

                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>

      <!-- Right side columns -->
      <div class="col-lg-4">
        <!-- Website Traffic -->
        <div class="card">

          <div class="card-body pb-0">
            <h5 class="card-title">Diagram</h5>

            <div id="trafficChart" style="min-height: 500px;" class="echart"></div>

            <script>
              document.addEventListener("DOMContentLoaded", () => {
                echarts.init(document.querySelector("#trafficChart")).setOption({
                  tooltip: {
                    trigger: 'item'
                  },
                  legend: {
                    top: '5%',
                    left: 'center'
                  },
                  series: [{
                    name: 'Access From',
                    type: 'pie',
                    radius: ['40%', '70%'],
                    avoidLabelOverlap: false,
                    label: {
                      show: false,
                      position: 'center'
                    },
                    emphasis: {
                      label: {
                        show: true,
                        fontSize: '18',
                        fontWeight: 'bold'
                      }
                    },
                    labelLine: {
                      show: false
                    },
                    data: [{
                        value: 1048,
                        name: 'Korupsi'
                      },
                      {
                        value: 735,
                        name: 'Pengadaan Barang/Jasa'
                      },
                      {
                        value: 580,
                        name: 'Pelanggaran Kepegawaian'
                      },
                      {
                        value: 484,
                        name: 'Penyalahgunaan Wewenang'
                      },
                      {
                        value: 300,
                        name: 'Pelanggaran Pengelolaan Keuangan'
                      }
                    ]
                  }]
                });
              });
            </script>

          </div>
        </div>
    </div>

    <!-- =========== Pengaduan =========== -->
    <div class="col-12">
      <div class="card recent-sales overflow-auto">

        <div class="card-body">
          <h5 class="card-title">Pengaduan</h5>

          <table class="table table-borderless datatable">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nomor Aduan</th>
                <th scope="col">Kategori</th>
                <th scope="col">Judul</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>2457</td>
                <td>####</td>
                <td>####</td>
                <td>####</td>
                <td><span class="badge bg-success">Pengaduan Selesai</span></td>
                <td>
                  <a href="{{url('/detailpengaduan')}}" class="btn btn-success">
                    <i class="bi bi-arrows-fullscreen"></i>
                  </a>
                  <a href="{{url('/editpengaduan')}}" class="btn btn-primary">
                    <i class="bi bi-pencil-square"></i>
                  </a>
                  <a href="{{url('/hapuspengaduan')}}" class="btn btn-danger btn-delete">
                    <i class="bi bi-trash-fill"></i>
                  </a>
                </td>
              </tr>

            </tbody>
          </table>

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
  </footer><!-- End Footer -->
@endsection
