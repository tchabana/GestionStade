<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePayementRequest;
use App\Http\Requests\UpdatePayementRequest;
use App\Models\Payement;
use Illuminate\Http\Request;
use Srmklive\PayPal\Services\PayPal as PayPalClient;

class PayementController extends Controller
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
        return view('model_views.payement.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePayementRequest $request)
    {
        //
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
    public function paypal($prix)
    {
        $provider = new PayPalClient;
        $provider->setApiCredentials(config("paypal"));
        $paypalToken = $provider->getAccessToken();

        $response = $provider->createOrder([
            "intent"=> "CAPTURE",
            "application_context"=>[
                "return_url"=> route("paiement_success"),
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
                if ($link["rel"]==='approve') {
                    //dd($link["href"]);
                    return redirect()->away($link["href"],301);
                }
            }
        }else{
            return redirect()->route("paiement_cancel");
        }
    }
    public function flooz()
    {
        //
    }
    public function tymoney()
    {
        //
    }
    public function paiement(Request $request)
    {
        if ($request->mode_paiement==="flooz") {
            $this->flooz();
        }elseif($request->mode_paiement==="tymoney"){
            $this->tymoney();
        }else{
            $this->paypal($request->prix);
        }
    }
    public function paiement_success(Request $request)
    {
        $provider = new PayPalClient;
        $provider->setApiCredentials(config("paypal"));
        $paypalToken = $provider->getAccessToken();
        $response = $provider->capturePaymentOrder($request->token);
        dd($response);
    }
    public function paiement_cancel(Request $request)
    {

    }
}
