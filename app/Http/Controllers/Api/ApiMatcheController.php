<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreMatcheRequest;
use App\Http\Requests\UpdateMatcheRequest;
use App\Models\Event;
use App\Models\Matche;
use App\Models\Score;
use Illuminate\Database\Eloquent\Casts\Json;

class ApiMatcheController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $matche = Matche::paginate(10);
            return response()->json([
                'status' => 200,
                'status_massage' => "Recuperation des Matches effectuer ",
                'data' => $matche
            ]);
        } catch (\Exception $e) {
            return response()->json($e);
        }
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMatcheRequest $request)
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
            $new_matche = new Matche();
            $new_matche->equipe1_id = $request->equipe1_id;
            $new_matche->equipe2_id = $request->equipe2_id;
            $new_matche->event_id = $new_envent->id;
            $new_matche->save();
            return response()->json([
                'status' => 201,
                'status_massage' => "L'evenement à bien ete cré",
                'data' => $new_matche
            ]);
        } catch (\Exception $e) {
            return response()->json($e);

        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Matche $matche)
    {
        try {
            return response()->json([
                'status' => 200,
                'status_massage' => "Ok",
                'data' => $matche
            ]);
        } catch (\Exception $ex) {
            return response()->json($ex);
        }
    }



    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMatcheRequest $request, Matche $matche)
    {
        try {
            // Creation de l'event du matche
            $info_suplementaire= new Json([]);
            $matche_envent = Event::find($matche->id);
            $matche_envent->title = $request->title;
            $matche_envent->description = $request->description;
            $matche_envent->date_on = $request->date_on;
            $matche_envent->start_at = $request->start_at;
            $matche_envent->end_at = $request->end_at;
            $matche_envent->authors = $request->authors;
            $matche_envent->info_suplementaire = $info_suplementaire;
            $matche_envent->save();
            // Creation du scoore
            $new_score = new Score();
            $new_score->save();
            // Creation du matche
            $new_matche = new Matche();
            $new_matche->equipe1_id = $request->equipe1_id;
            $new_matche->equipe2_id = $request->equipe2_id;
            $new_matche->event_id = $matche_envent->id;
            $new_matche->score_id = $new_score->id;
            $new_matche->save();
            return response()->json([
                'status' => 200,
                'status_massage' => "Ok",
                'data' => $matche
            ]);
        } catch (\Exception $e) {
            return response()->json($e);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Matche $matche)
    {
        try {
            $matche->delete();
            return response()->json([
                'status' => 200,
                'status_massage' => "L' Event a bien ete Supprimer  ",
                'data' => $matche
            ]);
        } catch (\Exception $e) {
            return response()->json($e);
        }
    }
}
