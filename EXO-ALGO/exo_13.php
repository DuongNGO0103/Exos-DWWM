<?php
/* debut
ecrire ("entrer un chiffre: ");
lire nbr; 
si nbr>0 alors 
ecrire ("positif")
sinon
ecrire (""negatif" ) 
finsi
fin
*/
echo "Entrer  un chiffre: ";
$nbr = trim(fgets(STDIN));
if ($nbr > 0){
 echo " est positif";
} else {
echo " est negatif";
}
?>