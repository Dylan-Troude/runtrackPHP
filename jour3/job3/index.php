<?php

$texte ="I'm sorry Dave I'm afraid I can't do that.";

$taille = 0;
while (isset($texte[$taille])) {
    $taille++;
}

for ($i = 0; $i < $taille; $i ++) {
    
    if (
        $texte[$i] == 'a' || $texte[$i] == 'e' || $texte[$i] == 'i' || $texte[$i] == 'o' || 
        $texte[$i] == 'u' || $texte[$i] == 'y' || 
        $texte[$i] == 'A' || $texte[$i] == 'E' || $texte[$i] == 'I' || $texte[$i] == 'O' || 
        $texte[$i] == 'U' || $texte[$i] == 'Y'
    ) 
        echo $texte[$i];
}

?>