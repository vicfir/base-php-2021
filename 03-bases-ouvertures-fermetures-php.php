<?php
// mise dans une variable de la date du serveur (locahost => votre machine) H => heures (2 chiffres) i => minutes s secondes
$heure = date("H:i:s");
?>
<html><head>
<?php # Ouverture
    echo("<title>ouvertures balises PHP | $heure</title>"); # utilisé comme une fonction native donc (), les double guillemets permettent d'interpréter la variables

# Fermeture de PHP (si contenu non PHP en fin de fichier)
?>
</head>
<body>
<?php
/*
Commentaires sur
plusieures lignes

echo est désormais une structure de langage, on utilise donc plus les ()
*/

echo "<h1>ouvertures balises PHP | $heure</h1>"; // interprétation des variables entre ""
echo '<p>ouvertures balises PHP | $heure</p>'; // non interprétation des variables entre ''

// la concaténation permet de mettre ensemble des chaînes de caractères en utilisant . ou la ,
echo '<p>ouvertures balises PHP | '.$heure.'</p>';
echo "<p>ouvertures balises PHP | ",$heure,'</p>';
?>
    <hr>
    <h2><?=$heure// echo en abrégé, utilisé dans le PHP en tant que template?></h2>

    
</body>
</html>
<?php
// équivalent au echo sauf que la , ne fonctionne pas pour concaténer
print("$heure");
print "$heure";
print '$heure';
print "kjhyjkj"."<br>"."jkhjhj";
// la concaténation avec la , ne fonctionne pas
//print "kjhyjkj","<br>","jkhjhj";
