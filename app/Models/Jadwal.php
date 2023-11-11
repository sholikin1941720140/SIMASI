<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    use HasFactory;

    protected $table = 'jadwals';

    protected $fillable = [
        'kelas',
        'mata_kuliah',
        'dosen',
        'hari',
        'jam_mulai',
        'jam_selesai'
    ];
}