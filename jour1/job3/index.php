<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php
    $booleanVar = true;
    $intVar = 4;
    $stringVar = "Hello LaPlateforme!";
    $floatVar = 3.14;
    ?>
    <table>
        <tr>
            <th>Type</th>
            <th>Nom</th>
            <th>Valeur</th>
        </tr>
        <tr>
            <td>boolean</td>
            <td>booleanVar</td>
            <td><?php echo $booleanVar ? 'true' : 'false'; ?></td>
        </tr>
        <tr>
            <td>integer</td>
            <td>intVar</td>
            <td><?php echo $intVar; ?></td>
        </tr>
        <tr>
            <td>string</td>
            <td>stringVar</td>
            <td><?php echo $stringVar; ?></td>
        </tr>
        <tr>
            <td>float</td>
            <td>floatVar</td>
            <td><?php echo $floatVar; ?></td>
        </tr>
    </table>
</body>
</html>