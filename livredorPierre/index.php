<?php

/*
Chargement des dépendances
*/

// chargement du fichier de configuration, le require_once ne permet pas l'erreur (exit immédiat) et surtout ne charge le fichier qu'une seule fois !!! (sinon erreur des constantes redéfinies)
require_once "config.php";

// chargement de nos fonctions (pas de bug si rechargement, sauf ralentissement léger, fichier important donc utilisation du require)
require "functions.php";

// connexion en mysqli procédural au serveur et à la DB en utilisant les constantes se trouvant dans config.php. le @ devant mysqli_connect() empèche l'affichage disgracieuse de l'erreur système, nous allons nous-même écrire l'erreur si il y en a une
$connectDB = @mysqli_connect(DB_HOST, DB_USER, DB_PWD, DB_NAME, DB_PORT);

// si on a un problème lors de la connexion, qui vaut alors false, on peut utiliser if(!connectDB) ou if(mysqli_connect_error()) ou if(mysqli_connect_errno())
// ceci est un gestionnaire d'erreur
if (!$connectDB) {
    // le die() arrête le script (exit()) et affiche le texte entre parenthèses
    die("Problème lors de la connexion :" . mysqli_connect_error());
}

// si on est ici, c'est qu'on a pu se connecter ! (le die() n'a pas été enclenché)

// on change le charset de communication entre le serveur sql et le serveur php
mysqli_set_charset($connectDB,DB_CHARSET);

// création d'une variable contenant notre requête sql (en SQL donc!)
$sql = "SELECT pseudo, msg, date_msg
FROM messages
ORDER BY date_msg DESC;";

// on effectue la requête SQL avec mysqli_query($varDeConnexion,"DU SQL"), le or die() avec le message d'erreur entre parenthèse sert à nous montrer l'erreur (débogage), en effet une erreur autre que de connexion en sql n'affichera aucune alerte. ! on affiche l'erreur avec mysqli_error($varDeConnexion) et pas mysqli_connect_error
$requestDB = mysqli_query($connectDB, $sql) or die("Problème lors de la requête de sélection des messages: " . mysqli_error($connectDB));

// on récupère le nombre de ligne de résultats avec mysqli_num_rows($requete)
$nbMessage = mysqli_num_rows($requestDB);

// si on a au moins un message (0=> false, 1 ou plus => true)
if($nbMessage){
    // si on a un message OU plusieurs messages, on va toujours utiliser les mysqli_fetch_all avec le flag: MYSQLI_ASSOC - mysqli_fetch_all crée TOUJOURS un tableau indexé, CONTENANT le type de variables choisis via le flag (constantes MYSQLI_ASSOC)
    $messages = mysqli_fetch_all($requestDB,MYSQLI_ASSOC);
    // var_dump($messages);
}

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Mon livre d'or</title>
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
        <h1>Lire les messages</h1>
    </header>
    <main>
        <div class="bouton">
            <a href="ajout.php">Ajouter un nouveau message</a>
        </div>
        <div class="">
            <p>On peut utiliser deux extensions en PHP pour gérer une base de donnée MySQL ou MariaDB : mysqli ou PDO. mysqli est choisi pour le moment car il peut être utilisé en précédural (pas le cas de PDO). ! <strong>mysqli</strong> est la version récente de mysql, qui est une extension encore présente et la plus ancienne, mais qui est vouée à disparaître. </p>
            <p>mysql | procédural:OK | Orienté Objet:NO</p>
            <p>--> mysqli | procédural:OK | Orienté Objet:OK</p>
            <p>PDO | procédural:NO | Orienté Objet:OK</p>
        </div>
        <!-- Cette section doit être affichée quand il n'y a encore aucun message -->
        <?php
        // pas de message empty vérifie si une variable est vide (0, "")
        if(empty($nbMessage)){
        ?>
            <section class="no-msg">
                <h2>Il n'y a pas de message à afficher</h2>
                <p>Utiliser le bouton "Ajouter un message" pour en créer un.</p>
            </section>
        <?php
        }else{
        ?>
        <!-- Cette section doit être affichée quand il y a des messages dans la DB -->
        <section class="msgs">

            <h2>Les derniers messages (<?=$nbMessage?>)</h2>
            <?php
            foreach($messages as $item):
            ?>
            <article>
                <!-- titre contient le pseudo -->
                <h3><?=$item['pseudo']?></h3>
                <!-- div avec le contenu du message -->
                <div><?=$item['msg']?></div>
                <!-- date et heure de création du message + changement en français -->
                <p>Ecrit <?=mb_strtolower(frenchDate($item['date_msg']));// le strtolower met les majuscules en minuscule, le mb_strtolower fonctionne avec les langues étrangères (non EN)?></p>
            </article>
            <?php
            endforeach;
            ?>
        </section>
        <?php
        }
        ?>
    </main>
    <nav>
        <?php

        // si on a plus de 4 messages
        if($nbMessage>4){ 
        // on importe le fichier contenant le menu en bas de page
            include "menu.php";
        }

        ?>
    </nav>
    <footer>
        <?php include "footer.php" ?>
    </footer>
</body>

</html>