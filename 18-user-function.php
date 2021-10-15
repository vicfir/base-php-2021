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
        // arguments obligatoires, ordonés de gauche à droite
        function myFunctionWithArgs($arg1,$arg2,$arg3){}
    </pre>
    <?php
        function myFunctionWithArgs($arg1,$arg2,$arg3){
            return $arg1.$arg2.$arg3;
        }

       // erreur car aucun argument => $calcul = myFunctionWithArgs();
       // erreur car le nombre d'argument n'est pas suffisant => $calcul = myFunctionWithArgs(25,33);
       $calcul = myFunctionWithArgs(25,33,"coucou");
       echo $calcul;
       echo"<hr>";
       // on peut mettre plus d'arguments, ils seront ignorés (mauvaise pratique)
       $calcul = myFunctionWithArgs(25,33,"coucou",9,"lala");
       echo $calcul;
    ?>
    <pre>
        // arguments obligatoires et facultatifs, ordonés de gauche à droite, toujours les obligatoires à gauche des facultatifs
        function myFunctionWithArgs($arg1,$arg2,$arg3="+"){}
    </pre>
    <?php
        function myFunctionWithArgsFac($arg1,$arg2,$arg3="+"){
            return $arg1.$arg2.$arg3;
        }

        echo myFunctionWithArgsFac("lala",25);
        echo "<hr>";
        echo myFunctionWithArgsFac("lala",25,"-");
    ?>
    <pre>
        // arguments obligatoires et facultatifs, ordonés de gauche à droite, toujours les obligatoires à gauche des facultatifs, Attention si on veut modifier le dernier facultatif, on doit remplir les facultatifs qui précèdent !
        function exemple($arg1,$arg2,$arg3="+",$arg4=true){}
    </pre>
    <?php
    function exemple($arg1,$arg2,$arg3="+",$arg4=true){
        return $arg1.$arg2.$arg3.gettype($arg4).(string) $arg4;
    }

    echo exemple(5,25);
    echo "<hr>Pour modifier l' argument 4, on doit réécrire l'argument 3, pour éviter la confusion<hr>";
    echo exemple(33.22,17,"false");// faux
    echo " - faux <hr>";
    echo exemple(33.22,17,"+",false);// ok
    ?>
    <h3>Quand on ne connait pas le nombre d'argument</h3>
    <p>On peut utiliser comme en javascript le tableau d'argument</p>
    <pre>function addition(...$nombres){
        $out = 0;
        foreach($nombres as $value){
            $value = (float) $value; // devient 0 si non numérique
            $out += $value; // ajout à sa propre valeur
        }
        return $out;
    }</pre>
    <?php
    function addition(...$nombres){
        $out = 0;
        foreach($nombres as $value){
            $value = (float) $value;
            $out += $value;
        }
        return $out;
    }

    echo addition();
    echo "<hr>";
    echo addition(7.35);
    echo "<hr>";
    echo addition(7.35,"lulu",3,"lala",5.65);
    echo "<hr>";
    echo addition(7.35,19,42,-190,5.65,583);
    echo "<hr>";
    ?>
    <hr>
    <?php
    /**
     * Addition
     * @param bool : $calcul = true -> display calculation and result, false -> display result
     * @return float|string
    */
    function addition2($calcul, ...$nombres){
        $nb = 0;
        $out = "";
        foreach($nombres as $value){
            $value = (float) $value;

            // si on veut afficher le calcul ($calcul === true)
            if($calcul){
                // concaténation de valeur avec .= 
                $out .= "$value+";
            }
            
            $nb += $value;
        }
        // si la variable de type string est vide
        if(empty($out)){
            // retour du float et arrêt du script
            return "=$nb"; // float
        }
        // Sinon (else non nécessaire grâce au return dans le if qui précède)
        $out = substr($out,0,-1); // substr permet de couper des chaînes de caractères, ici on prend tout depuis le début (0) et on retir 1 caractère à la fin (-1)
        return $out."=$nb"; // string
    }

    echo addition2(false);
    echo "<hr>";
    echo addition2(false,7.35);
    echo "<hr>";
    echo addition2(false,7.35,"lulu",3,"lala",5.65);
    echo "<hr>";
    echo addition2(false,7.35,19,42,-190,5.65,583);
    echo "<hr>";
    echo addition2(true);
    echo "<hr>";
    echo addition2(true,7.35);
    echo "<hr>";
    echo addition2(true,7.35,"lulu",3,"lala",5.65);
    echo "<hr>";
    echo addition2(true,7.35,19,42,-190,5.65,583);
    echo "<hr>";
    ?>
</body>
</html>