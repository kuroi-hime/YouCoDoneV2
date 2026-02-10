<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurant;

class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(request $request)
    {
        $search = $request->query('search');

        $restaurants = Restaurant::query()
            ->with('images')
            ->when($search, function ($query, $search) {
                return $query->where('nom_restaut', 'ilike', "%{$search}%")
                             ->orWhere('localisation', 'ilike', "%{$search}%")
                             ->orWhere('type_cuisine', 'ilike', "%{$search}%")
                            //  ->orWhere() sur plage horaire;
                            ;
            })
            // ->latest()
            ->paginate(9);
        return view('home', ['restaurants' => $restaurants]);
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $restaut = Restaurant::with(['plats.image', 'images'])->findOrFail($id);
        return view('restaut_details', ['restaut' => $restaut]);
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
}
