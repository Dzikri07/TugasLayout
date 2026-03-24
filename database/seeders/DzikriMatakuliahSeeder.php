<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DzikriMatakuliahSeeder extends Seeder
{
    public function run()
    {
        DB::table('pwl_dzikri_matakuliah')->insert([
            [
                'kode_matakuliah' => 'IF001',
                'nama_matakuliah' => 'Pemrograman Web',
                'sks' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'kode_matakuliah' => 'IF002',
                'nama_matakuliah' => 'Basis Data',
                'sks' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}