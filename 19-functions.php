<?php


/**
 * calcul
 *
 * @param  mixed $num1
 * @param  mixed $num2
 * @param  mixed $opertor
 * @return void
 */
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
            $out.= "$n1 - $n2 = ".($n1-$n2);
            break;
        case "X";
            $out.= "$n1 X $n2 = ".($n1*$n2);
            break;
        case "/";
            // condition pour empêcher la division par 0 avec affichage d'erreur personalisée
            if($n2==0){
                $out.="La division par 0 est interdite";
            }else{
                $out.= "$n1 / $n2 = ".($n1/$n2);
            }
        break;
        default: 
            // redirection si chipotage de formulaire
            header("Location: https://www.facebook.com/LeSoWhat/");
            exit(); // pour la compatibilité avec certains serveurs, on arrête le script
    }

    return $out;
}