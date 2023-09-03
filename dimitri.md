### COMMANDES À INSTALLER

```php
npm install flowbite
php artisan serve
npm run dev

```
### PRINCIPE DE CRÉATION DES COMPOSANTS

```
Pour créer un composant : 
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



```
