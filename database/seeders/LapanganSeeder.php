<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Lapangan;

class LapanganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Lapangan::create([
            'nama' => 'Lapangan Futsal A',
            'lokasi' => 'Jl. Sudirman No.1',
            'jenis' => 'Futsal',
            'harga_per_jam' => 100000,
        ]);

        Lapangan::create([
            'nama' => 'Lapangan Basket B',
            'lokasi' => 'Jl. Thamrin No.5',
            'jenis' => 'Basket',
            'harga_per_jam' => 120000,
        ]);
    }
}
