<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- link bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  
    <title>Formulaire fruit</title>
</head>
<body>
<!-- 
    1. Réaliser un formulaire HTML permettant de selectionner un fruit (liste déroulante) et de saisir un poids (champs input)
    2. traitement permettant d'afficher le prix en passant par la fonction déclarée calcul()
    3. faire en sorte de garder le dernier fruit selectionné et le poids saisi dans le formulaire lorsque celui-ci est validé
 -->
 <div class="container text-center">
    <h1 class="display- text-center" >FORMULAIRE FRUITS</h1>

        <?php
        //  echo '<pre>'; print_r($_POST); echo '</pre>';
        require_once("fonction.php");
        if($_POST)// si je valide le formulaire
        {
            echo calcul($_POST['fruit'], $_POST['poids']) . '<hr>'; // on transmet les données saisies dans le formulaire à la fonction calcul grace à la méthode $_POST
        }
        
        
        ?>
        <form class="col-md-4 offset-md-4" method="post" action="">

        <div class="form-group">
            
        <div class="form-group">
            <label for="fruit">Fruits</label>
            <select class="form-control" id="fruit" name="fruit">
            <option value="cerises" <?php if(isset($_POST['fruit']) && $_POST['fruit'] == 'cerises') echo 'selected' ?>>Cerise </option>

            <option value="bananes" <?php if(isset($_POST['fruit']) && $_POST['fruit'] == 'bananes') echo 'selected' ?>>Banane</option>

            <option value="pommes" <?php if(isset($_POST['fruit']) && $_POST['fruit'] == 'pommes') echo 'selected' ?>>Pomme</option>

            <option value="peches" <?php if(isset($_POST['fruit']) && $_POST['fruit'] == 'peches') echo 'selected' ?>>Pêche</option>
            <!--  exemple avec une conditioon ternaire -->
            <option value="peches" <?= (isset($_POST['fruit']) && $_POST['fruit'] == 'peches') ? 'selected' : '' ?>>Pêche</option>
                
            </select>
        </div>
        <div class="form-group">
            <label for="poids">Poids</label>
            <input type="text" class="form-control" id="poids" placeholder="enter poids" name="poids" value="<?php if(isset($_POST['poids'])) echo $_POST['poids']?>">
            <!-- si l'indice poids est bien définit, cela veut dire que nous avons validé le formulaire et saisie le poids, alors on l'affiche dans le champs-->
        </div>
        <button type="submit" class="col-md-12 btn-danger mb-4 ">calcul</button>
        </form>


</div>
</body>
</html>