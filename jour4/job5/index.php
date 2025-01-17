<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job5</title>
</head>
<body>
    <form action="index.php" method="POST">
        <label for="username">username :</label>
        <input type="text" name="username" id="username"><br>
        <label for="password">password :</label>
        <input type="text" name="password" id="password"><br>
        <button type="submit">Envoyer</button>
    </form>

<?php

if (!empty($_POST)) {
    if ($_POST['username'] == "John" && $_POST['password'] == "Rambo") {
        echo "<p>c’est pas ma guerre</p>";
    } else {
        echo "<p>votre pire cauchemar</p>";
    }
}
    ?>
</body>
</html>