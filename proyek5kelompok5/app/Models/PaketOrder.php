<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaketOrder extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'nama',
        'kota',
        'hp',
        'daya',
        'paket_kebutuhan',
        'pesan',
        'confirmation'
        // Add other fields as needed
    ];
}
