<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Utilisation " et '</title>
</head>
<body>
    <h1>Utilisation " et '</h1>
    <p><?php
    // entre "" il faut échapper le " avec l'antislash => \"
    echo "\"Coucou, tu as l'adresse?\"<br>";

    // entre '' il faut échapper le ' avec l'antislash
    echo '"Coucou, tu as l\'adresse?"<br>';
    ?></p>
</body>
</html>