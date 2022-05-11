<?php

namespace App\Http\Controllers;

use App\Http\Requests\VehiclesRequest;
use App\Services\VehicleService;
use Exception;
use Illuminate\Http\Request;

class VehicleController extends Controller
{

    private $vehicleService;

    public function __construct(
        VehicleService $vehicleService
    )
    {
        $this->vehicleService = $vehicleService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            return $this->vehicleService->index();
        } catch(Exception$e) {
            return response()->json([
                'msg' => 'Ocorreu um erro ao buscar os veículos cadastrados. '. $e->getMessage(),
            ], 500);
        }
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

    public function getByBrandId($brandId)
    {
        try {
            return $this->vehicleService->getByBrandId($brandId);
        } catch(Exception$e) {
            return response()->json([
                'msg' => 'Ocorreu um erro ao buscar os veículos da marca informada. '. $e->getMessage(),
            ], 500);
        }
    }
}
