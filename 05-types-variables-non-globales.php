<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les types de variables</title>
</head>
<body>
    <h1>Les types de variables</h1>
    <h2>Les variables de type booléen</h2>
    <p>Ce type de variable ne peut contenir que 2 valeurs: true ou false</p>
    <p>Elles sont la base de tout traitement informatique, on les représentes parfois (mais à tord) par 1 (true) et 0 (false)</p>
    <p><?php
    $bool1 = true;
    $bool2 = false;
    
    // on va utiliser le var_dump pour afficher le type et contenu de variables
    var_dump($bool1,$bool2);
    
    ?></p>
    <h2>Les variables de type numérique entier (integer ou int)</h2>
    <p>Ce type de variable ne peut contenir que du numérique sans décimales</p>
    <p>Elles peuvent par contre être positives ou négatives</p>
    <p>on peut utiliser le transtypage pour modifier ces variables (settype ou (int))</p>
    <p><?php
    $int1 = 64;
    $int2 = -27;
    $int3 = 0;
    $int4 = (int) "5";
    $int5 = (int) 4.9;
    $int6 = (int) "55baobabs et 24";

    var_dump($int1,$int2,$int3,$int4,$int5,$int6);
    ?></p>
</body>
</html>