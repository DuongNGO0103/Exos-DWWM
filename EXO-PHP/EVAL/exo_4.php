<?php



$age = readline('Entrez votre age : ');
$nb = 100 ;
$regex = "/[0-1]{1}[0]{2}/";



$ageValide = preg_match($regex,$nb);

if ($ageValide == 1) {
    if ($age < $nb) {
        echo "Votre age est valide";
    } else {
        echo "Votre n'est pas valide";
    }
}






?>