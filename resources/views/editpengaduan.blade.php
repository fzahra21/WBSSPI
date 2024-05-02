@extends('layouts.layout-main')

@section('judul')
Edit Status Pengaduan
@endsection

@section('main')
@if(Session::has('success'))
<div class="alert alert-success">
    {{ Session::get('success') }}
</div>
@elseif (Session::has('failed'))
    <div class="alert alert-danger">
        {{ Session::get('failed') }}
    </div>
@endif
    <div class="row">
      <div class="card">
          <div class="card-body">
            <h5 class="card-title">Rincian Pengaduan</h5>

            <!-- Form -->
            <form class="row g-3" method="POST" action={{url('dashboard/pengaduan/update/'.$data->id)}}>
                @csrf
                @method('PUT')
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


              <label class="col-sm-2 col-form-label"><b>Ubah Status</b></label>
                  <div class="col-sm-10">
                    <select class="form-select" aria-label="Default select example" name="status_pengaduan" id="statusSelect">
                        <option value="Pengaduan Baru" {{ $data->status == 'Pengaduan Baru' ? 'selected' : '' }}>Pengaduan Baru</option>
                        <option value="Pengaduan Diterima" {{ $data->status == 'Pengaduan Diterima' ? 'selected' : '' }}>Pengaduan Diterima</option>
                        <option value="Sedang Diverifikasi" {{ $data->status == 'Sedang Diverifikasi' ? 'selected' : '' }}>Sedang Diverifikasi</option>
                        <option value="Verifikasi Selesai" {{ $data->status == 'Verifikasi Selesai' ? 'selected' : '' }}>Verifikasi Selesai</option>
                        <option value="Sedang Ditelaah" {{ $data->status == 'Sedang Ditelaah' ? 'selected' : '' }}>Sedang Ditelaah</option>
                        <option value="Telaah Selesai" {{ $data->status == 'Telaah Selesai' ? 'selected' : '' }}>Telaah Selesai</option>
                        <option value="Telaah Disetujui" {{ $data->status == 'Telaah Disetujui' ? 'selected' : '' }}>Telaah Disetujui</option>
                        <option value="Sedang Ditindaklanjuti" {{ $data->status == 'Sedang Ditindaklanjuti' ? 'selected' : '' }}>Sedang Ditindaklanjuti</option>
                        <option value="Tindak Lanjut Selesai" {{ $data->status == 'Tindak Lanjut Selesai' ? 'selected' : '' }}>Tindak Lanjut Selesai</option>
                        <option value="Pengaduan Ditolak" {{ $data->status == 'Pengaduan Ditolak' ? 'selected' : '' }}>Pengaduan Ditolak</option>
                    </select>
                  </div>

              <div class="text-center">
                  <button type="submit" class="btn btn-primary">Kirim</button>
              </div>

            </form>

          </div>
      </div>

    </div>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        var statusSelect = document.getElementById('statusSelect');
        var selectedIndex = statusSelect.selectedIndex;
        for (var i = 0; i < selectedIndex; i++) {
            statusSelect.options[i].disabled = true;
        }
    });

  </script>
@endsection
