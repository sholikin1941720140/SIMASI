<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orangtua extends Model
{
    use HasFactory;

    protected $table = 'orangtuas';

    protected $fillable = [
        'id_user',
        'id_mahasiswa',
        'nama',
        'alamat'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function mahasiswa()
    {
        return $this->hasMany(Mahasiswa::class, 'id_mahasiswa');
    }
}