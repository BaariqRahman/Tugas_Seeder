<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class KrsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $mahasiswa = DB:: table('mahasiswa')->pluck('npm')->toArray();
        $matkul = DB::table('matakuliah')->pluck('kode_matakuliah')->toArray();

        for ($i = 1; $i <= 50; $i++) {
            DB::table('krs')->insert([
                'npm' => $mahasiswa[array_rand($mahasiswa)],
                'kode_matakuliah' => $matkul[array_rand($matkul)],
            ]);
        }
    }
}
