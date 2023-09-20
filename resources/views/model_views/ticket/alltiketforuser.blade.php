<x-app-layout>

    <div class="container mx-auto p-6 bg-gray-300"> 
        @forelse ($ticket as $t)
            <div class="lg:w-4/5 mx-auto flex flex-wrap border-4 border-red-700 mt-4 mb-10 p-4">
                <div class="tickets-container flex border-2 items-center gap-2 m-auto">
                    <div class="box">
                        <div class="flex gap-2 items-center">
                            <img class="w-8 h-8 rounded-full" src="{{asset("foot.png")}}" alt="">
                            <p>SOKODE</p>
                        </div>
                        <div class="mt-2">
                            <p>{{$t->event->title}}</p><br>
                            <small class="place text-red-400" >{{$t->event->date_start}}-{{$t->event->start_at}} À</small>
                            <small class="place text-red-400" >{{$t->event->date_end}}-{{$t->event->end_at}}</small><br>
                            <small class="place text-red-400">Prix:{{$t->price}}</small>
                        </div>
                    </div>
                    <div class="box">
                        <img src="{{ asset($t->image_path) }}" alt="QR Code" class="img-qr">
                    </div>
                </div>
                <div>
                    <button id="downloadSectionButton" class="flex m-2 text-white bg-green-500 border-0 w-32 p-1 focus:outline-none hover:bg-green-600 rounded">Télécharger le Ticket</button>
                    <form action="{{ route('ticket.destroy', $t)}}" method="POST" class="flex m-2 text-white bg-green-500 border-0 w-32 p-1 focus:outline-none hover:bg-green-600 rounded">
                        @csrf
                        @method("DELETE")
                        <small>
                            <button type="submit">
                                <div>
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-red-600">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                        </svg>
                                    </div>
                                    <h3>Supprimer le Ticket</h3>
                                </div>
                            </button>
                        </small>
                    </form>
                </div>

            </div>
        @empty
            <h1>Vous n'avez aucun Ticket</h1>
        @endforelse
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.3.2/html2canvas.min.js"></script>
    <script>
    const downloadSectionButton = document.getElementById('downloadSectionButton');
    const sectionToDownload = document.querySelector('.tickets-container'); // Sélectionnez la section à télécharger
    downloadSectionButton.addEventListener('click', function() {
        // Utilisez html2canvas pour capturer la section
        html2canvas(sectionToDownload).then(function(canvas) {
        // Convertissez le canvas en une URL de données (base64)
        const imageUrl = canvas.toDataURL('image/png');

        // Créez un lien hypertexte (élément <a>) avec l'URL de l'image
        const downloadLink = document.createElement('a');
        downloadLink.href = imageUrl;
        downloadLink.download = 'section_ticket.png'; // Nom du fichier téléchargé

        // Cliquez sur le lien pour déclencher le téléchargement
        downloadLink.click();
        });
    });
    </script>
</x-app-layout>



