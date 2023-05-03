<?php

namespace App\Http\Controllers\Hotel;

use App\Services\HotelService;
use App\Http\Requests\HotelRequest;
use App\Http\Controllers\Controller;

class StoreHotelController extends Controller
{
    protected $hotelService;

    public function __construct(HotelService $hotelService)
    {
        $this->hotelService = $hotelService;
    }

    public function __invoke(HotelRequest $request)
    {
        $this->hotelService->create($request->except(['_token']));

        return redirect()
            ->route('dashboard-hotels')
            ->with('Hotel has been added successfully');
    }
}
