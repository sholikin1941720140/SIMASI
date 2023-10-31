<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'id_role' => '1',
                'nama' => 'Aqil',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('password')
            ],
            [
                'id_role' => '2',
                'nama' => 'Sholikin',
                'email' => 'sholikin@gmail.com',
                'password' => Hash::make('password')
            ],
            [
                'id_role' => '3',
                'nama' => 'Yusyac',
                'email' => 'orangtua@gmail.com',
                'password' => Hash::make('password')
            ]
        ]);
    }
}