<?php

namespace App\Repositories\Contracts;

use App\Models\Vehicles;
use Illuminate\Database\Eloquent\Collection;

interface InstallmentsRepositoryInterface
{
    public function index(): Collection;

    public function getbyId(int $installmentId): Collection;
}