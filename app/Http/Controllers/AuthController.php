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
    public function register(Request $request)
    {
        $request->validate([
            'matricule' => 'required|string|unique:users',
            'prenom' => 'required|string|max:255',
            'nom' => 'required|string|max:255',
            'mail' => 'required|string|email|unique:users',
            'numeroTelephone' => 'required|string|max:20',
            'password' => 'required|string|min:6|confirmed',
            'roles' => 'required|array',
            'roles.*' => 'exists:roles,intitule', // Vérifie que chaque rôle existe
            'idSUO' => 'required|exists:sousuniteorganisationnelles,id', // Vérifie que la sous-unité existe
        ]);

        DB::transaction(function () use ($request, &$user) {
            // Créer l'utilisateur
            $user = User::create([
                'matricule' => $request->matricule,
                'prenom' => $request->prenom,
                'nom' => $request->nom,
                'mail' => $request->mail,
                'numeroTelephone' => $request->numeroTelephone,
                'password' => Hash::make($request->password),
                'idSUO' => $request->idSUO, // Associer la sous-unité
            ]);

            // Associer les rôles à l'utilisateur
            $roles = Role::whereIn('intitule', $request->roles)->get();
            $user->roles()->attach($roles);
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