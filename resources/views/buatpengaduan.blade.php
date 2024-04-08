@extends('layouts.layout-main')

@section('judul')
Buat Pengaduan
@endsection

@section('main')
<div class="pagetitle">
    <h1>Aduan Baru</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{'/pengaduan'}}">Home</a></li>
        <li class="breadcrumb-item active">Aduan Baru</li>
      </ol>
    </nav>
  </div>
  @if(Session::has('success'))
    <div class="alert alert-success">
        {{ Session::get('success') }}
    </div>
    @elseif (Session::has('failed'))
        <div class="alert alert-danger">
            {{ Session::get('failed') }}
        </div>
    @endif
  <section class="section">
    <div class="row">
      <div class="card">
          <div class="card-body">
            <h5 class="card-title">Form Pengaduan</h5>

            <!-- Form -->
            <form class="row g-3" method="POST" action="{{url('pengaduan/post')}}" enctype="multipart/form-data">
              @csrf
              <div class="col-sm-12">
                <select class="form-select" name="kategori_pelanggaran" aria-label="Default select example" required>
                  <option selected disabled>Pilih Kategori Pelanggaran</option>
                  <option value="1">Korupsi</option>
                  <option value="2">Pengadaan Barang/Jasa</option>
                  <option value="3">Pelanggaran Pengelolaan Keuangan</option>
                  <option value="4">Pelanggaran Kepegawaian</option>
                  <option value="5">Penyalahgunaan Wewenang</option>
                </select>
              </div>

              <div class="col-md-12">
                <div class="form-floating">
                  <input type="text" class="form-control" name="judul_pengaduan" id="floatingName" placeholder="Your Name" required>
                  <label for="floatingName">Judul Pengaduan</label>
                </div>
              </div>

              <div class="col-12">
                <div class="form-floating">
                  <textarea class="form-control" name="uraian_pengaduan" placeholder="Address" id="floatingTextarea" style="height: 100px;" required></textarea>
                  <label for="floatingTextarea">Uraian Pengaduan</label>
                </div>
              </div>

              <div class="col-sm-12">
                <label for="inputNumber" class="col-sm-2 col-form-label">Lampiran</label>
                <input class="form-control" type="file" id="formFile" accept=".pdf,.docx,.jpg,.jpeg,.png" name="lampiran" required>
              </div>

              <label for="inputColor">Pihak Yang Diduga Terlibat</label>
              <div class="col-md-6">
                <div class="col-md-12">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="floatingCity" placeholder="City" name="nama_terlapor" required>
                    <label for="floatingCity">Nama Lengkap</label>
                  </div>
                </div>
              </div>

              <div class="col-md-3">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="floatingZip" placeholder="Zip" name="jabatan_terlapor" required>
                    <label for="floatingZip">Jabatan</label>
                  </div>
              </div>

              <div class="col-md-3">
                  <div class="form-floating mb-3">
                    <select class="form-select" id="floatingSelect" aria-label="State" name="klasifikasi_jabatan" required>
                      <option selected>Klasifikasi Jabatan</option>
                      <option value="1">PNS</option>
                      <option value="2">Non PNS</option>
                    </select>
                    <label for="floatingSelect">Pilih</label>
                  </div>
              </div>

              <div class="row mb-12">
                <label for="inputDate" class="col-sm-2 col-form-label">Tanggal</label>
                    <input type="date" class="form-control mb-3" name="tanggal" required>
              </div>
              <div class="row mb-12">
                <label for="inputTime" class="col-sm-2 col-form-label">Waktu Perkiraan</label>
                    <input type="time" class="form-control mb-3" name="waktu">
              </div>

              <div class="row mb-2">
                <legend class="col-form-label col-sm-4 pt-0">Pengadu Anonymous</legend>
                <div class="col-sm-10">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck1">
                    <label class="form-check-label" for="gridCheck1">
                      Kirim sebagai anonymous
                    </label>
                  </div>
                </div>
              </div>
              <input type="hidden" name="id_pelapor" value="{{ Auth::user()->id }}">
              <div class="text-center">
                  <button type="submit" class="btn btn-primary">Kirim</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
              </div>

            </form>

          </div>
      </div>

    </div>
  </section>
@endsection