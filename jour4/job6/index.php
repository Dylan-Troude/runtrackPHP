<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job6</title>
</head>
<body>
    <form action="index.php" method="POST">
        <label for="nombre">nombre :</label>
        <input type="number" name="nombre" id="nombre"><br>
        <button type="submit">Envoyer</button>
    </form>

<?php

if (!empty($_POST)) {
    if ($_POST['nombre'] % 2 == 0){
        echo "<p>Nombre pair</p>";
    } else {
        echo "<p>Nombre impair</p>";
    }
}
// une possible erreur dans l'énoncé ? :"Créez un formulaire de type GET (se demander, pourquoi pas GET ?)" 
    ?>
</body>
</html>