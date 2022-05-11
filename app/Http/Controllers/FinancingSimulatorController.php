<?php

namespace App\Http\Controllers;

use App\Http\Requests\FinancingSimulatorRequest;
use App\Services\FinancingSimulatorService;
use Exception;
use Illuminate\Http\Request;

class FinancingSimulatorController extends Controller
{
    private $financingSimulatorService;

    public function __construct(
        FinancingSimulatorService $financingSimulatorService
    )
    {
        $this->financingSimulatorService = $financingSimulatorService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function runSimulation(FinancingSimulatorRequest $financingSimulatorRequest)
    {
        try {
            return $this->financingSimulatorService->runSimulation($financingSimulatorRequest->all());
        } catch(Exception $e) {
            return response()->json([
                'msg' => 'Ocorreu um erro ao fazer a simulação de financiamento. Tente novamente.',
            ], 500);
        }
    }
}
