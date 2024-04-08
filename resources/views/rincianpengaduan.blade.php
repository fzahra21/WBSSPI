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
                  <label for="floatingName">Kategori Pelanggaran : </label>
              </div>

              <div class="col-md-12">
                  <label for="floatingName">Judul Pengaduan : </label>
              </div>

              <div class="col-sm-12">
                  <label for="floatingName">Uraian : </label>
              </div>

              <div class="col-sm-12">
                  <label for="floatingName">Lampiran  </label>
              </div>

              <div class="col-sm-12">
                  <embed src="{{asset('/tema/asset/pdf/contoh.pdf')}}" type="application/pdf" width="500" height="400">
              </div>

              <div class="col-sm-12">
                  <label for="floatingName"><b>Pihak Yang Diduga Terlibat</b> </label>
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

            </form>

          </div>
      </div>

    </div>
  </section>
@endsection



