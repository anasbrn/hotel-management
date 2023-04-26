<?php

namespace App\Http\Controllers\Booking;

use App\Models\Booking;
use Illuminate\Http\Request;
use App\Services\HotelService;
use App\Http\Controllers\Controller;
use App\Services\BookingService;

class StoreBookingController extends Controller
{
    protected $bookingService;

    public function __construct(BookingService $bookingService)
    {
        $this->bookingService = $bookingService;
    }

    public function __invoke(Request $request)
    {
        $data = $request->all();

        //////////////// Hard coded to change
        $data[Booking::USER_ID_COLUMN] = 1;
        $data[Booking::ROOM_ID_COLUMN] = 1;
        //////////////////

        $this->bookingService->create($data);

        return redirect()
            ->back()
            ->with('You have successfully reserved this room'); 
    }
}
