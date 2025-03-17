<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use App\Models\SousUniteOrganisationnelle;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Tymon\JWTAuth\Facades\JWTAuth;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\LoginRequest;

class AuthController extends Controller
{
    // Inscription
    public function inscription(Request $request)
    {
        

        DB::transaction(function () use ($request, &$user) {
            $suo1 = SousUniteOrganisationnelle::create([
                'type' => 'DIRECTION',
                'intitule' => 'Direction Générale'
            ]);

            $suo2 = SousUniteOrganisationnelle::create([
                'type' => 'SERVICE',
                'intitule' => 'Service Informatique'
            ]);

            // 2. Créer des rôles
            $adminRole = Role::create(['intitule' => 'ADMIN']);
            $personnelRole = Role::create(['intitule' => 'PERSONNEL']);

            // 3. Créer des utilisateurs
            $adminUser = User::create([
                'matricule' => '12345',
                'mail' => 'admin@example.com',
                'prenom' => 'Admin',
                'nom' => 'User',
                'numeroTelephone' => '123456789',
                'password' => Hash::make('password'),
                'idSUO' => $suo1->id // Lier à la sous-unité organisationnelle 1
            ]);

            $personnelUser = User::create([
                'matricule' => '67890',
                'mail' => 'personnel@example.com',
                'prenom' => 'Personnel',
                'nom' => 'User',
                'numeroTelephone' => '987654321',
                'password' => Hash::make('password'),
                'idSUO' => $suo2->id // Lier à la sous-unité organisationnelle 2
            ]);

            // 4. Assigner des rôles aux utilisateurs via la table pivot (rolepersonnels)
            $adminUser->roles()->attach($adminRole->id);
            $personnelUser->roles()->attach($personnelRole->id);

            // 5. Créer des besoins pour les utilisateurs
            $besoin1 = Besoin::create([
                'items' => 'Ordinateur portable',
                'description' => 'Ordinateur portable pour travail à distance',
                'quantite' => 1,
                'prixUnitaire' => 1000,
                'totaux' => 1000,
                'categorie' => 'MATERIEL_INFORMATIQUE',
                'idPersonnel' => $personnelUser->id, // Associer à l'utilisateur personnel
                'idSession' => 1 // ID de session fictif, à remplacer par une session existante
            ]);
        });

        return response()->json(['message' => 'Utilisateur créé avec succès'], 201);
    }

    // Connexion
    // public function login(Request $request)
    // {
    //     $request->validate([
    //         'matricule' => 'required|string',
    //         'password' => 'required|string',
    //     ]);

    //     $credentials = ['matricule' => $request->matricule, 'password' => $request->password];
        
    //     if (!$token = Auth::guard('api')->attempt(['matricule' => $request->matricule, 'password' => $request->password])) {
    //         return response()->json(['error' => 'Identifiants invalides'], 401);
    //     }

    //     return $this->respondWithToken($token);
    // }

    // // Déconnexion
    // public function logout()
    // {
    //     Auth::guard('api')->logout();
    //     return response()->json(['message' => 'Déconnexion réussie']);
    // }

    // // Récupérer l'utilisateur connecté
    // public function me()
    // {
    //     $user = Auth::guard('api')->user();
    //     $user->load('roles', 'sousUniteOrganisationnelle'); // Charger les rôles et la sous-unité

    //     return response()->json($user);
    // }

    // // Rafraîchir le token
    // public function refresh()
    // {
    //     return $this->respondWithToken(Auth::guard('api')->refresh());
    // }

    // // Générer la réponse avec le token
    // protected function respondWithToken($token)
    // {
    //     $user = Auth::guard('api')->user();
    //     $roles = $user->roles->pluck('intitule'); // Récupérer les rôles
    //     $sousUniteOrganisationnelle = $user->sousUniteOrganisationnelle; // Récupérer la sous-unité
    //     return response()->json([
    //         'access_token' => $token,
    //         'token_type' => 'bearer',
    //         'expires_in' => Auth::guard('api')->factory()->getTTL() * 60,
    //         'roles' => $roles,
    //         'sous_unite_organisationnelle' => $sousUniteOrganisationnelle, // Inclure la sous-unité dans la réponse
    //     ]);
    // }

    public function connexion(){
        //dd(Auth::user());
        return view ('auth.connexion',[
            "title"=>"Yonnee | Connexion",
            
        ]);
    }
    public function seconnect(LoginRequest $request){
         $credentials = $request->validated();     

         if (Auth::attempt($credentials)) {
             $request->session()->regenerate();     

             $user = Auth::user();     
             return redirect()->route('auth.dashboard',[
                'user' => $user
             ]);
         }     

         return redirect()->route('auth.connexion')->withErrors([
             'matricule' => 'Matricule invalide',
         ])->with('error', 'Les informations d\'identification ne correspondent pas.');
    }

    
    public function dashboard(){
        // dd(Auth::user());
        return view('auth.dashboard',[
            'title' => "Yonnee | Dashboard",
            'user' => Auth::user(),
            'besoins' => Auth::user()->besoins,
            'annee' => now()->year,
            'message1' => "Bienvenue",
            'message2' => Auth::user()->prenom.' '.Auth::user()->nom
        ]);
        
    }
    
    public function logout(){
        Auth::logout();
        return to_route('auth.connexion');
    }
}