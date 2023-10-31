<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;

    protected $table = 'dosens';

    protected $fillable = [
        'nip',
        'nama',
        'email'
    ];

    public function jadwal_mengajar()
    {
        return $this->belongsToMany(JadwalMengajar::class);
    }
}