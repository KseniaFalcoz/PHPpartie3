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
    <h2>Exercice 4</h2>

<?php
    $x = rand(1, 15);
    $y = rand(1, 15);

function numbers($a, $b) {
    if($a > $b) {
        return 'Le premier nombre est plus grand que le deuxième'. ' ' .$a. ' ' . '>' . ' ' .$b;
    } elseif($a < $b) {
        return 'Le premier nombre est plus petit que le deuxième'. ' ' .$a. ' ' . '<' . ' ' .$b;
    } else {
        return 'Les deux nombres sont égaux'. ' ' .$a. ' ' . '=' . ' ' .$b;
    }
}
echo numbers($x, $y);
?>
</body>
</html>