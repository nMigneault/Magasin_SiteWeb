Magasin_SiteWeb
===============
Gestion d’un panier d’achats Site Web utilisant PHP, MySQL, HTML, CSS et JavaScript.
Projet scolaire, équipe de 2 personnes, durée approx 20 jours à temps partiel.

Spécifications
--------------
Le projet est développé dans VS Code. Il utilise une base de données MySQL pour ses données.

La base de données s'appelle *panier*, et l'application utilise le compte root pour s'y connecter. 
Le script SQL de création de la BD est fourni dans le répertoire principal (create_panier_insert_products.sql).

#### Configuration du serveur MySQL
Il réside sur la même machine que l'application (localhost) et utilise une configuration basique WAMP : 
le compte *root est sans mot de passe et le port d'écoute est le 3306* (port TCP par défaut).

Description
-----------
Le site Web est développé selon le cadre MVC (Modèle-Vue-Contrôleur), en utilisant la programmation orientée objet.
Les vues sont écrites avec un gabarit de page. Ce gabarit contient un menu de navigation et un pied de page, qui 
affiche la date du jour et la date de la dernière modification.
