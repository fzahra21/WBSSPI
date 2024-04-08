<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
class LaporanController extends Controller
{
    public function index(){
        return view('buatlaporan');
    }

    public function create_laporan(Request $request){
        
        $request->validate([
            'nomor_aduan' => 'required',
            'nomor_sk' => 'required',
            'judul_pengaduan' =>'required',
            'lampiran' => 'required',
            'jenis_laporan' => 'required',
            'keterangan' => 'required'
        ]);   
        
        
        $fileName = null;
        if ($request->hasFile('lampiran')) {
            $file = $request->file('lampiran');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads'), $fileName);
        }
        $laporan = Laporan::create([
            'no_aduan' => $request->nomor_aduan,
            'no_sk' => $request->nomor_sk,
            'lampiran' =>$fileName,
            'jenis_laporan' => $request-> jenis_laporan,
            'judul_pengaduan' => $request-> judul_pengaduan,
            'keterangan' => $request-> keterangan
        ]);
        
        if(!$laporan){
            Session::flash('failed', 'Terjadi Kesalahan');
            // return redirect('dashboard/buat/laporan');
        }
        Session::flash('success','Berhasil membuat Laporan');
        // return redirect('dashboard/buat/laporan');
        return redirect()->back();

    }
}