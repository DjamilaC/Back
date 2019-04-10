<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>TCHAT !!</title>
</head>
<body>

<!-- 
    Exercice : espace de dialogue(tchat)
    1. Modélisation et création
        BDD : tchat
        Table : comentaire
                id_comentaire // INT(3) PK - AI
                pseudo        // VARCHAR(20)
                dateEnregistrement // DATETIME
                message            // TEXT
    2. Connexion à la BDD
    3. Création d'un formulaire HTML (pour l'ajout de message)
    4. Récupération et affichage des saisies en PHP ($_POST)
    5. Requete SQL d'enregistrement (INSERT)
    6. Affichage des messages

 -->

 <?php

 // 2. connexion à la base de données BDD
    $bdd = new PDO('mysql:host=localhost;dbname=tchat', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

   // 4. Récupération et affichage des saisies en PHP ($_POST)

   echo '<pre>'; print_r($_POST); echo'</pre>';

    // 5. Requete SQL d'enregistrement (INSERT)
    extract($_POST);// permet de transformer chaque indice du formulaire en valeur
    if($_POST){
    foreach($_POST as $key => $value)
        {
            $_POST[$key] = strip_tags($value); // on passe en revue le formulaire en executant la fonction strip_tags sur chaque valeur saisie du formulaire
        }
    
        // $resultat = $bdd->exec("INSERT INTO comentaire (pseudo, dateEnregistrement, message) VALUES ('$pseudo', NOW(), '$message')");
        // echo "Nombre d'enregistrements : $resultat<br>";
        /*
            INJECTION SQL:
                ok'); DELETE FROM comentaire;(

            FAILLES XSS: 
            <script type="text/javascript">
            var point = true;
            while(point == true)
            alert("j'ai planté ton site!!!");
            </script>
            <style>
            body{
                display: none;}
                </style>
                pour parer aux failles XSS, il existe plusieurs fonctions prédéfinies : 
                - stri_tags() : permet de supprimer les balises HTML
                - htmlspecialchars() : permet de rendre innoffensives les balises HTML
                - htmlentities() : permet de convertir les balises MTML
        */
        
        $req = "INSERT INTO comentaire (pseudo, dateEnregistrement, message) VALUES (:pseudo, NOW(), :message)";
        echo $req;
        $resultat = $bdd->prepare("INSERT INTO comentaire (pseudo, dateEnregistrement, message) VALUES (:pseudo, NOW(), :message)");
            $resultat->bindValue(':pseudo', $pseudo, PDO::PARAM_STR);
            $resultat->bindValue(':message', $message, PDO::PARAM_STR);
            $resultat->execute();
            // ces lignes de codes, la methode prepare(), permet d' éviter les injections sql des hackers
            // la ok'); DELETE FROM commentaire;( ne fonctionne plus ( supprimait les commentaires définitivement)
    }
    $resultat = $bdd->query("SELECT pseudo, message, DATE_FORMAT(dateEnregistrement, '%d/%m/%y')AS datefr, DATE_FORMAT(dateEnregistrement, '%H:%i:%S') AS heurefr FROM comentaire ORDER BY dateEnregistrement DESC");

    while($commentaire = $resultat->fetch(PDO::FETCH_ASSOC))
    {
        // echo '<pre>'; print_r($commentaire); echo'</pre>';
          
          echo '<div class="col-md-8 offset-md-2 alert alert-secondary">';
          echo "<div><em>Par $commentaire[pseudo], le $commentaire[datefr] à $commentaire[heurefr]</em></div><hr>";
          echo "<div class='text-justify'>$commentaire[message]</div>";
      echo '</div>';
    }
    echo "<hr><div class='text-center'>Nombre de commentaire(s) : <strong class='badge badge-danger'>". $resultat->rowCount().'</strong></div>';


    ?>

    <!-- 3. Création d'un formulaire HTML (pour l'ajout de message) -->
    <div class="container">
    <h1 class="col-md-6 offset-md-4" >FORMULAIRE TCHAT</h1><hr>
    <form class="col-md-6 offset-md-4 text-center" method="post" action="">


    <div class="form-group">
        <label for="pseudo">Pseudo</label>
        <input type="text" class="form-control" id="pseudo" aria-describedby="" placeholder="Enter pseudo" name="pseudo">    
    </div>

    <div class="form-group">
        <label for="message">Message</label>
        <textarea class="form-control" id="message" name="message" rows="5"></textarea>
                
    
    </div>
    
    <button type="submit" class="btn btn-danger">Poster</button>
    </form>
    </div>






    </div>




        
    </body>
    </html>