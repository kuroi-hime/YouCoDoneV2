<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Plat extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_plat';
    protected $fillable = ['nom_plat', 'description_plat'];

    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }

    public function restaurants()
    {
        return $this->belongsToMany(restaurant::class, 'menu', 'plat_id', 'restaut_id');
    }
}
