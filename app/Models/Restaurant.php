<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Restaurant extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_restaut';

    protected $fillable = [
        'nom_restaut',
        'localisation',
        'type_cuisine',
        'capacite_restaut',
        'disponibilite_restaut',
        'ouverture_fermeture',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function plats()
    {
        return $this->belongsToMany(Plat::class, 'menu', 'restaut_id', 'plat_id')
                    ->withPivot('prix_plat');
    }

    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }
}
