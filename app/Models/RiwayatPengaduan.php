<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RiwayatPengaduan extends Model
{
    use HasFactory;

    protected $table = 'riwayat_status_pengaduan';

    protected $fillable = [
        'status',
        'id_pengaduan'
    ];

    public function pengaduan()
    {
        return $this->belongsTo(Pengaduan::class,'id_pengaduan');
    }
}