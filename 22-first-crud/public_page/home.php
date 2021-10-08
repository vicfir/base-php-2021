<?php
/*
Page d'accueil, doit passer par index.php (CF)
*/

// on va récupérer tous les articles avec le texte à maximum 220 caractères, avec l'utilisateur qui l'a écrit (voir datas/crud01-requests-test.sql)
$sql="SELECT a.idthearticle, a.thearticletitle, SUBSTR(a.thearticletext,1,250) AS thearticletext, a.thearticledate,
             u.idtheuser, u.theuserlogin
    FROM thearticle a
        INNER JOIN  theuser u 
            ON u.idtheuser = a.theuser_idtheuser
    ORDER BY a.thearticledate DESC;";

// on effectue la requête
$recup = mysqli_query($db,$sql) or die("Erreur lors de la requête :".mysqli_error($db));

// on va vérifier si on au moins un article (on compte le nombre de lignes de résultats)
$nbArticle = mysqli_num_rows($recup);

// si le résultat est vide ($nbArticle===0)
if(empty($nbArticle)){
    $vide = "Il n'y a pas encore d'article sur ce site";
}else{
    // conversion dans un format lisible pour PHP, le mysqli_fetch_all nous donne un tableau indexé contenant des tableaux associatifs grâce au flag (constante) MYSQLI_ASSOC
    $result = mysqli_fetch_all($recup, MYSQLI_ASSOC);
    // var_dump($result);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First CRUD | Home</title>
</head>
<body>
    <h1>First CRUD | Home</h1>
</body>
</html>