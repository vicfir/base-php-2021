<?php
    var_dump($_POST)
?>

<html>
    <head>
        <title>Livre d'or sur une page</title>
    </head>
    <body>
        <h1>Livre d'or sur une page</h1>
        <form name="goldenbook" method="post" action="">
            <input type="text" name="thename" placeholder="Votre nom" required><br>
            <textarea name="thetext" placeholder="Votre texte" required></textarea><br>
            <input type="submit" value="Envoyer"><br>
        </form>
    </body>
</html>