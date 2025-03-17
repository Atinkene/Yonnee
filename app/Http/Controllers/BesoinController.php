<?php

// app/Http/Controllers/BesoinController.php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;


use Illuminate\Http\Request;

class BesoinController extends Controller
{
    public function index()
    {
        return view('user.mesbesoins',[
            'besoins' => Auth::user()->besoins()->orderBy('created_at', 'desc')->get(),
            'title' => "Yonnee | Ma liste de besoins",
            'message1' => "Liste des besoins",
            'message2' => "",
            'annee' => now()->year,
            'user' => Auth::user(),
        ]);
    }


    public function ajoutBesoin()
{
    // Vérifier si une session a été créée cette année
    $currentYear = now()->year;
    $session = Session::whereYear('created_at', $currentYear)->first();

    // Passer la session récupérée à la vue
    return view('user.ajoutBesoin', [
        'title' => "Yonnee | Ajout besoins",
        'message1' => "Ajout besoins",
        'message2' => "",
        'annee' => now()->year,
        'user' => Auth::user(),
        'session' => $session
    ]);
}


    public function store(Request $request)
    {
        $request->validate([
            'items' => 'required|string',
            'description' => 'required|string',
            'quantite' => 'required|integer',
            'prixUnitaire' => 'required|numeric',
            'totaux' => 'required|numeric',
            'categorie' => 'required|in:MATERIEL_LABORATOIRE,PRODUITS_LABORATOIRE,PRODUITS_ENTRETIEN,MOBILIER_BUREAU,MATERIEL_FROID,HABILLEMENT_PERSONNEL,FOURNITURES_BUREAU,CONSOMMABLES_INFORMATIQUES,MATERIEL_INFORMATIQUE,MATERIEL_COURS,MATERIEL_IMPRIMERIE,PROJET_TRAVAUX,MATERIEL_ROULANT,AUTRES',
            'idPersonnel' => 'required|exists:users,id',
            'idSession' => 'required|exists:sessions,id',
        ]);
        Besoin::create($request->all());
        return redirect()->route('mesBesoins');
    }

    public function show($id)
    {
        return Besoin::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $besoin = Besoin::findOrFail($id);

        $request->validate([
            'items' => 'sometimes|string',
            'description' => 'sometimes|string',
            'quantite' => 'sometimes|integer',
            'prixUnitaire' => 'sometimes|numeric',
            'totaux' => 'sometimes|numeric',
            'categorie' => 'sometimes|in:MATERIEL_LABORATOIRE,PRODUITS_LABORATOIRE,PRODUITS_ENTRETIEN,MOBILIER_BUREAU,MATERIEL_FROID,HABILLEMENT_PERSONNEL,FOURNITURES_BUREAU,CONSOMMABLES_INFORMATIQUES,MATERIEL_INFORMATIQUE,MATERIEL_COURS,MATERIEL_IMPRIMERIE,PROJET_TRAVAUX,MATERIEL_ROULANT,AUTRES',
            'idPersonnel' => 'sometimes|exists:users,id',
            'idSession' => 'sometimes|exists:sessions,id',
        ]);

        $besoin->update($request->all());

        return $besoin;
    }

    public function destroy($id)
    {
        Besoin::destroy($id);
        return response()->noContent();
    }

    public function besoinaccepte(){
        return view('user.besoinAccepte',[
            'besoins' => Auth::user()->besoins()
              ->whereHas('validations', function ($query) {
                  $query->where('estValide', true);
              })
              ->orderBy('created_at', 'desc')
              ->get(),

            'title' => "Yonnee | Ma liste de besoins acceptés",
            'message1' => "Liste des besoins acceptés",
            'message2' => "",
            'annee' => now()->year,
            'user' => Auth::user(),
        ]);
    }
    public function besoinrejete(){
        return view('user.besoinRejete',[
            'besoins' => Auth::user()->besoins()
              ->whereHas('validations', function ($query) {
                  $query->where('estValide', false);
              })
              ->orderBy('created_at', 'desc')
              ->get(),
            'title' => "Yonnee | Ma liste de besoins refusés",
            'message1' => "Liste des besoins refusés",
            'message2' => "",
            'annee' => now()->year,
            'user' => Auth::user(),
        ]);
    }

    public function suoBesoin(){
        $suo = Auth::user()->sousUniteOrganisationnelle;

        // Récupère les besoins de tous les utilisateurs appartenant à cette sous-unité organisationnelle
        $besoins = Besoin::whereHas('user', function($query) use ($suo) {
            $query->where('idSUO', $suo->id);
        })->orderBy('created_at', 'desc')->get();
        return view('chef.suoBesoin',[ 
            'besoins' => $besoins,
            'title' => "Yonnee | Liste de besoins de ".$suo->intitule,
            'message1' => "Liste de besoins : ",
            'message2' => ' '.$suo->intitule,
            'annee' => now()->year,
            'user' => Auth::user(),
        ]);
    }


    public function validation($id){

    }
}