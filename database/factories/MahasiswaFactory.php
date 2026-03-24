<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Mahasiswa>
 */
class MahasiswaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $this->faker->locale('id_ID');
        
        $tahun = rand(20, 24);
        $bulan = str_pad(rand(1, 12), 2, '0', STR_PAD_LEFT);
        $nomor = str_pad(rand(1, 999999), 6, '0', STR_PAD_LEFT);
        $npm = $tahun . $bulan . $nomor;
        
        return [
            'npm' => $npm,
            'nidn' => $this->faker->randomElement(['1234567890', '0987654321']), // ambil dari dosen yang ada
            'nama' => $this->faker->name(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}