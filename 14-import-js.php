<?php

// Importation du contenu d'un fichier externe au format json
$takeMeteo = file_get_contents("https://prevision-meteo.ch/services/json/bruxelles-1",);

// Transformation du format json en tableau associatif
$jsonMeteo = json_decode($takeMeteo,true);

// var_dump($jsonMeteo);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Météo</title>
</head>
<body>
    <h1>Météo à Bruxelles</h1>
    <h3>Exercice</h3>
    <p>Utilisez un foreach pour lister tout le tableau</p>
    <p>Utilisez un switch si les clefs sont "fcst_day_0" jusqu'à "fcst_day_4"</p>
    <p>affichez la "date", le "tmin" et "tmax"</p>
    <p>Exemple le 07.09.2021 il fera entre 16° et 31°</p>
    
</body>
</html>