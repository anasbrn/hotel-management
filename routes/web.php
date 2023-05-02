<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\Room\EditRoomController;
use App\Http\Controllers\Room\StoreRoomController;
use App\Http\Controllers\Hotel\EditHotelController;
use App\Http\Controllers\Hotel\ShowHotelController;
use App\Http\Controllers\Room\CreateRoomController;
use App\Http\Controllers\Room\DeleteRoomController;
use App\Http\Controllers\Room\UpdateRoomController;
use App\Http\Controllers\Hotel\ListHotelsController;
use App\Http\Controllers\Hotel\StoreHotelController;
use App\Http\Controllers\Booking\BookHotelController;
use App\Http\Controllers\Hotel\CreateHotelController;
use App\Http\Controllers\Hotel\DeleteHotelController;
use App\Http\Controllers\Hotel\UpdateHotelController;
use App\Http\Controllers\Booking\StoreBookingController;
use App\Http\Controllers\Booking\DeleteBookingController;
use App\Http\Controllers\Booking\ApproveBookingController;
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

//////////////////////Hotels
Route::get('hotels', ListHotelsController::class)->name('list-hotels');
Route::get('hotel/{id}', ShowHotelController::class)->name('show');
Route::get('/dashboard/hotels', ListBackOfficeHotelsController::class)->name('dashboard-hotels')->middleware('auth');
Route::get('/dashboard/hotels/create', CreateHotelController::class)->name('dashboard-hotels-create')->middleware('auth');
Route::post('/dashboard/hotels/store', StoreHotelController::class)->name('dashboard-hotels-store')->middleware('auth');
Route::get('/dashboard/hotel/{id}/edit', EditHotelController::class)->name('dashboard-hotels-edit')->middleware('auth');
Route::put('/dashboard/hotel/{id}/update', UpdateHotelController::class)->name('dashboard-hotels-update')->middleware('auth');
Route::delete('/dashboard/hotel/{id}/delete', DeleteHotelController::class)->name('dashboard-hotels-delete')->middleware('auth');


////////////////////////ROOMS
Route::get('/dashboard/rooms', ListBackOfficeRoomsController::class)->name('dashboard-rooms')->middleware('auth');
Route::get('/dashboard/rooms/create', CreateRoomController::class)->name('dashboard-rooms-create')->middleware('auth');
Route::post('/dashboard/rooms/store', StoreRoomController::class)->name('dashboard-rooms-store')->middleware('auth');
Route::get('/dashboard/room/{room_id}/edit', EditRoomController::class)->name('dashboard-rooms-edit')->middleware('auth');
Route::put('/dashboard/room/{room_id}/update', UpdateRoomController::class)->name('dashboard-rooms-update')->middleware('auth');
Route::delete('/dashboard/room/{room_id}/delete', DeleteRoomController::class)->name('dashboard-rooms-delete')->middleware('auth');

////////////////////////BOOkings
Route::get('/dashboard/bookings', ListBackOfficeBookingsController::class)->name('dashboard-bookings')->middleware('auth');
Route::put('/dashboard/booking/{booking_id}/approve', ApproveBookingController::class)->name('dashboard-bookings-approve')->middleware('auth');
Route::delete('/dashboard/booking/{booking_id}/delete', DeleteBookingController::class)->name('dashboard-bookings-delete')->middleware('auth');


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