<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Installation extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'capacity',
        'storage',
        'nama',
        'kota',
        'hp',
        'daya',
        'pesan',
    ];
}
