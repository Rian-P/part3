<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sopir extends Model
{
    protected $table = 'sopir';
    use HasFactory;
    protected $fillable = [
        'nama_sopir',
        'alamat_sopir',
        'nomor_hp_sopir',
        'status',
        'gender',
        'password',
        
    ];
}
