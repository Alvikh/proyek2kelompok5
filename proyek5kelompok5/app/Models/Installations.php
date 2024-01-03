<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Installations extends Model
{
    protected $table = 'installations';

    protected $fillable = [
        'id', 'status', // Add other fields if needed
    ];

    // Add any relationships or additional methods if needed
}
