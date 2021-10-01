<?php 
// chargement du fichier de configuration, le require_once ne permet pas l'erreur (exit immédiat) et surtout ne charge le fichier qu'une seule fois !!! (sinon erreur des constantes redéfinies)
require_once "config.php";

// debug post
//var_dump($_POST);

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
    $mail = filter_var($_POST['email'],FILTER_VALIDATE_EMAIL);

    // le message
    $message = htmlspecialchars(strip_tags(trim($_POST['msg'])),ENT_QUOTES);

    // si au moins un des champs est vide (ou invalide)
    if(empty($pseudo)||empty($mail)||empty($message)){
        $themessage = "Un de vos champs est invalide, veuillez recommencer";
    // sinon si une des longueurs de champs est dépacée    
    }elseif(strlen($pseudo)>30 || strlen($mail)> 50 || strlen($message)> 1000){
        $themessage = "Un de vos champs dépasse la longueur maximale";
    // on peut insérer l'article    
    }else{
        // connexion
        $connectDB = @mysqli_connect(DB_HOST, DB_USER, DB_PWD, DB_NAME, DB_PORT);

        // erreur de connexion
        if (!$connectDB) {
            die("Problème lors de la connexion :" . mysqli_connect_error());
        }

        // charset de communication entre le serveur PHP et le serveur SQL
        mysqli_set_charset($connectDB,DB_CHARSET); 


        // requêtes SQL
        $sql = "INSERT INTO messages(pseudo,email,msg,date_msg)
        VALUES('$pseudo','$mail','$message',NOW());";

        // insertion, le $insert contient true si l'insertion a fonctionnée, false sinon
        $insert = mysqli_query($connectDB,$sql);

        // insertion ok
        if($insert){
            $themessage = "Votre message a bien été inséré dans la DB";
        }else{
            $themessage = "Votre message n'a pas été inséré dans la base de donnée ! ".mysqli_error($connectDB);
        }

    }


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

        <main>
            <?php
            if(isset($themessage)):
            ?>

            <h3 id="themessage"><?=$themessage?></h3>

            <?php
            endif;
            ?>
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
                <textarea name="msg" id="msg" maxlength="1000" placeholder="Entrez ici votre message" required></textarea>
                </div>
                <div class="envoi">
                <input type="submit" value="Envoyer ce message" />
                </div>
            </form>
        </main>
        <footer>
            <?php include "footer.php" ?>
        </footer>
    </body>
</html>