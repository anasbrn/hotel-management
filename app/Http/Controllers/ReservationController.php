<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Services\ReservationService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class ReservationController extends Controller
{
    protected $reservationService;

    public function __construct(ReservationService $reservationService)
    {
        $this->reservationService = $reservationService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
   

    /**
     * Store a newly created resource in storage.
     */
    public function create(Request $request)
    {
        $data = $request->all();

        //////////////// Hard coded to change
        $data[Reservation::USER_ID_COLUMN] = 1;
        $data[Reservation::ROOM_ID_COLUMN] = 1;
        //////////////////

        $this->reservationService->create($data);

        return redirect()
            ->back()
            ->with('You have successfully reserved this room');
    }

    /**
     * Display the specified resource.
     */
    public function show(Reservation $reservation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reservation $reservation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Reservation $reservation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reservation $reservation)
    {
        //
    }
}
