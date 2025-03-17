<?php

// app/Http/Controllers/UserController.php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return User::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'matricule' => 'required|string|unique:users',
            'mail' => 'required|email|unique:users',
            'prenom' => 'required|string',
            'nom' => 'required|string',
            'numeroTelephone' => 'required|string',
            'motDePasse' => 'required|string',
            'idSUO' => 'required|exists:sousuniteorganisationnelles,id',
        ]);

        return User::create($request->all());
    }

    public function show($id)
    {
        return User::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $request->validate([
            'matricule' => 'sometimes|string|unique:users,matricule,' . $user->id,
            'mail' => 'sometimes|email|unique:users,mail,' . $user->id,
            'prenom' => 'sometimes|string',
            'nom' => 'sometimes|string',
            'numeroTelephone' => 'sometimes|string',
            'motDePasse' => 'sometimes|string',
            'idSUO' => 'sometimes|exists:sousuniteorganisationnelles,id',
        ]);

        $user->update($request->all());

        return $user;
    }

    public function destroy($id)
    {
        User::destroy($id);
        return response()->noContent();
    }
}