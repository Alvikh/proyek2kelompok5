<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemasukkan extends Model
{
    use HasFactory;

    protected $fillable = [
        'tanggal',
        'uang_masuk',
        'uang_keluar',
        'jumlah_sisa_uang_masuk',
    ];

    // You can add any additional model-related code here
}
