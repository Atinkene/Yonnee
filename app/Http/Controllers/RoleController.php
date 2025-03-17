<?php

// app/Http/Controllers/RoleController.php
namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index()
    {
        return Role::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'intitule' => 'required|in:DIRECTEUR,CHEF_SERVICE,CHEF_CENTRE,CHEF_BUREAU,CHEF_DEPARTEMENT,RECTEUR',
        ]);

        return Role::create($request->all());
    }

    public function show($id)
    {
        return Role::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $role = Role::findOrFail($id);

        $request->validate([
            'intitule' => 'sometimes|in:DIRECTEUR,CHEF_SERVICE,CHEF_CENTRE,CHEF_BUREAU,CHEF_DEPARTEMENT,RECTEUR',
        ]);

        $role->update($request->all());

        return $role;
    }

    public function destroy($id)
    {
        Role::destroy($id);
        return response()->noContent();
    }
}