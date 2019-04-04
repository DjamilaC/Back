<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulaire</title>
    <!-- link bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<!-- Exo : réaliser un formulaire HTML avec les champs suivants : email, mot de passe et un bouton submit -->
<div class="container">
<h1 class="display-4 text-center">Formulaire 1</h1> <hr>
<?php
echo'<pre>'; print_r($_POST); echo'</pre>'; // permet d'observer les données saisies dans le formulaire qui vont se stocker directement dans la superglobale $_POST, les indices conrrespondent aux attributs 'name' du formulaire HTML

// Exo: afficher les données saisie dans le formulaire en passant par la superglobale $_POST avec un affichage conventionnel(sans print_r ou var_dump)

//on parcoure la superglobale $_POST de type array avec une boucle foreach

foreach($_POST as $key => $value)
{
  echo "$key => $value <br>";
}
if($_POST){
  echo "email => $_POST[email]<br>";
echo "password: " .$_POST['password']."<br>";
echo '<hr>';
}

// on extrait les valeurs une par une en passant par la superglobale $_POST en crochetant aux differents indices
// sans la condition IF, au premier chargement de la page, nous avons 2 erreurs 'undefined', c'est dû au fait que le formulaire n'a pas été validé et donc les indices 'email' et 'password' ne sont pas reconnu
// Si la condition IF est vérifiée, si elle renvoi 'true', cela veut dire que l'on a soumis le formulaire et que les indices 'email' et 'password' sont bien détectés.


?>

<form class="col-md-4 offset-md-4" method="post" action=""><!-- method:comment vont circuler les données/ action:url de destination-->
  <div class="form-group">
    <label for="email">Email address</label>
    <input type="text" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" name="email">
    <!--il ne faut surtt pas oublier les attributs name sur le formulaire html, sinon aucune donnée saisie ne sera récupéré en php-->
    
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="text" class="form-control" id="password" placeholder="Password" name="password">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>






   <!-- bibliotheque pour bootstrap -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script> 
</body>
</html>