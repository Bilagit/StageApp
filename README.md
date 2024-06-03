<p align="center">Tutoriel d'installation</p>

<p align="center">
<p>Membres du groupe :</p>
<p>Ibrahima Bila DIOP</p>
<p>Ousseynou Seck</p>
<p>Abdou Aziz SY</p>
</p>

## Prérequis 

Pour utiliser notre application, ces outils doivent être installés dans votre machine: 
- Composer
- Php
- Une base de données MySQL ou SQLite
- npm

## Clonage

Clonez l'application en faisant => git clone https://github.com/Bilagit/StageApp.git

## Installation des dépendances

Placez vous au niveau du répertoire StageApp et faites:
- npm install
- composer install

## Configuration 
Assurez vous que votre serveur de base de données est en marche ensuite suivez ces étapes : 

- Renommez le fichier .env.example en .env au niveau de la racine indiquer quelle base de données utiliser et saisissez les informations de votre base de données.
- Ensuite au niveau de la console placez vous dans la racine du projet et faites => php artisan migrate

## Démarrage

Pour démarrer le serveur au niveau de votre console faites => php artisan serve
Ouvrez une nouvelle console et placez vous bien sûr dans le dossier du projet et faites => npm run dev 
Cela démarrera le serveur Vite 

