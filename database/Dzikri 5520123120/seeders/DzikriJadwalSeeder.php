<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DzikriJadwalSeeder extends Seeder
{
    public function run()
    {
        DB::table('pwl_dzikri_jadwal')->insert([
            [
                'kode_matakuliah' => 'IF001',
                'nidn' => '1234567890',
                'kelas' => 'A',
                'hari' => 'Senin',
                'jam' => '2024-09-02 08:00:00',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'kode_matakuliah' => 'IF002',
                'nidn' => '0987654321',
                'kelas' => 'B',
                'hari' => 'Rabu',
                'jam' => '2024-09-04 10:00:00',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}