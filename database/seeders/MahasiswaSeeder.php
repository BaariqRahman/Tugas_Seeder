<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
        public function run(): void
        {
         $faker = Faker::create('id_ID');

            for ($i = 1; $i <= 50; $i++) {
                DB::table('mahasiswa')->insert([
                'npm' => '55' . rand(200, 299) . rand(100, 999) . str_pad($i, 2, '0', STR_PAD_LEFT),
                'nidn' => 'D' . str_pad(rand(1,50), 3, '0', STR_PAD_LEFT),
                'nama' => $faker->name,
             ]);
        }
    }
}