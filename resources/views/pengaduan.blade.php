@extends('layouts.layout-main')

@section('judul')
Pengaduan Saya
@endsection

@section('main')
<div class="pagetitle">
    <h1>Pengaduan Saya</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item active">Pengaduan Saya</li>
      </ol>
    </nav>
  </div>

  <a href="{{url('/buatpengaduan')}}" class="btn btn-primary mb-4">
    Buat Pengaduan
  </a>

  <section class="section">
    <div class="row">

      <!-- Pengaduan -->
      <div class="col-12">
          <div class="card recent-sales overflow-auto">

            <div class="card-body">
              <h5 class="card-title">Pengaduan</h5>

              <table class="table table-borderless datatable table-hover">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nomor Aduan</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Status</th>
                  </tr>
                </thead>
                <tbody >
                  <tr data-href="{{url('pengaduan/rincian')}}">
                    <th scope="row">1</th>
                    <td>2457</td>
                    <td>####</td>
                    <td>####</td>
                    <td>####</td>
                    <td><span class="badge bg-success">Pengaduan Selesai</span></td>
                  </tr>
                </tbody>
              </table>

              {{-- Membuat tabel interaktif di mana pengguna dapat mengklik baris dan diarahkan ke halaman yang sesuai --}}
              <script>
                document.addEventListener("DOMContentLoaded", function() {
                  var rows = document.querySelectorAll("tr[data-href]");
                  rows.forEach(function(row) {
                    row.addEventListener("click", function() {
                      window.location.href = this.dataset.href;
                    });
                  });
                });
                </script>

            </div>

          </div>
        </div>

    </div>
  </section>
@endsection

