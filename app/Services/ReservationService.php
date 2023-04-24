<?php

namespace App\Services;

use App\Repositories\ReservationRepository;


class ReservationService
{
    private $reservationRepository;

    public function __construct(ReservationRepository $reservationRepository)
    {
        $this->reservationRepository = $reservationRepository;
    }

    public function create(array $data)
    {
        return $this->reservationRepository->create($data);
    }
}