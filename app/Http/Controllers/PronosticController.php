<?php

namespace App\Http\Controllers;

use App\Models\Pronostic;
use Illuminate\Http\Request;

class PronosticController extends Controller
{
    public function store(Request $request)
    {
        // Validation des données du formulaire
        $validatedData = $request->validate([
            'pays1' => 'required|string',
            'pays2' => 'required|string',
            'score' => 'required|string',
            'tel' => 'required|numeric',
        ]);

        // Création d'un nouveau pronostic
        $pronostic = new Pronostic;
        $pronostic->pays1 = $validatedData['pays1'];
        $pronostic->pays2 = $validatedData['pays2'];
        $pronostic->score = $validatedData['score'];
        $pronostic->tel = $validatedData['tel'];

        // dd($pronostic);
        // Enregistrement du pronostic
        $pronostic->save();

        // Redirection ou réponse JSON selon les besoins de votre application
        return redirect()->back()->with('success', 'Pronostic enregistré avec succès !');
    }
    
}