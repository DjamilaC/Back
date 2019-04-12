<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Srisakdi" rel="stylesheet">
    <title>Pois gourmand</title>
    
</head>
<body>

<?php
if(($_GET === )){  
?>

<?php }else { ?>
<div id="vert"></div>


?>

<div class="container">
    <h2> <i class="fas fa-kiwi-bird"></i>Au pois gourmand</h2>
                      <!-- Partie 1 -->

    <div class="row">

        <div class="col-md-5 offset-md-1 menu">
            <img src="img/rome.jpg" alt="">
            <h4>Formule Rome</h4>
            <p>Tomates buratina <br>
            Rizotto aux asperges <br>
            Panna cotta <br> </p>
            <button type="button" class="col-md-12 btn btn-success">Choisir</button>
        </div>
        <!--  -->
        <div class="col-md-5  menu">
            <img src="img/nyork.jpg" alt="">
            <h4>Formule New-York</h4>
            <p>César salade <br>
            Cheese burger <br>
            Cheescake <br> </p>
            <button type="button" class="col-md-12 btn btn-danger">Choisir</button>
        </div>

    </div>
    <hr>
                     <!-- partie 2 -->
    <div class="row">

        <div class="col-md-5 offset-md-1 menu">
            <img src="img/delhi.jpg" alt="">
            <h4>Formule Delhi</h4>
            <p>Poppadoms <br>
            Agneau byriani <br>
            Lessi mangue <br> </p>
            <button type="button" class="col-md-12 btn btn-warning">Choisir</button>
        </div>
        <div class="col-md-5  menu">
            <img src="img/hanoi.jpg" alt="">
            <h4>Formule Hanoi</h4>
            <p>Nems aux crevettes <br>
            poulet Sauté <br>
            Perles de Coco <br> </p>
            <button type="button" class="col-md-12 btn btn-primary">Choisir</button>
        </div>

    </div> <!--fin class row-->

    <hr> 
                      <!-- resultat 1 -->
    <?php 
     }else {
         ?> 
         <div>section</div>
       
   <section class=>
    <div class="row">     
        
        <div class="col-md-12">
      <h5 class="merci">Merci pour votre commande!!</h5>
      </div>
</div>
<div class="row commande" >        
  
  <div class="col-md-4">
      <img class="formule" src="img/delhi.jpg" alt="">
  </div>
  <div class="col-md-7">
    <p>Votre formule arrive dans quelques instants<i class="fas fa-kiwi-bird"> <br> 
      </p>
      <p>
      Nous vous souhaitons une bonne dégustation. <br>
      Un café gourmand vous est proposé pour terminer votre pause gourmande en douceur.</p>
    <p>Votre facture sera de 28 €</p>
    <button type="button" class="col-md-12 btn btn-success">Choisir un autre menu</button>
</div>
<div class="row">
    <img class="pg" src="img/pg.jpg" alt="">   
            
</div>           
     
</div>


</div>







<?php } ?>
<div>footer</div>
    <footer>
        <div class="row">
            <div class="offset-md-8">
                <p><i class="fas fa-kiwi-bird"></i>.....<i class="fas fa-kiwi-bird"></i>.....<i class="fas fa-kiwi-bird"></i>.....<i class="fas fa-kiwi-bird"></i>.....<i class="fas fa-kiwi-bird"></i>. Au Pois Gourmand</p>
            </div>
        </div>
    </section>
    </footer>
    

</div>


</body>
</html>