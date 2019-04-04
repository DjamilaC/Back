<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulaire4</title>
    <!-- link bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<h1 class="display-4 text-center">Formulaire</h1>
<?php
// echo'<pre>'; print_r($_POST); echo'</pre>';
// echo '<hr>';
echo '<div class="col-md-4 offset-md-4 alert alert-success text-center mx-auto">';
foreach($_POST as $key => $value)
{
    echo "$key : $value<br>";
}
echo'</div>';

// Exo: si nous n'avions pas de BDD et que nous voudrions récupérer les emails des visituers du site, il serait intéressant de les enregistrer dans un fichier.txt. 
        // Il existe des fonctions en php qui permettent de le faire 
        // fopen() / fwrite () / fclose ()

$fichier = fopen('visiteur.txt', 'a');
 fwrite($fichier, $_POST['pseudo']. '-' . $_POST['email'] . "\r\n"); 
 // fwrite() permet d'ecrire dans le fichier representé par $fichier
 // "\r\n" => séquence d'echappement pour passer à la ligne dans le fichier.txt
 fclose($fichier);
 // fclose() qui n'est pas indispensable, permet de fermer le fichier et ainsi libérer de la ressource

 
?>

    


    <!-- bibliotheque pour bootstrap -->
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script> 
</body>
</html>