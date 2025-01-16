<?php

$tableau = [200, 204, 173, 98, 171, 404, 459];

$taille = 0;
while (isset($tableau[$taille])) {
    $taille++;
}

for ($i = 0; $i < $taille; $i++) {
    if ($tableau[$i] % 2 == 0) {
        echo $tableau[$i] . " est pair<br>";
    } else {
        echo $tableau[$i] . " est impair<br>";
    }
}

?>
