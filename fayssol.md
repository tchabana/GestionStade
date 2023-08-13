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