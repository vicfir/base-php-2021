<?php

/**
 * frenchDate
 * 
 * Permet de transformer une date au format datetime (en français YYYY-MM-JJ HH:MM:SS - en date("Y-m-d H:i/s"))
 * 
 * Si le paramètre est 1, le résultat de 
 * 2019-07-15 09:11:05 sera ... "Le lundi 15 juillet 2019 à 09:11"
 * 
 * Si le paramètre vaut 2, le résultat de 
 * 2019-07-15 09:11:05 sera ... "Le 15 juillet 2019 à 09h11"
 * 
 * Si le paramètre vaut 3, le résultat de 
 * 2019-07-15 09:11:05 sera ... "Le lundi 15 juillet 2019 à 9 heures" (si <= 1 heure -> pas de s à heure !!!)
 * 
 * @param  datetime $date
 * @return String
 */
function frenchDate($date,$format=1){

    // sortie
    $out="";

    // Les jours en français
    $joursTab = ["dimanche","lundi","mardi","mercredi","jeudi","vendredi","samedi"];

    // Les mois en français
    

    // transformation de la date en Timestamp (secondes depuis le 1/1/1970 )
    $date = strtotime($date);
    // A transformer en switch
    if($format===1){
        $out.="Le "
                .$joursTab[date("w",$date)]." " // jour de la semaine en français
                .date("d",$date)." " // chiffre du jour
                .date("F",$date)." " // mois en français
                .date("Y à H:i",$date); // année / heures / minutes
    }elseif($format===2){

    }elseif($format===3){

    }else{
         return "Format de date non reconnue";   
    }
    return $out;
}

// date en datetime
$date1 = "2019-07-15 09:11:05";
$date2 = "2024-05-07 23:44:17";
$date3 = "2024-05-10 19:07:17";


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice</title>
</head>
<body>
    <h1>Exercice de fonction</h1>
    <p>En utilisant les fonctions prédéfinies <a href="https://www.php.net/manual/fr/function.date.php" target="_blank">date</a> et les <a href="https://www.php.net/manual/fr/datetime.format.php" target="_blank" rel="noopener noreferrer">formats de dates</a>   </p>
    <p>1) Mettez à jour la fonction pour afficher les dates en français telles qu'indiquées dans la doc de la fonction</p>
    <pre>Si le paramètre est 1, le résultat de 
 * 2019-07-15 09:11:05 sera ... "Le lundi 15 juillet 2019 à 09:11"
 * 
 * Si le paramètre vaut 2, le résultat de 
 * 2019-07-15 09:11:05 sera ... "Le 15 juillet 2019 à 09h11"
 * 
 * Si le paramètre vaut 3, le résultat de 
 * 2019-07-15 09:11:05 sera ... "Le lundi 15 juillet 2019 à 9 heures" (si <= 1 heure -> pas de s à heure !!!)</pre>
    <p>2) Remplacez le if elseif else par un switch</p>
   <?php
   echo frenchDate($date1);
   echo "<hr>";
   echo frenchDate($date2);
   echo "<hr>";
   echo frenchDate($date3);
   echo "<hr><hr>";
   echo frenchDate($date1,2);
   echo "<hr>";
   echo frenchDate($date2,2);
   echo "<hr>";
   echo frenchDate($date3,2);
   echo "<hr><hr>";
   echo frenchDate($date1,3);
   echo "<hr>";
   echo frenchDate($date2,3);
   echo "<hr>";
   echo frenchDate($date3,3);
   echo "<hr><hr>";
   echo frenchDate($date1,4);
   echo "<hr>";
   echo frenchDate($date2,4);
   echo "<hr>";
   echo frenchDate($date3,4);
   ?>
</body>
</html>