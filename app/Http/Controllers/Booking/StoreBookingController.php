<?php

namespace App\Http\Controllers\Booking;

use Illuminate\Http\Request;
use App\Services\BookingService;
use App\Http\Controllers\Controller;

class StoreBookingController extends Controller
{
    protected $bookingService;

    public function __construct(BookingService $bookingService)
    {
        $this->bookingService = $bookingService;
    }

    public function __invoke(Request $request)
    {
        $this->bookingService->create($request->all());

        return redirect()
            ->back()
            ->with('You have successfully booked this room');
    }
}
