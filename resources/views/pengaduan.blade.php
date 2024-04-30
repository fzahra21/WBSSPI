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

  <a href="{{url('pengaduan/buat')}}" class="btn btn-primary mb-4">
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
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody >
                  @foreach($data as $index => $pengaduan)

                  <tr data-href="">
                    <th scope="row">{{$index+1}}</th>
                    <td>{{$pengaduan->no_pengaduan}}</td>
                    <td>    @if ($pengaduan->kategori == 1)
                      Korupsi
                      @elseif ($pengaduan->kategori == 2)
                      Pengadaan Barang/Jasa
                      @elseif ($pengaduan->kategori == 3)
                      Pelanggaran Pengelolaan Keuangan
                      @elseif ($pengaduan->kategori == 4)
                      Pelanggaran Kepegawaian
                      @elseif ($pengaduan->kategori == 5)
                      Penyalahgunaan Wewenang
                      @endif</td>
                    <td>{{$pengaduan->judul}}</td>
                    <td>{{$pengaduan->tanggal}}</td>
                      @if($pengaduan->status == 'Pengaduan Baru')
                    <td><span class="badge bg-primary">{{$pengaduan->status}}</span></td>
                      @elseif($pengaduan->status == 'Pengaduan Selesai')
                      <td><span class="badge bg-success">{{$pengaduan->status}}</span></td>
                      @elseif($pengaduan->status == 'Pengaduan Ditolak')
                      <td><span class="badge bg-danger">{{$pengaduan->status}}</span></td>
                      @elseif($pengaduan->status == 'Sedang Ditelaah')
                      <td><span class="badge bg-warning">{{$pengaduan->status}}</span></td>
                    @endif
                    <td class="d-flex justify-evenly">
                        <a href="{{url('pengaduan/rincian/'.$pengaduan->id)}}" class="btn btn-success">
                          <i class="bi bi-arrows-fullscreen"></i>
                        </a>
                    </td>
                  </tr>
                  @endforeach
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

