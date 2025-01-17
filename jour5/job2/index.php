<?php
function bonjour(bool $jour) {
    if ($jour) {
        echo "Bonjour<br>";
    } else { 
        echo "Bonsoir";
    }
}

$jour = true;
bonjour($jour);
$jour = false;
bonjour($jour);

?>