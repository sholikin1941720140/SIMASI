<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    use HasFactory;

    protected $table = 'jadwals';

    protected $fillable = [

    ];

    public function kelas()
    {
        return $this->belongsToMany(Kelas::class, 'id_kelas');
    }
}