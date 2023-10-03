<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;
use App\Models\User;
use PDF;
use App\Models\Event;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;

class PdfController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','role:admin|gerant']);
    }
    //
    public function generate(Request $request)
    {
        $validated = $request->validate([
            'ticketCount' => 'required',
            'title' => 'required',
            'price' => 'required',
        ]);
        $numTickets = $request->input('ticketCount', 1);
        $event_id = $request->title;
        $event = Event::all()->where('id',$event_id)->reverse()->first();
        $user = Auth::user();
        //dd($event_title);
        $qrCodes = [];
        //vider les qrcodes

        $directory = public_path('/codesQR');
        // Obtenez la liste des fichiers dans le répertoire
        $files = File::glob($directory . '/*');

        // Parcourez la liste des fichiers et supprimez-les
        foreach ($files as $file) {
            if (is_file($file)) {
                File::delete($file);
            }
        }


        for ($i = 0; $i < $numTickets; $i++) {
            //$ticketId = $i; // ticket ids
            $chemin = public_path('/codesQR/image_'.$i.'.svg');
            $ticket = Ticket::create([
                'user_id' => $user->id,
                'event_id' => $event->id,
                'price' => $request->price,
                'image_path'=> $chemin
            ]);
             // Mettre à jour le compteur dans l'événement associé
            $event->nbr_ticket_gen_local = $event->nbr_ticket_gen_local + 1;
            $event->save();


            //ajout des data de ticket
            $ticketData = [
                'ticket_id' => $ticket->id,
                'event_id' => $event->id,
                'title' =>  $request->title,
                'date_start' => $event->date_start,
                'date_end' => $event->date_end,
                'start_at' => $event->start_at,
                'end_at' => $event->end_at,
                'price' =>  $ticket->price,
            ];
            $jsonData = json_encode($ticketData);
            $qrCodes[] = [
                'path' => $chemin,
                'ticket_id' => $ticket->id,
                'event_id' => $event->id,
                'title' =>  $request->title,
                'date_start' => $event->date_start,
                'date_end' => $event->date_end,
                'start_at' => $event->start_at,
                'end_at' => $event->end_at,
                'price' =>  $ticket->price,
                'qr_code' => QrCode::size(150)->color(255,255,255)->backgroundColor(0,0,0)->style('round',0.5)->format('svg')->generate($jsonData,$chemin),

            ];
        }

        $tempPdfPath = public_path('temp/ticket.pdf');

        if (File::exists( $tempPdfPath)) {
            File::delete( $tempPdfPath);
        }

        $pdf = PDF::loadView('pdf.templatePDF', [
            "qrcodes" => $qrCodes,
            //'users' => User::all(),
        ])-> setPaper('a4','portrait');

        $tempPdfPath = public_path('temp/ticket.pdf');
        $pdf->save($tempPdfPath);
        $reponse = true;
        $events = Event::all()->reverse();
       return view('model_views.ticket.create',compact('events','reponse'));

    }



}
