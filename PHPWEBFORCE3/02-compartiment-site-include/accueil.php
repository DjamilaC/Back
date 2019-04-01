
<?php
require_once("include/header.php");
require_once("include/nav.php");
/*
    require et include:
    pas de difference entre les deux... sauf en cas d'erreur sur le nom du fichier:
        - include génère une erreur et continue l'execution du script
        - require génère une erreur et stoppe l'execution du script
    le once vérifie si le fichier a déjà été inclus, si c'est le cas, il ne le ré-inclus pas.
*/
?>
<section class="p-4 text-center border-dark" style="height:400px">
    voici le contenu de la page d'accueil <br>
    voici le contenu de la page d'accueil <br>
    voici le contenu de la page d'accueil <br>
    voici le contenu de la page d'accueil <br>
    voici le contenu de la page d'accueil <br>
</section>
<?php
require_once("include/footer.php");


