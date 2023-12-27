<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $table = "paket_orders";

    protected $fillable = [
        'nama',
        'kota',
        'hp',
        'daya',
        'paket_kebutuhan',
    ];

    public $timestamps = false; // Disable timestamps
}