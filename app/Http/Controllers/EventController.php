<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEventRequest;
use App\Http\Requests\UpdateEventRequest;
use App\Models\Event;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Casts\Json;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('model_views.event.index', ['events' => Event::paginate(10), 'controller_methode' => "index"]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("model_views.event.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEventRequest $request)
    {

        //dd(Auth::user()->id);
        try {
            $jsonData = $request->input('info_suplementaire'); // Remplacez 'textarea_name' par le nom de votre champ textarea
            // Convertir en JSON
            $info_suplementaire = json_encode($jsonData);
            // $info_suplementaire= new Json([]);
            $new_envent = new Event();
            $new_envent->title = $request->title;
            $new_envent->description = $request->description;
            $new_envent->date_on = $request->date_on;
            $new_envent->start_at = $request->start_at;
            $new_envent->end_at = $request->end_at;
            $new_envent->nbr_participant = $request->nbr_participant;
            $new_envent->authors = $request->authors;
            $new_envent->info_suplementaire = $info_suplementaire;
            $new_envent->user_id = Auth::user()->id;
            $new_envent->save();
        } catch (\Exception $e) {
            return $e->getMessage();
        }
        return view('model_views.event.index', ['events' => Event::paginate(10), 'controller_methode' => "store"]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Event $event)
    {
        return view('model_views.event.show', ['event' => $event]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Event $event)
    {
        return view('model_views.event.edite', ['event' => $event]);
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
        } catch (\Exception $e) {
            return $e->getMessage();
        }
        return view('model_views.event.show', ['event' => $event]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event)
    {
        $event->delete();
        return view('model_views.event.index', ['events' => Event::paginate(10), 'controller_methode' => "destroy"]);
    }
}
