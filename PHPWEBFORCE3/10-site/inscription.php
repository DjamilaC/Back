
<?php
require_once("include/init.php");

extract($_POST); // $_POST['pseudo'] ---> $pseudo
// Exo 2 : 
echo '<pre>'; print_r($_POST); echo'</pre>';

// Exo 3:
if($_POST)
{
    $verif_pseudo = $bdd->prepare("SELECT * FROM membre WHERE pseudo = :pseudo");
    $verif_pseudo->bindValue(':pseudo', $pseudo, PDO::PARAM_STR);
    $verif_pseudo->execute();
    if($verif_pseudo->rowCount() > 0 )
    {
        $error .= '<div class="col-md-6 offset-md-3 text-center alert alert-danger">Le pseudo ' .$pseudo . ' est deja existant en BDD. Merci d\'en saisir un nouveau !! </div>';
    }

    //-------------------CONTROLR MDP----------------------
    if($mdp !== $mdpconfirm)
    {
        $error .='<div class="col-md-6 offset-md-3 text-center alert alert-danger"> Merci de verifier les mots de passe !! </div>';
    }

// Exo: si l'internaute a bien rempli le formulaire, cela veut dire qu'il n'est passé dans aucune des conditions IF donc la variable $error est vide, nous pouvons donc executer le traitemebnt de l'insertion requete préparée
$data_insert = $bdd->prepare("INSERT into membre (pseudo, mdp ,nom, prenom, email, adresse, ville, code_postal, civilite) VALUES (:pseudo, :mdp ,:nom, :prenom, :email, :adresse, :ville, :code_postal, :civilite)");
// $data_insert->bindValue(':pseudo', $pseudo, PDO::PARAM_STR);
foreach($_POST as $key =>$value)
{
    if($key != "mdpconfirm")
    {
     $data_insert->bindValue(":$key", $value, PDO::PARAM_STR);   
    }
}
$data_insert->execute();



header("Location: connexion.php?action=validate");
// redirige vers le fichier connexion, une fois validé
// header est une fonction prédéfinie, qui permet d' effectuer une redirection de page/ URL
}
require_once("include/header.php");

?>

<!-- 
    1. créer un formulaire HTML correspondant à la table membre de la BDD 'site' (sauf id_membre et statut), ajouter le champs 'confirmer mot de passe'
    2. Contrôler en PHP que l'on receptionne bien toute les données du formulaire ($_POST)
    3. controler la disponibilité du pseudo
    4. Faites en sorte d'informer l'internaute si les mdps  ne sont pas identiques

 -->
 <h2 class="display-4 text-center">INSCRIPTION</h2>
 <?= $error?>
 


                        <!-- Pseudo -->
<form method="post" action="" class="col-md-6 offset-md-3">
<div class="form-group col-md-12">
      <label for="pseudo">Pseudo</label>
      <input type="text" class="form-control" id="pseudo" name="pseudo" placeholder="enter pseudo">
    </div>
<div class="form-row">   
                     <!-- le mot de passe -->
        <div class="form-group col-md-6">
        <label for="mdp">Mot de passe</label>
        <input type="text" class="form-control" id="mdp" placeholder="Mot de passe" name="mdp">
        </div>
                  <!-- confirmer mot de passe -->
        <div class="form-group col-md-6">
        <label for="mdpconfirm">Confirmer mot de passe</label>
        <input type="text" class="form-control" id="mdpconfirm" placeholder="confirmer votre mot de passe" name="mdpconfirm">
        </div>
  </div>
  <div class="form-row">
                     <!-- le NOM -->
        <div class="form-group col-md-6">
            <label for="nom">Nom</label>
            <input type="text" class="form-control" id="nom" placeholder="enter Nom" name="nom">
        </div>
                  <!--Le prenom  -->
        <div class="form-group col-md-6">
            <label for="prenom">Prénom</label>
            <input type="text" class="form-control" id="prenom" placeholder="enter Prenom" name="prenom">
        </div>
   </div>

     <div class="form-group col-md-12">
      <label for="email">Email</label>
      <input type="email" class="form-control" id="email" placeholder="Email" name="email">
    </div>
    <div class="form-group col-md-12">
      <label for="adresse">Adresse </label>
      <input type="text" class="form-control" id="adresse" name="adresse">
    </div>
  <div class="form-row">
   <div class="form-group col-md-6">
      <label for="ville">Ville</label>
      <input type="text" class="form-control" id="ville" name="ville">
    </div>
    <div class="form-group col-md-6">
      <label for="code_postal">Code Postal</label>
      <input type="text" class="form-control" id="code_postal" name="code_postal">
    </div>     
    </div>

    <div class="form-group col-md-6">
      <label for="civilite">Civilite</label>
      <select id="civilite" class="form-control" name="civilite">
        <option value="f">FEMME</option>
        <option value="m">HOMME</option>
      </select>
  
  
  <button type="submit" class="btn btn-primary" >Envoyer</button>
</form>



<?php
require_once("include/footer.php");
?>