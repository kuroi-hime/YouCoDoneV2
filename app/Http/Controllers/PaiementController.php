<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Checkout\Session;

class PaiementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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

    public function checkout(Request $request)
    {
        // $validatedData = $request->validate([
        //     'nom_restaut' => 'required|string|max:255',
        //     'prix' => 'required|numeric|min:0',
        //     'type_paiement' => 'required|in:deposit,full',
        //     'description' => 'nullable|string',
        //     'id_user' => 'required|integer|exists:users,id',
        //     'id_reservation' => 'required|integer|exists:reservations,id_reservation',
        //     'nom_reservateur' => 'required|string|max:255',
        //     'email_reservateur' => 'required|email|max:255',
        // ]);

        Stripe::setApiKey(env('STRIPE_SECRET'));

        $session = Session::create([
            'payment_method_types' => ['card'],
            'line_items' => [[
                'price_data' => [
                    'currency' => 'mad',
                    'product_data' => [
                        'name' => 'description' . $request->nom_restaut,
                        // 'metadata' => [
                        //     'id_user' => $request->id_user,
                        //     'id_reservation' => $request->id_reservation,
                        //     'nom_reservateur' => $request->nom_reservateur,
                        //     'email_reservateur' => $request->email_reservateur,
                        //     'type_paiement' => $request->type_paiement,
                        // ],
                    ],
                    'unit_amount' => 100 * 100, //$request->prix 1 MAD => 100 centimes (Stripe utilise les centimes)
                ],
                'quantity' => 1,
            ]],
            'mode' => 'payment',
            'success_url' => route('payment.success'),
            'cancel_url' => route('payment.cancel'),
        ]);

        return redirect($session->url);
    }

    public function success(Request $request) {
        // Add payment success logic here (e.g., save payment, update reservation status, send notifications, etc.)
        return view('paiements.payment-success');
    }

    public function cancel() {
        return view('paiements.payment-cancel');
    }
}