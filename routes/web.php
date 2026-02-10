<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RestaurantController;
use Illuminate\Support\Facades\Route;

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
Route::get('/{id}/restaurants')->name('myRestaurants');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
