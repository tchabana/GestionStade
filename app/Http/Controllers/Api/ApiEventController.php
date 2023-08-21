<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreEventRequest;
use App\Http\Requests\UpdateEventRequest;
use App\Models\Event;
use Illuminate\Database\Eloquent\Casts\Json;

class ApiEventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $event = Event::paginate(10);
            return response()->json([
                'status' => 200,
                'status_massage' => "Recuperation des évènements effectuer ",
                'data' => $event
            ]);
        } catch (\Exception $e) {
            return response()->json($e);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEventRequest $request)
    {
        try {
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
            return response()->json([
                'status' => 201,
                'status_massage' => "L'evenement à bien ete cré",
                'data' => $new_envent
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
            $event = Event::find($id);
            return response()->json([
                'status' => 200,
                'status_massage' => "Ok",
                'data' => $event
            ]);
        } catch (\Exception $ex) {
            return response()->json($ex);
        }
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEventRequest $request, Event $event)
    {
        try {
            $info_suplementaire= new Json([]);
            $event = new Event();
            $event->title = $request->title;
            $event->description = $request->description;
            $event->date_on = $request->date_on;
            $event->start_at = $request->start_at;
            $event->end_at = $request->end_at;
            $event->authors = $request->authors;
            $event->info_suplementaire = $info_suplementaire;
            $event->save();
            return response()->json([
                'status' => 200,
                'status_massage' => "Ok",
                'data' => $event
            ]);
        } catch (\Exception $e) {
            return response()->json($e);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event)
    {
        try {
            $event->delete();
            return response()->json([
                'status' => 200,
                'status_massage' => "L' Event a bien ete Supprimer  ",
                'data' => $event
            ]);
        } catch (\Exception $e) {
            return response()->json($e);
        }
    }
    public function todayEvent()
    {
        try {
            // Récupérez tous les événements dont la date de déroulement est aujourd'hui
            $eventsToday = Event::whereDate('date_on', '=', now()->toDateString())->get();
            return response()->json([
                'status' => 200,
                'status_massage' => "Ok",
                'data' => $eventsToday
            ]);
        } catch (\Exception $ex) {
            return response()->json($ex);
        }
    }
    public function search(String $q)
    {
        try {
            $event = Event::where('title', 'like', '%' . $q . '%')->orWhere('description', 'like', '%' . $q . '%')->get();
            return response()->json([
                'status' => 200,
                'status_massage' => "Ok",
                'data' => $event
            ]);
        } catch (\Exception $ex) {
            return response()->json($ex);
        }
    }
}
