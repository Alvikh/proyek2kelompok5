<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bar extends Model
{
    use HasFactory;
    protected $table = 'tamu';

    public static function countByKehadiran()
    {
        return [
            'hadir' => self::where('kehadiran', 'Hadir')->count(),
            'tidak_hadir' => self::where('kehadiran', 'Tidak hadir')->count(),
        ];
    }
}
