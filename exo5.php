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
    <h2>Exercice 5</h2>

    <h3>Version 1</h3>
<?php
    function display() {
        $i = rand(1,30);
        echo "Cette fonction retourne une chaine de caractère et le nombre alétoire $i .";
    }
    echo display();
?>

<h3>Version 2</h3>
<?php
    function RandStringFunction($string){
        $rand_Number = rand(0,100);
        $stringAndRandNumber = $string . ' '. $rand_Number ;
        echo $stringAndRandNumber;
        return $stringAndRandNumber;
    }
    RandStringFunction("Hello World")
?>

</body>
</html>