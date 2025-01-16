<?php

$texte = "On n est pas le meilleur quand on le croit mais quand on le sait.";

$voyelles = 0;
$consonnes = 0;

$index = 0;
while (isset($texte[$index])) {
    if (
        $texte[$index] == 'a' || $texte[$index] == 'e' || $texte[$index] == 'i' || $texte[$index] == 'o' || 
        $texte[$index] == 'u' || $texte[$index] == 'y' || 
        $texte[$index] == 'A' || $texte[$index] == 'E' || $texte[$index] == 'I' || $texte[$index] == 'O' || 
        $texte[$index] == 'U' || $texte[$index] == 'Y'
    ) {
        $voyelles++;
    }
    elseif (
        $texte[$index] == 'b' || $texte[$index] == 'c' || $texte[$index] == 'd' || $texte[$index] == 'f' || 
        $texte[$index] == 'g' || $texte[$index] == 'h' || $texte[$index] == 'j' || $texte[$index] == 'k' || 
        $texte[$index] == 'l' || $texte[$index] == 'm' || $texte[$index] == 'n' || $texte[$index] == 'p' || 
        $texte[$index] == 'q' || $texte[$index] == 'r' || $texte[$index] == 's' || $texte[$index] == 't' || 
        $texte[$index] == 'v' || $texte[$index] == 'w' || $texte[$index] == 'x' || $texte[$index] == 'z' || 
        $texte[$index] == 'B' || $texte[$index] == 'C' || $texte[$index] == 'D' || $texte[$index] == 'F' || 
        $texte[$index] == 'G' || $texte[$index] == 'H' || $texte[$index] == 'J' || $texte[$index] == 'K' || 
        $texte[$index] == 'L' || $texte[$index] == 'M' || $texte[$index] == 'N' || $texte[$index] == 'P' || 
        $texte[$index] == 'Q' || $texte[$index] == 'R' || $texte[$index] == 'S' || $texte[$index] == 'T' || 
        $texte[$index] == 'V' || $texte[$index] == 'W' || $texte[$index] == 'X' || $texte[$index] == 'Z'
    ) {
        $consonnes++;
    }
    
    $index++;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job5</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Voyelles</th>
                <th>Consonnes</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $voyelles; ?></td>
                <td><?php echo $consonnes; ?></td>
            </tr>
        </tbody>
    </table>
</body>
</html>
