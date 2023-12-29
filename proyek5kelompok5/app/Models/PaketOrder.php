<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaketOrder extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'nama',
        'kota',
        'hp',
        'daya',
        'paket_kebutuhan',
        'pesan',
    ];
    
}
