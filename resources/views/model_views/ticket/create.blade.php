<x-app-layout>



    <div class="container mx-auto p-6 bg-gray-300">
        <form method="post" action="{{route('pdf')}}">
            @csrf
            <fieldset class="border rounded p-4 mb-6 shadow-lg bg-white">
                <legend class="font-semibold">EVENEMENTS</legend>
                <div class="flex items-center space-x-4 flex-col">
                    <label for="event" class="w-32 m-5">Sélectionner :</label>
                    <select id="event" name="title" class="w-1/2 border rounded py-1 px-2 mb-3">

                        @foreach($events as $event)
                            <option value="{{$event->title}}">{{$event->title}}</option>
                        @endforeach
                    </select>
                    <a class="text-blue-800 underline" id="openButton"> Ou Créer Un Nouvel Événement</a>
                </div>
            </fieldset>

            <fieldset class="border rounded p-4 mt-6 mb-6 shadow bg-white">
                <legend class="font-semibold">TICKETS</legend>
                <div class="flex items-center space-x-4 flex-col-sm">
                    <label for="ticketCount" class="w-40 m-5">Nombre de tickets :</label>
                    <input type="number" id="ticketCount" name="ticketCount" class="border rounded py-1 px-2  m-5">
                </div>
                <div class="flex items-center space-x-4 ">
                    <label for="ticketCount" class="w-40 m-5">Type de tickets :</label>
                    <select id="event" name="type" class="w-60 border rounded py-1 px-2 mb-3">

                            <option value="VIP">VIP</option>
                            <option value="REGULIER">REGULIER</option>
                            <option value="PARTICULIER">PARTICULIER</option>
                    </select>
                </div>
            </fieldset>
            <div class="flex space-x-6 ">

                <button type="submit" class="mt-4 bg-blue-500 text-white rounded py-2 px-4 hover:bg-blue-600" id="generateButton">Générer</button>


            </div>


            <div id="previewModal" class="fixed inset-0 flex items-center justify-center hidden bg-black bg-opacity-50">
                <div class="bg-white rounded-lg p-6 w-1/2">
                    <h2 class="font-semibold text-lg mt-4">Aperçu du PDF</h2>
                    <div id="previewContent " >
                        <iframe src="{{ asset('temp/ticket.pdf') }}" frameborder="0" width="100%" height="400"></iframe>
                    </div>
                    <div class="mt-4 flex justify-end">
                        <button id="closePreviewButton" class="bg-gray-300 text-gray-700 rounded py-2 px-4 mr-2">Fermer</button>
                    </div>
                </div>

    <!--affichage du pdf-->
    <div id="previewModal" class="fixed inset-0 flex items-center justify-center hidden bg-black bg-opacity-50">
        <div class="bg-white rounded-lg p-6 w-1/2">
            <h2 class="font-semibold text-lg mt-4">Aperçu du PDF</h2>
            <div id="previewContent " >
                <iframe src="{{ asset('temp/ticket.pdf') }}" frameborder="0" width="100%" height="400"></iframe>
            </div>
            <div class="mt-4 flex justify-end">
                <button id="closePreviewButton" class="bg-gray-300 text-gray-700 rounded py-2 px-4 mr-2">Fermer</button>

            </div>

            <script>
            document.addEventListener('DOMContentLoaded', function() {
                const openPdfButton = document.getElementById('openPdfButton');
                const previewModal = document.getElementById('previewModal');
                const closePreviewButton = document.getElementById('closePreviewButton');
                let ouvrir = {!! json_encode($reponse) !!};

                if(ouvrir == true){
                    // Afficher la fenêtre modale (popup)
                    previewModal.classList.remove('hidden');
                }

                // openPdfButton.addEventListener('click', function() {
                //     // Afficher la fenêtre modale (popup)
                //     previewModal.classList.remove('hidden');
                // });

                closePreviewButton.addEventListener('click', function() {
                    // Fermer la fenêtre modale (popup)
                    previewModal.classList.add('hidden');
                });
            });
            </script>
            {{-- @stop --}}
        </div>


    </x-app-layout>

    </div>
    <!--affichage de formulaire de creation d'un event-->
    <div id="previewModal2" class="fixed inset-0 flex items-center justify-center hidden bg-black bg-opacity-50">
        <div class="bg-white rounded-lg p-6 w-1/2">
            <h2 class="font-semibold text-lg mt-4">Créer un évènement</h2>
            <div id="previewContent2 " >
                <form action="" method="post" class="p-4 space-y-4 bg-yellow-500 shadow">
                    <div class="flex justify-between items-center">
                        <label for="">Type</label>
                        <select name="" id="eventType" class="border rounded w-96 h-8 mr-4">
                        <option value="match">votre choix</option>
                            <option value="match">match</option>
                            <option value="concert">concert</option>
                            <option value="conference">conference</option>
                            <option value="autre">autre</option>
                        </select>
                    </div>
                    <div class="flex justify-between items-center">
                        <label for="">Description</label>
                        <textarea name="" id="" cols="10" rows="3" class="border rounded w-96 h-12 mr-4"></textarea>
                    </div>
                    <div class="flex items-center justify-between">
                        <label for="">Date & Heure</label>
                        <div class="flex">
                            <div class="">
                                <label for="" >De</label>
                                <input type="text" class="border rounded w-44 h-8" id="from">
                                <i class="input-icon fas fa-calendar-alt transform -translate-x-6"></i>
                             </div>
                            <div class="">
                                <label for="">À</label>
                                <input type="text" class="border rounded w-44 h-8" id="to">
                                <i class="input-icon fas fa-calendar-alt transform -translate-x-6"></i>
                            </div>
                        </div>

                    </div>
                    <div class="flex justify-between items-center">
                        <label for="">Auteurs</label>
                        <input type="text" class="border rounded w-96 h-8 mr-4">
                    </div>
                    <div class="flex justify-between items-center hidden" id="eventTitle">
                        <label for="">Titre</label>
                        <input type="text" class="border rounded w-96 h-8 mr-4">
                    </div>
                    <div class="flex justify-between items-center hidden" id="equipes">
                        <label for="">Equipes</label>
                        <div class="flex justify-between items-center mr-4">
                            <div class="">
                                <!-- <label for="">Equipe1</label> -->
                                <select name="" id="" class="border rounded w-44 h-8">
                                    <option value="">opt2</option>
                                </select>
                            </div>
                            <p class="m-1.5 text-green-800 shadow-black">Vs</p>
                            <div class="">
                                <!-- <label for="">Equipe2</label> -->
                                <select name="" id="" class="w-44 h-8">
                                    <option value="">opt3</option>
                                </select>
                            </div>
                        </div>

                    </div>
                    <div class="flex justify-between items-center">
                        <label for="">Images</label>
                        <input type="file" class="border rounded w-96 h-8 mr-4">
                    </div>
                </form>
            </div>
            <div class="mt-4 flex justify-end">
                <button id="" class="bg-blue-500 text-white rounded py-2 px-4 mr-2">Enregistrer</button>
                <button id="closePreviewButton2" class="bg-gray-300 text-gray-700 rounded py-2 px-4 mr-2">Fermer</button>
            </div>
        </div>
    </div>


    <script>
        //import flatpickr from 'flatpickr';
        //formulaire event
        let eventType = document.getElementById('eventType');
        let eventTitle = document.getElementById('eventTitle');
        let equipes = document.getElementById('equipes');
        //PDF
        const openPdfButton = document.getElementById('openPdfButton');
        const previewModal = document.getElementById('previewModal');
        const closePreviewButton = document.getElementById('closePreviewButton');
        //formulaire affichage
        const openButton = document.getElementById('openButton');
        const previewModal2 = document.getElementById('previewModal2');
        const closePreviewButton2 = document.getElementById('closePreviewButton2');
        let ouvrir = {!! json_encode($reponse) !!};//depuis php pour s'assurer que les tickets sont deja generer
    //ouvrir ou fermer la fenetre d'aperçu des tickets
        if(ouvrir == true){
             // Afficher la fenêtre modale (popup)
             previewModal.classList.remove('hidden');
        }
        closePreviewButton.addEventListener('click', function() {
            // Fermer la fenêtre modale (popup)
            previewModal.classList.add('hidden');
            window.history.back();
        });

    //creation d'un event(fermer ou ouvrir le form)
        openButton.addEventListener('click', function(){
             // Afficher la fenêtre modale (popup)
             previewModal2.classList.remove('hidden');
        });
        closePreviewButton2.addEventListener('click', function() {
            // Fermer la fenêtre modale (popup)
            previewModal2.classList.add('hidden');
        });

    //affichage des champs suppl en fonction de la valeur du type
        eventType.addEventListener('change',function(){

            if (eventType.value === "match") {
                equipes.classList.remove("hidden"); // Afficher l'élément en retirant la classe "hidden"
                eventTitle.classList.add("hidden");
            } else {
                equipes.classList.add("hidden");    // Cacher l'élément en ajoutant la classe "hidden"
               eventTitle.classList.remove("hidden");
            }
        });




    </script>

    {{--
    @stop --}}
