<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <!-- link bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>SESSION PHP</title>

</head>

<body>

<div class="container text-center">
<h1 class="display-4 text-center"> SESSION PHP</h1> <hr>
<?php

// une session est un moyen de garder des variables accessibles quelque soit la page où l'on se trouve
// par exemple sans une sesssion active, nous ne pourrions pas naviguer sur un site tout en restant connecté
// les sessions sont conservés coté serveur puisqu'elles contiennent des données sensibles tel que votre email, nom, prenom etc...

session_start(); // permet de créer un fichier session se trouvant dans le dossier c:/xamp/tmp

// on stock des données dans la session en créant des indices au tableau ARRAY
$_SESSION['pseudo'] = 'DjamilaCh';
$_SESSION['nom'] = 'CHABANE';
$_SESSION['prenom'] = 'Djamila';

echo '<pre>'; print_r($_SESSION); echo'</pre>';

// vider une partie de la session
unset($_SESSION['prenom']);
echo '<pre>'; print_r($_SESSION); echo'</pre>';

// supprimer la session
// session_destroy();
?>








</div>
    

    <!-- bibliotheque pour bootstrap -->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea 6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

</body>
</html>