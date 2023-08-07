<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreOtherRequest;
use App\Http\Requests\UpdateOtherRequest;
use App\Models\Event;
use App\Models\Other;
use Illuminate\Database\Eloquent\Casts\Json;

class OtherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('model_views.other.index', ['others' => Other::paginate(10), 'controller_methode' => "index"]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("model_views.other.create");
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
        } catch (\Exception $e) {
            return $e->getMessage();
        }
        return view('model_views.other.index', ['others' => Other::paginate(10), 'controller_methode' => "store"]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Other $other)
    {
        return view('model_views.other.show', ['other' => $other]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Other $other)
    {
        return view('model_views.other.edite', ['other' => $other]);
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
        } catch (\Exception $e) {
            return $e->getMessage();
        }
        return view('model_views.other.index', ['others' => $other]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Other $other)
    {
        $other->delete();
        return view('model_views.other.index', ['others' => Other::paginate(10), 'controller_methode' => "destroy"]);
    }
}
