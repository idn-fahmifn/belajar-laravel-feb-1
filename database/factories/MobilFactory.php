<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Mobil>
 */
class MobilFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'merek' => fake()->name(),
            'tahun_keluar' => fake()->year(),
            'jenis' => 'suv',
            'deskripsi' => fake()->text()
        ];
    }
}
