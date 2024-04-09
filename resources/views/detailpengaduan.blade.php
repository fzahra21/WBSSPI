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
                        <label for="floatingName"><b>Kategori Pelanggaran :</b> </label>
                    </div>

                    <div class="col-md-12">
                        <label for="floatingName"><b>Judul Pengaduan :</b> </label>
                    </div>

                    <div class="col-sm-12">
                        <label for="floatingName"><b>Uraian :</b> </label>
                    </div>

                    <div class="col-sm-12">
                        <label for="floatingName"><b>Tanggal :</b> </label>
                    </div>

                    <div class="col-sm-12">
                        <label for="floatingName"><b>Waktu Perkiraan :</b> </label>
                    </div>

                    <div class="col-sm-12">
                        <label for="floatingName"><b>Lampiran</b></label>
                    </div>

                    <div class="col-sm-12">
                        <embed src="" type="application/pdf" width="500" height="400">
                      </div>

                    <div class="col-sm-12">
                        <label for="floatingName"><b>PIHAK YANG DIDUGA TERLIBAT</b> </label>
                    </div>

                    <div class="col-sm-12">
                        <label for="floatingName"><b>Nama Lengkap :</b> </label>
                    </div>

                    <div class="col-sm-12">
                        <label for="floatingName"><b>Jabatan :</b> </label>
                    </div>

                    <div class="col-sm-12">
                        <label for="floatingName"><b>Klasifikasi Jabatan :</b> </label>
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
                <th scope="col">Nomor Aduan</th>
                <th scope="col">Jenis Laporan</th>
                <th scope="col">Lampiran</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>-</td>
                <td>Contohnya : \Laporan Hasil\ diambil dari dropdown pas Buat Laporan</td>
                <td>
                    <button type="button" class="btn btn-warning"><i class="bi bi-download"></i></button>
                  </td>
              </tr>

            </tbody>
          </table>

        </div>

      </div>
    </div>

</main>

    </div>
  </section>

@endsection

