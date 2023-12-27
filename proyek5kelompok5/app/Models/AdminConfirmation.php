<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminConfirmation extends Model
{
    use HasFactory;

    protected $fillable = [
        // Add fields related to AdminConfirmation
    ];

    // Define a relationship to PaketOrder
    public function paketOrder()
    {
        return $this->belongsTo(PaketOrder::class);
    }

    // Add any other methods if needed
}


