<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use App\Models\RiwayatPengaduan;
use App\Models\Terlapor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class PengaduanController extends Controller
{
    public function index () {
        $data = Pengaduan::where('id_pelapor', Auth::user()->id)->get();
        return view('pengaduan',compact('data'));
    }

    public function index_detail ($id) {
        $data = Pengaduan::with('terlapor')->findOrFail($id);
        dd($data);
        // return view('rincianpengaduan',compact('data'));
    }
    public function index_create_pengaduan()
    {
        return view('buatpengaduan');
    }

    public function index_update_pengaduan($id)
    {
        $data = Pengaduan::with('terlapor')->findOrFail($id);
        return view('editpengaduan',compact('data'));
    }

    public function index_detail_pengaduan($id)
    {
        $data = Pengaduan::with('terlapor', 'laporan','riwayat_status')->findOrFail($id);
        return view('detailpengaduan',compact('data'));
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

        RiwayatPengaduan::create([
            'status'=>'Pengaduan Baru',
            'id_pengaduan' => $pengaduan->id
        ]);
        
        if(!$pengaduan){
            Session::flash('failed', 'Terjadi Kesalahan');
        }
        Session::flash('success','Berhasil membuat Pengaduan');
        return redirect()->back();
    }
    
    public function update_status_pengaduan($id,Request $request){
        $request->validate([
            'status_pengaduan'=>'required'
        ]);

        $pengaduan = Pengaduan::find($id);

        $pengaduan->update([
            'status' => $request->status_pengaduan
        ]);
        
        RiwayatPengaduan::create([
            'status'=>$request->status_pengaduan,
            'id_pengaduan' => $id
        ]);

        if(!$pengaduan){
            Session::flash('failed', 'Terjadi Kesalahan');
        }
        Session::flash('success','Berhasil mengubah Status Pengaduan');
        return redirect()->back();
    }
    
    public function delete_pengaduan($id){
        $pengaduan = Pengaduan::find($id);
        $pengaduan->delete($id);

        
        if(!$pengaduan){
            Session::flash('failed', 'Terjadi Kesalahan');
        }
        Session::flash('success','Berhasil menghapus Pengaduan');
        return redirect()->back();
    }

    public function get_pengaduan_api(){
        $pengaduan = Pengaduan::all();
        $pengaduanJson = json_encode($pengaduan);

        return $pengaduanJson;
    }

    public function get_pengaduan_api_by_id($id){
        $pengaduan = Pengaduan::find($id);
        $pengaduanJson = json_encode($pengaduan);

        return $pengaduanJson;
    }
}