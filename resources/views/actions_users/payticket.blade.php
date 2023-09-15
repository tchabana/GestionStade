@extends('layouts.welcome')
@section('appli')

    <section class="text-gray-600 body-font">
            <div class="container px-5 py-24 mx-auto flex flex-col">
                <div class="lg:w-4/6 mx-auto">
                <div class="rounded-lg h-64 overflow-hidden">
                    <img alt="content" class="object-cover object-center h-full w-full" src="{{ asset('storage/' . $event->image_path) }}">
                </div>

                <div class="flex flex-col sm:flex-row mt-10">
                    <div class="sm:w-1/3 text-center sm:pr-8 sm:py-8">

                    <div class="flex flex-col items-center text-center justify-center">
                        <h2 class="title-font font-medium text-lg text-gray-900">{{$event->matche!==null?$event->matche->equipe1_name:""}} <strong class="text-red-500 text-2xl"> vs </strong> {{$event->matche!==null?$event->matche->equipe2_name:""}}</h2>
                        <h3 class="mb-3 text-green-500">Stade Municipal</h3>
                        <div class="flex items-center text-red-600 justify-center gap-10">
                            <h1>Dt: {{ $event->start_at }}</h1>
                            <h2>Fin : {{ $event->start_at }}</h2>
                        </div>
                        <p class="mb-4">{{ $event->description }}</p>
                        <div class="w-12 h-1 bg-indigo-500 rounded mt-2 mb-4"></div>
                        <p class="text-base">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aperiam aut at autem nulla illum, earum accusamus? Tenetur voluptatibus officiis eligendi!
                        </p>
                    </div>
                    </div>

                    <div class="sm:w-2/3 sm:pl-8 sm:py-8 sm:border-l border-gray-900 sm:border-t-0 border-t mt-4 pt-4 sm:mt-0 text-center sm:text-left bg-gray-100">

                        <form method="post" action="{{route('paiement',['event'=>$event->id])}}">
                            @csrf
                            {{-- <input type="number" name="" id="" placeholder="Numero de telephone"> --}}
                            <button id="acheterTicket" class="flex  text-white bg-green-500 border-0 w-32 p-1 focus:outline-none hover:bg-green-600 rounded ">Acheter le ticket</button>
                            <div id="optionsPaiement" style="display: none;">
                                <p>Choisissez votre moyen de paiement :</p>
                                <input type="radio" name="mode_paiement" value="paypal"> PayPal<br>
                                <input type="radio" name="mode_paiement" value="tf"> TyMoney ou Flooz<br>
                                <label for="prixTicket">Choisissez le prix du ticket :</label>
                                <select id="prixTicket" name="prix">
                                    <option name="prix" value="300">300</option>
                                    <option name="prix" value="500">500</option>
                                    <option name="prix" value="1000">1000</option>
                                </select>
                                <button id="validerPaiement" type="submit" class="flex  text-white bg-green-500 border-0 w-32 p-1 focus:outline-none hover:bg-green-600 rounded ">Valider le paiement</button>
                            </div>
                            <script>
                                const acheterTicketBtn = document.getElementById('acheterTicket');
                                const optionsPaiementDiv = document.getElementById('optionsPaiement');
                                const validerPaiementBtn = document.getElementById('validerPaiement');

                                acheterTicketBtn.addEventListener('click', function () {
                                    optionsPaiementDiv.style.display = 'block';
                                    acheterTicketBtn.remove();
                                });

                                validerPaiementBtn.addEventListener('click', function (event) {
                                    const moyenPaiementChoisi = document.querySelector('input[name="mode_paiement"]:checked');
                                    if (moyenPaiementChoisi) {
                                        alert('Vous avez choisi de payer avec : ' + moyenPaiementChoisi.value);
                                    } else {
                                        alert('Veuillez sélectionner un moyen de paiement.');
                                        event.preventDefault()
                                    }
                                });
                            </script>
                        </form>

                    </div>
                </div>

                </div>
            </div>

    </section>

@endsection
