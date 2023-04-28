<?php

namespace App\Http\Controllers\Hotel;

use App\Models\Booking;
use App\Services\HotelService;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ShowHotelController extends Controller
{
    public function __construct(private HotelService $hotelService)
    {
        $this->hotelService = $hotelService;
    }

    public function __invoke($id)
    {
        $hotel = $this->hotelService->find($id);
        
        $booking = Booking::where('user_id', Auth::id())
            ->where('hotel_id', $hotel->id)
            ->first();

        return view('pages.hotel.show')
            ->with([
                'hotel' => $hotel,
                'booking' => $booking,
        ]);
    }

}