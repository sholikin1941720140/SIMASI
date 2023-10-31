<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalMengajar extends Model
{
    use HasFactory;

    protected $table = 'jadwal_mengajars';

    protected $fillable = [
        'id_dosen',
        'id_matakuliah',
    ];

    public function dosen()
    {
        return $this->belongsToMany(Dosen::class, 'id_dosen');
    }

    public function mata_kuliah()
    {
        return $this->belongsToMany(MataKuliah::class, 'id_matakuliah');
    }
}