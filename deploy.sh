#!/bin/bash

APP_DIR="/var/www/html/GestionStade"
REPO_URL="https://github.com/tchabana/GestionStade.git"
BRANCH="eve"
DB_FILE="$APP_DIR/database.sqlite"
ENV_FILE="$APP_DIR/.env"

echo "---- Début du déploiement ----"

# Aller à la racine du projet ou cloner si inexistant
if [ -d "$APP_DIR" ]; then
    echo "Répertoire trouvé. Mise à jour..."
    cd $APP_DIR
    git pull origin $BRANCH
else
    echo "Clonage du dépôt..."
    git clone $REPO_URL $APP_DIR
    cd $APP_DIR
fi

# Supprimer et recréer le fichier database.sqlite
echo "Réinitialisation de la base de données SQLite..."
if [ -f "$DB_FILE" ]; then
    rm "$DB_FILE"
    echo "Ancien fichier database.sqlite supprimé."
fi
touch "$DB_FILE"
echo "Nouveau fichier database.sqlite créé."

# Configurer le fichier .env
echo "Configuration du fichier .env..."
if [ ! -f "$ENV_FILE" ]; then
    echo "Création du fichier .env..."
    cp .env.example $ENV_FILE
fi

# Fonction pour mettre à jour ou ajouter une variable dans .env
update_env() {
    local key=$1
    local value=$2

    if grep -q "^$key=" "$ENV_FILE"; then
        sed -i "s|^$key=.*|$key=$value|" "$ENV_FILE"
    else
        echo "$key=$value" >> "$ENV_FILE"
    fi
}

update_env "DB_CONNECTION" "sqlite"
update_env "DB_DATABASE" "$DB_FILE"
update_env "DB_HOST" "127.0.0.1"
update_env "DB_PORT" "3306"
update_env "DB_USERNAME" "null"
update_env "DB_PASSWORD" "null"

echo "Fichier .env mis à jour avec succès."

# Installer les dépendances Composer
echo "Installation des dépendances Composer..."
composer install --no-dev --optimize-autoloader

# Générer la clé Laravel
echo "Génération de la clé Laravel..."
sudo php artisan key:generate

# Migration de la base de données
echo "Migration de la base de données..."
sudo php artisan migrate --force
sudo chmod 777 composer.*
sudo composer require fakerphp/faker
sudo php artisan db:seed
sudo php artisan storage:link

# Configurer les permissions
echo "Configuration des permissions..."
chmod -R 775 storage bootstrap/cache
chown -R www-data:www-data $APP_DIR

# Installer et compiler les ressources front-end
echo "Installation des dépendances NPM..."
sudo npm install
sudo npm run build

# Redémarrer le serveur web
echo "Redémarrage du serveur web..."
sudo systemctl restart apache2

echo "---- Déploiement terminé ----"
