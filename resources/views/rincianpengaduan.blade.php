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
                  <label for="floatingName">Kategori Pelanggaran : 
                   
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
                  <label for="floatingName">Judul Pengaduan : {{$data->judul}}</label>
              </div>

              <div class="col-sm-12">
                  <label for="floatingName">Uraian : {{$data->uraian}}</label>
              </div>

              <div class="col-sm-12">
                  <label for="floatingName">Lampiran  </label>
              </div>

              <div class="col-sm-12">
                <embed src="{{ asset('/uploads/' . $data->lampiran) }}" type="application/pdf" width="500" height="400">
                </div>

              <div class="col-sm-12">
                  <label for="floatingName"><b>Pihak Yang Diduga Terlibat</b> </label>
              </div>

              <div class="col-sm-12">
                  <label for="floatingName">Nama Lengkap : {{$data->terlapor->nama_terlapor}}</label>
              </div>

              <div class="col-sm-12">
                  <label for="floatingName">Jabatan : {{$data->terlapor->jabatan}} </label>
              </div>

              <div class="col-sm-12">
                  <label for="floatingName">Klasifikasi Jabatan :
                    @if($data->terlapor->klasifikasi == 1)
                    PNS
                    @else
                    Non PNS
                    @endif
                 </label>
              </div>

              <div class="col-sm-12">
                  <label for="floatingName">Tanggal : {{$data->tanggal}}</label>
              </div>

              <div class="col-sm-12">
                  <label for="floatingName">Waktu Perkiraan : {{$data->time}}</label>
              </div>

            </form>

          </div>
      </div>

    </div>
  </section>
@endsection



