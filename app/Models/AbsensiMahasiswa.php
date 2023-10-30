<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AbsensiMahasiswa extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_mahasiswa',
        'id_matkul',
        'tanggal',
        'hadir'
    ];

    public function mahasiswa()
    {
        return $this->hasMany(Mahasiswa::class);
    }
    
    public function mata_kuliah()
    {
        return $this->hasMany(MataKuliah::class);
    }
}