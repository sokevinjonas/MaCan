<?php

namespace App\Http\Controllers;


use App\Models\Pronostic;
use Illuminate\View\View;
use Illuminate\Http\Request;


use Illuminate\Http\RedirectResponse;
use App\Models\HistoriqueEnregistrementGenerer;

class AllsController extends Controller
{
    //
    
    public function PageAcceuil(): RedirectResponse|View
    {   
        // $pronostics = Pronostic::latest('created_at')->paginate(5);
       return view('welcome');
    }

    
    public function PageChoixCouleur($donnee): RedirectResponse|View
    {
        
       $verificationCon = HistoriqueEnregistrementGenerer::where('id_enregistrement', $donnee)->first();

       if(isset($verificationCon)) {

            return view('choix-couleur', compact('donnee', 'verificationCon'));
                
        }else {

            return redirect()->route('index');

        }
    }

    
    public function PageSucces(): RedirectResponse|View
    {
        $pronostics = Pronostic::latest('created_at')->paginate(5);
       return view('succes', compact('pronostics'));
    }
}