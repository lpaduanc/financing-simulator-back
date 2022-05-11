<?php

namespace App\Services;

use App\Repositories\VehiclesBrandRepository;
use Illuminate\Database\Eloquent\Collection;

class VehiclesBrandService
{
    private $vehicleBrandRepository;

    public function __construct(
        VehiclesBrandRepository $vehicleBrandRepository
    )
    {
        $this->vehicleBrandRepository = $vehicleBrandRepository;       
    }
    
    public function index(): Collection
    {
        return $this->vehicleBrandRepository->index();
    }
}