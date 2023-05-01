<?php

namespace App\Http\Controllers\Booking;

use App\Services\BookingService;
use App\Http\Controllers\Controller;

class DeleteBookingController extends Controller
{
    protected $bookingService;

    public function __construct(BookingService $bookingService)
    {
        $this->bookingService = $bookingService; 
    }

    public function __invoke($id)
    {
        $this->bookingService->destroy($id);

        return redirect()
            ->back()
            ->with('Booking has been deleted successfully');
    }
}