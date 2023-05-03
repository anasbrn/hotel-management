<?php

namespace App\Http\Controllers\Hotel;

use App\Services\CityService;
use App\Http\Controllers\Controller;

class CreateHotelController extends Controller
{
    protected $cityService;

    public function __construct(CityService $cityService)
    {
        $this->cityService = $cityService;
    }

    public function __invoke()
    {
        $cities = $this->cityService->all();

        return view('pages.hotel.create')
            ->with([
                'cities' => $cities,
            ]);
    }
}