<?php

namespace App\Repositories\Contracts;

use App\Models\Vehicles;
use Illuminate\Database\Eloquent\Collection;

interface VehiclesBrandRepositoryInterface
{
    public function index(): Collection;
}