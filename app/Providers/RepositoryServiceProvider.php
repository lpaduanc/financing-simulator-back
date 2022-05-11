<?php

namespace App\Providers;

use App\Repositories\Contracts\FinancingSimulatorRepositoryInterface;
use App\Repositories\Contracts\InstallmentsRepositoryInterface;
use App\Repositories\Contracts\SimulatorRepositoryInterface;
use App\Repositories\Contracts\VehiclesBrandRepositoryInterface;
use App\Repositories\Contracts\VehiclesRespositoryInterface;
use App\Repositories\FinancingSimulatorRepository;
use App\Repositories\InstallmentsRepository;
use App\Repositories\SimulatorRepository;
use App\Repositories\VehiclesBrandrepository;
use App\Repositories\VehiclesRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            FinancingSimulatorRepositoryInterface::class,
            FinancingSimulatorRepository::class
        );

        $this->app->bind(
            VehiclesRespositoryInterface::class,
            VehiclesRepository::class
        );

        $this->app->bind(
            VehiclesBrandRepositoryInterface::class,
            VehiclesBrandrepository::class
        );

        $this->app->bind(
            InstallmentsRepositoryInterface::class,
            InstallmentsRepository::class
        );
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
