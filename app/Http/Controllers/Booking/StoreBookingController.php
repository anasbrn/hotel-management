<?php

namespace App\Http\Controllers\Booking;

use App\Models\Booking;
use Illuminate\Http\Request;
use App\Services\BookingService;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

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
        $data[Booking::USER_ID_COLUMN] = Auth::user()->id;

        $this->bookingService->create($data);

        return redirect()
            ->back()
            ->with('You have successfully reserved this room'); 
    }
}
