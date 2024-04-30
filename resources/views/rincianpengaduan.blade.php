@extends('layouts.layout-main')

@section('judul')
Rincian Pengaduan
@endsection

@section('main')
<section class="section">
    <div class="row">
        <div class="col-12">
          <div class="card recent-sales overflow-auto">

            <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Rincian Pengaduan</h5>

                  <table class="table">
                    <tbody>
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

                    </tbody>
                  </table>
                </div>
              </div>

            </div>

            <div class="col-12">
                <div class="card recent-sales overflow-auto">

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
                                <td>21-04-2024</td>
                            </tr>
                            <tr>
                                <td scope="col">Pengaduan Diterima</td>
                                <td>24-04-2024</td>
                            </tr>
                            <tr>
                                <td scope="col">Sedang Diverifikasi</td>
                                <td>27-04-2024</td>
                            </tr>
                            <tr>
                                <td scope="col">Verifikasi Selesai</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td scope="col">Sedang Ditelaah</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td scope="col">Telaah Selesai</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td scope="col">Telaah Disetujui</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td scope="col">Sedang Ditindaklanjuti</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td scope="col">Tindak Lanjut Selesai</td>
                                <td>-</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>

                  </div>
            </div>
    </div>
  </section>
@endsection



