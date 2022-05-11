<?php

namespace App\Services;

use App\Repositories\FinancingSimulatorRepository;

class FinancingSimulatorService
{
    private $financingSimulatorRepository;
    private $vehicleService;
    private $installmentsService;

    public function __construct(
        FinancingSimulatorRepository $financingSimulatorRepository,
        VehicleService $vehicleService,
        InstallmentsService $installmentsService
    )
    {
        $this->financingSimulatorRepository = $financingSimulatorRepository;    
        $this->vehicleService = $vehicleService;
        $this->installmentsService = $installmentsService;
    }

    public function runSimulation(array $data)
    {
        $data['simulation_value'] = number_format($this->makeCalcSimulation($data), 2, ',', '.');
        $data['money_deposit'] = number_format($data['money_deposit'], 2, ',', '.');
        
        $data['simulation'] = $this->store($data);

        if (!empty($data['email'])) {
            $this->sendEmail($data['email']);
        }

        return $this->mountDataToShowSimulation($data);
    }

    private function mountDataToShowSimulation(array $data) 
    {
        $data['simulation']->installment = $this->installmentsService->getById($data['installment'])->toArray()[0]['installment'];
        return [
            'vehicle' => $this->vehicleService->getbyId($data['vehicle_id']),
            'simulation' => $data['simulation'],
        ];
    }

    private function makeCalcSimulation(array $data)
    {
        $vehicle = $this->vehicleService->getById($data['vehicle_id'])->toArray()[0];
        return ($vehicle['vehicle_value'] - str_replace(',00', '', $data['money_deposit']))
            / $this->installmentsService->getById($data['installment'])->toArray()[0]['installment'];
    }

    public function store(array $data)
    {
        return $this->financingSimulatorRepository->store($data);
    }

    public function sendEmail(string $email)
    {

    }
}