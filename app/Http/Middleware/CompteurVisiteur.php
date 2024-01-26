<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;


use App\Models\visiteur;

class CompteurVisiteur
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        $user_nom_appareil = $_SERVER['HTTP_USER_AGENT'];

        $verificationCon = visiteur::where('appareil', $user_nom_appareil)->first();

        if(!isset($verificationCon)) {
            
            $new_visiteur = new visiteur();
            $new_visiteur->appareil = $user_nom_appareil;
            $new_visiteur->save();

        }

        return $next($request);
    }
}
