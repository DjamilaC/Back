<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- link bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>exercice_php_sql</title>
</head>
<body>

<?php

echo'<pre>'; print_r($_POST); echo'</pre>';
echo '<hr>';
 $error ='';

if($_POST){
foreach($_POST as $key => $value){
    echo "$key => $value <br>";
}
echo '<hr>';

if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
    echo'<div class="com-md-4 offset-md-2 alert alert-danger text-center text-dark">Verifiez votre mail!! </div>'; 
}
 if (!is_numeric($_POST['codepostal']) || iconv_strlen($_POST['codepostal']) !== 5 ) {
     $error.='<div class="com-md-4 offset-md-4 alert alert-danger text-center text-dark">Votre code postal est invalide!! </div>'; 
 }
 if(empty($_POST['nom'])){
     $error.='<div class="com-md-4 offset-md-4 alert alert-danger text-center text-dark">Le champs Nom est obligatoire!! </div>';  
 }
 if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
     $error.='<div class="com-md-4 offset-md-4 alert alert-danger text-center text-dark">Verifiez votre mail!! </div>';    
 } 
  echo $error;
if(empty($error))
    {
        echo'<div class="com-md-4 offset-md-4 alert alert-success text-center text-dark">Inscription validée!! </div>';  
    }
}
?>

<h1 class="col-md-6 offset-md-4" >FORMULAIRE</h1>
 <form class="col-md-6 offset-md-4" method="post" action="">

 <div class="form-group">
    <label for="nom">Nom</label>
    <input type="text" class="form-control" id="nom" aria-describedby="" placeholder="Enter nom" name="nom">
    
  </div>
  <div class="form-group">
    <label for="prenom">Prénom</label>
    <input type="text" class="form-control" id="prenom" aria-describedby="" placeholder="Enter prenom" name="prenom">
    
  </div>
   <div class="form-group">
    <label for="mdp"> Mot de passe</label>
    <input type="text" class="form-control" id="confirmmdp" aria-describedby="" placeholder="mot de passe" name="mdp">
  </div>

  <div class="form-group">
    <label for="email">Email</label>
    <input type="text" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" name="email">    
  </div>
  <div class="form-group">
    <label for="adresse">Adresse</label>
    <input type="text" class="form-control" id="adresse" aria-describedby="" placeholder="Enter adresse" name="adresse">    
  </div>
  
  <div class="form-group">
    <label for="codepostal">Code_Postal</label>
    <input type="text" class="form-control" id="codepostal" aria-describedby="" placeholder="Enter code postal" name="codepostal">
  </div>

  <div class="form-group">
    <label for="sexe">Genre</label>
    <select class="form-control" id="sexe" name="sexe">
    <option></option>
      <option>Feminin</option>
      <option>Masculin</option>      
    </select>
  </div>

  <button type="submit" class="btn btn-danger">Submit</button>
</form>

<!-- EXERCICE 1 : 

a- Créer un formulaire d'inscription (methode "POST") avec les champs :
=> Prenom
=> Nom
=> email
=> Adresse
=> cade postal
=> Genre (f/h)

b- Afficher dans un tableau PHP les valeurs saisies dans le formulaire.

c- Effectuer tous les contrôles des champs
-->

    <!-- bibliotheque pour bootstrap -->
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script> 
</body>
</html>

