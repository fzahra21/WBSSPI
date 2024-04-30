@extends('layouts.layout-main')

@section('judul')
Detail Pengaduan
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
        <!-- =========== Rincian Pengaduan =========== -->
        <div class="card">
            <div class="card-body">
              <h5 class="card-title">Rincian Pengaduan</h5>

              <table class="table">
                <tbody>
                    <th scope="col">Kategori Pelanggaran</th>
                    <td>
                        @if ($data->kategori == 1)
                        Korupsi
                        @elseif ($data->kategori == 2)
                        Pengadaan Barang/Jasa
                        @elseif ($data->kategori == 3)
                        Pelanggaran Pengelolaan Keuangan
                        @elseif ($data->kategori == 4)
                        Pelanggaran Kepegawaian
                        @elseif ($data->kategori == 5)
                        Penyalahgunaan Wewenang
                        @endif
                    </td>
                  <tr>
                    <th scope="row">Judul Pengaduan</th>
                    <td>{{$data->judul}}</td>
                  </tr>
                  <tr>
                    <th scope="row">Uraian</th>
                    <td>{{$data->uraian}}</td>
                  </tr>
                  <tr>
                    <th scope="row">Tanggal</th>
                    <td>{{$data->tanggal}}</td>
                  </tr>
                  <tr>
                    <th scope="row">Waktu Perkiraan</th>
                    <td>{{$data->time}}</td>
                  </tr>
                  <tr>
                    <th scope="row">Lampiran</th>
                    <td class="d-flex justify-evenly">
                        <a href="{{ asset('/uploads/' . $data->lampiran) }}" class="btn btn-success" target="_blank" rel="noopener noreferrer">
                            <i class="bi bi-arrows-fullscreen"></i>
                        </a>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row" colspan="2">PIHAK Yang DIDUGA TERLIBAT</th>
                  </tr>
                  <tr>
                    <th scope="row">Nama Lengkap</th>
                    <td>{{$data->terlapor->nama_terlapor}}</td>
                  </tr>
                  <tr>
                    <th scope="row">Jabatan</th>
                    <td>{{$data->terlapor->jabatan}}</td>
                  </tr>
                  <tr>
                    <th scope="row">Klasifikasi Jabatan</th>
                    <td>
                        @if($data->terlapor->klasifikasi == 1)
                        PNS
                        @else
                        Non PNS
                        @endif
                    </td>
                  </tr>

                </tbody>
              </table>
            </div>
          </div>

        </div>

            <div class="card recent-sales overflow-auto">

              <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Update Status Pengaduan</h5>

                    <table class="table">
                      <tbody>
                        <thead>
                            <th scope="col">Status Pengaduan</th>
                            <th scope="col">Tanggal</th>
                        </thead>
                        <tr>
                            <td scope="col">Pengaduan Baru</td>
                            <td>21-04-2024</td>
                        </tr>
                        <tr>
                            <td scope="col">Pengaduan Diterima</td>
                            <td>24-04-2024</td>
                        </tr>
                        <tr>
                            <td scope="col">Sedang Diverifikasi</td>
                            <td>27-04-2024</td>
                        </tr>
                        <tr>
                            <td scope="col">Verifikasi Selesai</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td scope="col">Sedang Ditelaah</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td scope="col">Telaah Selesai</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td scope="col">Telaah Disetujui</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td scope="col">Sedang Ditindaklanjuti</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td scope="col">Tindak Lanjut Selesai</td>
                            <td>-</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>

            </div>


    <div class="row">
    <!-- =========== Lampiran Dokumen =========== -->
    <div class="col-12">
      <div class="card recent-sales overflow-auto">

        <div class="card-body">
          <h5 class="card-title">Lampiran Dokumen</h5>

          <table class="table table-borderless datatable">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nomor SK</th>
                <th scope="col">Jenis Laporan</th>
                <th scope="col">Lampiran</th>
              </tr>
            </thead>
            <tbody>
              @foreach($data->laporan as $index => $item)
              <tr>
                <th scope="row">{{ $index + 1 }}</th>
                <td>{{ $item->no_sk }}</td>
                <td>
                  @if($item->jenis_laporan == 1)
                  Hasil Verifikasi
                  @elseif($item->jenis_laporan == 2)
                      Identitas Pelapor
                      @elseif($item->jenis_laporan == 3)
                      Materi Laporan
                      @elseif($item->jenis_laporan == 4)
                      Hasil Telaah
                      @elseif($item->jenis_laporan == 5)
                      Laporan Hasil
                      @elseif($item->jenis_laporan == 6)
                      Kesimpulan Hasil
                      @elseif($item->jenis_laporan == 7)
                    Laporan Monitoring
                      @endif
                </td>
                <td class="d-flex justify-evenly">
                    <a href="{{ asset('/uploads/' . $item->lampiran) }}" class="btn btn-success" target="_blank" rel="noopener noreferrer">
                        <i class="bi bi-arrows-fullscreen"></i>
                    </a>
                </td>
            </tr>
                  @endforeach
            </tbody>
          </table>

        </div>

      </div>
    </div>

</main>

    </div>
  </section>

@endsection

