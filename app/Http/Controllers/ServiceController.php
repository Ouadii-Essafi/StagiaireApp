<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Demande;
use App\Models\Offre;
use App\Models\Stagiaire;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use File;
use Response;
use Carbon\Carbon;


class ServiceController extends Controller
{
    public function service()
    {
        return view('services.PageService');
    }

    public function addoffredisplay()
    {
        return view('services.addoffre');
    }

    public function stagiaires()
    {
        $stagiaires = Stagiaire::latest()->get();
        return view('services.stagiaire' , compact('stagiaires'));
    }

    public function demandes()
    {
        $demandes = Demande::latest()->get();
        return view('services.demandes' , compact('demandes'));
    }

    public function pdf(string $id)
    {
        $demande = Demande::find($id);
        return Response::make(file_get_contents('les cv/'.$demande->pdf_cv), 200, [
                        'content-type'=>'application/pdf',
                    ]);
    }

    public function delete(string $id)
    {
        $demande = Demande::find($id);
        $demande->delete();
        return redirect()->back();
    }

    public function deleteStagiaire(string $id)
    {
        $stagiaire = Stagiaire::find($id);
        $stagiaire->delete();
        return redirect()->back();
    }

    public function accept(string $id)
    {
        $demande = Demande::find($id);
        $stagiaire = new Stagiaire;
        $user = new User;

        $stagiaire->nom = $demande->nom;
        $stagiaire->prenom = $demande->prenom;
        $stagiaire->email = $demande->email;
        $stagiaire->telephone = $demande->telephone;
        $stagiaire->niveau_etude = $demande->niveau_etude;
        $stagiaire->domaine_etude = $demande->domaine_etude;
        $stagiaire->service = $demande->service;
        $stagiaire->duree = $demande->duree;
        $debut = Carbon::now();
        $fin = $debut->toDateTimeString();
        $stagiaire->stage_debut = $debut->toDateTimeString();
        if($demande->duree = '2 mois'){
            $stagiaire->stage_fin = Carbon::parse($fin)->addDays(60);
        }elseif($demande->duree = '1 mois'){
            $stagiaire->stage_fin = Carbon::parse($fin)->addDays(30);
        }elseif($demande->duree = '3 mois'){
            $stagiaire->stage_fin = Carbon::parse($fin)->addDays(90);
        }elseif($demande->duree = '4 mois'){
            $stagiaire->stage_fin = Carbon::parse($fin)->addDays(120);
        }elseif($demande->duree = '6 mois'){
            $stagiaire->stage_fin = Carbon::parse($fin)->addDays(150);
        }
        $stagiaire->save();


        $user->name = $demande->nom;
        $user->email = $demande->email;
        $password = time().'_'.$demande->nom.'_ratp';
        $user->password = Hash::make($password);
        $user->role = 2 ;
        $user->save();

        $demande->delete();
        return redirect()->back()->with( ['password' => $password]);
    }

    public function addoffre(Request $request){
        $offre = new Offre;
        $request->validate([
        '*' => 'required',
        ]);
        $offre->titre = $request->titre;
        $offre->localisation = $request->localisation;
        $offre->description = $request->description;
        $offre->niveau_etude = $request->Niveau_etude;
        $offre->domaine_etude = $request->Domaine_etude;
        $offre->service = $request->Service;
        $offre->duree = $request->Duree_stage;

        $offre->save();
        return redirect()->back();
    }
}
