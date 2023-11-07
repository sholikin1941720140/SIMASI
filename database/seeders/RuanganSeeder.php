<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RuanganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('ruangans')->insert([
            [
                'nama_ruangan' => 'A1',
                'kode_ruangan' => 'ABC',
            ],
            [
                'nama_ruangan' => 'A2',
                'kode_ruangan' => 'DEF',
            ],
            [
                'nama_ruangan' => 'A3',
                'kode_ruangan' => 'GHI',
            ],
            [
                'nama_ruangan' => 'A4',
                'kode_ruangan' => 'JKL',
            ]
        ]);
    }
}