<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalOperasi extends Model
{
    use HasFactory;

    protected $table = 'jadwal_operasi';

    protected $fillable = [
        'id_ruang', 'id_pasien', 'id_dokter', 'id_perawat', 'waktu_jadwal'
    ];

    // Relationship to RuangOperasi
    public function ruangOperasi()
    {
        return $this->belongsTo(RuangOperasi::class, 'id_ruang');
    }

    // Relationship to Pasien
    public function pasien()
    {
        return $this->belongsTo(Pasien::class, 'id_pasien');
    }

    // Relationship to Dokter
    public function dokter()
    {
        return $this->belongsTo(Dokter::class, 'id_dokter');
    }

    // Relationship to Perawat
    public function perawat()
    {
        return $this->belongsTo(Perawat::class, 'id_perawat');
    }
}
