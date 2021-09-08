<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les fonctions utilisateurs</title>
</head>
<body>
    <h1>Les fonctions utilisateurs</h1>
    <p>Pour éviter de réécrire du code, ou pour personnaliser des traitements, on peut utiliser des fonctions utilisateurs. On pourra les réutiliser.</p>
    <h3>function</h3>
    <p>Pour créer une fonction, il suffit de préfixer son nom par "function", le tout suivi de () et {}. Pour le nom : Les noms de fonctions suivent les mêmes règles que les autres labels en PHP. Un nom de fonction valide commence par une lettre ou un souligné, suivi par un nombre quelconque de lettres, de nombres ou de soulignés. Ces règles peuvent être représentées par l'expression rationnelle suivante : ^[a-zA-Z_\x80-\xff][a-zA-Z0-9_\x80-\xff]*$</p>
    <pre>
        function myFirstFunction(){}
    </pre>
    <?php

    // notre première fonction, pas paramètres, et surtout pas de retour sera généralement nommée "procédure"
    function myFirstFunction(){

    }

    echo myFirstFunction();

    // une fonction est définie comme telle lorsqu'elle a une valeur de retour: utilisation de return
    function myDate() {
        $sortie = "<p>";
        $sortie .= date("Y-m-d");
        $sortie .= "</p>";
        return $sortie;
    }

    echo myDate();

    ?>
</body>
</html>