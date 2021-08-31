<?php
<<<<<<< HEAD
    var_dump($_POST)
?>

<html>
    <head>
        <title>Livre d'or sur une page</title>
=======
// $_POST existe par défaut en tant que tableau, lorsqu'on récupère un formulaire, il devient un tableau associatif contenant les valeurs
// var_dump($_POST);
// connexion à la DB
$connexionDB = mysqli_connect("localhost", "root", "", "exe9", 3307);

// communication entre php et mysql en utf8
mysqli_set_charset($connexionDB, "utf8");

// si le formulaire est envoyé
if (!empty($_POST)) { // non vide
    // sécurité minimale des variables post vers la locale
    $thetext = htmlspecialchars(strip_tags(trim($_POST['thetext'])), ENT_QUOTES);
    $thename = htmlspecialchars(strip_tags(trim($_POST['thename'])), ENT_QUOTES);

    // si les variables ne sont pas vides
    if (!empty($thename) && !empty($thetext)) {
        // insertion dans la DB
        mysqli_query($connexionDB, "INSERT INTO goldenbook (thename,thetext) 
                                    values ('$thename','$thetext')");
    }
}


// récupération des commentaires de la table goldenbook
$recupComments = mysqli_query($connexionDB, "SELECT * FROM goldenbook ORDER BY thedate DESC;");

// on va compter le nombre de commentaires récupérés
$nbComment = mysqli_num_rows($recupComments);

// transformation des données en tableau associatif
$datasComment = mysqli_fetch_all($recupComments, MYSQLI_ASSOC);
?>
<html>
    <head>
        <title>Livre d'or sur une page</title>
        <meta charset="utf-8">
>>>>>>> 9154b612a7e6ad5ee006fcc31081b5f0bf34c6f8
    </head>
    <body>
        <h1>Livre d'or sur une page</h1>
        <form name="goldenbook" method="post" action="">
<<<<<<< HEAD
            <input type="text" name="thename" placeholder="Votre nom" required><br>
            <textarea name="thetext" placeholder="Votre texte" required></textarea><br>
            <input type="submit" value="Envoyer"><br>
        </form>
    </body>
</html>
=======
            <input type="text" name="thename" placeholder="Votre nom" required /><br> 
            <textarea name="thetext" placeholder="Votre texte" required></textarea><br> 
            <input type='submit' value='Envoyer'/><br>
        </form>
        <h3>Nous avons <?= $nbComment ?> commentaires</h3>
<?php
// var_dump($datasComment);
foreach ($datasComment as $item):
    ?>
            <h4><?= $item['thename'] ?></h4>
            <p><?= $item['thetext'] ?></p>
            <p>Le <?= $item['thedate'] ?></p><hr>
    <?php
endforeach;
?>
    </body>
</html>

>>>>>>> 9154b612a7e6ad5ee006fcc31081b5f0bf34c6f8
