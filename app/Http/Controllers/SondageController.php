<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sondage;

class SondageController extends Controller
{
    // Afficher le sondage
    public function sondage1()
    {
        return view('sondage.sondage1');
    }

    // Enregistrer la réponse au sondage
    public function store(Request $request)
    {
        $request->validate([
            'reponse' => 'required|boolean',
        ]);

        // Récupérer l'utilisateur connecté
        $user = auth()->user();

        // Enregistrer la réponse dans la base de données
        $sondage = new Sondage();
        $sondage->reponse1 = $request->reponse;
        $sondage->user_id = $user->id;
        $sondage->save();

        return redirect()->route('index')->with('success', 'Votre réponse a été enregistrée.');
    }
}
