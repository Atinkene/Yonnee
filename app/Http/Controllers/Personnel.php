<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Session;
use App\Models\Validation;
use App\Models\Besoin;

class Personnel extends Controller
{
    public function besoinpersonnel(){
        $besoin = Auth::user()->besoins()->orderBy('created_at', 'desc')->get();
        return view('personnel.besoins.liste',[
            'besoins' => $besoin,
            'title' => "Yonnee | Ma liste de besoins",
            'message1' => "Liste des besoins",
            'message2' => "",
            'annee' => now()->year,
            'user' => Auth::user(),
        ]);
    }

    public function voirbesoinpersonnel($id){
        $besoin = Besoin::findOrFail($id);
        return  view('personnel.besoins.besoin', [
            'besoin' => $besoin,
            'title' => "Yonnee | Détails du Besoin",
            'message1' => "Détails du Besoin",
            'message2' => "",
            'annee' => now()->year,
            'user' => Auth::user(),
        ]);
    }
    
    public function modifierbesoinpersonnel($id){
        $besoin = Besoin::findOrFail($id);
        
        return view('personnel.besoins.modifier',[
            'besoin' => $besoin,
            'title' => "Yonnee | Modifier mon besoin",
            'message1' => "Modifier mon besoin",
            'message2' => "",
            'annee' => now()->year,
            'user' => Auth::user(),
        ]);
    }
    public function postmodifierbesoinpersonnel(Request $request, $id){
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

        return redirect()->route('voir.besoin.personnel',$id);
    }



    public function exprimerbesoinpersonnel(){
        $currentYear = now()->year;
        $session = Session::whereYear('created_at', $currentYear)->first();

        return view('personnel.besoins.exprimer',[
            'title' => "Yonnee | Ajout besoins",
            'message1' => "Ajout besoins",
            'message2' => "",
            'annee' => now()->year,
            'user' => Auth::user(),
            'session' => $session
        ]);
    }

    public function postexprimerbesoinpersonnel(Request $request){
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
        return redirect()->route('besoin.personnel.personnel');
    }


    public function supprimerbesoinpersonnel($id){
        Besoin::destroy($id);
        return redirect()->route('voir.besoin.personnel',$id);
    }

    public function suivibesoinpersonnel(){
        $besoins = Auth::user()->besoins()
        ->whereHas('validations', function ($query) {
            $query->where('estValide', true);
        })
        ->orderBy('created_at', 'desc')
        ->get();

        return view('personnel.besoins.suivi',[
            'besoins' => $besoins,
            'title' => "Yonnee | Ma liste de besoins traités",
            'message1' => "Ma liste de besoins traités",
            'message2' => "",
            'annee' => now()->year,
            'user' => Auth::user(),
        ]);
    }

    public function voirsuivibesoinpersonnel($id){
        $validation =  Validation::findOrFail($id);
        return $validation;
        // ('personnel.besoins.suivibesoin',[
        //     'validation' => $validation,
        // ]);
    }
}
