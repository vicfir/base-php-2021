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
            <form method="POST" action="ajout.php">
                <div class="nom">
                <label for="pseudo">Pseudo</label>
                <input type="text" name="pseudo" id="pseudo" maxlength="30" placeholder="Entrez votre pseudo (max 30 caractères)" />
                </div>
                <div class="email">
                <label for="email">E-mail</label>
                <input type="email" name="email" id="email" maxlength="50" placeholder="Entrez votre e-mail" />
                </div>
                <div class="message">
                <label for="msg">Message</label>
                <textarea name="msg" id="msg" placeholder="Entrez ici votre message"></textarea>
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