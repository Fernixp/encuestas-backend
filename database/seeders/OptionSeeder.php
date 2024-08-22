<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('options')->insert([
            // Opciones para la primera pregunta de la encuesta 1
            [
                'option_text' => 'JavaScript',
                'question_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'option_text' => 'Python',
                'question_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'option_text' => 'Java',
                'question_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'option_text' => 'C#',
                'question_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'option_text' => 'Ninguno',
                'question_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Opciones para la segunda pregunta de la encuesta 1
            [
                'option_text' => 'VSCode',
                'question_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'option_text' => 'Sublime Text',
                'question_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'option_text' => 'Atom',
                'question_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'option_text' => 'Notepad++',
                'question_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'option_text' => 'Ninguno',
                'question_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Opciones para la tercera pregunta de la encuesta 1
            [
                'option_text' => 'Visual Studio',
                'question_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'option_text' => 'IntelliJ IDEA',
                'question_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'option_text' => 'PyCharm',
                'question_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'option_text' => 'Eclipse',
                'question_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'option_text' => 'Ninguno',
                'question_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Opciones para la cuarta pregunta de la encuesta 1
            [
                'option_text' => 'Windows',
                'question_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'option_text' => 'macOS',
                'question_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'option_text' => 'Linux',
                'question_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'option_text' => 'Otro',
                'question_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'option_text' => 'Ninguno',
                'question_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Opciones para la primera pregunta de la encuesta 2
            [
                'option_text' => 'React',
                'question_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'option_text' => 'Angular',
                'question_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'option_text' => 'Vue.js',
                'question_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'option_text' => 'Svelte',
                'question_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'option_text' => 'Ninguno',
                'question_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Opciones para la segunda pregunta de la encuesta 2
            [
                'option_text' => 'Redux',
                'question_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'option_text' => 'MobX',
                'question_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'option_text' => 'Context API',
                'question_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'option_text' => 'Recoil',
                'question_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'option_text' => 'Ninguno',
                'question_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Opciones para la tercera pregunta de la encuesta 2
            [
                'option_text' => 'Fetch API',
                'question_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'option_text' => 'Axios',
                'question_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'option_text' => 'SuperAgent',
                'question_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'option_text' => 'Alamofire',
                'question_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'option_text' => 'Ninguno',
                'question_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Opciones para la cuarta pregunta de la encuesta 2
            [
                'option_text' => 'Webpack',
                'question_id' => 8,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'option_text' => 'Parcel',
                'question_id' => 8,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'option_text' => 'Rollup',
                'question_id' => 8,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'option_text' => 'Vite',
                'question_id' => 8,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'option_text' => 'Ninguno',
                'question_id' => 8,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Opciones para la primera pregunta de la encuesta 3
            [
                'option_text' => 'Git',
                'question_id' => 9,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'option_text' => 'Mercurial',
                'question_id' => 9,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'option_text' => 'Subversion',
                'question_id' => 9,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'option_text' => 'CVS',
                'question_id' => 9,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'option_text' => 'Ninguno',
                'question_id' => 9,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Opciones para la segunda pregunta de la encuesta 3
            [
                'option_text' => 'GitHub',
                'question_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'option_text' => 'GitLab',
                'question_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'option_text' => 'Bitbucket',
                'question_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'option_text' => 'Otro',
                'question_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Opciones para la tercera pregunta de la encuesta 3
            [
                'option_text' => 'Git Flow',
                'question_id' => 11,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'option_text' => 'GitHub Flow',
                'question_id' => 11,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'option_text' => 'GitLab Flow',
                'question_id' => 11,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'option_text' => 'Trunk-Based Development',
                'question_id' => 11,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'option_text' => 'Ninguno',
                'question_id' => 11,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Opciones para la cuarta pregunta de la encuesta 3
            [
                'option_text' => 'Revisiones manuales',
                'question_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'option_text' => 'Herramientas automatizadas',
                'question_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'option_text' => 'Revisiones entre pares',
                'question_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'option_text' => 'Análisis estático',
                'question_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'option_text' => 'Ninguno',
                'question_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
