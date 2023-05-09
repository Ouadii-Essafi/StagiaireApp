<?php

namespace App\Http\Controllers;

use App\Models\Demande;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\UploadedFile;

use Illuminate\Http\Request;

class DemandeController extends Controller
{
    public function adddemande(Request $request){
        $demande = new Demande;
        $request->validate([
        '*' => 'required',
        ]);
        $demande->nom = $request->Nom;
        $demande->prenom = $request->Prenom;
        $demande->email = $request->Email;
        $demande->telephone = $request->Telephone;
        $demande->niveau_etude = $request->Niveau_etude;
        $demande->domaine_etude = $request->Domaine_etude;
        $demande->service = $request->Service;
        $demande->duree = $request->Duree_stage;

        $cv = $request->file('CV');
        $CvName = time().'_'. $cv->getClientOriginalName();
        $cv->move(public_path('les cv') , $CvName);
        
        $demande->pdf_cv = $CvName;
        $demande->save();
        return view('landingPage.succes');
    }
}
