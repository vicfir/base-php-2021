<?php
// importation du fichier de fonctions
require('19-functions.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculatrice</title>
</head>
<body>
    <h1>Calculatrice</h1>
    <form action="" method="post" name="calcul">
        <input name="first_number" type="number" step="0.00001"  required /><br>
        <input name="second_number" type="number" step="0.00001" required /><br>
        <select name="opera">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="X">X</option>
            <option value="/">/</option>
        </select>
        <input type="submit" value="="/>
    </form>
</body>
</html>