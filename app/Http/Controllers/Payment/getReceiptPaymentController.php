<?php

namespace App\Http\Controllers\Payment;

use App\Services\PaymentService;
use App\Http\Controllers\Controller;
use App\Services\BookingService;

class getReceiptPaymentController extends Controller
{
    protected $paymentService;
    protected $bookingService;

    public function __construct(PaymentService $paymentService, BookingService $bookingService)
    {
        $this->paymentService = $paymentService;
        $this->bookingService = $bookingService;
    }

    public function __invoke($id)
    {
        $booking = $this->bookingService->find($id);

        $data = [
            'booking'=> $booking,
        ];

        return $this->paymentService->generatePdf($data, $booking);
    }
}
