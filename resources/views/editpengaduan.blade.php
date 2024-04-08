@extends('layouts.layout-main')

@section('judul')
Edit Status Pengaduan
@endsection

@section('main')
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
                  <label for="floatingName">Lampiran : </label>
              </div>

              <div class="col-sm-12">
                <embed src="{{asset('/tema/asset/pdf/contoh.pdf')}}" type="application/pdf" width="500" height="400">
              </div>

              <div class="col-sm-12">
                  <label for="floatingName">Pihak Yang Diduga Terlibat </label>
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

              <label class="col-sm-2 col-form-label">Ubah Status</label>
                  <div class="col-sm-10">
                    <select class="form-select" aria-label="Default select example">
                      <option selected disabled>Ubah Status</option>
                      <option value="1">Pengaduan Baru</option>
                      <option value="2">Pengaduan Selesai</option>
                      <option value="3">Sedang Ditelaah</option>
                      <option value="4">Pengaduan Ditolak</option>
                    </select>
                  </div>

              <div class="text-center">
                  <button type="submit" class="btn btn-primary">Kirim</button>
              </div>

            </form>

          </div>
      </div>

    </div>
@endsection
