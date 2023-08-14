<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;
use App\Models\User;
use PDF;
use App\Models\Event;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Support\Facades\File;


class PdfController extends Controller
{
    //
    public function generate(Request $request)
    {
        $numTickets = $request->input('ticketCount', 1);
        $event_title = $request->input('event_title');
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

    
        for ($i = 1; $i <= $numTickets; $i++) {
            $ticketId = $i; // Remplacez cette fonction par la logique de génération d'ID de ticket
            //$url = route('tickets.show', $ticketId); // Remplacez 'tickets.show' par la route appropriée pour afficher un ticket
            $chemin = public_path('/codesQR/image_'.$i.'.svg');
            $qrCodes[] = [
                'id' => $ticketId,
                'qr_code' => QrCode::size(150)->color(255,255,255)->backgroundColor(0,0,0)->style('round',0.5)->format('svg')->generate($i,$chemin),
                'path' => $chemin,
                'event_title' => $event_title,
            ];
        }

        //pdf
        // $compare = public_path('temp/');
        $tempPdfPath = public_path('temp/ticket.pdf');
        // if (strcmp($compare, $tempPdfPath) === 0) {
        //     // Les chemins sont identiques
        //     $reponse = true;
        // } else {
        //     // Les chemins sont différents
        //     $reponse = false;
        // }

        if (File::exists( $tempPdfPath)) {
            File::delete( $tempPdfPath);
        }
        $pdf = PDF::loadView('pdf.templatePDF', [
            "qrcodes" => $qrCodes,
            //'users' => User::all(),
        ])-> setPaper('a4','portrait');
        
        $tempPdfPath = public_path('temp/ticket.pdf'); // Assurez-vous d'avoir un dossier "temp" dans votre dossier public
        $pdf->save($tempPdfPath);
        //return view('pdf.preview',compact('qrCodes'));
        //generer et afficher
        if (File::exists( $tempPdfPath)) {
            $reponse = true;
        }else{
            $reponse = false;
        }

        $events = Event::all()->reverse();
       return view('model_views.ticket.create',compact('reponse','events'));
    
    }

    public function fermer(){
        $directory = public_path('/codesQR');
        // Obtenez la liste des fichiers dans le répertoire
        $files = File::glob($directory . '/*');

        // Parcourez la liste des fichiers et supprimez-les
        foreach ($files as $file) {
            if (is_file($file)) {
                File::delete($file);
            }
        }

        // $compare = public_path('temp/');
        $tempPdfPath = public_path('temp/ticket.pdf');
        
        // if (strcmp($compare, $tempPdfPath) === 0) {
        //     // Les chemins sont identiques
        //     $reponse = true;
        // } else {
        //     // Les chemins sont différents
        //     $reponse = false;
        // }

        if (File::exists( $tempPdfPath)) {
            File::delete( $tempPdfPath);
        }
        //affichage des button generer et fermer
        if (File::exists( $tempPdfPath)) {
            $reponse = true;
        }else{
            $reponse = false;
        }
        $events = Event::all()->reverse();
        return view('model_views.ticket.create',compact('reponse','events'));
    }
}
