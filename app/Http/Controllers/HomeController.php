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
        $eventes = Event::paginate(8);
        $matches = Matche::paginate(8);
        return view('actions_users.index',compact(['eventes', 'matches']));
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
    public function payticket(Event $evenement)
    {
        //
        //dd($evenement);
        return view('actions_users.payticket',["event"=>$evenement]);

    }

    public function contact()
    {
        //


        return view('actions_users.contact');

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
