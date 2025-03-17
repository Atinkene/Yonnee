<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    
    const INTITULES = [
        'DIRECTEUR', 
        'CHEF_SERVICE', 
        'CHEF_CENTRE', 
        'CHEF_BUREAU', 
        'CHEF_DEPARTEMENT', 
        'RECTEUR',
        'PERSONNEL', 
        'ADMIN', 
        'ADMIN_ETAB', 
        'ADMIN_DEP',
        'ADMIN_SERV', 
        'ADMIN_BUR', 
        'ADMIN_CENT'
    ];
    protected $fillable = ['intitule'];

    public function users()
    {
        return $this->belongsToMany(User::class, 'rolepersonnels', 'idRole', 'idPersonnel');
    }
}
