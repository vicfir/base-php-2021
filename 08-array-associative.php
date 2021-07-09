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
    <p>La valeur reste de n'importe quel type, par contre un tableau est dit associatif dès que l'on modifie une clef par défaut</p><p>Ces clefs peuvent être des entiers ou des chaînes de caractères</p>
    <?php
    $associativeArray = [
        "Nom" => "Pitz",
        "Prenom" => "Michaël",
        "Age" => 44,

    ];
    var_dump($associativeArray);

    ?>
    <h3>On utilise le foreach() pour récupérer les valeurs</h3>

    <?php
    // ne récupère que les valeurs
    foreach($associativeArray as $valeur2){
        echo "<p>$valeur2</p>";
    }
    echo "<hr>";
    // récupère les clefs et les valeurs
    foreach($associativeArray as $clef => $valeur2){
        echo "<p>$clef -> $valeur2</p>";
    }

    $multiLevel = array(
        "Users"=> [
            "Mikhawa"=>
                [
                    "Name" => "Pitz",
                    "surname" => "Michaël",
                    "email" => "michaeljpitz@gmail.com",
                    "actif" => true,
                ],
            "SuperJean"=>
                [
                    "Name" => "Pierre",
                    "surname" => "Jean",
                    "email" => "JP477@gmail.com",
                    "actif" => false,
                ], 
            "GuyHome"=>
                [
                    "Name" => "Home",
                    "surname" => "Guy",
                    "email" => "JPGY755@gmail.com",
                    "actif" => true,
                ],    
            ],
        "Request"=>
            [
              "method" => "POST",
              "datetime" => "2021-07-09 09:25:27",
              "load" => 0.016,
            ]    
    );
    var_dump($multiLevel);
    ?>
    <pre><?php print_r($multiLevel) ?></pre>
    <p>Pour récupérer une valeur grâce aux clefs</p>
    <?php
    echo '<p>Pour récupérer le nom de Mikhawa qui se trouve dans Users : $multiLevel["Users"]["Mikhawa"]["Name"] : </p>';
    echo "<p>".$multiLevel["Users"]["Mikhawa"]["Name"]."</p>";
    
    ?>
    <h3>Exemple de json, format populaire pour l'échange de données entre sites et langages différents</h3>
    <pre><?php echo $json = json_encode($multiLevel) ?></pre>
    <pre><?php var_dump(json_decode($json)) ?></pre>
</body>
</html>