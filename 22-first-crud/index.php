<?php

/*
Contrôleur Frontal
Toutes les pages publiques sont appelées par celle-ci (1 entrée = 1 sortie) 
*/

// Chargement des dépendances (si faute erreur fatale, arrêt du script, ne peut être chargé qu'une X)
require_once("config.php");

// nos fonctions
require_once("functions.php");



// Connexion en mysqli à notre base de donnée (désactivation du warning avec le @)
$db = @mysqli_connect(MDB_HOST,MDB_USER,MDB_PWD,MDB_NAME,MDB_PORT);

// si la connexion a échouée
if(!$db){ // ($db==false)
    // arrêt du script, et affichage du message d'erreur personnalisé avec mysqli_connect_error() (utf8_encode sert à voir les accents en français)
    die("Erreur de connexion : ".utf8_encode(mysqli_connect_error()));
}

// on indique à notre connexion qu'on va conversé entre PHP et MySQL en UTF-8
mysqli_set_charset($db,MDB_CHARSET);

/*
Création du routeur vers les pages se trouvant dans 'public_page'
*/

// si il existe une variable GET nommée 'page'
if(isset($_GET['page'])){

    // si on est dans la white liste (voir PUBLIC_PAGE dans config.php), utilisation de la commande in_array("recherché","array")=> true si dans la liste, false sinon
    if(in_array($_GET['page'],PUBLIC_PAGE)){

        // appel du fichier souhaité
        include "public_page/".$_GET['page'].".php";
    }else{
        // appel de l'erreur 404 
        include "public_page/erreur404.php";
    }

// pas de variable $_GET['page'], nous sommes sur l'accueil    
}else{
    // appel de l'accueil 
    include "public_page/home.php";
}

/*
Ces fonctions sont utiles pour les connexions persistantes, ou les requêtes très lourdes en ressources.
Je les mets à titre informatif
*/

/* Libération des résultats d'une requête */
// mysqli_free_result($result);

// on ferme notre connexion (utile surtout si connexions permanentes activées) - Bonne pratique mais non indispensable
mysqli_close($db);