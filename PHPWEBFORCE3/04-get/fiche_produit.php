<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <!-- link bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
<title>fiche produit</title>
</head>

<body>

<div class="container text-center">
<h1 class="display-4 text-center"> Detail du produit n° <strong class="text-info"><?= $_GET['id']?></strong></h1> <hr>
<a href="boutique.php">Retour vers l'accueil boutique</a>
<?php

echo '<pre>'; print_r($_GET); echo'</pre>';

echo '<div class="col-md-4 offset-md-4 mx-auto text-center alert alert-info">';

if($_GET){
    echo "type : $_GET[type]<br>";
    echo "couleur : $_GET[couleur]<br>";
    echo "prix : $_GET[prix]<br>";
}
echo '</div>';

// 2ème solution
echo '<div class="col-md-4 offset-md-4 mx-auto text-center alert alert-danger">';
foreach($_GET as $key => $value)
{
    if($key != 'id') // si l'indice est different de 'id', alors on affiche l'indice en foncdtion de la valeur superglobale $_GET (ARRAY)
    {
        echo"<strong>$key</strong> : $value <br>";
    }
}
echo '</div>';
// les informations envoyées dans l'url sont automatiquement stockés dans la superglobale "$_GET", cela retourne un tableau ARRAY associatif

// Exo : afficher les données transmise dans l'url avec un affichage conventionnel en excluant l'indice 'id' 

?>



</div>
    
    <!-- bibliotheque pour bootstrap -->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea 6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

</body>
</html>