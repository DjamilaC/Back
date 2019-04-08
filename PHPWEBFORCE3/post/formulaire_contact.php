<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulaire contact</title>

    <!-- link bootstrap -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <!-- réaliser un formulaire avec un champ: objet, email, message et submit -->

    <h1 class="col-md-6 offset-md-4">Formulaire de contact</h1>

    <?php
    echo '<pre>'; print_r($_POST); echo '</pre>';

    if(isset($_POST['submit'])) // on vérifie si on a bien cliqué sur le boutton submit qui a pour attribut name 'submit', si nous avions plusieurs formulaires sur la même page, la condition permet de differencier quel formulaire a été validé
    { 
      // 1er argument
        $destinataire = "djamila.chabane@lepoles.com \n";
        
        // 2ème argument
        $sujet = $_POST['objet'];

        // 3ème argument
        $message = $_POST['message'];


        $entetes = "MIME-Version 1.0 \n";// est un standard internet qui étend le format de données des courriels pour supporter des textes en différents codage des caractères autres que l'ASCII, des contenus non textuels, des contenus multiples, et des informations d'en-tête en d'autres codages que l'ASCII.
        // protocole d' envoi de mail (1991)************************************LIGNE OBLIGATOIRE**************************************************

      // entetes expediteur : toujours "From" et non autre chose ex "DE".
        $entetes .= "From: $_POST[email]\n";

        // entetes d'adresse de retour:
        $entetes .= "Reply-to: djamila.chabane@lepoles.com \n";

       


        // priorité urgente
        $entetes .= "X-priority: 1\n";

        // type de contenu HTML
        $entetes .= "content-type: text/html; charset=utf-8 \n";

        // fonction prédéfinies permettant l'envoi de mail / toujours 4 arguments : destinaires/sujet/message/expéditeur. L'ordre est crucial sinon le test ne fonctionne pas

        mail($destinataire,$sujet,$message,$entetes);
        
    }
    ?>

    <form class="col-md-4 offset-md-4" method="post" action="">
        <!--  method post est a privilégier par rapport a la method get -->
        <!-- la method, c' est la maniere dont vont circuler les données
                 Action sert a determiner l' URL de destination -->

        <div class="form-group">
            <label for="objet">Objet</label>
            <input type="text" class="form-control" id="objet" name="objet" placeholder="objet">
        </div>

        <div class="form-group">
            <label for="email">Email address</label>
            <input type="text" class="form-control" id="email" name="email" placeholder="Enter email">
            <!-- l' attribut name a NE SURTOUT PAS OUBLIER
                 sinon, aucune donnée saisie sur le formulaire ne sera récupérée en PHP -->
        </div>

        <div class="form-group">
            <label for="exampleFormControlTextarea1">Votre message</label>
            <textarea class="form-control" id="message" name="message" rows="3"></textarea>
        </div>

        <button type="submit" name="submit"class="btn btn-danger">Envoi</button>
    </form>

    <!-- bibliotheque pour bootstrap -->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea 6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

</body>

</html>