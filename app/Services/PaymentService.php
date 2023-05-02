<?php

namespace App\Services;

use App\Models\Payment;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Auth;
use App\Repositories\PaymentRepository;


class PaymentService
{
    private $paymentRepository;

    public function __construct(PaymentRepository $paymentRepository)
    {
        $this->paymentRepository = $paymentRepository;
    }

    public function all()
    {
        return $this->paymentRepository->all();
    }

    public function create(array $data)
    {
        return $this->paymentRepository->create($data);
    }

    public function find($id)
    {
        return $this->paymentRepository->find($id);
    }

    public function generatePdf($data, $booking)
    {
        $pdf = Pdf::loadView('pages.hotel.paymentPdf', $data);
        $pdf->setPaper('A4', 'landscape');
        
        return $pdf->download(Auth::user()->name.'_'.$booking->hotel->name.'.pdf');
    }

}
