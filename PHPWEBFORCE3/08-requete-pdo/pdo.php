<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    
        <h2 class="display-4 text-center">01. PDO : Connexion</h2>
        <?php
        // class PDO
        // {
        //      méthodes (fonctions)
        // propiétés (variables)
        //}
        // connexion BDD
        $pdo = new PDO('mysql:host=localhost;dbname=entreprise', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
        
        echo '<pre>'; var_dump($pdo); echo '</pre>';
        echo '<pre>'; print_r(get_class_methods($pdo)); echo '</pre>';
        /*
         pdo est une classe prédefinie de PHP qui nous permet de se connecter à une base de donnees
         cette clase possède ses propres méthodes(fonctions) qui nous permettent par exemple de formuler et d'executer une requete
         $pdo est l'objet qui permet d'intéragir, d'interroger la BDD

         arguments : 1 (seveur + BDD) / 2 (identifiants) / 3 (mdp) / 4 (option PDO)
        */

        echo '<hr><h2 class="diplay-4 text-center">03. PDO : EXEC - INSERT / UPDATE / DELETE </h2><hr>';
        if(isset($true)) // permet de ne plus avoir l'insert
        {
        $resultat = $pdo->exec("INSERT INTO employes(prenom, nom, sexe, service, date_embauche, salaire) VALUES('djamila', 'chabane', 'f', 'direction', '2018-12-17', 1100)");
        echo "nombre d'enregistrements affecté(s) par l'INSERT : $resultat<br>";
        echo "Dernier ID généré : ". $pdo->lastInsertId().'<hr>';
         }

        /*
        EXEC est une methode issue de la classe prédéfinie PDO, elle permet de formuler et executer des requètes SQL, c'est en argument (entre les parenthèses de la méthode) que l'on envoi la requete
        EXEC() est prévu pour des requetes ne retournant pas de jeu de résultats (INSERT / UPDATE / DELETE) */

        // UPDATE
        // Exo : réaliser le traitement permettant de modifier le salaire de l'emploé n° 350 par 1200

        $resultat = $pdo->exec("UPDATE employes SET salaire = 1200 WHERE id_employes =350 ");
        echo "nombre d'enregistrements affecté(s) par l'UPDATE : $resultat<br>";

        // DELETE 
        // Exo : réaliser le traitement permettant de supprimer l'employé n°350
        $resultat = $pdo->exec("DELETE FROM employes WHERE id_employes =350 ");
        echo "nombre d'enregistrements affecté(s) par DELETE : $resultat<br>";

        echo '<hr><h2 class="diplay-4 text-center">03. PDO : SELECT + FETCH_ASSOC (1 resultat)</h2><hr>';

        $result = $pdo->query("SELECT * FROM employes WHERE id_employes= 415");
        echo '<pre>'; var_dump($result); echo '</pre>';
        echo '<pre>'; print_r(get_class_methods($result)); echo '</pre>';

        $employe = $result->fetch(PDO::FETCH_ASSOC); // retourne un tableau ARRAY indexé avec le nom des champs
        // $employe = $result->fetch(PDO::FETCH_NUM); // retourne un tableau ARRAY indexé numériquement 
        // $employe = $result->fetch(PDO::FETCH_BOTH);// retourne un tableau ARRAY indexé à la fois numériquement et avec le nom des champs
        // il n'est pas possible d'associer 2 fois la meme methode sur le meme resultat
        
        echo '<pre>'; print_r($employe); echo'</pre>';

        // Exo : afficher les informations à l'aide d'un affichage conventionnel en excluant l'id employes
         echo '<div class="col-md-4 offset-md-4 mx-auto alert alert-primary text-center">';
        foreach($employe as $key=> $value){
            if($key != 'id_employes')
            {
                echo "$key : $value <hr>";
            }
          
        }
         echo '</div>';
         /* QUERY() est une méthode issue de la classe PDO qui permet de forumler et d'éxéctuer des requetes SQL. Elle est prévu pour des requetes retourant un jeu de résultat (SELECT).
            Lorsqu'on execute une requete de selection, on obtient toujours en retour un autre objet, issu d'une autre classe : PDOStatement.
            Cette classe possède ses propres propriétés et méthode
            La méthode fetch () permet de rendre le résultat exploitable sous forme de tableau de données ARRAY.
            */
            echo '<hr><h2 class="diplay-4 text-center">04. PDO : QUERY + SELECT + WHILE (plusieurs resultats) </h2><hr>';

            $resultat = $pdo->query("SELECT * FROM employes");

            echo '<pre>'; var_dump($resultat); echo '</pre>';
            // en executant une requete de selection, on obtient en retour un objet PDOStatement, cet objet est inexpoitable en l'etat, on lui associr donc la methode FETCH qui retourne un tableau
            // Pour recuperer l'ensemble des employes dans ce cas on est obligé de boucler
            // la boucle whine permet de dire , tant qu'il ya des employes on boucle!! 
            //$employesreceptionne un tableau array d'un employé par tour de boucle
            // PDO::FETCH_ASSOC --> le '::' permettent de faire appel à une constante de la classe PDO sans devoir l'intancier(créer un objet de la classe)
            while($employes = $resultat->fetch(PDO::FETCH_ASSOC))
            {
                echo "<pre>"; print_r($employes); echo"</pre>";
                echo '<div class="col-md-4 offset-md-4 mx-auto alert alert-info text-center">';
                echo $employes['nom'].'<hr>'; // pour chaque tour de boucle, donc pour chaque tableau ARRAY, on va crocheter aux differents indices.
                echo $employes['prenom'].'<hr>';
                echo $employes['service'].'<hr>';
                echo $employes['salaire'];
                echo '</div>';
            }

            echo '<hr><h2 class="diplay-4 text-center">05. PDO : QUERY + SELECT + FETCHALL + FETCH_ASSOC (plusieurs resultats) </h2><hr>';

            $resultat = $pdo->query("SELECT * FROM employes");
            $donnees = $resultat->fetchALL(PDO::FETCH_ASSOC); // fetchALL() retourne un tableau multidimensionnel avec chaque tableau (de chaque employé ) indéxé numériquement
            echo "<pre>"; print_r($donnees); echo"</pre>";


            // Exo : afficher successivement les données de chaque employé à l'aide de la boucle foreach
            foreach($donnees as $key=> $tab)
            {
                echo '<div class="col-md-4 offset-md-4 mx-auto alert alert-info text-center">';
                foreach($tab as $key2 =>$value)
                {
                     echo "$key2 : $value <hr>";
                }
                echo '</div>';
            }
            echo '<hr><h2 class="diplay-4 text-center">06. PDO : QUERY + SELECT + FETCH + BDD  </h2><hr>';  

            // Exo : afficher la liste des bases de données, puis les mettre dans une liste ul li

            $resultat = $pdo->query("SHOW DATABASES");
            $donnee = $resultat->fetchALL(PDO::FETCH_ASSOC);
            echo "<pre>"; print_r($donnee); echo"</pre>";
            echo '<ul>';
            foreach($donnee as $key=> $tab1)
            {
                foreach($tab1 as $key2=> $value){
                    echo  '<li>';  echo $donnee; echo '</li>';
                }
            

              }
            
            echo'</ul>';
            




        ?>
    
    
    </div>

</body>
</html>