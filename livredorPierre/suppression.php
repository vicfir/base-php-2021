<?php

/*
Chargement des dépendances
*/

require_once "config.php";
require "functions.php";

// connexion en mysqli procédural
$connectDB = @mysqli_connect(DB_HOST, DB_USER, DB_PWD, DB_NAME, DB_PORT);

if (!$connectDB) {
    die("Problème lors de la connexion :" . mysqli_connect_error());
}

// on change le charset de communication entre le serveur sql et le serveur php
mysqli_set_charset($connectDB,DB_CHARSET);

// si il existe une variable get nommée idmessage et qu'elle ne contient que du numérique
if(isset($_GET['idmessage']) && ctype_digit($_GET['idmessage'])){

    // transformer la variable get en locale et la typé en int
    $id = (int) $_GET['idmessage'];
    
    //var_dump($id);

    // création d'une variable contenant notre requête sql (en SQL donc!)
    $sql = "SELECT *
    FROM messages
    WHERE id = $id;";


    $requestDB = mysqli_query($connectDB, $sql) or die("Problème lors de la requête de sélection des    messages: " . mysqli_error($connectDB));

    // on récupère le nombre de ligne de résultats avec mysqli_num_rows($requete)
    $nbMessage = mysqli_num_rows($requestDB);

    // si on a un message
    if($nbMessage){

        // ET si on a cliqué sur supprimer
        if(isset($_GET['delete'])){
            // création de la suppression
            $sql = "DELETE FROM messages WHERE id = $id;";

            $delete = mysqli_query($connectDB,$sql);

            if($delete){
                header("Location: ./gestion.php");
                exit();
            }else{
                header("Location: ./");
                exit();
            }
        }

        // on récupère un tableau associatif avec la valeur
        $message = mysqli_fetch_assoc($requestDB);
        //var_dump($message);
    }else{
        // redirection vers l'accueil
        header("Location: ./");
        exit(); // au cas ou le serveur est réglé pour lire toute la page avant de rediriger, on arrête la lecture de la page
    }

// sinon on a pas les informations nécessaires pour l'effacement    
}else{
    // redirection vers l'accueil
    header("Location: ./");
    exit(); // au cas ou le serveur est réglé pour lire toute la page avant de rediriger, on arrête la lecture de la page
}



?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Mon livre d'or - suppression</title>
    <link type="text/css" rel="stylesheet" href="livre.css" />
</head>

<body>
    <nav>
        <?php
        // on importe le fichier contenant le menu, autant de fois qu'on le souhaite, et permet l'erreur (affichage du reste de la page)
        include "menu.php";

        ?>
    </nav>
    <header>
        <h1>Supprimer un message</h1>
    </header>
    <main>


        <!-- Cette section doit être affichée quand il y a des messages dans la DB -->
        <section class="msgs">

            <h2>Suppression du message de <?=$message['pseudo']?> ?</h2>
            <h3>Attention, il sera définitivement supprimé!</h3>
            <article>
                <!-- titre contient le pseudo -->
                <h3><?=$message['pseudo']?></h3>
                <!-- div avec le contenu du message -->
                <div><?=$message['msg']?></div>
                <!-- date et heure de création du message + changement en français -->
                <p>Ecrit <?=mb_strtolower(frenchDate($message['date_msg']));// le strtolower met les majuscules en minuscule, le mb_strtolower fonctionne avec les langues étrangères (non EN)?></p>
            </article>
            <div >
            <a href="?idmessage=<?=$message['id']?>&delete=ok"><button type="button">OUI</button></a> - <a href="gestion.php"><button type="button">NON</button></a>
            </div>
        </section>

    </main>

    <footer>
        <?php include "footer.php" ?>
    </footer>
</body>

</html>