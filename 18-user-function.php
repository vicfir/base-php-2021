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
        // le return permet de renvoyer un résultat, ! il arrête la fonction en cours (exit ou die)
        return $sortie;
        // cette ligne ne sera jamais affichée à cause du return
        echo "lulu";
    }

    echo myDate();


    ?>
    <pre>
        // argument obligatoire
        function myFirstFunctionWithArg($arg1){}
    </pre>
    <?php
    // un argument sans valeurs par défaut est obligatoire
    function myFirstFunctionWithArg($arg1){
        // le retour se fait avec return, il est fondamental pour une fonction
        return $arg1;
    }

    // erreur car une valeur doit être passée => echo myFirstFunctionWithArg();

    echo myFirstFunctionWithArg("coucou les amis");
    echo myFirstFunctionWithArg(173);


    ?>
    <pre>
        // arguments obligatoires
        function myFunctionWithArgs($arg1,$arg2,$arg3){}
    </pre>
    <?php
        function myFunctionWithArgs($arg1,$arg2,$arg3){
            return $arg1.$arg2.$arg3;
        }

       // erreur car aucun argument => $calcul = myFunctionWithArgs();

    ?>
</body>
</html>