<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index()
    {
        return view('homepage');
    }

    public function buatlaporan()
    {
        return view('buatlaporan');
    }

    public function editpengaduan()
    {
        return view('editpengaduan');
    }

    public function detailpengaduan()
    {
        return view('detailpengaduan');
    }


    public function pengaduan()
    {
        return view('pengaduan');
    }

    public function rincianpengaduan()
    {
        return view('rincianpengaduan');
    }

}