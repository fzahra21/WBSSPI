<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
    use HasFactory;
    
    protected $table = 'pengaduan';
    protected $fillable = [
        'no_pengaduan',
        'kategori',
        'judul',
        'uraian',
        'tanggal',
        'time',
        'status',
        'lampiran',
        'id_pelapor',
        'id_terlapor'
    ];
    public function terlapor()
    {
        return $this->belongsTo(Terlapor::class,'id_terlapor');
    }

    public function pelapor()
    {
        return $this->belongsTo(Terlapor::class,'id_pelapor');
    }

    public function laporan()
    {
        return $this->hasMany(Laporan::class,'id_pengaduan');
    }

    public function riwayat_status()
    {
        return $this->hasMany(RiwayatPengaduan::class, 'id_pengaduan', 'id');
    }
}