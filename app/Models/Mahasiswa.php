<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $fillable = [
        'nim',
        'nama',
        'kelas',
        'jurusan',
        'foto'
    ];

    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function mata_kuliah()
    {
        return $this->belongsToMany(MataKuliah::class);
    }
    
    public function orangtua()
    {
        return $this->hasOne(Orangtua::class);
    }
    
    public function absensi()
    {
        return $this->belongsToMany(AbsensiMahasiswa::class);
    }
}