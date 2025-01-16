<?php 

$texte = "Les choses que l'on Possède finissent par nous posséder.";

$longueur = 0;

while (isset($texte[$longueur])) {
    $longueur++;
}

$i = $longueur - 1; 

while ($i >= 0) {
    $i--; 
    echo $texte[$i];
}

?>