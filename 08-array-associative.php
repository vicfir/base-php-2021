<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array associatifs</title>
</head>
<body>
    <h1>Array associatifs</h1>
    <p>Comme les tableaux indexés, les tableaux associatifs sont composés d'une clef et d'une valeur.</p>
    <p>La valeur reste de n'importe quel type, par contre un tableau est dit associatif dès que l'on modifie une clef par défaut</p><p>Ces clefs peuvent être des entier ou des chaînes de caractères</p>
    <?php
    $associativeArray = [
        "Nom" => "Pitz",
        "Prenom" => "Michaël",
        "Age" => 44,

    ];
    var_dump($associativeArray);
    ?>
</body>
</html>