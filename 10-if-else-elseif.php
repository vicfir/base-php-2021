<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les conditions</title>
</head>
<body>
    <h1>Les conditions</h1>
    <h3>IF</h3>
    <p>Condition qui vérifie si le code entre les parenthèses nous donne un true (global), si c'est le cas, exécution du code entre { }. Les conditions peuvent être plus complexes en utilisant le ET (and ou &&), le ou (or ou ||) non exclusif, le xor (xor ou ^) exclusif </p>
    <?php
    // chiffres (int) au hasard entre -10 et 10
    $nb1 = mt_rand(-10,10);
    $nb2 = mt_rand(-10,10);
    echo '<p>$nb1 vaut ' . "$nb1</p>";
    echo '<p>$nb2 vaut ' .$nb2. '</p>';

    // Si ($nb1 est plus grand > que $nb2) => exécution du code entre {}
    if($nb1 > $nb2){
        echo '<p>$nb1 ('.$nb1.') est plus grand que $nb2 ('.$nb2.')</p>';
    }

    echo "<h4>ET - AND - &&</h4>";

    // SI ($nb1 est plus grand que 0 ET que $nb2 est plus grand que 0) => Les 2 condition doivent être remplies (true && true)
    if($nb1>0 && $nb2>0){
        echo '<p>$nb1 ('.$nb1.') et $nb2 ('.$nb2.') sont strictement positifs</p>';
    }

    echo "<h4>OU - OR - ||</h4>";
    /* SI ($nb1 est plus grand que 0 OU que $nb2 est plus grand que 0) => 
    OU non exclusif : au moins 1 des 2 conditions doit être remplie 
    (true || true) = > true 
    (true || false) => true 
    (false || false) => false
    */
    if($nb1>0 || $nb2>0){
        echo '<p>au moins 1 des 2 (ou les deux) $nb1 ('.$nb1.') ou $nb2 ('.$nb2.') sont strictement positifs</p>';
    }

    echo "<h4>OU exclusif (ou bien) - XOR - ^</h4>";
    /* SI ($nb1 est plus grand que 0 OU BIEN que $nb2 est plus grand que 0) => 
    OU exclusif : 1 seule des 2 conditions doit être true
    (true ^ true) = > false 
    (true ^ false) => true 
    (false ^ false) => false
    */
    if($nb1>0 ^ $nb2>0){
        echo '<p>Ne s\'affiche que si 1 seul des numériques est positif (ou exclusif): $nb1 ('.$nb1.') - $nb2 ('.$nb2.')</p>';
    }

    ?>
    <h3>ELSE</h3>
    <p>S'exécute si le code entre les parenthèses du IF nous donne un false (global), si c'est le cas, exécution du code entre { }. </p>

    <?php
    // Si ($nb1 est plus grand > que $nb2) => exécution du code entre {}
    if($nb1 > $nb2){
        echo '<p>$nb1 ('.$nb1.') est plus grand que $nb2 ('.$nb2.') - IF</p>';
    }else{
        echo '<p>$nb1 ('.$nb1.') n\'est pas plus grand que $nb2 ('.$nb2.') - ELSE</p>';
    }

    echo "<h4>inverser - NOT - IS NOT - !</h4>";

    // version longue si on sait qu'on aura pas de pagination ici
    if(isset($pagination)){

    }else{
        echo"<p>page 1</p>"; 
    }

    /* pour avoir le else sans le if - le ! inverse le résultat d'une condition:
        !true => false
        !false => true
        */
    
    if(!isset($pagination)){
        echo"<p>page 1</p>"; 
    }
    ?>
    <h3>ELSE IF - ELSEIF</h3>
    <p>S'exécute si le code entre les parenthèses du IF nous donne un false (global), si c'est le cas revérification de la nouvelle condition et si true exécution du code entre { }, sinon passage au elseif suivant ou au else si existant. </p>
    <?php
    if($nb1>0 && $nb2>0){
        echo "<p>$nb1 et $nb2 sont des nombres positifs</p>";
    }elseif($nb1>0){
        echo "<p>Seul $nb1 est un nombre positif</p>";
    }else if(($nb2/2) == round($nb2/2)){
        echo "<p>$nb2 est pair</p>";
    }else{
        echo "<p>$nb2 est impair</p>";
    }
    ?>
</body>
</html>