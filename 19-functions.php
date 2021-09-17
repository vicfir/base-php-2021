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

        break;
        default: 

    }

    return $out;
}