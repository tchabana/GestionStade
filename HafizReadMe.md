
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



# APP_DIR="/var/www/html/GestionStade"
# REPO_URL="https://github.com/tchabana/GestionStade.git"
# BRANCH="eve"


# Nom de la base de données
#DB_NAME="gestionstade"

# Informations d'authentification MySQL
# MYSQL_USER="root"
# MYSQL_PASSWORD=""  # Ajoutez votre mot de passe si nécessaire, sinon laissez vide
# MYSQL_HOST="localhost"

# Supprimer la base de données si elle existe
# echo "Suppression de la base de données '$DB_NAME'..."
# mysql -u $MYSQL_USER -h $MYSQL_HOST -e "DROP DATABASE IF EXISTS $DB_NAME;"

# # Vérifier si la suppression a réussi
# if [ $? -eq 0 ]; then
#     echo "Base de données '$DB_NAME' supprimée avec succès."
# else
#     echo "Échec de la suppression de la base de données '$DB_NAME'."
#     exit 1
# fi

# # Créer une nouvelle base de données
# echo "Création de la base de données '$DB_NAME'..."
# mysql -u $MYSQL_USER -h $MYSQL_HOST -e "CREATE DATABASE $DB_NAME;"

# # Vérifier si la création a réussi
# if [ $? -eq 0 ]; then
#     echo "Base de données '$DB_NAME' créée avec succès."
# else
#     echo "Échec de la création de la base de données '$DB_NAME'."
#     exit 1
# fi
