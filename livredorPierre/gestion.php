<?php 
// chargement du fichier de configuration, le require_once ne permet pas l'erreur (exit immédiat) et surtout ne charge le fichier qu'une seule fois !!! (sinon erreur des constantes redéfinies)
require_once "config.php";

// connexion en mysqli
$connectDB = @mysqli_connect(DB_HOST, DB_USER, DB_PWD, DB_NAME, DB_PORT);

// ceci est un gestionnaire d'erreur
if (!$connectDB) {
    die("Problème lors de la connexion :" . mysqli_connect_error());
}

// si on est ici, c'est qu'on a pu se connecter ! (le die() n'a pas été enclenché)

// on change le charset de communication entre le serveur sql et le serveur php
mysqli_set_charset($connectDB,DB_CHARSET);

// création d'une variable contenant notre requête sql (en SQL donc!)
$sql = "SELECT *
FROM messages
ORDER BY date_msg DESC;";

// on effectue la requête SQL avec mysqli_query($varDeConnexion,"DU SQL")
$requestDB = mysqli_query($connectDB, $sql) or die("Problème lors de la requête de sélection des messages: " . mysqli_error($connectDB));

// on récupère le nombre de ligne de résultats avec mysqli_num_rows($requete)
$nbMessage = mysqli_num_rows($requestDB);

// si on a au moins un message (0=> false, 1 ou plus => true)
if($nbMessage){
    // si on a un message OU plusieurs messages, on va toujours utiliser les mysqli_fetch_all avec le flag: MYSQLI_ASSOC - mysqli_fetch_all crée TOUJOURS un tableau indexé, CONTENANT le type de variables choisis via le flag (constantes MYSQLI_ASSOC)
    $messages = mysqli_fetch_all($requestDB,MYSQLI_ASSOC);
    var_dump($messages);
}

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Gestion des messages</title>
        <link type="text/css" rel="stylesheet" href="livre.css" />
    </head>
    <body>
        <nav>
            <?php
            // on importe le fichier contenant le menu
            include "menu.php";
            ?>
        </nav>
        <header>
            <h1>Gérer les messages</h1>
        </header>
        <main>
            <!-- Pour supprimer un message de la liste, on a une requête comme :
            DELETE FROM messages WHERE id=4;
            -->
            <!-- Pour récupérer toutes les données de la table
            On a besoin d'un requête comme :
            SELECT * FROM messages ORDER BY date_msg DESC;
            -->
            <!-- Pour modifier le texte d'un message sur le 1er enregistrement
            UPDATE messages
            SET msg="Nouveau Message corrigé"
            WHERE id=1;     si on veut modifier le 1er message
            -->
            <table class="admin">
                <!-- Rangée avec les titres des colonnes du tableau -->
                <tr>
                    <th>id</th>
                    <th>Pseudo</th>
                    <th>Email</th>
                    <th>Message</th>
                    <th>Date-Heure</th>
                    <th></th>
                </tr>
                <!-- Rangées de contenu -->
                <tr>
                    <td>3</td>
                    <td>André</td>
                    <td>andre.palmisano@cf2m.be</td>
                    <td>Hello les gars !</td>
                    <td>08-09-2021 11:32:51</td>
                    <td>Supprimer</td>
                </tr>
                
            </table>
        </main>
        <footer>        
            <?php include "footer.php" ?>
        </footer>

    </body>
</html>