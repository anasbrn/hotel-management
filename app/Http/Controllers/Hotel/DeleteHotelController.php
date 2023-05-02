<?php

namespace App\Http\Controllers\Hotel;

use App\Services\HotelService;
use App\Http\Controllers\Controller;

class DeleteHotelController extends Controller
{
    protected $hotelService;

    public function __construct(HotelService $hotelService)
    {
        $this->hotelService = $hotelService; 
    }

    public function __invoke($id)
    {
        $this->hotelService->destroy($id);

        return redirect()
            ->back()
            ->with('Hotel has been deleted successfully');
    }
}