<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Hotel\ShowHotelController;
use App\Http\Controllers\Hotel\ListHotelsController;
use App\Http\Controllers\Booking\BookHotelController;
use App\Http\Controllers\Booking\StoreBookingController;
use App\Http\Controllers\Payment\getReceiptPaymentController;

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

Route::get('/home', function () {
    return view('welcome', [
        'users' => User::all() 
    ]);
});

Route::get('hotels', ListHotelsController::class)->name('list-hotels');
Route::get('hotel/{id}', ShowHotelController::class)->name('show');

Route::get('book/{id}', BookHotelController::class)->name('book')->middleware('auth', 'verified');
Route::get('book/store/{id}', StoreBookingController::class)->name('store-booking')->middleware('auth', 'verified');

Route::get('{booking_id}/pay', getReceiptPaymentController::class)->name('payment')->middleware('auth', 'verified');
