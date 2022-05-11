<?php

namespace App\Repositories;

use App\Models\Vehicles;
use App\Repositories\Contracts\VehiclesRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

class VehiclesRepository implements VehiclesRepositoryInterface
{
    private $vehiclesModel;

    public function __construct(
        Vehicles $vehiclesModel
    )
    {
        $this->vehiclesModel = $vehiclesModel;
    }

    public function index(): Collection
    {
        return $this->vehiclesModel->all();
    }

    public function getById(int $vehicleId): Collection
    {
        return $this->vehiclesModel->where('id', $vehicleId)->get();
    }

    public function getbyCode($vehicleCode)
    {
        return $this->vehiclesModel->where('vehicle_code', $vehicleCode);
    }

    public function getByBrandId($brandId)
    {
        return $this->vehiclesModel->where('brand_id', $brandId)->get();
    }
}