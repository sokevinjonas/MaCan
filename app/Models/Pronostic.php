<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pronostic extends Model
{
    use HasFactory;
    protected $fillable= 
    [
        'pays1',
        'pays2',
        'score',
        'tel' 
    ];
}