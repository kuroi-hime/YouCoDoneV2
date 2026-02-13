<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

class Creneau extends Pivot
{
    use HasFactory;

    protected $primaryKey = 'id_creneau';
    protected $fillable = [
        'restaut_id',
        'horaire_id',
        'heure_debut',
        'heure_fin',
    ];

    protected $casts = [
        'id_creneau' => 'integer',
        'heure_debut' => 'datetime:H:i',
        'heure_fin' => 'datetime:H:i',
    ];
}
