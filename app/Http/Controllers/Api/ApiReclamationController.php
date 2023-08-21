<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreReclamationRequest;
use App\Http\Requests\UpdateReclamationRequest;
use App\Models\Reclamation;

class ApiReclamationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $reclamations = Reclamation::paginate(10);
            return response()->json([
                'status' => 200,
                'status_massage' => "Recuperation des poste effectuer ",
                'data' => $reclamations
            ]);
        } catch (\Exception $e) {
            return response()->json($e);
        }
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreReclamationRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Reclamation $reclamation)
    {
        try {
            return response()->json([
                'status' => 200,
                'status_massage' => "Ok",
                'data' => $reclamation
            ]);
        } catch (\Exception $ex) {
            return response()->json($ex);
        }
    }




    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateReclamationRequest $request, Reclamation $reclamation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reclamation $reclamation)
    {
        try {
            $reclamation->delete();
            return response()->json([
                'status' => 200,
                'status_massage' => "Le commentaire a bien ete Supprimer  ",
                'data' => $reclamation
            ]);
        } catch (\Exception $e) {
            return response()->json($e);
        }
    }
}
