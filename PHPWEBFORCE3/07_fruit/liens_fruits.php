<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- link bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   
    <title>Lien fruits</title>
</head>
<body>

<div class="container text-center">

<h1 class="display-4 text-center">LES FRUITS</h1>
<!-- 
    1. Effectuer 4 liens html pointant sur la même page avec le nom des fruits.
    2. faites en sorte d'envoyer 'cerises dans l'url si on clique sur le lien 'cerises.
    3. tenter d'afficher 'cerises' sur la page web si l'on a cliqué dessus ( si cerises est passé dans l'url par conséquent / même chose avec tout les fruits).
    4. Envoyer l'information à la fonction calcul() afin d'afficher le prix pour 1kg de cerises(pareil pour tt les fruits).
 -->
<!-- "?=" remplace le echo
si l'indice 'choix' est definit dans l'URL, cèd que l'on a cliqué sur un lien , on affiche le fruit sinon on affiche un message d'erreur
le "?=" remplace le echo.
les ":" remplace le else.
le "?" remplace le if.
-->
 <h4 >Votre choix est :  <strong class="text-info"><?= (isset($_GET['choix'])) ? $_GET['choix'] : "Aucun fruit selectionné !";?></strong></h4> <hr>
 <?php
 
 require_once("fonction.php");

 // la condition permet de verifier si l'indice 'choix' est bien définit dans l'URL, donc par conséquent que l'on a cliqué sur un lien
 if (isset($_GET['choix']))
 {
   echo calcul($_GET['choix'], 1000);  
 }
 
 ?>
 

 <ul class="col-md-2 offset-md-5 list-group"> 
    <li class="list-group-item"><a href="?choix=cerises">Cerises</a></li>
    <li class="list-group-item"><a href="?choix=bananes">Bananes</a></li>
    <li class="list-group-item"><a href="?choix=pommes">Pommes</a></li>
    <li class="list-group-item"><a href="?choix=peches">Pêches</a></li>
</ul>
    
    </div>
</body>
</html>