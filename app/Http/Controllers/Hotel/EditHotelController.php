<?php

namespace App\Http\Controllers\Hotel;

use App\Services\CityService;
use App\Services\HotelService;
use App\Http\Controllers\Controller;

class EditHotelController extends Controller
{
    protected $cityService;
    protected $hotelService;

    public function __construct(HotelService $hotelService, CityService $cityService)
    {
        $this->hotelService = $hotelService;
        $this->cityService = $cityService;
    }

    public function __invoke($id)
    {
        $hotel = $this->hotelService->find($id);
        $cities = $this->cityService->all();

        return view('pages.hotel.edit')
            ->with([
                'hotel' => $hotel,
                'cities' => $cities,
            ]);
    }
}