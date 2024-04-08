@extends('layouts.layout-main')

@section('judul')
Dashboard
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