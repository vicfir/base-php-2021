<?php

/*
Contrôleur Frontal
Toutes les pages publiques sont appelées par celle-ci (1 entrée = 1 sortie) 
*/

// Chargement des dépendances (si faute erreur fatale, arrêt du script, ne peut être chargé qu'une X)
require_once("config.php");



// Connexion en mysqli à notre base de donnée (désactivation du warning avec le @)
$db = @mysqli_connect(MDB_HOST,MDB_USER,MDB_PWD,MDB_NAME,MDB_PORT);

// si la connexion a échouée
if(!$db){ // ($db==false)
    // arrêt du script, et affichage du message d'erreur personnalisé avec mysqli_connect_error() (utf8_encode sert à voir les accents en français)
    die("Erreur de connexion : ".utf8_encode(mysqli_connect_error()));
}