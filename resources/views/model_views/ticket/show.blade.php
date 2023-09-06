@extends('layouts.welcome')
@section('appli')
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            text-decoration: none;
        }

        /* Styles CSS pour le positionnement des tickets */
        .ticket-container {
            width: 100%;
        }

        .ticket {
            width: 49%; /* Les tickets occuperont 49% de la largeur pour deux par ligne */
            height: 179px;
            margin: 0;
            border: 2px solid #000;
            position: relative;
            display: inline-block;
            vertical-align: top;
            box-sizing: border-box;
            margin-bottom: 4px;
            page-break-inside: avoid;
            margin-left: 1px;
        
        }

        .left-section {
            width: 60%; /* Largeur de la section gauche */
            height: 100%;
            position: absolute;

        }

        .right-section {
            width: 40%; /* Largeur de la section droite */
            height: 100%;
            position: absolute;
            right: 0px;
            text-align: center;
            border-left: 3px solid black; 
        
        }

        .qr-code {
            /* width: 180px;
            height: 180px;
            margin: 0 auto;
            background-color: gray;
            border:1px solid yellow; */
        }

        .page-break {
            page-break-before: always; /* Force une nouvelle page avant */
        }
        .img-qr{
        margin-top: 10px;
        border:1px solid black;
        }
        .foot{
            width:18px;
            height: 18px;
            border-radius:50%;
            margin: 3px;
        
        }
        p{
            font-style:italic;
            color:orange;
            font-weight:bold;
        }
        .p-img{
            margin:5px;
        }
        .place{
            font-weight:bold;
            color:green;
        }
    
    </style>
    <section class="text-gray-600 body-font flex items-center">
        <div class="tickets-container">
            <!-- Chaque ticket -->
            <div class="ticket">
                <div class="left-section">
                    <!--  les autres informations du ticket -->
                    <p class="p-img"><img src="{{asset('foot.png')}}" alt="foot" class="foot"><em>SOKODÉ</em></p>
                    <p>{{$qrcode[0]['title']}}</p><br>
                    <small>{{$qrcode[0]['date_start']}}-{{$qrcode[0]['start_at']}} À</small>
                    <small>{{$qrcode[0]['date_end']}}-{{$qrcode[0]['end_at']}}</small><br>
                    <small class="place">Prix:{{$qrcode[0]['price']}}</small>
                </div>
                <div class="right-section">
                    <img src="{{ asset($qrcode[0]['path']) }}" alt="QR Code" class="img-qr">
                </div>
            </div>
        </div>
        <button id="downloadSectionButton" class="flex  text-white bg-green-500 border-0 w-32 p-1 focus:outline-none hover:bg-green-600 rounded">Télécharger le Ticket</button>
    </section>
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
