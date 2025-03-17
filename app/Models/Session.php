<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    use HasFactory;
    protected $fillable = ['intitule', 'dateDebut', 'dateFin'];

    public function besoins()
    {
        return $this->hasMany(Besoin::class, 'idSession');
    }
}
