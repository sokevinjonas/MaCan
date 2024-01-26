<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;

class OdcController extends Controller
{
    //
    public function PageAdministrateur(): RedirectResponse|View
    {
         //verifion si une session existe
         if (auth('admin')->check()) {

            //recuperer ladministrateur connecter
            $admin = auth('admin')->user();
            
            if(isset($admin)) {

                return view('odc.acceuil', compact('admin'));

            }else{
                    
                return redirect()->route('connexion');
            }
        }else{
            return redirect()->route('connexion');
        }
    }

    public function FormConnexion(): RedirectResponse|View
    {
       return view('odc.connexion');
    }

    public function deConnexion(Request $request): RedirectResponse|View
    {
       //deconnexion
        Auth::guard('admin')->logout();

        // Invalidations de la session et régénération du jeton CSRF
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // Redirection après la déconnexion
        return redirect()->route('connexion');
    }

}
