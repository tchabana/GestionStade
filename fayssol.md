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
# photo de profil utilisateur
pour afficher la photo de profil, il suffit de decommenter sa ligne ds config/jetstream.php
# systeme de réinitialisation de mdp par email
- dans .env
- config de gmail(imap ,2 step auth, app password)
- ds config/mail.php
# login avec email ou username
- adapter la vue
- ds config/fortify.php
username par loginname
- ds proverder de jetstream
allons ds la doc de jet au niveau de authentification/Customizing The Authentication Process

status,confirmation,nbre de ticket local
## status d'un Event
il faut executer ma methode status du model Event periodiquement:
1- Créez une nouvelle commande Artisan personnalisée qui exécute la méthode status() pour chaque événement. Pour ce faire, vous pouvez créer une nouvelle commande avec la commande Artisan suivante :
```
php artisan make:command UpdateEventStatus

```
2- Ouvrez le fichier de la commande nouvellement créée (UpdateEventStatus.php) dans le répertoire app/Console/Commands. Ajoutez la logique pour exécuter la méthode status() pour chaque événement :

3- Configurez une tâche planifiée (cron job) pour exécuter la commande Artisan que vous venez de créer. Ouvrez votre fichier crontab en utilisant la commande crontab -e et ajoutez une ligne pour exécuter la commande toutes les secondes en utilisant le binaire PHP et la commande Artisan comme suit :
```
* * * * * php /chemin/vers/votre/projet/artisan app:update-event-status

```