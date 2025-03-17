<?php

// app/Http/Controllers/RolePersonnelController.php
namespace App\Http\Controllers;

use App\Models\RolePersonnel;
use Illuminate\Http\Request;

class RolePersonnelController extends Controller
{
    public function index()
    {
        return RolePersonnel::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'idPersonnel' => 'required|exists:users,id',
            'idRole' => 'required|exists:roles,id',
        ]);

        return RolePersonnel::create($request->all());
    }

    public function show($id)
    {
        return RolePersonnel::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $rolePersonnel = RolePersonnel::findOrFail($id);

        $request->validate([
            'idPersonnel' => 'sometimes|exists:users,id',
            'idRole' => 'sometimes|exists:roles,id',
        ]);

        $rolePersonnel->update($request->all());

        return $rolePersonnel;
    }

    public function destroy($id)
    {
        RolePersonnel::destroy($id);
        return response()->noContent();
    }
}