<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTicketRequest;
use App\Http\Requests\UpdateTicketRequest;
use App\Models\Ticket;

class ApiTicketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $ticket = Ticket::paginate(10);
            return response()->json([
                'status' => 200,
                'status_massage' => "Recuperation des poste effectuer ",
                'data' => $ticket
            ]);
        } catch (\Exception $e) {
            return response()->json($e);
        }
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTicketRequest $request)
    {
        try {
            $tcket = new Ticket();
            $tcket->price = $request->price;
            $tcket->event_id = $request->event_id;
            $tcket->user_id = $request->user_id;
            $tcket->etat = $request->etat;
            $tcket->save();
            return response()->json([
                'status' => 201,
                'status_massage' => "Ok",
                'data' => $tcket
            ]);
        } catch (\Exception $e) {
            return response()->json($e);

        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Ticket $ticket)
    {
        try {
            return response()->json([
                'status' => 200,
                'status_massage' => "Ok",
                'data' => $ticket
            ]);
        } catch (\Exception $ex) {
            return response()->json($ex);
        }
    }



    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTicketRequest $request, Ticket $ticket)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ticket $ticket)
    {
        try {
            $ticket->delete();
            return response()->json([
                'status' => 200,
                'status_massage' => "Ok",
                'data' => $ticket
            ]);
        } catch (\Exception $e) {
            return response()->json($e);
        }
    }
    public function allTiketForEvent(string $event_id)
    {
        try {
            $ticket = Ticket::where('event_id', '=', $event_id )->get();
            return response()->json([
                'status' => 200,
                'status_massage' => "Ok",
                'data' => $ticket
            ]);
        } catch (\Exception $e) {
            return response()->json($e);
        }
    }
    public function allTiketForUser(string $user_id)
    {
        try {
            $ticket = Ticket::where('user_id', '=', $user_id )->get();
            return response()->json([
                'status' => 200,
                'status_massage' => "Ok",
                'data' => $ticket
            ]);
        } catch (\Exception $e) {
            return response()->json($e);
        }
    }
}
