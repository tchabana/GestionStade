@extends('layouts.welcome')
@section('appli')
    {{-- @dd($qrcode[0]) --}}
    <div class="lg:w-4/5 mx-auto flex flex-wrap border-4 border-red-700 mt-4 mb-10 p-4">
        <div class="tickets-container flex border-2 items-center gap-2 m-auto">
            <div class="box">
                <div class="flex gap-2 items-center">
                    <img class="w-8 h-8 rounded-full" src="{{asset("foot.png")}}" alt="">
                    <p>SOKODE</p>
                </div>
                <div class="mt-2">
                    <p>{{$qrcode[0]['title']}}</p><br>
                    <small class="place text-red-400" >{{$qrcode[0]['date_start']}}-{{$qrcode[0]['start_at']}} À</small>
                    <small class="place text-red-400" >{{$qrcode[0]['date_end']}}-{{$qrcode[0]['end_at']}}</small><br>
                    <small class="place text-red-400">Prix:{{$qrcode[0]['price']}}</small>
                </div>
            </div>
            <div class="box">
                <img src="{{ asset($qrcode[0]['path']) }}" alt="QR Code" class="img-qr">
            </div>
        </div>
        <button id="downloadSectionButton" class="flex  text-white bg-green-500 border-0 w-32 p-1 focus:outline-none hover:bg-green-600 rounded">Télécharger le Ticket</button>
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
@endsection
