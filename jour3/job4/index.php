<?php

$texte ="Dans l'espace, personne ne vous entend crier.";

$taille = 0;
while (isset($texte[$taille])) {
    $taille++;
}
echo $taille;

?>