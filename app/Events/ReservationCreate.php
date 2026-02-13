<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class ReservationCreate
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $reservation;
    /**
     * Create a new event instance.
     */
    public function __construct($reservation)
    {
        $this->reservation = $reservation;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return array<int, \Illuminate\Broadcasting\Channel>
     */
    public function broadcastOn(): array
    {
        return [
            new PrivateChannel('reservations'),
        ];
    }

    public function broadcastAs()
    {
        return 'reservation.created';
    }

    public function broadcastWith()
    {
        return [
            'message' => "[{$this->reservation->created_at}] Nouvelle réservation de {$this->reservation->user->name} pour le restaurant {$this->reservation->restaurant->nom_restaut} le {$this->reservation->date_reservation} à {$this->reservation->creneau_id}.",
        ];
    }
}
