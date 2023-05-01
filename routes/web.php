<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\Room\EditRoomController;
use App\Http\Controllers\Room\StoreRoomController;
use App\Http\Controllers\Hotel\ShowHotelController;
use App\Http\Controllers\Room\CreateRoomController;
use App\Http\Controllers\Hotel\ListHotelsController;
use App\Http\Controllers\Booking\BookHotelController;
use App\Http\Controllers\Booking\StoreBookingController;
use App\Http\Controllers\Room\ListBackOfficeRoomsController;
use App\Http\Controllers\Payment\getReceiptPaymentController;
use App\Http\Controllers\Hotel\ListBackOfficeHotelsController;
use App\Http\Controllers\Booking\ListBackOfficeBookingsController;

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

Route::get('/dashboard', function () {
    return view('pages.user.dashboard');
})->middleware('auth');


// Route::get('/dashboard/rooms', function () {
//     return view('pages.user.rooms');
// })->middleware('auth')->name('dashboard-rooms');

Route::get('/dashboard/bookings', function () {
    return view('pages.user.bookings');
})->middleware('auth')->name('dashboard-bookings');
//////////////////////////////////////////////////////////////

Route::get('hotels', ListHotelsController::class)->name('list-hotels');
Route::get('hotel/{id}', ShowHotelController::class)->name('show');
Route::get('/dashboard/hotels', ListBackOfficeHotelsController::class)->name('dashboard-hotels')->middleware('auth');
////////////////////////ROOMS
Route::get('/dashboard/rooms', ListBackOfficeRoomsController::class)->name('dashboard-rooms')->middleware('auth');
Route::get('/dashboard/rooms/create', CreateRoomController::class)->name('dashboard-rooms-create')->middleware('auth');
Route::post('/dashboard/rooms/store', StoreRoomController::class)->name('dashboard-rooms-store')->middleware('auth');
Route::get('/dashboard/room/{room_id}', EditRoomController::class)->name('dashboard-rooms-edit')->middleware('auth');
////////////////////////ROOMS
Route::get('/dashboard/bookings', ListBackOfficeBookingsController::class)->name('dashboard-bookings')->middleware('auth');

Route::get('hotel/{id}/booking', BookHotelController::class)->name('book')->middleware('auth', 'verified');
Route::post('hotel/{id}/booking/store', StoreBookingController::class)->name('store-booking')->middleware('auth', 'verified');

Route::get('bookings/{booking_id}', getReceiptPaymentController::class)->name('payment')->middleware('auth', 'verified');


Route::get('routeTest', function(){
    Artisan::call('db:seed', [
        '--class' => 'UserSeeder',
    ]);

    Artisan::call('db:seed', [
        '--class' => 'CitySeeder',
    ]);

    Artisan::call('db:seed', [
        '--class' => 'HotelSeeder',
    ]);

    Artisan::call('db:seed', [
        '--class' => 'RoomSeeder',
    ]);

    return 'Database refreshed and seeded successfully';
});