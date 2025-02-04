<?php

namespace Database\Seeders;

use App\Models\Mobil;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MobilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Mobil::create([
        //     'merek' => 'Toyota Alphard',
        //     'tahun_keluar' => '2010',
        //     'jenis' => 'suv',
        //     'deskripsi' => 'mobil sultan untuk gen z'
        // ]);

        Mobil::factory()->count(20)->create();

    }
}
