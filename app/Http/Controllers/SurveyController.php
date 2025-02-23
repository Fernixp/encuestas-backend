<?php

namespace App\Http\Controllers;

use App\Http\Requests\SurveyStoreRequest;
use App\Http\Requests\SurveyUpdateRequest;
use App\Models\Option;
use App\Models\Survey;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class SurveyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $surveys = Survey::with('questions')->get();
        if ($surveys->isEmpty()) {
            return response()->json([
                'message' => 'No se encontraron resultados en la búsqueda.'
            ], 404);
        }

        return response()->json([
            'data' => $surveys,
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SurveyStoreRequest $request)
    {
        $survey = Survey::create($request->all());
        return response()->json([
            'message' => 'Encuesta creada correctamente',
            'data' => $survey,
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
{
    try {
        // Incluye preguntas, las opciones relacionadas con cada pregunta y los resultados de cada opción
        $survey = Survey::with(['questions.options'])->findOrFail($id);

        // Obtener los resultados agregados
        $options = Option::select('options.id', 'option_text', 'question_id')
            ->leftJoin('answers', 'options.id', '=', 'answers.option_id')
            ->selectRaw('SUM(answers.result) as total_results')
            ->groupBy('options.id', 'option_text', 'question_id')
            ->whereIn('question_id', $survey->questions->pluck('id'))
            ->get();

        // Añadir los resultados agregados a las opciones de cada pregunta
        foreach ($survey->questions as $question) {
            foreach ($question->options as $option) {
                // Asegurarse de que total_results sea un número
                $option->total_results = (int) ($options->where('id', $option->id)->first()->total_results ?? 0);
            }
        }

        return response()->json([
            'message' => 'Encuesta encontrada!',
            'data' => $survey,
        ], 200);
    } catch (ModelNotFoundException $e) {
        return response()->json([
            'message' => 'No se encontraron resultados de la búsqueda!',
        ], 404); 
    }
}


    /**
     * Update the specified resource in storage.
     */
    public function update(SurveyStoreRequest $request, Survey $survey)
    {
        $survey->update($request->all());
        return response()->json([
            'message' => 'Encuesta actualizada correctamente',
            'data' => $survey
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Survey $survey)
    {
        $survey->delete();
        return response()->json([
            'message' => 'Encuesta eliminada correctamente'
        ]);
    }
}
