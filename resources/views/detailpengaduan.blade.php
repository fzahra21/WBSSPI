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

        <div class="row">
            <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Rincian Pengaduan</h5>

                  <!-- Form -->
                  <form class="row g-3">

                    <div class="col-sm-12">
                      <label for="floatingName"><b>Kategori Pelanggaran :</b>

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
                     </label>      
                                        </div>

                    <div class="col-md-12">
                      <label for="floatingName"><b>Judul Pengaduan :</b> {{$data->judul}}</label>
                    </div>

                    <div class="col-sm-12">
                      <label for="floatingName"><b>Uraian :</b> {{$data->uraian}}</label>
                    </div>

                    <div class="col-sm-12">
                      <label for="floatingName"><b>Tanggal :</b> {{$data->tanggal}}</label>
                    </div>

                    <div class="col-sm-12">
                      <label for="floatingName"><b>Waktu Perkiraan :</b> {{$data->time}}</label>
                    </div>


                    <div class="col-sm-12">
                      <label for="floatingName"><b>Lampiran</b></label>
                  </div>
                  <div class="col-sm-12">
                    <embed src="{{ asset('/uploads/' . $data->lampiran) }}" type="application/pdf" width="500" height="400">
                  </div>

                  <div class="col-sm-12">
                    <label for="floatingName"><b>PIHAK YANG DIDUGA TERLIBAT</b> </label>
                </div>
    
                <div class="col-sm-12">
                    <label for="floatingName"><b>Nama Lengkap :</b> {{$data->terlapor->nama_terlapor}}</label>
                </div>
    
                <div class="col-sm-12">
                    <label for="floatingName"><b>Jabatan :</b> {{$data->terlapor->jabatan}} </label>
                </div>
    
                <div class="col-sm-12">
                    <label for="floatingName"><b>Klasifikasi Jabatan :</b>
                      @if($data->terlapor->klasifikasi == 1)
                      PNS
                      @else
                      Non PNS
                      @endif
                   </label>
                </div>



                  </form>

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
                <td>
                  <a href="{{ asset('/uploads/'.$item->lampiran) }}" class="btn btn-warning" download>
                    <i class="bi bi-download"></i>
                </a>                </td>
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

