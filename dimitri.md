### DOCS JETSTREAM

```
jetstream est un package de laravel tout comme  breeze et tant d'autre
```

### Installation
```bash
Pour installation rien de bien compliquer que suivre la documentation de laravel 10.

Jetstream est basé sur le starte kit qui utiliser a 100% le framework de CSS qui est tailwind. Également structure en composant grace au framework Alpine.

Sa puissant reside en l'utilisation de package de rendue telque inertia ou livewire
```

### Après installation 
```bash
se rendre dans :

database/migration

# puis supprimer une migration qui s'est dupliquée pendant l'installation 

----------cette migration porte le nom de (sessions)
```


### COMMANDES À INSTALLER

```php
npm install flowbite
```
### PRINCIPE DE CRÉATION DES COMPOSANTS

```bash
# Pour créer un composant : 
php artisan make: component nom_du_composant
```
### COMMENT UTILISER UN COMPOSANT

```
Pour utitliser un composant il faut : 
dans : app/views/components 

--Vous allez voir le composant qui vient d'être créer
--Dedans on a une methode render() qui retourne une view
--Puis definisser donc la view que doit retourner cette view

                on es bon

dans : resources/views/

--Créer un dossiers qui contiendra le fichier du composant que vous 
    aurez à créer
--Le fichier.blade.php que vous créer contient tout le code source de html
--En suite vous prenez juste une partie que vous allez déclarer 
        {{ $slot }}

***** IL a sagit du fichier parent 
***** Maitenant au niveau du fichier enfant 
<x-app-layout>

</x-app-layout>
``````
```bash
# SYSTEME DE PAGINATION

Pour faire la pagination il suffit de taper la commande suivante

php artisan vendor:publish
#Alors un terminal supplementaire apparaitra et choissiez 
laravel-pagination .........................n (n étant le nombre que vous devez saisiz dans le terminal)

~ a présent se rendre dans le fichier pour faire toutes vos modifications

resources/view/vendor/tailwind.blade.php
```
```bash
#UTILISATION DE LA PAGINATION DANS LES VUES DE BLADE

Pour utiliser cette pagination je suppose déjà que vous aurez utiliser la méthode paginator dans le controller correspondant

En suite vous recuperer la clé de l''objet sur lequel vous voulez itérer puis, dans la vue ou vous voulez afficher la pagination vous faite donc ceci.

            {{ $variable_objet->onEachSide(1)->links() }}

# onEachSide(1) pour dire le premier 1 est de style different pendant l'afffichage

```


### OUVERTURE DE SESSIONS EN FONCTION DE L'UTILISATEURS

```bash
#IL je dirai plutôt que c'est une decouverte

La logique voudrais qu'on aille dans le : 

app/providers/RouteServiceProvider.php
```
```bash
Pour definir le comportement de la vue en fonction du type d'utilisateur
```
```bash
Ce que nous avons apprie et preconisons c'est de créer completement tout le dashbord avec toutes sortes de fonctionnalités  en suite Spatie nous fournit certaines méthodes pour le même dashbord de filtrer en fonction de l'utilisateur (qui peut faire telle action ou qui peux voir cette fonctionalité)
```

### LIMITATION DES CARACTÈRES DANS LE RENDU D'UNE VUE
```bash
Nous pouvons le faire en deux endroit: 

------------Niveau front ----------------------
{{ substr($iterateur->message, 0, 100) }}

(0, 100 il s'agit d'un intervalle en faite de 0 à 100 caractères)

------------Niveau back ----------------------
$table->type("_nom_attribut_", limitation);
```

### SYSTEME D'UPLOAD AND STORE FILE

### Frontend
```bash
Cette partie du code que nous utilisons pour charger d'abord l'image avant sa soumission reste valable peut import le type de framework

# Pour se faire
<form action=" enctype="multipart/form-data"> 

(il s'agit que du html pure qui support plusieur type de donné et même les images)
```
```html
<div >
    <div>
        <input type="file" name="image_path" onchange="afficheImage(event)"  accept=".png, .jpg, .jpeg, .gif, .svg">
    </div>

    <div class="ims">
        <label for="">Image</label>
        <img  src=""  class="img-product" id="file-preview">
    </div>
</div>
```

```javascript
function afficheImage(event){
    let entrer = event.target;
    let reader = new FileReader();
    reader.onload = function(){
        let dataUrl = reader.result;
        let output = document.getElementById('file-preview');
        output.src = dataUrl;
    };
    reader.readAsDataURL(entrer.files[0]);
}
```

```bash
# onchange="afficheImage(event)" pour pouvoir charger de l'image 
# accept=".png, .jpg, .jpeg, .gif, .svg"  ou accept="*"
```

### Backend (Pour le framework laravel 10)
