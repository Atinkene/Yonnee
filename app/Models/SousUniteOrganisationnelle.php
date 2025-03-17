<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SousUniteOrganisationnelle extends Model
{
    use HasFactory;
    protected $table = 'sousuniteorganisationnelles';
    
    protected $fillable = ['type', 'intitule'];

    const TYPES = [
        'DIRECTION', 
        'SERVICE', 
        'CENTRE',
        'BUREAU',
        'DEPARTEMENT',
        'ADMINTECH'
    ];

    public function users()
    {
        return $this->hasMany(User::class, 'idSUO');
    }
}
