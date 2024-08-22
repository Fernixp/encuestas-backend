<?php

namespace App\Http\Controllers;

use App\Http\Requests\SurveyStoreRequest;
use App\Http\Requests\SurveyUpdateRequest;
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
            $survey = Survey::with('questions')->findOrFail($id);
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
