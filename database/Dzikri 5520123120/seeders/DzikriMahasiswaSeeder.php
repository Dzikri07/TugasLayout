<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DzikriMahasiswaSeeder extends Seeder
{
    public function run()
    {
        DB::table('pwl_dzikri_mahasiswa')->insert([
            [
                'npm' => '1234567890',
                'nidn' => '1234567890',
                'nama' => 'John Doe',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'npm' => '0987654321',
                'nidn' => '0987654321',
                'nama' => 'Jane Smith',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}