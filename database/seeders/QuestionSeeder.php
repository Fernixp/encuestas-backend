<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('questions')->insert([
            [
                'question_text' => '¿Cuál es tu lenguaje de programación favorito?',
                'survey_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_text' => '¿Qué editor de texto prefieres para desarrollo?',
                'survey_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_text' => '¿Cuál es tu entorno de desarrollo integrado (IDE) preferido?',
                'survey_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_text' => '¿Qué sistema operativo usas principalmente para desarrollo?',
                'survey_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Preguntas para la segunda encuesta
            [
                'question_text' => '¿Cuál framework frontend prefieres?',
                'survey_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_text' => '¿Qué librería utilizas para manejar el estado en aplicaciones frontend?',
                'survey_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_text' => '¿Cómo manejas las peticiones HTTP en tus aplicaciones?',
                'survey_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_text' => '¿Qué herramienta utilizas para construir y empaquetar tu código?',
                'survey_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Preguntas para la tercera encuesta
            [
                'question_text' => '¿Qué sistema de control de versiones usas con más frecuencia?',
                'survey_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_text' => '¿Prefieres GitHub o GitLab?',
                'survey_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_text' => '¿Qué estrategia de branching prefieres?',
                'survey_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_text' => '¿Qué herramienta usas para revisiones de código?',
                'survey_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
