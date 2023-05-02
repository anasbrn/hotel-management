<?php

namespace App\Http\Controllers\Hotel;

use App\Services\HotelService;
use App\Http\Requests\HotelRequest;
use App\Http\Controllers\Controller;

class UpdateHotelController extends Controller
{
    protected $hotelService;

    public function __construct(HotelService $hotelService)
    {
        $this->hotelService = $hotelService;
    }

    public function __invoke($id, HotelRequest $request)
    {
        $this->hotelService->update($id, $request->all());

        return redirect()
            ->route('dashboard-hotels')
            ->with('Hotel has been updated successfully');
    }
}