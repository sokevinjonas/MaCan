<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Auth;

class Administrateurs extends Model implements AuthenticatableContract
{
    // Utilise les traits nécessaires
    use HasApiTokens, HasFactory, Notifiable, Authenticatable, HasUuids;

    protected $table = 'administrateurs';
    protected $primaryKey = 'id_admin';
    protected $fillable = [
        'email',
        'password'
    ];

    // Si vous utilisez des horodatages 'created_at' et 'updated_at'
    public $timestamps = true;

    public static function login($credentials)
    {
        if (Auth::guard('admin')->attempt($credentials)) {
            // L'authentification a réussi
            return true;
        } else {
            // L'authentification a échoué
            return false;
        }
    }
}
