<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePayementRequest;
use App\Http\Requests\UpdatePayementRequest;
use App\Models\Event;
use App\Models\Payement;
use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Srmklive\PayPal\Services\PayPal as PayPalClient;
use Illuminate\Support\Str;
use SimpleSoftwareIO\QrCode\Facades\QrCode;


class PayementController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }
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
        return view('model_views.payement.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePayementRequest $request)
    {
        //dd($request);

    }

    /**
     * Display the specified resource.
     */
    public function show(Payement $payement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Payement $payement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePayementRequest $request, Payement $payement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Payement $payement)
    {
        //
    }
    public function paypal($prix,$event)
    {
        $provider = new PayPalClient;
        $provider->setApiCredentials(config("paypal"));
        $paypalToken = $provider->getAccessToken();

        $response = $provider->createOrder([
            "intent"=> "CAPTURE",
            "application_context"=>[
                "return_url"=> route("paiement_success",["prix"=> $prix, "event"=> $event]),
                "cancel_url"=> route("paiement_cancel")   
            ],
            "purchase_units"=>[
                [
                    "amount"=>[
                        "currency_code"=>"USD",
                        "value"=> $prix
                    ]
                ]
            ]
        ]);
        
        if (isset($response['id']) && $response['id']!==null){
            foreach($response['links'] as $link){
                if ($link["rel"] === 'approve') {
                    //dd($link["href"]);
                    return redirect()->away($link["href"]);
                }
            }
        }else{
            return redirect()->route("paiement_cancel");
        }
    }
    public function tymoneyOrFlooz($prix,$event)
    {
        // URL de l'API distante
        $url = 'https://paygateglobal.com/v1/page';

        // Paramètres à envoyer avec la requête GET
        $params = [
            'token' => '3ac1031f-e535-4776-a2ca-7e504ef6d5e1',
            'amount' => 0,
            'identifier'=>Str::random(64),
            'url'=> route("paiement_success",["prix"=> $prix, "event"=> $event]),
        ];

        // Effectuer la requête GET avec les paramètres
        $response = Http::get($url, $params);
        $token = '3ac1031f-e535-4776-a2ca-7e504ef6d5e1';
        $re = $url."?token=$token"
                    ."&amount=0"
                    ."&identifier=azertyuiop".
                    "&url=".$params["url"];
        return redirect($re);
    }
    public function paiement_success(Request $request,$prix,Event $event)
    {
        $provider = new PayPalClient;
        $provider->setApiCredentials(config("paypal"));
        $paypalToken = $provider->getAccessToken();
        $response = $provider->capturePaymentOrder($request->token);
        //dd($response);
        if (isset($response["status"]) && $response["status"]==='COMPLETED') {
            $tcket = new Ticket();
            $tcket->price = $prix;
            $tcket->event_id = $event->id;
            $tcket->user_id = Auth::user()->id;
            //$tcket->etat = true;
            $tcket->save();
            //$event = Event::find($tcket->event_id);
            $event->nbr_ticket_gen_online = $event->nbr_ticket_gen_online + 1;
            $event->save();
            $pay = new Payement();
            $pay->ticket_id=$tcket->id;
            $pay->payement_ref = $response["id"];
            $pay->save();

            $chemin = 'codesQR/image_'.$randomString = Str::random(64).'.svg';
            $tcket->image_path = $chemin;
            $tcket->save();
            $ticketData = [
                'ticket_id' => $tcket->id,
                'event_id' => $event->id,
                'date_start' => $event->date_start,
                'date_end' => $event->date_end,
                'start_at' => $event->start_at,
                'end_at' => $event->end_at,
                'price' =>  $tcket->price,
            ];
            $jsonData = json_encode($ticketData);
            $qrcode[] = [
                'path' => $chemin,
                'ticket_id' => $tcket->id,
                'event_id' => $event->id,
                'title' =>  $event->title,
                'date_start' => $event->date_start,
                'date_end' => $event->date_end,
                'start_at' => $event->start_at,
                'end_at' => $event->end_at,
                'price' =>  $tcket->price,
                'qr_code' => QrCode::size(150)->color(255,255,255)->backgroundColor(0,0,0)->style('round',0.5)->format('svg')->generate($jsonData,$chemin),
            ];
            return view("model_views.ticket.show",compact('qrcode'));
        }else{
            return redirect()->route("paiement_cancel");
        }
    }
    public function paiement_cancel(Request $request)
    {

    }

    public function paiement(Request $request,Event $event)
    {
        if ($request->mode_paiement==="paypal") {
            return $this->paypal($request->prix,$event);
        }else{
            return $this->tymoneyOrFlooz($request->prix,$event);
        }
    }
}
