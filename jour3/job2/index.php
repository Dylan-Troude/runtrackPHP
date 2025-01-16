<?php

$texte ="Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.";

$taille = 0;
while (isset($texte[$taille])) {
    $taille++;
}

for($i = 0; $i < $taille; $i+= 2)
echo $texte[$i];

?>
