<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'restaut_id' => 'required|exists:restaurants,id_restaut',
            'user_id' => 'required|exists:users,id',
            'date_reservation' => 'required|date|after_or_equal:today',
            'creneau_id' => 'required|exists:creneaux,id_creneau',
            'number_personnes_reservation' => 'required|integer|min:1',
            'status_reservation' => 'required|string',
        ]);

        $reservation = Reservation::create($validatedData);
        // return dump($reservation);

        return redirect()->route('restaurant.show', ['id' => $validatedData['restaut_id']])
                         ->with('success', 'Reservation created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function reservationByUser(int $user_id)
    {
        $reservations = Reservation::where('user_id', $user_id)
                       ->with('restaurant')
                       ->orderBy('date_reservation', 'asc')
                       ->get();
        return view('restaurateur.reservations', ['reservations' => $reservations]);
    }
}
