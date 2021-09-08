<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les boucles</title>
</head>
<body>
    <h1>Les boucles</h1>
    <h3>Le while</h3>
    <p>Boucle rapide, mais plus dangereuse à utiliser car on peut facilement faire une boucle sans fin, Les conditions ne se trouvent pas dans la structure de la boucle. Par contre c'est une boucle efficace si on doit faire des vérifications multiples, sur des éléments non numériques</p>
    <pre>   $i=0;
    while($i<20){
        echo "$i - ";
        $i++; // $i+=1 or $i = $i+1
    }
    </pre>
    <p><?php
    $i=0;
    while($i<20){
        echo "$i - ";
        $i++; // $i+=1 or $i = $i+1
    }
     ?></p>
</body>
</html>