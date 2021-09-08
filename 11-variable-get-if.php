<?php

// variable de contenu
$pages = [
    1 => [
        "titre" => "Page d'accueil",
        "texte" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quis incidunt voluptas, rerum, veniam soluta aliquam qui quae quia sunt laudantium excepturi exercitationem esse recusandae nisi unde! Nam placeat nostrum mollitia.",
    ],
    2 => [
        "titre" => "Contact",
        "texte" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem, dignissimos ullam, voluptates, molestiae laboriosam quidem culpa ab deleniti ea eum eius? Natus ab saepe tempore non sequi unde amet eveniet!",
    ],
    3 => [
        "titre" => "Achats",
        "texte" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsum quo blanditiis, pariatur optio sapiente iure aliquid cumque minima at laudantium nulla quisquam quas doloremque culpa odio soluta enim provident eum.",
    ],

];

// si il existe la variable get idpage
if(isset($_GET['idpage'])){

    if($_GET['idpage']==1){
        $title = $pages[1]["titre"];
        $texte = $pages[1]["texte"];
    } // ... sinon si

// EXERCICE ICI (si le chiffre n'existe pas, on affiche l'accueil)

    // page 2
    elseif($_GET['idpage']==2){
        $title = $pages[2]["titre"];
        $texte = $pages[2]["texte"];
    }

    // page 3
    elseif($_GET['idpage']==3){
        $title = $pages[3]["titre"];
        $texte = $pages[3]["texte"];
    }

    // n'importe quel autre chiffre ou chaîne: on affiche l'accueil
    else{
        $title = $pages[1]["titre"];
        $texte = $pages[1]["texte"].'<br><h3>Mauvaise URL pour la variable $_GET[\'idpage\'] = '.$_GET['idpage']."</h3>";
    }



// page d'accueil par défaut    
}else{
    $title = $pages[1]["titre"];
    $texte = $pages[1]["texte"];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables Get et contenu différent</title>
</head>
<body>
    <h1>Variables Get et contenu différent</h1>
    <p>La variable $_GET existe toujours par défaut, c'est un tableau vide</p>
    <p>Les clefs sont les variables d'url et les contenus suivent toujours le signe = et sont au format texte (string) </p>
    <p><a href="http://base-php-2021:8080/11-variable-get-if.php?var1=5&var2=coucou&var3=true">exemple</a></p>
<?php var_dump($_GET) ?>
    <nav><a href="?idpage=1">Accueil</a> - <a href="?idpage=2">Contact</a> - <a href="?idpage=3">Achats</a> -</nav>
    <h2><?=$title?></h2>
    <p><?=$texte?></p>
</body>
</html>
