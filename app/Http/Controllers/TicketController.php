<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTicketRequest;
use App\Http\Requests\UpdateTicketRequest;
use App\Models\Ticket;
use App\Models\User;
use PDF;
use App\Models\Event;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
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
        return view('model_views.ticket.create',['events'=>Event::all()->reverse()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTicketRequest $request)
    {
        // $numTickets = $request->input('ticketCount', 1);
        // $event_title = $request->input('event_title');
        // $qrCodes = [];
    
        // for ($i = 1; $i <= $numTickets; $i++) {
        //     $ticketId = $i; // Remplacez cette fonction par la logique de génération d'ID de ticket
        //     //$url = route('tickets.show', $ticketId); // Remplacez 'tickets.show' par la route appropriée pour afficher un ticket
    
        //     $qrCodes[] = [
        //         'id' => $ticketId,
        //         'qr_code' => QrCode::size(100)->generate($i),
        //     ];
        // }

        // //pdf
        // $tempPdfPath = public_path('temp/ticket.pdf');
        // if (File::exists( $tempPdfPath)) {
        //     File::delete( $tempPdfPath);
        // }
        // $pdf = PDF::loadView('pdf.templatePDF', [
        //     "qrcodes" => $qrCodes,
        //     'users' => User::all(),
        // ]);
        
        // $tempPdfPath = public_path('temp/ticket.pdf'); // Assurez-vous d'avoir un dossier "temp" dans votre dossier public
        // $pdf->save($tempPdfPath);
       return view('pdf.preview');
    
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
        //
    }
}
