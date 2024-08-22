<?php

namespace App\Http\Controllers;

use App\Http\Requests\OptionStoreRequest;
use App\Models\Option;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class OptionController extends Controller
{
    public function index()
    {
        $options = Option::with('question')->get();
        return response()->json([
            'data' => $options,
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(OptionStoreRequest $request)
    {
        $option = Option::create($request->all());
        return response()->json([
            'message' => 'Opción creada correctamente',
            'data' => $option,
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        try {
            $option = Option::with('question')->findOrFail($id);
            return response()->json([
                'message' => 'Opción encontrada!',
                'data' => $option,
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
    public function update(OptionStoreRequest $request, Option $option)
    {
        $option->update($request->all());
        return response()->json([
            'message' => 'Opción actualizada correctamente',
            'data' => $option
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Option $option)
    {
        $option->delete();
        return response()->json([
            'message' => 'Opción eliminada correctamente',
        ]);
    }
}
