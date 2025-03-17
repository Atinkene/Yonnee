<?php

// app/Http/Controllers/SousUniteOrganisationnelleController.php
namespace App\Http\Controllers;

use App\Models\SousUniteOrganisationnelle;
use Illuminate\Http\Request;

class SousUniteOrganisationnelleController extends Controller
{
    public function index()
    {
        $sousUnites = SousUniteOrganisationnelle::all(); 
        return response()->json($sousUnites);
    }

    public function store(Request $request)
    {
        $request->validate([
            'type' => 'required|in:DIRECTION,SERVICE,CENTRE,BUREAU,DEPARTEMENT',
            'intitule' => 'required|string|max:255',
        ]);

        return SousUniteOrganisationnelle::create($request->all());
    }

    public function show($id)
    {
        $sousUnite = SousUniteOrganisationnelle::find($id);

        if (!$sousUnite) {
            return response()->json([
                'message' => 'Sous-unité organisationnelle non trouvée',
                'status' => 404
            ], 404);
        }

        return response()->json([
            'data' => $sousUnite,
            'status' => 200
        ]);
    }

    public function update(Request $request, $id)
    {
        $sousUnite = SousUniteOrganisationnelle::findOrFail($id);

        $request->validate([
            'type' => 'sometimes|in:DIRECTION,SERVICE,CENTRE,BUREAU,DEPARTEMENT',
            'intitule' => 'sometimes|string|max:255',
        ]);

        $sousUnite->update($request->all());

        return $sousUnite;
    }

    public function destroy($id)
    {
        SousUniteOrganisationnelle::destroy($id);
        return response()->noContent();
    }
}