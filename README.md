# Domotique-version-2017
Serveur domotique version 2017 avec 6 prises et 5 interrupteurs une extinction globale 

Serveur domotique piloté en 433MhZ avec un module WIFI : https://www.blog-de-michel.fr/domotique-en-433mhz-avec-le-wifi/

J'ai amélioré les fichiers pour avour un fichier ajax_unique.php et un fichier javascrip.js complet pour toutes mes commandes de prises (6) et les commandes d'interrupteurs (5) plus un volet commandé avec un Arduino aussi en 433Mhz : https://www.blog-de-michel.fr/domotique-en-433mhz/. Par contre j'ai pusiurs fichier index en html suivant le besoin. Un complet, un sans le volet, un avec le volet, un pour une prise spécifique qui éteint un raspberry avant de faire une coupure, un pour le bouton autonome. 

Comme il mets arrivé deux ou trois fois d'avoir un allumage interpestif...

Mais j'ai surtout changé la possibilité pour les interrupteurs d'avoir deux codes (ON et OFF) (avant un seul code faisait le on/off) comme cela, cela permet d'avoir dans la base de données la position mais aussi d'avoir une extinction de tout par l'envoie d'un code OFF sur toutes les commandes.
Donc pour cela j'ai ajouté un bouton permettant de mettre mon appartement en autonome quand je suis absent une tache CRON fait tourner toutes les 10mn un programme Python (autonome.py) comme cela si une lumière se rallume ou si une lumière est oubliée elle sera éteinte.

https://www.blog-de-michel.fr

