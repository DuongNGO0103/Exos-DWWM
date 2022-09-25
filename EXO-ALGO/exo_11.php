<?php
/* debut
ecrire ("entrer A: ");
lire a;  
carre= a*a;
ecrire ("le resultat du carré: ",carre)
fin
*/
echo "Entrer  A: ";
$a= trim(fgets(STDIN)); 
$carre=$a*$a;
echo "le resultat du carré : ".$carre;
?>