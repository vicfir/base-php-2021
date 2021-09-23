<?php 
// chargement du fichier de configuration, le require_once ne permet pas l'erreur (exit immédiat) et surtout ne charge le fichier qu'une seule fois !!! (sinon erreur des constantes redéfinies)
require_once "config.php";

// connexion en mysqli procédural au serveur et à la DB en utilisant les constantes se trouvant dans config.php. le @ devant mysqli_connect() empèche l'affichage disgracieuse de l'erreur système, nous allons nous-même écrire l'erreur si il y en a une
$connectDB = @mysqli_connect(DB_HOST,DB_USER,DB_PWD,DB_NAME,DB_PORT);

// si on a un problème lors de la connexion, qui vaut alors false, on peut utiliser if(!connectDB) ou if(mysqli_connect_error()) ou if(mysqli_connect_errno())
// ceci est un gestionnaire d'erreur
if($connectDB===false){
    // le die() arrête le script (exit()) et affiche le texte entre parenthèses
    die("Problème lors de la connexion :".mysqli_connect_error());
}




// Connexion à la base de donnée avec mysqli procédural
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
<!--
            <section class="no-msg">
                <h2>Il n'y a pas de message à afficher</h2>
                <p>Utiliser le bouton "Ajouter un message" pour en créer un.</p>
            </section>
-->            
            <!-- Cette section doit être affichée quand il y a des messages dans la DB -->
            <section class="msgs">
                <!-- On a besoin d'un requête qui va renvoyer :
                le pseudo, le texte du message et la date/heure, pour tous les messages
                classés du plus récent jusqu'au plus ancien.
                    SELECT pseudo, msg, date_msg
                    FROM messages
                    ORDER BY date_msg DESC;
                -->
                <h2>Les derniers messages</h2>

                <article>
                    <!-- titre contient le pseudo -->
                    <h3>Message de André</h3>
                    <!-- div avec le contenu du message -->
                    <div>Hello les gars !</div>
                    <!-- date et heure de création du message -->
                    <p>Ecrit le 08-09-2021 11:32:51</p>
                </article>
                
            </section>
        </main>
        <nav>
            <?php
            // on importe le fichier contenant le menu, autant de fois qu'on le souhaite, et permet l'erreur (affichage du reste de la page)
            include "menu.php";

            ?>
        </nav>
        <footer>
            <p>Réalisé par Pierre, dans le cadre de la formation Web Développeur du CF2m</p>
        </footer>
    </body>
</html>