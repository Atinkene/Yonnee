<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Besoin extends Model
{
    use HasFactory;

    const CATEGORIES = [
        'MATERIEL_LABORATOIRE',
        'PRODUITS_LABORATOIRE',
        'PRODUITS_ENTRETIEN',
        'MOBILIER_BUREAU',
        'MATERIEL_FROID',
        'HABILLEMENT_PERSONNEL',
        'FOURNITURES_BUREAU',
        'CONSOMMABLES_INFORMATIQUES',
        'MATERIEL_INFORMATIQUE',
        'MATERIEL_COURS',
        'MATERIEL_IMPRIMERIE',
        'PROJET_TRAVAUX',
        'MATERIEL_ROULANT',
        'AUTRES'
    ];
    
    protected $fillable = [
        'items', 'description', 'quantite', 'prixUnitaire', 'totaux', 'categorie', 'idPersonnel', 'idSession'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'idPersonnel');
    }

    public function session()
    {
        return $this->belongsTo(Session::class, 'idSession');
    }

    public function validations()
    {
        return $this->hasMany(Validation::class, 'idBesoin');
    }
}
