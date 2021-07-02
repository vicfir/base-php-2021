<?php
// création d'une variable avec un chiffre au hasard
$temperate = mt_rand(-50,50);


// suite de conditions if elseif else
if($temperate>20){
    echo "A $temperate °, il fait chaud!";
}elseif($temperate>0){
    echo "A $temperate °, il fait frais!";
}elseif($temperate>-20){
    echo "A $temperate °, il fait froid!";
}else{
    echo "A $temperate °, on est gelé!";
}

echo "<br>";

$temperate = mt_rand(-50,50);

// idem à la mode Python

if($temperate>20):
    echo "A $temperate °, il fait chaud!";
elseif($temperate>0):
    echo "A $temperate °, il fait frais!";
elseif($temperate>-20):
    echo "A $temperate °, il fait froid!";
else:
    echo "A $temperate °, on est gelé!";
endif;