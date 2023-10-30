<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MataKuliah extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_matkul',
        'nama_dosen_pengajar',
        'kelas',
        'jam',
        'semester'
    ];

    public function mahasiswa()
    {
        return $this->hasMany(Mahasiswa::class);
    }
    
    public function absensi()
    {
        return $this->belongsToMany(AbsensiMahasiswa::class);
    }    
}