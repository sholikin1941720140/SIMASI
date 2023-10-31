<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class MataKuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mata_kuliahs')->insert([
            [
                'nama_matkul' => 'Pemrograman Berbasis Objek',
                'kode_matkul' => 'KU1102',
                'sks' => '3',
                'jam' => '6',
                'semester' => '1',
            ],
            [
                'nama_matkul' => 'Pemrograman Web Lanjut',
                'kode_matkul' => 'KU1103',
                'sks' => '3',
                'jam' => '6',
                'semester' => '1',
            ],
            [
                'nama_matkul' => 'Basis Data Lanjut',
                'kode_matkul' => 'KU1104',
                'sks' => '3',
                'jam' => '4',
                'semester' => '2',
            ],
            [
                'nama_matkul' => 'Praktikum Basis Data Lanjut',
                'kode_matkul' => 'KU1105',
                'sks' => '3',
                'jam' => '6',
                'semester' => '2',
            ],
            [
                'nama_matkul' => 'Praktikum Pemrograman Berbasis Objek',
                'kode_matkul' => 'KU1106',
                'sks' => '3',
                'jam' => '6',
                'semester' => '3',
            ],
            [
                'nama_matkul' => 'Praktikum Pemrograman Web Lanjut',
                'kode_matkul' => 'KU1107',
                'sks' => '3',
                'jam' => '6',
                'semester' => '3',
            ],
        ]);
    }
}