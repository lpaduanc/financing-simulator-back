<?php

namespace App\Repositories;

use App\Models\Installments;
use App\Models\Vehicles;
use App\Repositories\Contracts\InstallmentsRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

class InstallmentsRepository implements InstallmentsRepositoryInterface
{
    private $installmentsModel;

    public function __construct(
        Installments $installmentsModel
    )
    {
        $this->installmentsModel = $installmentsModel;
    }

    public function index(): Collection
    {
        return $this->installmentsModel->all();
    }

    public function getById(int $installmentId): Collection
    {
        return $this->installmentsModel->where('id', $installmentId)->get();
    }
}