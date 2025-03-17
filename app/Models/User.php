<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Tymon\JWTAuth\Contracts\JWTSubject;

class User extends Authenticatable implements JWTSubject
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'matricule', 'mail', 'prenom', 'nom', 'numeroTelephone', 'password', 'idSUO'
    ];


    public function sousUniteOrganisationnelle()
    {
        return $this->belongsTo(SousUniteOrganisationnelle::class, 'idSUO');
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class, 'rolepersonnels', 'idPersonnel', 'idRole');
    }

    public function hasRole($role)
    {
        return $this->roles()->where('intitule', $role)->exists();
    }

    public function besoins()
    {
        return $this->hasMany(Besoin::class, 'idPersonnel');
    }
    
    public function getJWTIdentifier()
    {
        return $this->getKey(); // Retourne l'ID de l'utilisateur
    }

    // Méthode pour retourner des claims personnalisés
    public function getJWTCustomClaims()
    {
        return []; // Retourne un tableau vide ou des claims personnalisés
    }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'matricule',
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
}
