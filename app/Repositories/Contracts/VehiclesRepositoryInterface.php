<?php

namespace App\Repositories\Contracts;

use App\Models\Vehicles;
use Illuminate\Database\Eloquent\Collection;

interface VehiclesRepositoryInterface
{
    public function index(): Collection;

    public function getById(int $vehicleId): Collection;

    public function getByBrandId(int $brandId);

    public function getByCode(string $vehicleCode);
}