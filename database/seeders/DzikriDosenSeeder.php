<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DzikriDosenSeeder extends Seeder
{
    public function run()
    {
        DB::table('pwl_dzikri_dosen')->insert([
            [
                'nidn' => '1234567890',
                'nama' => 'Dr Dzikri ',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nidn' => '0987654321',
                'nama' => 'Kim Minjeong',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}