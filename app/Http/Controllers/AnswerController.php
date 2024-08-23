<?php

namespace App\Http\Controllers;

use App\Http\Requests\AnswerStoreRequest;
use App\Models\Answer;
use App\Models\Option;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AnswerController extends Controller
{
    public function index()
    {
        $answers = Answer::with('option')->get();
        return response()->json([
            'data' => $answers,
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $answersData = $request->all(); // Obtiene los datos enviados en la petición
        $responses = [];

        DB::beginTransaction();
        try {
            foreach ($answersData as $questionId => $optionId) {
                // Verifica si ya existe una respuesta para esta opción
                $answer = Answer::where('option_id', $optionId)->first();

                if ($answer) {
                    // Si la respuesta ya existe, incrementa el campo `result`
                    $answer->result += 1;
                    $answer->save();
                } else {
                    // Si la respuesta no existe, crea una nueva con `result` = 1
                    $answer = Answer::create([
                        'option_id' => $optionId,
                        'result' => 1,
                    ]);
                }
                // Agrega la respuesta al array de respuestas
                $responses[] = $answer;
            }
            DB::commit();
        } catch (Exception $e) {
            // Si ocurre un error, se revierte la transacción
            DB::rollBack();

            // Manejo del error (puedes hacer logging, devolver una respuesta de error, etc.)
            return response()->json([
                'error' => 'Se produjo un error al guardar las respuestas.',
                'message' => $e->getMessage(),
            ], 500);
        }
        return response()->json([
            'message' => 'Respuestas registradas correctamente',
            'data' => $responses,
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id) {}

    /**
     * Update the specified resource in storage.
     */
    public function update(AnswerStoreRequest $request, Answer $option) {}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Answer $option) {}
}
