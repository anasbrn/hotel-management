<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\ReservationController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome', [
        'users' => User::all() 
    ]);
});

Route::get('hotels', [HotelController::class, 'all'])->name('list-hotels');
Route::get('hotel/{id}', [HotelController::class, 'find'])->name('show');
Route::get('reserve/{id}', [HotelController::class, 'reserve'])->name('reserve');
Route::get('reserve/store/{id}', [ReservationController::class, 'create'])->name('store-reservation');
