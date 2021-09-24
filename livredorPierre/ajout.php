<?php 
// chargement du fichier de configuration, le require_once ne permet pas l'erreur (exit immédiat) et surtout ne charge le fichier qu'une seule fois !!! (sinon erreur des constantes redéfinies)
require_once "config.php";

// debug post
var_dump($_POST);

// si le formulaire a été envoyé => si la superglobale $_POST n'est pas vide
if(!empty($_POST)){
    // récupération en variables locales des variables $_POST

    // le pseudo
    $pseudo = $_POST['pseudo'];
    
    // on retire les espaces vides devant et derrière la chaîne
    $pseudo = trim($pseudo);
    
    // on retire toutes les balises html, javascript etc... 
    $pseudo = strip_tags($pseudo);
    
    // on va encoder en html tous les caractères spéciaux qui pourraient poser problèmes, on utilise ENT_QUOTES comme flag, pour convertir les " et ' guillemets
    $pseudo = htmlspecialchars($pseudo,ENT_QUOTES);

    // le mail , on utilise un filtre de variable tout fait (renvoie l'adresse si true, false si false)
    $mail = filter_var($_POST['mail'],FILTER_VALIDATE_EMAIL);

    // le message
    $message = htmlspecialchars(strip_tags(trim($_POST['msg'])),ENT_QUOTES);


}

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Ajouter un nouveau message</title>
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
            <h1>Ajouter un message</h1>
        </header>
        <!-- Pour introduire un nouvel enregistrement dans la table des messages
        On a besoin d'une requête comme :
        INSERT INTO messages
        VALUES(NULL,'mon pseudo','mon email','mon message',NOW());
        ou bien
        INSERT INTO messages(pseudo,email,msg,date_msg)
        VALUES('mon pseudo','mon email','mon message',NOW());
        -->
        <main>
            <form method="POST" action="">
                <div class="nom">
                <label for="pseudo">Pseudo</label>
                <input type="text" name="pseudo" id="pseudo" maxlength="30" placeholder="Entrez votre pseudo (max 30 caractères)" required />
                </div>
                <div class="email">
                <label for="email">E-mail</label>
                <input type="email" name="email" id="email" maxlength="50" placeholder="Entrez votre e-mail" required />
                </div>
                <div class="message">
                <label for="msg">Message</label>
                <textarea name="msg" id="msg" placeholder="Entrez ici votre message" required></textarea>
                </div>
                <div class="envoi">
                <input type="submit" value="Envoyer ce message" />
                </div>
            </form>
        </main>
        <footer>
            <p>Réalisé par Pierre, dans le cadre de la formation Web Développeur du CF2m</p>
        </footer>
    </body>
</html>