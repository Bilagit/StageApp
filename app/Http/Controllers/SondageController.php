<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sondage;
use Illuminate\Support\Facades\Auth;

class SondageController extends Controller
{
    // Afficher le sondage
    public function sondage1()
    {
        return view('sondage.sondage1');
    }
    public function sondage2(){
        return view('Sondage.sondage2');
    }
    public function resultat1()
    {
        $user_id = auth()->id(); 
        $user = Auth::user();
        // Maintenant, récupérez les sondages associés à cet utilisateur
        $sondages = Sondage::where('user_id', $user_id)->get();
    
        // Passez les données à votre vue
        return view('resultat.resultat1', ['sondages' => $sondages], compact('user'));
    }
    public function resultat2()
    {
        $user_id = auth()->id(); 
        $user = Auth::user();
        // Maintenant, récupérez les sondages associés à cet utilisateur
        $sondages = Sondage::where('user_id', $user_id)->get();
    
        // Passez les données à votre vue
        return view('resultat.resultat2', ['sondages' => $sondages], compact('user'));
    }
    
        public function store(Request $request)
    {
        $request->validate([
            'reponse' => 'required|boolean',
            'choix1' => 'required',
            'choix2' => 'required',
            'choix3' => 'required',
        ]);
    
        // Récupérer l'utilisateur connecté
        $user = auth()->user(); // ou $request->user();
    
        // Enregistrer la réponse dans la base de données
        $sondage = new Sondage();
        $sondage->reponse1 = $request->reponse;
        $sondage->choix1 = $request->choix1;
        $sondage->choix2 = $request->choix2;
        $sondage->choix3 = $request->choix3;
        $sondage->user_id = $user->id;
        $sondage->save();
    
        return redirect()->route('resultat.resultat1')->with('success', 'Votre réponse a été enregistrée.');
    }
    
}
