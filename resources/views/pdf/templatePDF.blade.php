<!DOCTYPE html>
<html>
<head>
    <title>PDF Template</title>
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
           border:1px solid white;
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
</head>
<body>
    <div class="ticket-container">
        @php $ticketsPerPage = 12; $ticketCount = count($qrcodes); @endphp

        @for ($i = 0; $i < $ticketCount; $i += $ticketsPerPage)
            @if ($i > 0)
                <div class="page-break"></div>
            @endif

            <div class="tickets-container">
                @foreach(array_slice($qrcodes, $i, $ticketsPerPage) as $qrcode)
                    <!-- Chaque ticket -->
                    <div class="ticket">
                        <div class="left-section">
                            <!--  les autres informations du ticket -->
                            <p class="p-img"><img src="{{public_path('foot.png')}}" alt="foot" class="foot"><em>SOKODÉ</em></p>
                            <p>{{$qrcode['title']}}</p><br>
                            <small>{{$qrcode['date_on']}}-{{$qrcode['start_at']}} À</small>
                            <small>{{$qrcode['date_on']}}-{{$qrcode['start_at']}}</small><br>
                            <small class="place">Place:{{$qrcode['type']}}</small>
                        </div>
                        <div class="right-section">
                        <img src="{{$qrcode['path'] }}" alt="QR Code" class="img-qr">
                       
                            <!-- <div class="qr-code">
                                
                               
                            </div> -->
                        </div>
                    </div>
                @endforeach
            </div>
        @endfor
    </div>
   
</body>
</html>
