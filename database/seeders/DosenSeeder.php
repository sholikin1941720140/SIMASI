<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class DosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('dosens')->insert([
            [
                'nip' => '123456789012345678',
                'nama' => 'Dosen 1',
                'email' => 'dosen1@gmail.com'
            ],
            [
                'nip' => '123456789012345679',
                'nama' => 'Dosen 2',
                'email' => 'dosen2@gmail.com'
            ],
            [
                'nip' => '123456789012345670',
                'nama' => 'Dosen 3',
                'email' => 'dosen3@gmail.com'
            ],
            [
                'nip' => '123456789012345671',
                'nama' => 'Dosen 4',
                'email' => 'dosen4@gmail.com'
            ]
        ]);
    }
}