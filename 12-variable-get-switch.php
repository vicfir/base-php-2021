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
    

    // on va utiliser le switch case pour réagir aux différentes ids : Il vérifie l'égalité non stricte (== et non ===), donc ("1" == 1) => true
    switch($_GET['idpage']){
        case 1 : 
            $title = $pages[1]["titre"];
            $texte = $pages[1]["texte"];
            break;
        case 2: 
            $title = $pages[2]["titre"];
            $texte = $pages[2]["texte"];
            break;
        case 3: 
            $title = $pages[3]["titre"];
            $texte = $pages[3]["texte"];
            break;
        default : 
            $title = "Erreur 404";
            $texte = "Touche pas mon URL !!!";
    }


// page d'accueil par défaut  (non existence de la variable $_GET['idpage'])   
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
    <h2>Le switch</h2>
    <p>
        <pre>if ($i == 0) {
    echo "i égal 0";
} elseif ($i == 1) {
    echo "i égal 1";
} elseif ($i == 2) {
    echo "i égal 2";
} else {
    echo "i vaut autre chose";
}

switch ($i) {
    case 0:
        echo "i égal 0";
        break;
    case 1:
        echo "i égal 1";
        break;
    case 2:
        echo "i égal 2";
        break;
    default: 
        echo "i vaut autre chose";
}</pre>
    </p>
    <h2><?=$title?></h2>
    <p><?=$texte?></p>
</body>
</html>