<?php

namespace App\Http\Controllers\Payment;

use App\Http\Controllers\Controller;
use App\Services\BookingService;

class getReceiptPaymentController extends Controller
{
    protected $bookingService;

    public function __construct(BookingService $bookingService)
    {
        $this->bookingService = $bookingService;
    }

    public function __invoke($id)
    {
        $booking = $this->bookingService->find($id);

        return view('pages.hotel.paymentPdf')
            ->with([
                'booking'=> $booking,
            ]);
    }
}
