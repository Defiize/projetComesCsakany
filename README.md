# ProjetCsakanyComes
Notre Projet cours Web

# PROJET Emploi Du Temps (EDT)
## Descriptif
Projet réalisé dans le module Programmation Web Avancée de la Licence Professionnelle Programmation Avancée.

## Auteurs
- Benjamin Csakany benjamincsa@laposte.net
- Arthur Comes arthur.40500@gmail.com

## Librairies supplémentaires utilisées
- [Vuetify](https://vuetifyjs.com/en/) pour les composants graphiques de l'emploi du temps.

## Installation
- Exécuter dans un terminal la commande `git clone https://github.com/Defiize/projetComesCsakany` pour obtenir une version locale du projet dans un dossier nommé "edt".
- Exécuter dans un terminal la commande `cd projetComesCsakany` puis ` composer install` pour installer les dépendances du projet.
- Un docker-composer se trouve a la racine pour la BDD, pour l'utiliser faite `docker-compose up`. 
- Un dump SQL se trouve dans la racine pour insérer un jeux de données, sinon vous pouvez les créer avec le panneau d'administration.
- modifier le fichier `.env` et modifier la ligne 27 pour connecter le projet à une base de donnée.
- Exécuter dans un terminal la commande `php bin/console doctrine:schema:update --force` pour créer le schéma de la BDD.
- Exécuter dans un terminal la commande `cd public` puis `php -S localhost:8800` pour lancer le back-end de l'application.
- Se rendre à l'URL `http://localhost:8800/agenda.html` pour lancer l'interface du projet.
- L'interface d'administration est accessible à l'URL `http://localhost:8800/admin`.
- L'interface de visionnage des professeurs et leur avis est accessible à l'URL `http://localhost:8800/edt.html`.


## Points d'entrées des API
- `GET` /api/salles : Obtenir toutes les salles de la base de données.
- `GET` /api/cours : Obtenir tous les cours de la base de données. 
- `GET` /api/cours/{annee1}/{mois1}/{jour1}/{annee2}/{mois2}/{jour2} : Obtenir tous les cours de la base de données, compris entre les deux dates passées en parametre
- `GET` /api/professeurs : Obtenir tous les professeurs.
- `GET` /api/professeurs/id : Obtenir un professeur par l'id passé en paramètre.
- `GET` /api/professeurs/id/avis : Obtenir les avis d'un professeur.
- `POST` /api/professeurs/id/avis : Créer un avis pour un professeur, le corps de la requête doit contenir les champs "note", "commentaire", "emailEtudiant".
- `GET` /api/avis : Obtenir tous les avis de tous les professeurs.
- `PATCH` /api/avis/id : Modifier un avis pour un professeur.
- `DELETE` /api/avis/id : Supprimer un avis pour un professeur.

## Fonctionnalités supplémentaires développées
- Ajout de deux validateurs personnalisés sur les cours :
  -- `src\Validator\EstDateDispo`, vérifier que aucun cours n'a lieu dans la salle renseigné lors de la création du cours.
  -- `src\Validator\ProfesseurLibre`, vérifie que le professeur n'as pas d'autre cours sur le même horaire lors de la création d'un cours
- Le calendrier peut s'afficher suivant plusieurs configurations : Jours / mois / semaine 
- Cliquer sur un cours pour afficher des infos supplémentaire
- En cliquant sur un cours on peut laisser un avis sur le professeur du cours
- En cliquant sur un cours on peut cliquer sur le coeurs pour liker le cours
- Le nombre de like total est affiché dans les infos du cours
- Les cours sont colorisé suivant le type de cours : TD / TP / cours.
- En cliquant sur un cours on peut cliquer sur les Avis du professeur pour être rediriger sur la page edt.html pour voir les avis du professeur

