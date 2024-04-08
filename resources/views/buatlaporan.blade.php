@extends('layouts.layout-main')

@section('judul')
Buat Laporan
@endsection


@section('main')
    <div class="pagetitle">
      <h1>Laporan Baru</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{url('/dashboard')}}">Dashboard</a></li>
          <li class="breadcrumb-item active">Laporan Baru</li>
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
              <h5 class="card-title">Form Laporan</h5>

              <!-- Form -->
              <form class="row g-3" action="{{ url('dashboard/laporan/post') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="col-md-12">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="nomor_aduan" name="nomor_aduan" placeholder="Your Name" required>
                    <label for="floatingName">Nomor Aduan</label>
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="nomor_sk"  name="nomor_sk" placeholder="Your Name" required> 
                    <label for="floatingName">Nomor SK</label>
                  </div>
                </div>

                <div class="col-md-12">
                    <div class="form-floating">
                      <input type="text" class="form-control" id="floatingName" placeholder="Your Name" name="judul_pengaduan" required>
                      <label for="floatingName">Judul Pengaduan</label>
                    </div>
                  </div>

                  <div class="col-sm-12">
                    <label for="inputNumber" class="col-sm-2 col-form-label">Lampiran</label>
                      <input class="form-control" type="file" id="formFile" accept=".pdf,.docx,.jpg,.jpeg,.png" name="lampiran" required>
                  </div>

                  <div class="col-sm-12">
                    <select class="form-select" aria-label="Default select example" name="jenis_laporan" required>
                      <option selected disabled>Jenis Laporan</option>
                      <option value="1">Hasil Verifikasi</option>
                      <option value="2">Identitas Pelapor</option>
                      <option value="3">Materi Laporan</option>
                      <option value="4">Hasil Telaah</option>
                      <option value="5">Laporan Hasil</option>
                      <option value="6">Kesimpulan Hasil</option>
                      <option value="7">Laporan Monitoring</option>
                    </select>
                  </div>

                  <div class="col-12">
                    <div class="form-floating">
                      <textarea class="form-control" placeholder="Address" id="floatingTextarea" style="height: 100px;" name="keterangan" required></textarea>
                      <label for="floatingTextarea">Keterangan</label>
                    </div>
                  </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Kirim</button>
                    <button type="reset" class="btn btn-secondary">Reset</button>
                </div>

              </form>
            </div>
        </div>
      </div>
    </section>
    <script>
      const generateSK = () => {
          document.getElementById('nomor_aduan').addEventListener('change', function() {
              let value = this.value;
              document.getElementById('nomor_sk').value = value + '/UNSIKA/' + new Date().getFullYear();
          });
      };
      
      document.addEventListener('DOMContentLoaded', function() {
          generateSK();
      });
      
      </script>
@endsection

