<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PengaturanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pengaturan')->insert([
            'nama_cv' => 'CV. Butta Barakka Agency',
            'nama_perumahan' => 'Grand Sulawesi Maros',
            'no_telp_cv' => '08222212344',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
