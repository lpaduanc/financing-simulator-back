<?php

use App\Http\Controllers\FinancingSimulatorController;
use App\Http\Controllers\InstallmentsController;
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\VehiclesBrandController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::prefix('vehicles')
    ->group(function(){
        Route::get('/', [VehicleController::class, 'index'])->name('vehicle.index');
        Route::get('/brand/{id}', [VehicleController::class, 'getbyBrandId'])->name('vehicle.getbyBrandId');
        Route::get('/brand', [VehiclesBrandController::class, 'index'])->name('brand.index');
    });

Route::prefix('simulator')
    ->group(function(){
        Route::post('/simulation', [FinancingSimulatorController::class, 'runSimulation'])
            ->name('simulator.runSimulation');
    });

Route::prefix('installments')
    ->group(function(){
        Route::get('/', [InstallmentsController::class, 'index'])->name('installments.index');
    });
