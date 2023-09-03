<?php

namespace App\Http\Controllers;
use App\Models\Actuality;
use App\Models\Event;
use App\Models\Matche;
use App\Models\Comment;



use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $actualite = Actuality::paginate(8);
        $eventes = Event::paginate(8);
        $matches = Matche::paginate(8);
        return view('actions_users.index',compact(['actualite', 'eventes', 'matches']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $actualite = Actuality::find($id);
        $commentaire = Comment::all();

        return view('actions_users.show',compact(['actualite', 'commentaire']));

    }

      /**
     * Display the specified resource.
     */
    public function showpay(string $id)
    {
        //


        return view('actions_users.showmatch');

    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
