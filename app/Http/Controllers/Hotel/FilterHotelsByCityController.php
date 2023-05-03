<?php

namespace App\Http\Controllers\Hotel;

use App\Services\CityService;
use App\Http\Controllers\Controller;

class FilterHotelsByCityController extends Controller
{
    protected $cityService;

    public function __construct(CityService $cityService)
    {
        $this->cityService = $cityService;
    }

    public function __invoke($id)
    {
        $city = $this->cityService->find($id);

        return view('pages.hotel.index')
            ->with([
                'city' => $city,
            ]);
    }
}