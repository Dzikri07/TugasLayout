<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            DzikriDosenSeeder::class,
            DzikriMatakuliahSeeder::class,
            DzikriMahasiswaSeeder::class,
            DzikriJadwalSeeder::class,
            DzikriKrsSeeder::class,
        ]);
    }
}