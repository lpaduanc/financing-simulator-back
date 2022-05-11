<?php

namespace App\Services;

use App\Repositories\InstallmentsRepository;

class InstallmentsService
{
    private $installmentsRepository;

    public function __construct(
        InstallmentsRepository $installmentsRepository
    )
    {
        $this->installmentsRepository = $installmentsRepository;    
    }

    public function index()
    {
        return $this->installmentsRepository->index();
    }

    public function getById(int $installmentId)
    {
        return $this->installmentsRepository->getbyId($installmentId);
    }
}