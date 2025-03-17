<?php

// app/Http/Controllers/ValidationController.php
namespace App\Http\Controllers;

use App\Models\Validation;
use Illuminate\Http\Request;

class ValidationController extends Controller
{
    public function index()
    {
        return Validation::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'estValide' => 'required|boolean',
            'niveauValidation' => 'required|in:DIRECTION,SERVICE,CENTRE,BUREAU,DEPARTEMENT,RECTORAT',
            'motif' => 'required|string',
            'idBesoin' => 'required|exists:besoins,id',
        ]);
        Validation::create($request->all());
        return redirect()->route("chef.suoBesoin");
    }

    public function show($id)
    {
        return Validation::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $validation = Validation::findOrFail($id);

        $request->validate([
            'estValide' => 'sometimes|boolean',
            'niveauValidation' => 'sometimes|in:DIRECTION,SERVICE,CENTRE,BUREAU,DEPARTEMENT,RECTORAT',
            'motif' => 'sometimes|string',
            'idBesoin' => 'sometimes|exists:besoins,id',
        ]);

        $validation->update($request->all());

        return $validation;
    }

    public function destroy($id)
    {
        Validation::destroy($id);
        return response()->noContent();
    }
}