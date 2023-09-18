<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreActualityRequest;
use App\Http\Requests\UpdateActualityRequest;
use App\Models\Actuality;
use Illuminate\Support\Facades\Auth;

class ActualityController extends Controller
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
        return view('model_views.actuality.index', ['actuality' => Actuality::paginate(10), 'controller_methode' => "index"]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("model_views.actuality.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreActualityRequest $request)
    {
        try {
            $path = $request->file('image_path')->store('public/stock_image');
            //explode pour séparer
            $path_str = explode('/', $path);
            $path_str = array_slice($path_str, 1, count($path_str));
            $path = implode('/', $path_str);
            //implode pour convertir le tableau en chaîne
            $request->image_path = $path;


            // $new_actu = new Actuality();
            $new_actu = Actuality::create([
                'title' => $request->title,
                'message' => $request->message,
                'image_path' => $path,
                'user_id' => Auth::user()->id,
            ]);
        } catch (\Exception $e) {
            return $e->getMessage();
        }
        return view('model_views.actuality.index', ['actuality' => Actuality::paginate(10), 'controller_methode' => "store"]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Actuality $actuality)
    {
        return view('model_views.actuality.show', ['actuality' => $actuality]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Actuality $actuality)
    {
        return view('model_views.actuality.edite', ['actuality' => $actuality]);
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
        } catch (\Exception $e) {
            $e->getMessage();
        }
        return view('model_views.actuality.show', ['actuality' => $actuality]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Actuality $actuality)
    {
        $actuality->delete();
        return redirect()->route('actuality.index', ['actuality' => Actuality::paginate(10), 'controller_methode' => "destroy"]);
    }
}
