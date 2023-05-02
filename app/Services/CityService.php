<?php

namespace App\Services;

use App\Repositories\CityRepository;

class CityService
{
    private $cityRepository;

    public function __construct(CityRepository $cityRepository)
    {
        $this->cityRepository = $cityRepository;
    }

    public function all()
    {
        return $this->cityRepository->all();
    }

    public function find($id)
    {
        return $this->cityRepository->find($id);
    }
}
