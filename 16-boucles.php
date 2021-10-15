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
    <h3>Le do while</h3>
    <p>Boucle rapide, qui va exécuter au moins une fois le code même si la condition n'est PAS remplie! Les conditions ne se trouvent pas dans la structure de la boucle. Par contre c'est une boucle efficace dans des cas particulier que nous verrons plus loin</p>
    <pre>   $i=30;
    do{
        echo "$i - ";
        $i++;
    }while($i<20);
    </pre>
    <p><?php
    $i=30;
    do{
        echo "$i - ";
        $i++;
    }while($i<20);
     ?></p> 

    <h3>Le for</h3>
    <p>Boucle numérique rapide, contient 3 parties: for(initialisation;condition;action de fin de boucle)</p>
    <pre>   for($i=0;$i<20;$i++){
        echo "$i - ";
    }
    </pre>
    <p><?php
    for($i=0;$i<20;$i++){
        echo "$i - ";
    }
     ?></p>
     <h4>On peut toutefois complexifier nos boucles for</h4>
     <pre>   for($i=0,$j=10; $i<20 && $j>0; $i++, $j--){
        echo "$i - $j";
    }
    </pre>
    <p><?php
    for($i=0,$j=10; $i<20 && $j>0; $i++, $j--){
        echo "$i - $j -";
    }
     ?></p>  
    <h3>Le foreach</h3>
    <p>Boucle utilisée pour lister des tableaux ou des objets,elle commence au début de l'élément et elle se termine dès que l'élément est entièrement listé</p>
    <pre>       $tab = ["un"=>"garçon", "une"=>"fille","et"=>"etc..."];

        // récupération de la valeur uniquement
        foreach($tab as $value){
            echo "$value |";
        }

        // récupération de la valeur et de la clef
        foreach($tab as $key => $value){
            echo "$key => $value | ";
        }
    </pre>
    <p><?php
    $tab = ["un"=>"garçon", "une"=>"fille","et"=>"etc..."];
    // récupération de la valeur uniquement
    foreach($tab as $value){
        echo "$value |";
    }
    echo "<br>";
    // récupération de la valeur et de la clef
    foreach($tab as $key => $value){
        echo "$key => $value | ";
    }
     ?></p>
      
</body>
</html>