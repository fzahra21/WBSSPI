@extends('layouts.layout-main')

@section('judul')
Rincian Pengaduan
@endsection

@section('main')
<section class="section">
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
  </section>
@endsection



