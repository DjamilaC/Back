<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
$fruit = array("cerises", "bananes", "pommes", "peches");
$poids = array("100", "500", "1000", "1500", "2000", "3000", "5000", "10000" );

echo '<div class="col-md-4 offset-md-4 alert alert-success text-center mx-auto">';
foreach($fruit as  $value)
{
    echo "$value<br>";
}
echo'</div>';
foreach($poids as $value)
{
    echo "$value<br>";
}
echo'</div>';




?>


    <!--  
        1- Déclarer un tableau ARRAY avec tout les fruits
        2- Déclarer un tableau ARRAY avec les poids suivants : 100, 500, 1000, 1500, 2000, 3000, 5000, 10000.
        3- Affichez les 2 tableaux
        4- Sortir le fruit "cerises" et le poids 500 en passant par vos tableaux pour les transmettres � la fonction "calcul()" et obtenir le prix.
        5- Sortir tout les prix pour les cerises avec tout les poids (indice: boucle).
        6- Sortir tout les prix pour tout les fruits avec tout les poids (indice: boucle imbriqu�e).
        7- Faire un affichage dans une table HTML pour une pr�sentation plus sympa.
     -->
</body>
</html>