<?php

namespace App\Http\Controllers\City;

use App\Services\CityService;
use App\Http\Controllers\Controller;

class ListCitiesController extends Controller
{
    protected $cityService;

    public function __construct(CityService $cityService)
    {
        $this->cityService = $cityService;
    }

    public function __invoke()
    {
        $cities = $this->cityService->all();

        return view('welcome')
            ->with([
                'cities' => $cities,
            ]);
    }
}