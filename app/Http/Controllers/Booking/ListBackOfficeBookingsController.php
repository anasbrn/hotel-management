<?php

namespace App\Http\Controllers\Booking;

use App\Http\Controllers\Controller;
use App\Services\BookingService;

class ListBackOfficeBookingsController extends Controller
{
    protected $bookingService;

    public function __construct(BookingService $bookingService)
    {
        $this->bookingService = $bookingService;
    }

    public function __invoke()
    {
        $bookings = $this->bookingService->all();
        
        return view('pages.user.bookings')
            ->with([
                'bookings'=> $bookings,
            ]);
    }
}
