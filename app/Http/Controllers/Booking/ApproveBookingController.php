<?php

namespace App\Http\Controllers\Booking;

use App\Http\Controllers\Controller;
use App\Services\BookingService;

class ApproveBookingController extends Controller
{
    protected $bookingService;

    public function __construct(BookingService $bookingService)
    {
        $this->bookingService = $bookingService;
    }

    public function __invoke($id)
    {
        $this->bookingService->approve($id);
        
        return redirect()
            ->back()
            ->with('Booking approved successfully');
    }
}
