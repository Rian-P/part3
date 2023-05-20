<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('users')->insert([
            'nama' => 'admin',
            'level' => 'Admin',
            'status' => 'Aktif',
            'password' => 'admin',
            'no_hp' => '087733',
            'email' => 'admin@gmail.com',
        ]);
    }
}
