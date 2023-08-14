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
    //
    public function generate(Request $request)
    {
        $numTickets = $request->input('ticketCount', 1);
        $event_title = $request->title;
        $event = Event::all()->where('title',$event_title)->reverse()->first();
        $user = Auth::user();

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
            $ticket = Ticket::create([
                'user_id' => $user->id,
                'event_id' => $event->id,
            ]);

            $chemin = public_path('/codesQR/image_'.$i.'.svg');
            $qrCodes[] = [
                'id' => $ticket->id,
                'qr_code' => QrCode::size(150)->color(255,255,255)->backgroundColor(0,0,0)->style('round',0.5)->format('svg')->generate($i,$chemin),
                'path' => $chemin,
                'title' =>  $request->title,
                'date_on' => $event->date_on,
                'start_at' => $event->start_at,
                'end_at' => $event->end_at,
                'type' =>  $request->input('type'),
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
