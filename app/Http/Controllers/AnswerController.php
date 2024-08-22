<?php

namespace App\Http\Controllers;

use App\Http\Requests\AnswerStoreRequest;
use App\Models\Answer;
use App\Models\Option;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

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
    public function store(AnswerStoreRequest $request)
    {
        // Verifica si ya existe una respuesta para esta opción
        $answer = Answer::where('option_id', $request['option_id'])->first();

        if ($answer) {
            // Si la respuesta ya existe, incrementa el campo `result`
            $answer->result += 1;
            $answer->save();
        } else {
            // Si la respuesta no existe, crea una nueva con `result` = 1
            $answer = Answer::create([
                'option_id' => $request['option_id'],
                'result' => 1,
            ]);
        }

        return response()->json([
            'message' => 'Respuesta registrada correctamente',
            'data' => $answer,
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AnswerStoreRequest $request, Answer $option)
    {
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Answer $option)
    {
        
    }
}
