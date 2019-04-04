<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>formulaire2</title>
    <!-- link bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

<?php
echo'<pre>'; print_r($_POST); echo'</pre>';
echo '<hr>';
$error ='';
if($_POST){

    foreach($_POST as $key => $value)
{
  echo "$key => $value <br>";
} 
   
  echo '<hr>';
  
  
    if (iconv_strlen($_POST['pseudo'])< 2 || iconv_strlen($_POST['pseudo']) > 20){
    $error.= '<div class="com-md-4 offset-md-4 alert alert-danger text-center text-dark">Le pseudo doit contenir entre 2 et 20 caractères!! </div>';
}  
  
  
      if(($_POST)['mdp'] !== ($_POST)['confirmmdp']){
        $error.='<div class="com-md-4 offset-md-4 alert alert-danger text-center text-dark">Verifiez le mot de passe!! </div>';
      }
  
  
    if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
        $error.='<div class="com-md-4 offset-md-4 alert alert-danger text-center text-dark">Verifiez votre mail!! </div>';    
    }
    
        if (!is_numeric($_POST['codepostal']) || iconv_strlen($_POST['codepostal']) !== 5 ) {
            $error.='<div class="com-md-4 offset-md-4 alert alert-danger text-center text-dark">Votre code postal est invalide!! </div>'; 
        } 
        if(empty($_POST['nom'])){
            $error.='<div class="com-md-4 offset-md-4 alert alert-danger text-center text-dark">Le champs Nom est obligatoire!! </div>';  
        }

        if(!preg_match('#^[0-9]{10}+$#', $_POST['tel']))
        {
            $error.='<div class="com-md-4 offset-md-4 alert alert-danger text-center text-dark">Le numéro de telephone n\'est pas valide!! </div>';  
        }
        /*
        preg_match() : une expression régulière (regex) est toujours entourée de dieze afin de préciser les options
        ^ indique le debut de la chaine
        $ indique la fin de la chaine
        + est ici pour dire que les caractères peuvent etre utilisés plusieurs fois
        */
        echo $error;
    // Exo9 : 
    if(empty($error))
    {
        echo'<div class="com-md-4 offset-md-4 alert alert-success text-center text-dark">Inscription validée!! </div>';  
    }
    
  
}


// error_reporting(E_ALL);

// if(!empty($_POST))
// {
// foreach($_POST as $cle=>$val)
// {
// if(empty($val))
// {
// echo 'Le champ ',$cle,' est obligatoire.<br />';
// }
// }
// }
?>
<!-- 
    1. Réaliser un formulaire HTML avec les champs suivants: pseudo, mdp, confirmer mdp, nom, prénom, adresse, ville, code_postal, email, telephone et un boutton submit
    2. Controler en php que l'on receptionne bien toutes les données du formulaire
    3. faites en sorte d'informer l'internaute si le pseudo n'est pas compris en tre 2 et 20 caractères
    4. faites en sorte d'informer l'internaute si les mots de passes ne sont pas identiques.
    5.faites en sorte d'informer l'internaute si l'email n'est pas au bon format.
    6. Faites en sorte d'informer l'internaute si le code postal n'est pas de type numérique et si il est différent de 5 caractères
    7. Faites en sorte d'informer l'internaute si le champs nom est laissé vide.
    8. Faites en sorte d'informer l'internaute si le champs téléphone n'est pas valide(indice : expression régulière, fonction prédéfinie preg_match)
    9. Faites en sorte d'informer  l'internaute si il a correctement rempli le formulaire
 -->
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
    <label for="pseudo">Pseudo</label>
    <input type="text" class="form-control" id="pseudo" aria-describedby="" placeholder="Enter pseudo" name="pseudo">
    
  </div>
  <div class="form-group">
    <label for="mdp">Password</label>
    <input type="text" class="form-control" id="mdp" placeholder="Password" name="mdp">
  </div> 
  <div class="form-group">
    <label for="confirmmdp">Confirmer mot de passe</label>
    <input type="text" class="form-control" id="confirmmdp" aria-describedby="" placeholder="confirmer mot de passe" name="confirmmdp">
    
  </div>
  <div class="form-group">
    <label for="email">Email address</label>
    <input type="text" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" name="email">    
  </div>
  <div class="form-group">
    <label for="adresse">Adresse</label>
    <input type="text" class="form-control" id="adresse" aria-describedby="" placeholder="Enter adresse" name="adresse">    
  </div>
  <div class="form-group">
    <label for="ville">Ville</label>
    <input type="text" class="form-control" id="ville" aria-describedby="" placeholder="Enter ville" name="ville">    
  </div>
  <div class="form-group">
    <label for="codepostal">Code_Postal</label>
    <input type="text" class="form-control" id="codepostal" aria-describedby="" placeholder="Enter code postal" name="codepostal">
    
  </div>
 
  
  <div class="form-group">
    <label for="sexe">Sexe</label>
    <select class="form-control" id="sexe">
    <option></option>
      <option>Feminin</option>
      <option>Masculin</option>      
    </select>
  </div>
  <div class="form-group">
    <label for="tel">Telephone</label>
    <input type="text" class="form-control" id="tel" placeholder="telephone" name="tel">
  </div>
  <button type="submit" class="btn btn-danger">Submit</button>
</form>










 <!-- bibliotheque pour bootstrap -->
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script> 
    
</body>
</html>