<?php

function calcule($nombre1,$operateur,$nombre2) {
if ($operateur == "-")
echo $nombre1 - $nombre2;
elseif ($operateur == "+")
echo $nombre2 + $nombre1;
elseif ($operateur == "*")
echo $nombre2 * $nombre1;
elseif ($operateur == "/")
echo $nombre2 / $nombre1;
elseif ($operateur == "%")
echo $nombre2 % $nombre1;
}

$nombre1 = 50;
$nombre2 = 40;
$operateur = "%";
calcule($nombre1,$operateur,$nombre2);
?>