<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Validation extends Model
{
    use HasFactory;

    const NIVEAUVALIDATIONS = [
        'DIRECTION', 
        'SERVICE', 
        'CENTRE', 
        'BUREAU', 
        'DEPARTEMENT', 
        'RECTORAT'
    ];

    protected $fillable = ['estValide', 'niveauValidation', 'motif', 'idBesoin'];

    public function besoin()
    {
        return $this->belongsTo(Besoin::class, 'idBesoin');
    }
}
