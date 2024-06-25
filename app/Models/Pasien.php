<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;

    protected $table = 'pasien';

    protected $fillable = [
        'nama', 'jenis_kelamin', 'tanggal_lahir', 'id_kamar', 'tanggal_masuk', 'tanggal_keluar'
    ];

    // Relationship to Kamar
    public function kamar()
    {
        return $this->belongsTo(Kamar::class, 'id_kamar');
    }
}
