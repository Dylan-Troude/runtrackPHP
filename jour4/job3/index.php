<?php

$argcount = 0;

if (!empty($_POST)) {
    foreach ($_POST as $key => $value) {
        if ($value !== "") {
            $argcount++;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job3</title>
</head>
<body>
    <form action="index.php" method="POST">
        <label for="argument1">Argument 1 :</label>
        <input type="text" name="argument1" id="argument1"><br>
        <label for="argument2">Argument 2 :</label>
        <input type="text" name="argument2" id="argument2"><br>
        <button type="submit">Envoyer</button>
    </form>

    <?php
    if (!empty($_POST)) {
        echo "<p>Le nombre d'arguments non vides passés en GET est : $argcount</p>";
    }
    ?>
</body>
</html>
