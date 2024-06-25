<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kamar extends Model
{
    use HasFactory;

    protected $table = 'kamar';

    protected $fillable = [
        'nomor_kamar', 'lantai', 'tipe', 'kapasitas', 'status_ketersediaan'
    ];

    // Relationship to Pasien
    public function pasien()
    {
        return $this->hasMany(Pasien::class, 'id_kamar');
    }
}
