<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class HoraireService extends Model
{
    use HasFactory;

    protected $table = 'horaires_service';
    protected $primaryKey = 'id_horaire';
    protected $fillable = [
        'jour_semaine',
    ];

    public function restaurants()
    {
        return $this->belongsToMany(Restaurant::class, 'creneaux', 'restaut_id', 'horaire_id');
    }
}
