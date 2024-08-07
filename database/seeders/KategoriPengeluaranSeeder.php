<?php

namespace Database\Seeders;

use App\Models\KategoriPengeluaran;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KategoriPengeluaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        KategoriPengeluaran::create([
            'nama' => 'Kategori A'
        ]);
        KategoriPengeluaran::create([
            'nama' => 'Kategori B'
        ]);
        KategoriPengeluaran::create([
            'nama' => 'Kategori C'
        ]);
    }
}
