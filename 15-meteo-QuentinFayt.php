<!DOCTYPE html>
<html lang="en">
<?php
$takeMeteo = file_get_contents("https://prevision-meteo.ch/services/json/bruxelles-1",);
$jsonMeteo = array_filter(json_decode($takeMeteo, true), function ($key) {
    return strpos($key, 'fcst_day_') === 0;
}, ARRAY_FILTER_USE_KEY);

var_dump($jsonMeteo);

?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    foreach ($jsonMeteo as $day) {
        echo "Le $day[date] il fera entre $day[tmin]° et $day[tmax]° </br>";
    }
    ?>
</body>

</html>
