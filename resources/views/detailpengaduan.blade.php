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

      <!-- Detail Table -->
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Detail Informasi</h5>
          <table class="table">
            <tbody>
              <tr>
                <td>Kategori Pelanggaran</td>
                <td>-</td>
              </tr>
              <tr>
                <td>Judul Pelanggaran</td>
                <td>-</td>
              </tr>
              <tr>
                <td>Uraian</td>
                <td>-</td>
              </tr>
              <tr>
                <td>Tanggal</td>
                <td>-</td>
              </tr>
              <tr>
                <td>Waktu Perkiraan</td>
                <td>-</td>
              </tr>
              <tr>
                <td>Lampiran</td>
                <td>
                    <a href="{{asset('/tema/asset/pdf/contoh.pdf')}}" download class="btn btn-warning"><i class="bi bi-download"></i></a>
                </td>
              </tr>
              <tr>
                <th scope="row">Pihak Yang Terlibat</th>
                <td> </td>
              </tr>
              <tr>
                <td>Nama Lengkap</td>
                <td>-</td>
              </tr>
              <tr>
                <td>Jabatan</td>
                <td>-</td>
              </tr>
              <tr>
                <td>Klasifikasi Jabatan</td>
                <td>-</td>
              </tr>

            </tbody>
          </table>
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
                <th scope="col">Hasil Verifikasi</th>
                <th scope="col">Identitas Pelapor</th>
                <th scope="col">Materi Laporan</th>
                <th scope="col">Hasil Telaah</th>
                <th scope="col">Laporan Hasil</th>
                <th scope="col">Kesimpulan Laporan</th>
                <th scope="col">Laporan Monitoring</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>-</td>
                <td>
                  <button type="button" class="btn btn-warning"><i class="bi bi-download"></i></button>
                </td>
                <td>
                  <button type="button" class="btn btn-warning"><i class="bi bi-download"></i></button>
                </td>
                <td>
                  <button type="button" class="btn btn-warning"><i class="bi bi-download"></i></button>
                </td>
                <td>
                  <button type="button" class="btn btn-warning"><i class="bi bi-download"></i></button>
                </td>
                <td>
                  <button type="button" class="btn btn-warning"><i class="bi bi-download"></i></button>
                </td>
                <td>
                  <button type="button" class="btn btn-warning"><i class="bi bi-download"></i></button>
                </td>
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

