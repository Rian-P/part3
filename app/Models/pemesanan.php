<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pemesanan extends Model
{
    protected $table = 'data_pemesanan';
    use HasFactory;
    protected $fillable = [
        'nama_pelanggan',
        'nama_kendaraan',
        'kota_tujuan',
        'tanggal_pengambilan',
        'tanggal_pengembalian',
        'sopir',
        'waktu_pengambilan',
        'waktu_pengembalian',
        'foto_ktp',
        'bukti_tf',
        'status',
        
    ];
}
