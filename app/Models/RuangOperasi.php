<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RuangOperasi extends Model
{
    use HasFactory;

    protected $table = 'ruang_operasi';

    protected $fillable = [
        'nomor_ruang', 'lantai', 'tipe', 'status_ketersediaan'
    ];
}
