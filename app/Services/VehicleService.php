<?php

namespace App\Services;

use App\Repositories\VehiclesRepository;

class VehicleService
{
    private $vehiclesRepository;

    public function __construct(
        VehiclesRepository $vehiclesRepository
    )
    {
        $this->vehiclesRepository = $vehiclesRepository;       
    }
    
    public function index()
    {
        return $this->vehiclesRepository->index();
    }

    public function getbyId(int $vehicleId)
    {
        return $this->vehiclesRepository->getbyId($vehicleId);
    }

    public function getByBrandId(int $brandId)
    {
        return $this->vehiclesRepository->getByBrandId($brandId);
    }
}