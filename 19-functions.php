<?php

function calcul($num1, $num2, $opertor="+" ){

    // variable de sortie
    $out="";

    // traîtement des variables
    $n1 = (float) $num1;
    $n2 = (float) $num2;

    switch($opertor){
        case "+": 
            $out.= "$n1 + $n2 = ".($n1+$n2);
            break;
        case "-";

            break;
        case "X";

            break;
        case "/";
            // condition pour empêcher la division par 0 avec affichage d'erreur personalisée
        break;
        default: 
            // redirection si chipotage de formulaire
            header("Location: https://www.facebook.com/LeSoWhat/");
            exit();
    }

    return $out;
}