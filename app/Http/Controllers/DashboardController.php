<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use Illuminate\Http\Request;
class DashboardController extends Controller
{
    public function index()
    {
        $data_pengaduan = Pengaduan::all();
        $data_korupsi = Pengaduan::where('kategori', 1)->count();
        $data_pengadaan = Pengaduan::where('kategori', 2)->count();
        $data_keuangan = Pengaduan::where('kategori', 3)->count();
        $data_kepegawaian = Pengaduan::where('kategori', 4)->count();
        $data_wewenang = Pengaduan::where('kategori', 5)->count();
        return view('dashboard',compact('data_pengaduan','data_korupsi','data_pengadaan','data_keuangan','data_kepegawaian','data_wewenang'));
    }

}