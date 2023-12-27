<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\SolarPanelCapacity;
use App\Models\Storage;

class Blog extends Model
{
    public function capacity()
    {
        return $this->belongsTo(SolarPanelCapacity::class, 'capacity_id');
    }

    public function storage()
    {
        return $this->belongsTo(Storage::class, 'storage_id');
    }
    
    use HasFactory;

    protected $fillable = ['title', 'content', 'image'];
}
