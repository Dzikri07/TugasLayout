<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DzikriKrsSeeder extends Seeder
{
    public function run()
    {
        DB::table('pwl_dzikri_krs')->insert([
            [
                'npm' => '1234567890',
                'kode_matakuliah' => 'IF001',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'npm' => '1234567890',
                'kode_matakuliah' => 'IF002',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'npm' => '0987654321',
                'kode_matakuliah' => 'IF001',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}