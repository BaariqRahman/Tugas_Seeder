<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class MatakuliahSeeder extends Seeder
{
    public function run(): void
    {
        $matkul = [
        'Pemrograman Berorientasi Objek',
        'Pemrograman Dasar',
        'Basis Data',
        'Matematika Diskrit',
        'Struktur Data',
        'Algoritma dan Pemrograman',
        'Jaringan Komputer',
        'Sistem Operasi',
        'Rekayasa Perangkat Lunak',
        'Kecerdasan Buatan',
        'Data Mining',
        'Cloud Computing',
        'Keamanan Informasi',
        'Pengolahan Citra',
        'Pemrograman Web',
        'Pemrograman Mobile',
        'Big Data',
        'Internet of Things',
        'Manajemen Proyek IT',
        'Statistika'
    ];

    for ($i = 1; $i <= 50; $i++) {
        DB::table('matakuliah')->insert([
            'kode_matakuliah' => 'MK' . str_pad($i, 3, '0', STR_PAD_LEFT),
            'nama_matakuliah' => $matkul[array_rand($matkul)],
            'sks' => rand(2, 4),
        ]);
    }
}
}
