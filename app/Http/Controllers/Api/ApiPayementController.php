<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePayementRequest;
use App\Http\Requests\UpdatePayementRequest;
use App\Models\Payement;

class ApiPayementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $payement = Payement::paginate(10);
            return response()->json([
                'status' => 200,
                'status_massage' => "Recuperation des poste effectuer ",
                'data' => $payement
            ]);
        } catch (\Exception $e) {
            return response()->json($e);
        }
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePayementRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Payement $payement)
    {
        try {
            return response()->json([
                'status' => 200,
                'status_massage' => "Ok",
                'data' => $payement
            ]);
        } catch (\Exception $ex) {
            return response()->json($ex);
        }
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePayementRequest $request, Payement $payement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Payement $payement)
    {
        try {
            $payement->delete();
            return response()->json([
                'status' => 200,
                'status_massage' => "Ok",
                'data' => $payement
            ]);
        } catch (\Exception $e) {
            return response()->json($e);
        }
    }
}
