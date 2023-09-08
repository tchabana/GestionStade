
Mon token github: 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

Travaille du 3 aout 2023
1- installation de Laravel  JetStreme
    Remarque:
            Jetstream ne doit être installé que dans les nouvelles applications Laravel. Tenter d’installer Jetstream dans une application Laravel existante entraînera un comportement et des problèmes inattendus.

    composer require laravel/jetstream
    php artisan jetstream:install livewire
    php artisan jetstream:install livewire --teams
    npm install
    npm run build
    php artisan migrate
        Le migrate en renvoiyer une erreur << SQLSTATE[42P07]: Duplicate table: 7 ERROR:  relation "sessions" already exists>>
        Pour resoudre cette erreur j'ai du supprimer manuiellement la table session dans la base de donneé
        
    COnfiguration de jetstream :
    	1- dans le ficher config/jetstream.php plusieur variable son diponible pour configurer le fonctionnement de Jetstrem
    	2- le ficher app/Providers/FortifyServiceProvider.php permet de couper la possibiliter de connexion pendant un temps donne apres 5 movaise tentative de connexion
### Sys de paiement par paygate[https://www.paygateglobal.com/]






## Paypal (configuration du .env)
```

#PayPal API Mode
# Values: sandbox or live (Default: live)
PAYPAL_MODE=sandbox

#PayPal Setting & API Credentials - sandbox
PAYPAL_SANDBOX_CLIENT_ID=AZFLgNHvFK0adIxGHAeVrMl1ftIdIGoW-6KRkDUPaQJJ8sYiJYhnaSyWwQj9Ep2cjjBn0ZkLvLtVsaWo
PAYPAL_SANDBOX_CLIENT_SECRET=EOU0c1MTn9LH6uc4Rvuex7DGSSU5oV3uejj8381FVkDRddHZn8qs89BHeociRiWh8XGrMeouu0mH_Q_N

#PayPal Setting & API Credentials - live
# PAYPAL_LIVE_CLIENT_ID=
# PAYPAL_LIVE_CLIENT_SECRET=

```