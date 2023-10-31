<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absensi extends Model
{
    use HasFactory;

    protected $table = 'absensis';

    protected $fillable = [
        'id_mahasiswa',
        'id_jadwalmengajar',
        'hari',
        'status'
    ];

    public function mahasiswa()
    {
        return $this->belongsToMany(Mahasiswa::class, 'id_mahasiswa');
    }

    public function jadwal_mengajar()
    {
        return $this->belongsTo(JadwalMengajar::class, 'id_jadwalmengajar');
    }
}