<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SurveySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('surveys')->insert([
            [
                'title' => 'Encuesta sobre lenguajes de programación web',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Encuesta sobre frameworks de desarrollo web',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Encuesta sobre el uso de tecnologías frontend',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
