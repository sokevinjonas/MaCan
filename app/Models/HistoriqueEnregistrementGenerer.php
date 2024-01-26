<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class HistoriqueEnregistrementGenerer extends Model
{
     // Utilise les traits nécessaires
     use HasApiTokens, HasUuids, HasFactory;

    
     protected $table = 'historique_enregistrement_generers';
     protected $primaryKey = 'id_enregistrement';
     protected $fillable = [
         'nom',
         'prenom',
         'chiffre',
         'couleur',
     ];
 
}