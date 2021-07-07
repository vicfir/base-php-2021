<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array - Les tableaux</title>
</head>
<body>
    <h1>Array - Les tableaux</h1>
    <p>Le tableau est une variable permettant de contenir plusieures valeurs et sur plusieures niveaux</p>
    <h2>Les tableaux indexés</h2>
    <p>Un tableau est créé avec la fonction array(), Il permet de stocker de multiples valeurs.<br> Les clef sont automatiquement attribuées et sont des int qui commencent à 0 !</p>
    <?php
    // écriture complète, on ne donne pas de clef mais que des valeurs
    $eleves = array("Aurélie",
                    "Bilel",
                    "Cahit",
                    "Christian",
                    "Daniel",
                    "Jérémy",
                );
    // bcp de renseignements            
    var_dump($eleves);

    // le print_r permet une meilleure lisibilité
    echo "<pre>";
    print_r($eleves);
    echo "</pre>";

    
    
    ?>
</body>
</html>