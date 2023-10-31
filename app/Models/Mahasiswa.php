<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_user',
        'id_kelas',
        'nim',
        'jurusan'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'id_kelas');
    }

    public function orangtua()
    {
        return $this->belongsTo(Orangtua::class);
    }

    public function absensi()
    {
        return $this->hasMany(Absensi::class);
    }
}