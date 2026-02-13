<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RestaurantController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\PaiementController;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::redirect('/', '/restaurants');

// Restaurateur
Route::middleware(['auth', 'role:restaurateur'])->prefix('restaurateur')->name('restaurateur.')->group(function () {
    Route::get('/dashbord', function(){
        return view('restaurateur.dashboard');
    })->name('dashbord'); //[RestoController::class, 'index']
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/restaurants', [RestaurantController::class, 'index'])->name('home');//->middleware(['auth', 'verified'])

Route::get('/restaurants/{id}', [RestaurantController::class, 'show'])->name('restaurant.show');
Route::get('/favorites')->name('favorites');
Route::get('/{id}/restaurants', [RestaurantController::class, 'restaurantsByUser'])->name('myRestaurants');
Route::get('/{id}/reservations', [ReservationController::class, 'reservationByUser'])->name('myReservations');

Route::get('/add-restaurant', [RestaurantController::class, 'create'])->name('restaut.add');
Route::post('/add-restaurant', [RestaurantController::class, 'store'])->name('restaut.store');

Route::get('/edit-restaurant/{id}', [RestaurantController::class, 'edit'])->name('restaurant.edit');
Route::post('/edit-restaurant/{id}', [RestaurantController::class, 'update'])->name('restaurant.update');

Route::post('/delete-restaurant/{id}', [RestaurantController::class, 'destroy'])->name('restaurant.delete');

Route::post('/add-reservation', [ReservationController::class, 'store'])->name('reservation.store');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/checkout', function(){
    return view('paiements.payment-form');
});

Route::post('/checkout', [PaiementController::class, 'checkout'])->name('checkout');
Route::get('/payment/success', [PaiementController::class, 'success'])->name('payment.success');
Route::get('/payment/cancel', [PaiementController::class, 'cancel'])->name('payment.cancel');

require __DIR__.'/auth.php';
