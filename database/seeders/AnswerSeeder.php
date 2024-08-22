<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnswerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('answers')->insert([
            [
                'option_id' => 1,
                'result' => 10, // Esta opción fue seleccionada 10 veces
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'option_id' => 2,
                'result' => 8, // Esta opción fue seleccionada 8 veces
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'option_id' => 3,
                'result' => 5, // Esta opción fue seleccionada 5 veces
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'option_id' => 4,
                'result' => 7, // Esta opción fue seleccionada 7 veces
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'option_id' => 5,
                'result' => 7, // Esta opción fue seleccionada 7 veces
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Respuestas para la pregunta 2
            [
                'option_id' => 6,
                'result' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'option_id' => 7,
                'result' => 15,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'option_id' => 8,
                'result' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'option_id' => 9,
                'result' => 9,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'option_id' => 10,
                'result' => 9,
                'created_at' => now(),
                'updated_at' => now(),
            ],
             // Respuestas para la pregunta 3
             [
                'option_id' => 11,
                'result' => 14,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'option_id' => 12,
                'result' => 11,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'option_id' => 13,
                'result' => 8,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'option_id' => 14,
                'result' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'option_id' => 15,
                'result' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Respuestas para la pregunta 4
            [
                'option_id' => 16,
                'result' => 9,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'option_id' => 17,
                'result' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'option_id' => 18,
                'result' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'option_id' => 19,
                'result' => 8,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'option_id' => 20,
                'result' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Respuestas para la pregunta 5
            [
                'option_id' => 21,
                'result' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'option_id' => 22,
                'result' => 9,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'option_id' => 23,
                'result' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'option_id' => 24,
                'result' => 11,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'option_id' => 25,
                'result' => 8,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Respuestas para la pregunta 6
            [
                'option_id' => 26,
                'result' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'option_id' => 27,
                'result' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'option_id' => 28,
                'result' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'option_id' => 29,
                'result' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'option_id' => 30,
                'result' => 9,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Respuestas para la pregunta 7
            [
                'option_id' => 31,
                'result' => 8,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'option_id' => 32,
                'result' => 11,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'option_id' => 33,
                'result' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'option_id' => 34,
                'result' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'option_id' => 35,
                'result' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Respuestas para la pregunta 8
            [
                'option_id' => 36,
                'result' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'option_id' => 37,
                'result' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'option_id' => 38,
                'result' => 8,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'option_id' => 39,
                'result' => 9,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'option_id' => 40,
                'result' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Respuestas para la pregunta 9
            [
                'option_id' => 41,
                'result' => 11,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'option_id' => 42,
                'result' => 9,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'option_id' => 43,
                'result' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'option_id' => 44,
                'result' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'option_id' => 45,
                'result' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Respuestas para la pregunta 10
            [
                'option_id' => 46,
                'result' => 8,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'option_id' => 47,
                'result' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'option_id' => 48,
                'result' => 9,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'option_id' => 49,
                'result' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'option_id' => 50,
                'result' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Respuestas para la pregunta 11
            [
                'option_id' => 51,
                'result' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'option_id' => 52,
                'result' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'option_id' => 53,
                'result' => 8,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'option_id' => 54,
                'result' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'option_id' => 55,
                'result' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Respuestas para la pregunta 12
            [
                'option_id' => 56,
                'result' => 14,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'option_id' => 57,
                'result' => 8,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'option_id' => 58,
                'result' => 11,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'option_id' => 59,
                'result' => 9,
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);
    }
}
