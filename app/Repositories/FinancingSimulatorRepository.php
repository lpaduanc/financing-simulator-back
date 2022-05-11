<?php

namespace App\Repositories;

use App\Models\Simulation;
use App\Repositories\Contracts\FinancingSimulatorRepositoryInterface;

class FinancingSimulatorRepository implements FinancingSimulatorRepositoryInterface
{
    private $simulationModel;

    public function __construct(
        Simulation $simulationModel
    )
    {
        $this->simulationModel = $simulationModel;    
    }

    public function store(array $data)
    {
        return $this->simulationModel->create($data);
    }
}