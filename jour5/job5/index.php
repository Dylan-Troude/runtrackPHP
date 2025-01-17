<?php

function occurrences($str, $char) {
    $count = 0;
    $i = 0;
    
    while (isset($str[$i])) {
        if ($str[$i] === $char) {
            $count++;
        }
        $i++;
    }
    return $count;
}

$str = "Bonjour";
$char = "o";
echo "Le nombre d'occurrences de '$char' dans '$str' est : " . occurrences($str, $char);

?>