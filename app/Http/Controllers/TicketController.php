<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTicketRequest;
use App\Http\Requests\UpdateTicketRequest;
use App\Models\Ticket;
use App\Models\User;
use PDF;
use App\Models\Event;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Support\Facades\File;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
        $this->middleware(['auth','role:admin|gerant|client']);
    }
    public function index()
    {
        //
       
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $tempPdfPath = public_path('temp/ticket.pdf');
        return view('model_views.ticket.create',['events'=>Event::all()->reverse(),'reponse'=>false]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTicketRequest $request)
    {
    
    }

    /**
     * Display the specified resource.
     */
    public function show(Ticket $ticket)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ticket $ticket)
    {
        //
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
        $ticket->delete();
        return back();
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
    public function alltiketforuser(string $user_id)
    {
        try {
            $tickets = Ticket::where('user_id', '=', $user_id )->get();
            return view("model_views.ticket.alltiketforuser",["ticket"=>$tickets]);
        } catch (\Exception $e) {
            return response()->json($e);
        }
    }
}
