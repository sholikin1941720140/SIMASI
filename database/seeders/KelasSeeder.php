<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kelas')->insert([
            [
                'nama_kelas' => '1D',
            ],
            [
                'nama_kelas' => '2F',
            ],
            [
                'nama_kelas' => '3F',
            ],
            [
                'nama_kelas' => '4C',
            ]
        ]);
    }
}