<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


use App\Http\Controllers\OdcController;
use App\Http\Controllers\AllsController;

use App\Http\Middleware\CompteurVisiteur;
use App\Http\Controllers\PronosticController;




//  Route::domain('can.pteam-transfert.com')->middleware(CompteurVisiteur::class)->group(function () {
    
    Route::get('/', [AllsController::class, 'PageAcceuil'])->name('index');
    
    Route::get('/suc', [AllsController::class, 'PageSucces'])->name('success');

    Route::get('/connexion', [OdcController::class, 'FormConnexion'])->name('connexion');
    
    Route::get('/d/{donnee}', [AllsController::class, 'PageChoixCouleur'])->name('choix');

    Route::post('/pronostic', [PronosticController::class, 'store'])->name('pronostic.store');

    Route::prefix('/odc')->name('odc.')->controller(OdcController::class)->group(function () {
    
        Route::get('/acc', 'PageAdministrateur')->name('acceuil');
        
        Route::get('/deconnexion', 'deConnexion')->name('deconnexion_admin');

    });

// });