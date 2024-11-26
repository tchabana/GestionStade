#!/bin/bash

# Variables
APP_DIR="/var/www/html/GestionStade"
REPO_URL="https://github.com/tchabana/GestionStade.git"
BRANCH="eve"


# Nom de la base de données
DB_NAME="gestionstade"

# Informations d'authentification MySQL
MYSQL_USER="root"
MYSQL_PASSWORD=""  # Ajoutez votre mot de passe si nécessaire, sinon laissez vide
MYSQL_HOST="localhost"

# Supprimer la base de données si elle existe
echo "Suppression de la base de données '$DB_NAME'..."
mysql -u $MYSQL_USER -h $MYSQL_HOST -e "DROP DATABASE IF EXISTS $DB_NAME;"

# Vérifier si la suppression a réussi
if [ $? -eq 0 ]; then
    echo "Base de données '$DB_NAME' supprimée avec succès."
else
    echo "Échec de la suppression de la base de données '$DB_NAME'."
    exit 1
fi

# Créer une nouvelle base de données
echo "Création de la base de données '$DB_NAME'..."
mysql -u $MYSQL_USER -h $MYSQL_HOST -e "CREATE DATABASE $DB_NAME;"

# Vérifier si la création a réussi
if [ $? -eq 0 ]; then
    echo "Base de données '$DB_NAME' créée avec succès."
else
    echo "Échec de la création de la base de données '$DB_NAME'."
    exit 1
fi


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

# Installer les dépendances Composer
echo "Installation des dépendances Composer..."
composer install --no-dev --optimize-autoloader

# Mettre à jour le fichier .env
if [ ! -f ".env" ]; then
    echo "Création du fichier .env..."
    cp .env.example .env
fi

# Générer la clé Laravel
echo "Génération de la clé Laravel..."
php artisan key:generate

# Migration de la base de données
echo "Migration de la base de données..."
php artisan migrate --force

# Permissions
echo "Configuration des permissions..."
chmod -R 775 storage bootstrap/cache
chown -R www-data:www-data $APP_DIR
sudo npm install
sudo npm run build
# Redémarrer les services nécessaires
echo "Redémarrage du serveur web..."
sudo systemctl restart apache2

echo "---- Déploiement terminé ----"
