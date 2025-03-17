<?php

// app/Http/Controllers/SessionController.php
namespace App\Http\Controllers;

use App\Models\Session;
use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function index()
    {
        return Session::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'intitule' => 'required|string',
            'dateDebut' => 'required|date',
            'dateFin' => 'required|date|after:dateDebut',
        ]);

        return Session::create($request->all());
    }

    public function show($id)
    {
        return Session::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $session = Session::findOrFail($id);

        $request->validate([
            'intitule' => 'sometimes|string',
            'dateDebut' => 'sometimes|date',
            'dateFin' => 'sometimes|date|after:dateDebut',
        ]);

        $session->update($request->all());

        return $session;
    }

    public function destroy($id)
    {
        Session::destroy($id);
        return response()->noContent();
    }
}