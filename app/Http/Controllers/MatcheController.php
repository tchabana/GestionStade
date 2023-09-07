<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMatcheRequest;
use App\Http\Requests\UpdateMatcheRequest;
use App\Models\Event;
use App\Models\Matche;
use App\Models\Score;
use Illuminate\Database\Eloquent\Casts\Json;
use Illuminate\Support\Facades\Auth;

class MatcheController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
        $this->middleware(['auth','role:admin|gerant']);
    }
    public function index()
    {
        return view('model_views.matche.index', ['matches' => Matche::paginate(10), 'controller_methode' => "index"]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("model_views.matche.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMatcheRequest $request)
    {
        //dd($request->file('image_path'));
        try {
            $path = $request->file('image_path')->store('public/images');
            //explode pour séparer
            $path_str = explode('/', $path);
            $path_str = array_slice($path_str, 1, count($path_str));
            $path = implode('/', $path_str);
            //implode pour convertir le tableau en chaîne
            $request->image_path = $path;
            // Creation de l'event du matche
            $new_envent = new Event();
            $new_envent->title = $request->title;
            $new_envent->description = $request->description;
            $new_envent->date_start = $request->date_start;
            $new_envent->date_end = $request->date_end;
            $new_envent->start_at = $request->start_at;
            $new_envent->end_at = $request->end_at;
            $new_envent->nbr_participant = $request->nbr_participant;
            $new_envent->authors = $request->authors;
            $new_envent->user_id = Auth::user()->id;
            $new_envent->image_path = $path;
            $new_envent->save();
            // Creation du score
            $new_score = new Score();
            $new_score->save();
            
            // Creation du matche
            $new_matche = new Matche();
            $new_matche->equipe1_name = $request->equipe1_name;
            $new_matche->equipe2_name = $request->equipe2_name;
            $new_matche->event_id = $new_envent->id;
            $new_matche->score_id = $new_score->id;
            $new_matche->save();
        } catch (\Exception $e) {
            return $e->getMessage();
        }
        return view('model_views.matche.index', ['matches' => Matche::paginate(10), 'controller_methode' => "store"]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Matche $matche)
    {
        return view('model_views.matche.show', ['matche' => $matche]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Matche $matche)
    {
        return view('model_views.matche.edite', ['matche' => $matche]);
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
            // Creation du matche
            $matche->equipe1_id = $request->equipe1_id;
            $matche->equipe2_id = $request->equipe2_id;
            $matche->save();
        } catch (\Exception $e) {
            return $e->getMessage();
        }
        return view('model_views.matche.show', ['matches' => $matche]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Matche $matche)
    {
        $matche->delete();
        return view('model_views.matche.index', ['matches' => Matche::paginate(10), 'controller_methode' => "destroy"]);
    }
}
