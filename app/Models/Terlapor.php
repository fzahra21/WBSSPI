<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Terlapor extends Model
{
    use HasFactory;
    protected $table = 'terlapor';
    protected $fillable = [
        'nama_terlapor',
        'jabatan',
        'klasifikasi'
    ];
}