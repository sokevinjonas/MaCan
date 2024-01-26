<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class visiteur extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'visiteurs';
    protected $primaryKey = 'id_visiteur';
    protected $fillable = [
        'appareil',
    ];

    // Si vous utilisez des horodatages 'created_at' et 'updated_at'
    public $timestamps = true;
}
