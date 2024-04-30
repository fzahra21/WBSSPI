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
                    <h6><?= $data_korupsi?></h6>
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
                <h5 class="card-title">Pelanggaran Pengadaan Barang/Jasa</h5>

                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-briefcase"></i>
                  </div>
                  <div class="ps-3">
                    <h6><?= $data_pengadaan?></h6>
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
                    <h6><?= $data_kepegawaian?></h6>
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
                    <h6><?= $data_wewenang?></h6>
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
                    <h6><?= $data_keuangan?></h6>
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
            let dataKorupsi = <?= $data_korupsi ?>;
            let dataPengadaan = <?= $data_pengadaan?>;
            let dataKepegawaian = <?= $data_kepegawaian ?>;
            let dataWewenang = <?= $data_wewenang ?>;
            let dataKeuangan = <?= $data_keuangan ?>;

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
                        value: dataKorupsi,
                        name: 'Korupsi'
                      },
                      {
                        value: dataPengadaan,
                        name: 'Pelanggaran Pengadaan Barang/Jasa'
                      },
                      {
                        value: dataKepegawaian,
                        name: 'Pelanggaran Kepegawaian'
                      },
                      {
                        value: dataWewenang,
                        name: 'Penyalahgunaan Wewenang'
                      },
                      {
                        value: dataKeuangan,
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

          @if(Session::has('success'))
          <div class="alert alert-success">
              {{ Session::get('success') }}
          </div>
          @elseif (Session::has('failed'))
              <div class="alert alert-danger">
                  {{ Session::get('failed') }}
              </div>
          @endif
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
              @foreach($data_pengaduan as $index => $pengaduan)

              <tr data-href="{{url('pengaduan/rincian/'.$pengaduan->id)}}">
                <th scope="row">{{$index+1}}</th>
                <td>{{$pengaduan->no_pengaduan}}</td>
                <td>    @if ($pengaduan->kategori == 1)
                  Korupsi
                  @elseif ($pengaduan->kategori == 2)
                  Pengadaan Barang/Jasa
                  @elseif ($pengaduan->kategori == 3)
                  Pelanggaran Pengelolaan Keuangan
                  @elseif ($pengaduan->kategori == 4)
                  Pelanggaran Kepegawaian
                  @elseif ($pengaduan->kategori == 5)
                  Penyalahgunaan Wewenang
                  @endif</td>
                <td>{{$pengaduan->judul}}</td>
                <td>{{$pengaduan->tanggal}}</td>
                  @if($pengaduan->status == 'Pengaduan Baru')
                <td><span class="badge bg-primary">{{$pengaduan->status}}</span></td>
                    @elseif($pengaduan->status == 'Pengaduan Diterima')
                    <td><span class="badge bg-primary-subtle text-primary-emphasis">{{$pengaduan->status}}</span></td>
                   @elseif($pengaduan->status == 'Sedang Diverifikasi')
                      <td><span class="badge bg-warning text-dark">{{$pengaduan->status}}</span></td>
                      @elseif($pengaduan->status == 'Verifikasi Selesai')
                      <td><span class="badge bg-warning-subtle text-warning-emphasis">{{$pengaduan->status}}</span></td>
                      @elseif($pengaduan->status == 'Sedang Ditelaah')
                      <td><span class="badge bg-info text-dark">{{$pengaduan->status}}</span></td>
                      @elseif($pengaduan->status == 'Telaah Selesai')
                      <td><span class="badge bg-warning-subtle text-warning-emphasis">{{$pengaduan->status}}</span></td>
                      @elseif($pengaduan->status == 'Telaah Disetujui')
                      <td><span class="badge bg-light text-dark">{{$pengaduan->status}}</span></td>
                      @elseif($pengaduan->status == 'Sedang Ditindaklanjuti')
                      <td><span class="badge bg-success-subtle text-success-emphasis">{{$pengaduan->status}}</span></td>
                      @elseif($pengaduan->status == 'Tindak Lanjut Selesai')
                      <td><span class="badge bg-success text-white">{{$pengaduan->status}}</span></td>
                      @elseif($pengaduan->status == 'Pengaduan Ditolak')
                      <td><span class="badge bg-danger text-white">{{$pengaduan->status}}</span></td>
                @endif
                <td class="d-flex justify-evenly">
                  <a href="{{url('dashboard/pengaduan/detail/'.$pengaduan->id)}}" class="btn btn-success">
                    <i class="bi bi-arrows-fullscreen"></i>
                  </a>
                  <a  href="{{url('dashboard/pengaduan/'.$pengaduan->id)}}" class="mx-1 btn btn-primary">
                    <i class="bi bi-pencil-square"></i>
                  </a>
                  <form id="deleteForm" action="{{ url('dashboard/pengaduan/delete/'.$pengaduan->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">
                        <i class="bi bi-trash-fill"></i>
                    </button>
                </form>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>

        </div>

      </div>
    </div>

  </section>
@endsection
