<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use App\Models\Terlapor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PengaduanController extends Controller
{
    public function index () {
        $data = Pengaduan::all();
        return view('pengaduan',compact('data'));
    }

    public function index_detail ($id) {
        $data = Pengaduan::with('terlapor')->findOrFail($id);
        return view('rincianpengaduan',compact('data'));
    }
    public function index_create_pengaduan()
    {
        return view('buatpengaduan');
    }

    public function create_pengaduan(Request $request){
        $request-> validate([
            'uraian_pengaduan' => 'required',
            'kategori_pelanggaran' => 'required',
            'judul_pengaduan' => 'required',
            'lampiran'=>'required',
            'nama_terlapor'=>'required',
            'jabatan_terlapor'=>'required',
            'klasifikasi_jabatan'=>'required',
            'tanggal'=>'required',
            'waktu'=>'required',
            'id_pelapor'=>'required'
        ]);

        $fileName = null;
        if ($request->hasFile('lampiran')) {
            $file = $request->file('lampiran');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads'), $fileName);
        }
        $terlapor = Terlapor::create([
            'nama_terlapor' => $request->nama_terlapor,
            'jabatan'=> $request->jabatan_terlapor,
            'klasifikasi' => $request->klasifikasi_jabatan
        ]);
        $lastId = Pengaduan::max('id');
        
        $pengaduan = Pengaduan::create([
            'no_pengaduan' => ($lastId+1) . '/unsika/pengaduan/2024',
            'kategori' => $request->kategori_pelanggaran,
            'judul' => $request->judul_pengaduan,
            'lampiran' => $fileName,
            'uraian' => $request->uraian_pengaduan,
            'tanggal' => $request->tanggal,
            'time' => $request->waktu,
            'status'=> 'Pengaduan Baru',
            'id_pelapor' => $request->id_pelapor,
            'id_terlapor'=> $terlapor->id,
        ]);
                
        if(!$pengaduan){
            Session::flash('failed', 'Terjadi Kesalahan');
        }
        Session::flash('success','Berhasil membuat Pengaduan');
        return redirect()->back();
    }   
}