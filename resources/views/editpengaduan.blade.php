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
    <div class="col-12">

        <div class="card">
            <div class="card-body">
              <h5 class="card-title">Rincian Pengaduan</h5>

              <table class="table">
                <tbody>
                    <form class="row g-3" method="POST" action={{url('dashboard/pengaduan/update/'.$data->id)}}>
                        @csrf
                        @method('PUT')
                    <th scope="col">Kategori Pelanggaran</th>
                    <td>
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
                    </td>
                  <tr>
                    <th scope="row">Judul Pengaduan</th>
                    <td>{{$data->judul}}</td>
                  </tr>
                  <tr>
                    <th scope="row">Uraian</th>
                    <td>{{$data->uraian}}</td>
                  </tr>
                  <tr>
                    <th scope="row">Tanggal</th>
                    <td>{{$data->tanggal}}</td>
                  </tr>
                  <tr>
                    <th scope="row">Waktu Perkiraan</th>
                    <td>{{$data->time}}</td>
                  </tr>
                  <tr>
                    <th scope="row">Lampiran</th>
                    <td class="d-flex justify-evenly">
                        <a href="{{ asset('/uploads/' . $data->lampiran) }}" class="btn btn-success" target="_blank" rel="noopener noreferrer">
                            <i class="bi bi-arrows-fullscreen"></i>
                        </a>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row" colspan="2">PIHAK Yang DIDUGA TERLIBAT</th>
                  </tr>
                  <tr>
                    <th scope="row">Nama Lengkap</th>
                    <td>{{$data->terlapor->nama_terlapor}}</td>
                  </tr>
                  <tr>
                    <th scope="row">Jabatan</th>
                    <td>{{$data->terlapor->jabatan}}</td>
                  </tr>
                  <tr>
                    <th scope="row">Klasifikasi Jabatan</th>
                    <td>
                        @if($data->terlapor->klasifikasi == 1)
                        PNS
                        @else
                        Non PNS
                        @endif
                    </td>
                  </tr>
                  <tr>
                    <th>Ubah Status Pengaduan</th>
                    <td>
                        <div class="col-sm-12">
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
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>

        </div>

        <div class="col-12">
              <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Update Status Pengaduan</h5>

                    <table class="table">
                      <tbody>
                        <thead>
                            <th scope="col">Status Pengaduan</th>
                            <th scope="col">Tanggal</th>
                        </thead>
                        <tr>
                          <td scope="col">Pengaduan Baru</td>
                          <td>
                            @foreach ($data->riwayat_status as $item)
                            @if ($item->status == 'Pengaduan Baru')
                            {{ $item->created_at->format('Y-m-d') }}
                            @break
                            @endif
                             @endforeach
                          </td>
                      </tr>
                      <tr>
                          <td scope="col">Pengaduan Diterima</td>
                          <td>
                            @foreach ($data->riwayat_status as $item)
                            @if ($item->status == 'Pengaduan Diterima')
                            {{ $item->created_at->format('Y-m-d') }}
                            @break
                            @endif
                             @endforeach
                          </td>
                      </tr>
                      <tr>
                          <td scope="col">Sedang Diverifikasi</td>
                          <td>
                            @foreach ($data->riwayat_status as $item)
                              @if ($item->status == 'Sedang Diverifikasi')
                                {{ $item->created_at->format('Y-m-d') }}
                                @break
                              @endif
                            @endforeach
                          </td>
                      </tr>
                      <tr>
                          <td scope="col">Verifikasi Selesai</td>
                          <td>
                            @foreach ($data->riwayat_status as $item)
                              @if ($item->status == 'Verifikasi Selesai')
                                {{ $item->created_at->format('Y-m-d') }}
                                @break
                              @endif
                            @endforeach
                          </td>
                      </tr>
                      <tr>
                          <td scope="col">Sedang Ditelaah</td>
                          <td>
                            @foreach ($data->riwayat_status as $item)
                              @if ($item->status == 'Sedang Ditelaah')
                                {{ $item->created_at->format('Y-m-d') }}
                                @break
                              @endif
                            @endforeach
                          </td>
                      </tr>
                      <tr>
                          <td scope="col">Telaah Selesai</td>
                          <td>
                            @foreach ($data->riwayat_status as $item)
                              @if ($item->status == 'Telaah Selesai')
                                {{ $item->created_at->format('Y-m-d') }}
                                @break
                              @endif
                            @endforeach
                          </td>
                      </tr>
                      <tr>
                          <td scope="col">Telaah Disetujui</td>
                          <td>
                            @foreach ($data->riwayat_status as $item)
                              @if ($item->status == 'Telaah Disetujui')
                                {{ $item->created_at->format('Y-m-d') }}
                                @break
                              @endif
                            @endforeach
                          </td>
                      </tr>
                      <tr>
                          <td scope="col">Sedang Ditindaklanjuti</td>
                          <td>
                            @foreach ($data->riwayat_status as $item)
                              @if ($item->status == 'Sedang Ditindaklanjuti')
                                {{ $item->created_at->format('Y-m-d') }}
                                @break
                              @endif
                            @endforeach
                          </td>
                        </tr>
                      <tr>
                          <td scope="col">Tindak Lanjut Selesai</td>
                          <td>
                            @foreach ($data->riwayat_status as $item)
                              @if ($item->status == 'Tindak Lanjut Selesai')
                                {{ $item->created_at->format('Y-m-d') }}
                                @break
                              @endif
                            @endforeach
                          </td>
                        </tr>
                        <tr>
                            <td scope="col">Pengaduan Ditolak</td>
                            <td>
                              @foreach ($data->riwayat_status as $item)
                                @if ($item->status == 'Pengaduan Ditolak')
                                  {{ $item->created_at->format('Y-m-d') }}
                                  @break
                                @endif
                              @endforeach
                            </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>

              </div>
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-primary">Kirim</button>
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
