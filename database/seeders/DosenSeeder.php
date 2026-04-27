<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class DosenSeeder extends Seeder
{
    
        public function run(): void
        {
            $faker = Faker::create('id_ID');

            for ($i = 1; $i <= 50; $i++) {
             DB::table('dosen')->insert([
            'nidn' => 'D' . str_pad($i, 3, '0', STR_PAD_LEFT),
            'nama' => $faker->name,
            ]);
        }
    }
    
}
