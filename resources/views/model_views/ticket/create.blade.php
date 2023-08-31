<x-app-layout>

    <div class="container mx-auto p-6 bg-gray-300">
        <form method="post" action="{{route('pdf')}}" id="myForm">
            @csrf
            <fieldset class="border rounded p-4 mb-6 shadow-lg bg-white">
                <legend class="font-semibold">EVENEMENTS</legend>
                <div class="flex items-center space-x-4 flex-col">
                    <label for="event" class="w-32 m-5">Sélectionner :</label>
                    <select id="event" name="title" class="w-1/2 border rounded py-1 px-2 mb-3 ">

                        @foreach($events as $event)
                            <option value="{{$event->title}}">{{$event->title}}</option>
                        @endforeach
                    </select>
                    <a class="text-blue-800 underline" id="openButton" href="{{route('event.create')}}"> Ou Créer Un Nouvel Événement</a>
                </div>
            </fieldset>

            <fieldset class="border rounded p-4 mt-6 mb-6 shadow bg-white flex flex-col ">
                <legend class="font-semibold">TICKETS</legend>
                <div class="flex flex-col items-center ">
                    <label for="ticketCount" class="w-40">Nombre de tickets :</label>
                    <input type="number" id="ticketCount" name="ticketCount" class="border rounded m-5 w-1/2">
                </div>
                <div class="flex flex-col items-center ">
                    <label for="ticketCount" class="w-40 mb-4">Prix de tickets :</label>
                    <input type="number" id="event" name="price" class="border rounded w-1/2">
                    <!-- <select id="event" name="type" class="border rounded w-1/2">

                            <option value="VIP">VIP</option>
                            <option value="REGULIER">REGULIER</option>
                            <option value="PARTICULIER">PARTICULIER</option>
                    </select> -->
                </div>
            </fieldset>
            <div class="flex space-x-6 ">
                <button type="submit" class="mt-4 bg-blue-500 text-white rounded py-2 px-4 hover:bg-blue-600" id="generateButton">Générer</button>
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
        </div>
    </div>


    <script>
        //import flatpickr from 'flatpickr';
        
        //PDF
        const openPdfButton = document.getElementById('openPdfButton');
        const previewModal = document.getElementById('previewModal');
        const closePreviewButton = document.getElementById('closePreviewButton');
        //const closePreviewButton2 = document.getElementById('closePreviewButton2');
        let ouvrir = {!! json_encode($reponse) !!};//depuis php pour s'assurer que les tickets sont deja generer
    //ouvrir ou fermer la fenetre d'aperçu des tickets
        if(ouvrir == true){
             // Afficher la fenêtre modale (popup)
             previewModal.classList.remove('hidden');
        }
        closePreviewButton.addEventListener('click', function() {
            // Fermer la fenêtre modale (popup)
            console.log("fermer");
            previewModal.classList.add('hidden');
            window.history.back();
        });

        document.getElementById("generateButton").addEventListener("click", function(event) {
            var userConfirmation = confirm("Êtes-vous sûr de vouloir générer ?");

            if (!userConfirmation) {
                event.preventDefault(); // Annule la soumission du formulaire
            } else {
                // Le formulaire sera soumis normalement
                document.getElementById("myForm").submit();
            }
        });
    </script>

 </div>


    </x-app-layout>

   

