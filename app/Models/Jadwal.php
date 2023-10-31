<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_matkul',
        'id_dosen',
        'id_kelas',
        'hari',
        'jam_mulai',
        'jam_selesai'
    ];

    public function mata_kuliah()
    {
        return $this->belongsToMany(MataKuliah::class, 'id_matkul');
    }

    public function dosen()
    {
        return $this->belongsToMany(Dosen::class, 'id_dosen');
    }

    public function kelas()
    {
        return $this->belongsToMany(Kelas::class, 'id_kelas');
    }

    public function absensi()
    {
        return $this->hasMany(Absensi::class);
    }
}