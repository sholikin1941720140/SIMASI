<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absensi extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_mahasiswa',
        'id_jadwal',
        'hari',
        'status'
    ];

    public function mahasiswa()
    {
        return $this->belongsToMany(Mahasiswa::class, 'id_mahasiswa');
    }

    public function jadwal()
    {
        return $this->belongsTo(Jadwal::class, 'id_jadwal');
    }
}