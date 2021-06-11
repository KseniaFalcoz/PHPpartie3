<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercices PHP Partie 3</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
    <h1>Exercices PHP Partie 3</h1>
    <h2>Exercice 3</h2>

<?php
    $a = 'Bonjour!';
    $b = 'DesCodeuses';
    function concatString($i, $j) {
        $concatText = $i. ' ' .$j;
        return $concatText;
    }
    echo concatString($a, $b);
?>
</body>
</html>