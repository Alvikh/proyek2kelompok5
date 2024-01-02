<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Installations extends Model
{
    use HasFactory;

    // Define the table associated with the model
    protected $table = 'installations';

    // Define the fillable attributes
    protected $fillable = [
        // Add the fields that can be mass-assigned here
        'user_id',  // Example field, replace with your actual fields
        'installation',
    ];

    // Other model logic, relationships, etc. can be added here
}
