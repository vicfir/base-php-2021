<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les types de variables</title>
</head>
<body>
<h2>Ecriture des variables</h2>
<p>Règles de nommages des variables : <a href="https://www.php.net/manual/fr/language.variables.basics.php" target="_blank">En PHP, les variables sont représentées par un signe dollar "$" suivi du nom de la variable. Le nom est sensible à la casse.</a><br>
Il existe des règles de nommage qui consistent principalement par: <br>
- Le nom d'une variable peut faire comprendre ce qu'elle fait, ça évite de rajouter trop de commentaire<br>
- Il existe plusieures type d'écriture, voici une image les représentant<br><img src="img/case.png" alt="case"></p>
<?php
// camel case - variables et propriétés, fonctions et méthodes
$uneVariableImportante;
// upper camelcase (Pascal case) - classes
$UneVariableImportante;
// upper cobra case : les constantes
define("UNE_CONSTANTE_IMPORTANTE","nadia");

// le @ cache une erreur, mais à éviter car on peut oublier de fixer le problème
@var_dump($uneVariableImportante,$UneVariableImportante,UNE_CONSTANTE_IMPORTANTE);
?>
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
    $int7 = (int) "blabla"; // devient 0 car non convertible

    var_dump($int1,$int2,$int3,$int4,$int5,$int6,$int7);
    ?></p>

<h2>Les variables de type numérique à virgules flottantes (float, double, decimal)</h2>
    <p>Ce type de variable ne peut contenir que du numérique avec ou sans décimales</p>
    <p>Elles peuvent être positives ou négatives</p>
    <p>on peut utiliser le transtypage pour modifier ces variables (settype ou (float),(double))</p>
    <p><?php
    $float1 = 64.124;
    $float2 = -27.0;
    $float3 = 0.0;
    $float4 = (float) "5";
    $float5 = (float) 4.9;
    $float6 = (float) "55baobabs et 24";

    var_dump($float1,$float2,$float3,$float4,$float5,$float6);
    ?></p>

<h2>Les variables de type string (string, str)</h2>
    <p>Ce type de variable contient des chaînes de caractères</p>
    <p>on peut utiliser le transtypage pour modifier ces variables (settype ou (string))</p>
    <p><?php
    $str1 = "Une chaîne de caractère";
    $str2 = "";
    $str3 = "123";
    $str4 = "$str1 ?";
    $str5 = '$str3 --';
    $str6 = $str1   .
            "<br>"  .
            "coucou";
    $str7 = (string) 52.23;
    $str8 = (string) true;
    echo $str6;

    var_dump($str1,$str2,$str3,$str4,$str5,$str6,$str7,$str8);
    ?>
    </p>
</body>
</html>