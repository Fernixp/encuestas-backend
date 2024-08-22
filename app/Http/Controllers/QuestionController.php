<?php

namespace App\Http\Controllers;

use App\Http\Requests\QuestionStoreRequest;
use App\Models\Question;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $questions = Question::with('survey')->get();
        return response()->json([
            'data' => $questions,
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(QuestionStoreRequest $request)
    {
        $question = Question::create($request->all());
        return response()->json([
            'message' => 'Pregunta creada correctamente',
            'data' => $question,
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        try {
            $question = Question::with('survey')->findOrFail($id);
            return response()->json([
                'message' => 'Preegunta encontrada!',
                'data' => $question,
            ], 200);
        } catch (ModelNotFoundException $e) {
            return response()->json([
                'message' => 'No se encontraron resultados de la búsqueda!'
            ], 404);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(QuestionStoreRequest $request, Question $question)
    {
        $question->update($request->all());
        return response()->json([
            'message' => 'Pregunta actualizada correctamente',
            'data' => $question
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Question $question)
    {
        $question->delete();
        return response()->json([
            'message' => 'Pregunta eliminada correctamente'
        ]);
    }
}
