<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    use HasFactory;

    protected $table = 'laporan';
    protected $fillable = [
        'no_aduan',
        'no_sk',
        'judul_pengaduan',
        'jenis_laporan',
        'lampiran',
        'keterangan'
    ];
}