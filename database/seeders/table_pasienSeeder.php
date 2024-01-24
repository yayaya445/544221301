<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class table_pasienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('table_pasien')->insert([
            'nama_pasien' => 'Khairan',
            'umur_pasien' => '02',
            'penyakit_pasien' => 'malaria'
        ]);
    }
}
