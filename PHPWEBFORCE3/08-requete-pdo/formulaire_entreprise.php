<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>formulaire entreprise</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="container">

<?php

$bdd = new PDO('mysql:host=localhost;dbname=entreprise', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
echo '<pre>'; var_dump($_POST); echo '</pre>';

if($_POST)// si on valide le formulaire, on entre dans la condition
{
$resultat = $bdd->exec("INSERT INTO employes(prenom, nom, sexe, service, date_embauche, salaire) VALUES
('$_POST[prenom]', '$_POST[nom]', '$_POST[sexe]','$_POST[service]', '$_POST[date_embauche]', '$_POST[salaire]')"); 
}
?>
<!-- 

    1.Réaliser un formulaire correspondant à la table 'employes' de la BDD 'entreprise' (sauf id_employes)
    2. Contrôler en PHP que l'on receptionne bien tous les champs du formulaire
echo '<pre>'; print_r($post); echo '</pre>';

    3. Connexion BDD
    4. traitement PHP/SQL permettant l'insertion d'un employé à partir d'un formulaire 
 -->
 <h1 class="col-md-6 offset-md-4" >FORMULAIRE ENTREPRISE</h1><hr>
 <form class="col-md-6 offset-md-4 text-center" method="post" action="">

<div class="form-group">
    <label for="prenom">Prénom</label>
    <input type="text" class="form-control" id="prenom" aria-describedby="" placeholder="Enter prenom" name="prenom">    
  </div>

 <div class="form-group">
    <label for="nom">Nom</label>
    <input type="text" class="form-control" id="nom" aria-describedby="" placeholder="Enter nom" name="nom">    
  </div>

 <div class="form-group">
    <label for="sexe">Sexe</label>
    <select class="form-control" id="sexe" name="sexe">
          <option value="f">F</option>
          <option value="m">M</option>      
    </select>
  </div>

  <div class="form-group">
    <label for="pseudo">Service</label>
    <input type="text" class="form-control" id="service" aria-describedby="" placeholder="Enter service" name="service">    
  </div>

  <div class="form-group">
    <label for="salaire">Salaire</label>
    <input type="text" class="form-control" id="salaire" placeholder="salaire" name="salaire">
  </div> 
  <div class="form-group">
    <label for="date_embauche">Date d'embauche</label>
    <input type="date" class="form-control" id="date_embauche" placeholder="date d'embauche" name="date_embauche">
  </div>   
  
  <button type="submit" class="btn btn-danger">Envoyer</button>
</form>
</div>


</body>
</html>