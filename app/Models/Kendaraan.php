<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kendaraan extends Model
{
    use HasFactory;
    protected $table = 'kendaraans';
    protected $fillable = [
        'nama_kendaraan',
        'tipe',
        'no_kendaraan',
        'tahun',
        'harga_12_jam',
        'harga_24_jam',
        'deskripsi',
        'image',
    ];
}
