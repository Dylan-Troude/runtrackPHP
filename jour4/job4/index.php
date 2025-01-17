<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job4</title>
    <link rel="stylesheet" href="styles.css"> 
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
        echo "<table>";
        echo "<thead>";
        echo "<tr>";
        echo "<th>Argument</th>";
        echo "<th>Valeur</th>";


        foreach ($_POST as $key => $value) {
            echo "<tr>";
            echo "<td>$key</td>";
            echo "<td>$value</td>";
            echo "</tr>";
    }
}
?>
</body>
</html>
