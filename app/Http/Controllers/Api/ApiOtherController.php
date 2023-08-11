<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreOtherRequest;
use App\Http\Requests\UpdateOtherRequest;
use App\Models\Event;
use App\Models\Other;
use Illuminate\Database\Eloquent\Casts\Json;

class ApiOtherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $matche = Other::paginate(10);
            return response()->json([
                'status' => 200,
                'status_massage' => "Recuperation des Others effectuer ",
                'data' => $matche
            ]);
        } catch (\Exception $e) {
            return response()->json($e);
        }
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreOtherRequest $request)
    {
        try {
            // Creation de l'event du matche
            $info_suplementaire= new Json([]);
            $new_envent = new Event();
            $new_envent->title = $request->title;
            $new_envent->description = $request->description;
            $new_envent->date_on = $request->date_on;
            $new_envent->start_at = $request->start_at;
            $new_envent->end_at = $request->end_at;
            $new_envent->authors = $request->authors;
            $new_envent->info_suplementaire = $info_suplementaire;
            $new_envent->save();
            // Creation du matche
            $new_other = new Other();
            $new_other->designation = $request->designation;
            $new_other->info_suplementaire = $info_suplementaire;
            $new_other->event_id = $new_envent->id;
            $new_other->save();
            return response()->json([
                'status' => 201,
                'status_massage' => "L'evenement à bien ete cré",
                'data' => $new_other
            ]);
        } catch (\Exception $e) {
            return response()->json($e);

        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Other $other)
    {
        try {
            return response()->json([
                'status' => 200,
                'status_massage' => "Ok",
                'data' => $other
            ]);
        } catch (\Exception $ex) {
            return response()->json($ex);
        }
    }



    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOtherRequest $request, Other $other)
    {
        try {
            // Creation de l'event du matche
            $info_suplementaire= new Json([]);
            $other_envent = $other->event_id;
            $other_envent->title = $request->title;
            $other_envent->description = $request->description;
            $other_envent->date_on = $request->date_on;
            $other_envent->start_at = $request->start_at;
            $other_envent->end_at = $request->end_at;
            $other_envent->authors = $request->authors;
            $other_envent->info_suplementaire = $info_suplementaire;
            $other_envent->save();
            // Creation du matche
            $other = new Other();
            $other->designation = $request->designation;
            $other->info_suplementaire = $info_suplementaire;
            $other->save();
            return response()->json([
                'status' => 200,
                'status_massage' => "Ok",
                'data' => $other
            ]);
        } catch (\Exception $e) {
            return response()->json($e);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Other $other)
    {
        try {
            $other->delete();
            return response()->json([
                'status' => 200,
                'status_massage' => "L' Event a bien ete Supprimer  ",
                'data' => $other
            ]);
        } catch (\Exception $e) {
            return response()->json($e);
        }
    }
}
