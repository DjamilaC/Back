<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<?php

require_once("fonction.php");

// echo '<div class="col-md-4 offset-md-4 alert alert-success text-center mx-auto">';
// foreach($fruit as  $value)
// {
//     echo "$value<br>";
// }
// echo'</div>';
// foreach($poids as $value)
// {
//     echo "$value<br>";
// }
// echo'</div>';
 
        //1- Déclarer un tableau ARRAY avec tout les fruits

        $tab_fruit = array("cerises", "bananes", "pommes", "peches");
        

        //2- Déclarer un tableau ARRAY avec les poids suivants : 100, 500, 1000, 1500, 2000, 3000, 5000, 10000.
        $tab_poids = array(100, 500, 1000, 1500, 2000, 3000, 5000, 10000 );

        //3- Affichez les 2 tableaux
        echo '<pre>'; print_r($tab_fruit); echo '</pre>';
        echo '<pre>'; print_r($tab_poids); echo '</pre>';

        //4- Sortir le fruit "cerises" et le poids 500 en passant par vos tableaux pour les transmettres � la fonction "calcul()" et obtenir le prix.
        echo '<hr>'. calcul($tab_fruit[0], $tab_poids[1]). '<hr>';

        //5- Sortir tout les prix pour les cerises avec tout les poids (indice: boucle).
        foreach($tab_poids as $poids){
            echo calcul($tab_fruit[0], $poids) . '<hr>';
        }

         echo "<hr>";


        //6- Sortir tout les prix pour tout les fruits avec tout les poids (indice: boucle imbriqu�e).
        foreach($tab_fruit as $fruit)
        {
            echo '<div class="col-md-6 offset-md-3 mx-auto alert alert-info text-center>';
            foreach($tab_poids as $poids)
            {
                echo calcul($fruit, $poids). '<hr>';
            }
            echo '</div><hr>';
        }

        //7- Faire un affichage dans une table HTML pour une pr�sentation plus sympa.

        echo '<table class="table table-bordered text-center"><tr>';
            echo '<th>Poids</th>';
            foreach($tab_fruit as $fruit)
            {
                echo "<th>$fruit</th>";
            }
            echo '</tr>';
            foreach($tab_poids as $poids)
            {
                echo '<tr>';
                echo "<th>$poids g</th>";
                foreach($tab_fruit as $fruit)
                {
                    echo "<td>" . calcul($fruit, $poids) . "</td>";
                }
                echo '</tr>';
            }
            echo '</table>';



?>


    
</body>
</html>