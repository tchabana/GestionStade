# Génération des tickets avec simple-qrcode:
## installation
```
composer require simplesoftwareio/simple-qrcode

```
## provider et alias et trait

```
SimpleSoftwareIO\QrCode\QrCodeServiceProvider::class,

'QrCode' => SimpleSoftwareIO\QrCode\Facades\QrCode::class,

use SimpleSoftwareIO\QrCode\Facades\QrCode;

```

## installation de dompdf
```
composer require barryvdh/laravel-dompdf
Barryvdh\DomPDF\ServiceProvider::class
"PDF" => Barryvdh\DomPDF\Facade::class
php artisan vendor:publish --provider="Barryvdh\DomPDF\ServiceProvider"

```

# date et heure avec flatpickr en js
## installation
```
npm i flatpickr --save

``` 
## importation et usage
```
 import flatpickr from 'flatpickr';

flatpickr("#dateheure", {
    enableTime: true,
    dateFormat: "Y-m-d H:i",
    minuteIncrement: 15,
    appendTo: document.getElementById('dateheure').parentNode
});

```
dateheure est le champ pour recuperer les valeurs
pour styliser flatpickr impoter dans votre fichier css:
```
@import 'flatpickr/dist/flatpickr.min.css';
```
## documentation
```
https://flatpickr.js.org/getting-started/#download-install
```