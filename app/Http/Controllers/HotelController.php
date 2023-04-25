<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use App\Models\Reservation;
use App\Services\HotelService;
use App\Services\ReservationService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HotelController extends Controller
{
    protected $hotelService;
    protected $reservationService;

    public function __construct(HotelService $hotelService, ReservationService $reservationService)
    {
        $this->hotelService = $hotelService;
        $this->reservationService = $reservationService;
    }

    public function all()
    {
        $hotels = $this->hotelService->all();

        return view('pages.hotel.index')
            ->with([
                'hotels' => $hotels,
            ]);
    }

    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function find($id)
    {
        $hotel = $this->hotelService->find($id);

        return view('pages.hotel.show')
            ->with([
                'hotel' => $hotel,
            ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Hotel $hotel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Hotel $hotel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Hotel $hotel)
    {
        //
    }
}
