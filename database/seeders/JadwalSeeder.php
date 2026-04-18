<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class JadwalSeeder extends Seeder
{
    
    public function run(): void
    {
        $hari = ['senin', 'selasa', 'Rabu', 'Kamis', 'Jumat'];

        $matkul = DB::table('matakuliah')->pluck('kode_matakuliah')->toArray();
        $dosen = DB::table('dosen')->pluck('nidn')->toArray();

        for ($i = 1; $i <= 10; $i++){
            DB::table('jadwal')->insert([
                'kode_matakuliah' => $matkul[array_rand($matkul)],
                'nidn' => $dosen[array_rand($dosen)],
                'kelas' => chr(rand(65, 67)),
                'hari' => $hari[array_rand($hari)],
                'jam' => now(),
            ]);
        }
    }
}
