<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Reservation extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_reservation';
    protected $fillable = [
        'date_reservation',
        'creneau_id',
        'number_personnes_reservation',
        'status_reservation',
        'restaut_id',
        'user_id',
    ];

    /**
     * Get the restaurant that owns the reservation.
     */
    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class, 'restaut_id', 'id_restaut');
    }

    /**
     * Get the user that owns the reservation.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
