<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array - Les tableaux indexés</title>
</head>
<body>
    <h1>Array - Les tableaux indexés</h1>
    <p>Le tableau est une variable permettant de contenir plusieures valeurs et sur plusieures niveaux</p>
    <h2>Les tableaux indexés</h2>
    <p>Un tableau est créé avec la fonction array(), Il permet de stocker de multiples valeurs.<br> Les clef sont automatiquement attribuées et sont des int qui commencent à 0 !</p>
    <?php
    // écriture complète, on ne donne pas de clef mais que des valeurs
    $eleves = array ("Lulu",
                    "Aurélie",
                    "Bilel",
                    "Cahit",
                    "Christian",
                    "Daniel",
                    "Jérémy",
                    "Jessica",
                    "Manuel",
                );
    // bcp de renseignements            
    var_dump($eleves);

    // le print_r permet une meilleure lisibilité
    echo "<pre>";
    print_r($eleves);
    echo "</pre>";

    // pour afficher une valeur du tableau, on utilise sa clef
    echo "<p>4eme entrée : $eleves[3]</p>";
    echo "<p>1er entrée : $eleves[0]</p>";
                ?>
    <p>On peut utiliser [] à la place de array(), les tableaux peuvent être multidimensionnels, on peut avoir autant de tableau dans des tableaux que l'on en a besoin</p>
                <?php
    // raccourci avec [] à la place de array(), les tableaux peuvent être multidimensionnels, on peut avoir autant de tableau dans des tableaux que l'on en a besoin
    $eleves2 = ["Aurélie",
                "Bilel",
                "Cahit",
                "Christian",
                "Daniel",
                "Jérémy",
                [   "un",
                    "deux",
                    "trois",
                ],
            ];

    // le print_r permet une meilleure lisibilité
    echo "<pre>";
    print_r($eleves2);
    echo "</pre>";

    // pour afficher un tableau dans un tableau
    echo '<p>7eme entrée valeur 1 du sous tableau : $eleves2[6][0] => '.$eleves2[6][0]."</p>";

    ?>
    <p>On utilise la clef pour afficher la valeur recherchée, ou plusieures clefs séparées par []</p>
    <h3>Pour compter le nombre d'élément d'un tableau: count()</h3>
    <?php
    $nbEleves = count($eleves);
    echo "<p>Il y a $nbEleves éléments dans le tableau ".'$eleves</p>';
    
    // on pourrait utiliser le foreach qui sert à faire des boucles sur les tableaux, on va utiliser le for déjà vu en js
    for($i=0;$i<$nbEleves;$i++){
        echo "<p>$eleves[$i]</p>";
    }
    ?>
    <h3>Les clefs sont des int dans les tableaux indexés</h3>
    <p>Les valeurs peuvent être de n'importe quel type</p>
    <p><?php
    $arrayType = [
        true,
        false,
        54,
        63.24,
        "5",
        "coucou",
        NULL,
        [1,2,3],
    ];
    var_dump($arrayType);
    ?></p>
    <h3>Un tableau n'est plus considéré comme indexé, dès que l'on modifie les clefs, même si on les laisse en numérique</h3>
    <p><?php
    $arrayType2 = [
       3=> true,
        false,
        54,
        63.24,
        "5",
        "coucou",
        NULL,
        [1,2,3],
    ];
    var_dump($arrayType2);
    ?>
    <p><?php
    $arrayType3 = [
       3=> true,
        false,
        10 => 54,
        63.24,
        "5",
        -7 => "coucou",
        NULL,
        ["lulu"=>1,2,3],
    ];
    var_dump($arrayType3);
    ?>
</body>
</html>