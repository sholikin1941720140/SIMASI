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
                'nama_kelas' => '6A',
            ],
            [
                'nama_kelas' => '6B',
            ],
            [
                'nama_kelas' => '6C',
            ],
            [
                'nama_kelas' => '6D',
            ]
        ]);
    }
}