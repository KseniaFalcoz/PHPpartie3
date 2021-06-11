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
    <h2>Exercice 6</h2>

<?php
function addNumber($a = 2, $b = 3, $c = 4) {
    $result = $a + $b + $c;
    return 'L\'addition de ' .$a. ' + ' .$b. ' + ' .$c. ' = ' .$result;
}
echo addNumber();
?>

</body>
</html>