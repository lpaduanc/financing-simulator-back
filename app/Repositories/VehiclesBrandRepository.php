<?php

namespace App\Repositories;

use App\Models\Brands;
use App\Repositories\Contracts\VehiclesBrandRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

class VehiclesBrandRepository implements VehiclesBrandRepositoryInterface
{
    private $brands;

    public function __construct(
        Brands $brands
    )
    {
        $this->brands = $brands;
    }

    public function index(): Collection
    {
        return $this->brands->all();
    }
}