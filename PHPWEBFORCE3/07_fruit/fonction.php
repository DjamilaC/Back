

<?php  //       bananes, 500
function calcul($fruit, $poids)
{     //    bananes
    switch($fruit)
    {
        case 'cerises' : $prix_kg = 5.76; break;
        case 'bananes' : $prix_kg = 1.06; break;
        case 'pommes' : $prix_kg = 1.61; break;
        case 'peches' : $prix_kg = 3.23; break;
        default: return "fruit inexistant"; break;
    }
    $resultat = round(($poids*$prix_kg/1000),2); // round est une fonction prédéfinie qui permet d'arrondir un chiffre, dans notre cas, 2 décimal aprés la virgule
    return "les $fruit coutent $resultat Euros pour $poids grammes. <br>";
}
// echo calcul('bananes', 500);



?>
