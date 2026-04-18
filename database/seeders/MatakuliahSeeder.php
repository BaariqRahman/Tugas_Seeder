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
            'Pemrograman Beriontasi Object',
            'Pemrograman Dasar',
            'Basis Data',
            'Matematika Diskrit',
            'Teori Bahasa Dan Otomata',
            'Bahasa Inggris',
            'Jaringan Komputer',
            'Komunikasi Data',
            'IT Governance',
            'Rekayasa Perangkat Lunak'
        ];

        foreach($matkul as $i => $nama){
            DB::table('matakuliah')->insert([
                'kode_matakuliah' => 'MK' . str_pad($i, 3, '0', STR_PAD_LEFT),
                'nama_matakuliah' => $nama,
                'sks' => rand(2, 4),
            ]);
        }
    }
}
