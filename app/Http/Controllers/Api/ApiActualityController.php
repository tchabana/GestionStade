<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreActualityRequest;
use App\Http\Requests\UpdateActualityRequest;
use App\Models\Actuality;

class ApiActualityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $actu = Actuality::paginate(10);
            return response()->json([
                'status' => 200,
                'status_massage' => "Recuperation des actualitées effectuer ",
                'data' => $actu
            ]);
        } catch (\Exception $e) {
            return response()->json($e);
        }
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreActualityRequest $request)
    {
        try {
            $new_actu = new Actuality();
            $new_actu->title = $request->title;
            $new_actu->message = $request->message;
            $new_actu->image_path = $request->image_path;
            $new_actu->user_id = $request->user_id;
            $new_actu->save();
            return response()->json([
                'status' => 201,
                'status_massage' => "L'actu à bien ete cré",
                'data' => $new_actu
            ]);
        } catch (\Exception $e) {
            return response()->json($e);

        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        try {
            $Actuality = Actuality::find($id);
            return response()->json([
                'status' => 200,
                'status_massage' => "Ok",
                'data' => $Actuality
            ]);
        } catch (\Exception $ex) {
            return response()->json($ex);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateActualityRequest $request, Actuality $actuality)
    {
        try {
            $actuality->title = $request->title;
            $actuality->message = $request->message;
            $actuality->image_path = $request->image_path;
            $actuality->user_id = $request->user_id;
            $actuality->save();
            return response()->json([
                'status' => 200,
                'status_massage' => "Ok",
                'data' => $actuality
            ]);
        } catch (\Exception $e) {
            return response()->json($e);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Actuality $actuality)
    {
        try {
            $actuality->delete();
            return response()->json([
                'status' => 200,
                'status_massage' => "Le commentaire a bien ete Supprimer  ",
                'data' => $actuality
            ]);
        } catch (\Exception $e) {
            return response()->json($e);
        }
    }
}
