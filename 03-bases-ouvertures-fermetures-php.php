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

    <hr>
</body>
</html>
<?php

