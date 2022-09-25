<?php
/* debut
const TVA= 0.2;
ecrire ("entrer le prix HT d'un article: ");
lire HT; 
ecrire ("entrer le nombre d'un article: ");
lire NA;
TTC=NA*HT*(1+TVA);
ecrire ("le prix total: ",TTC);
fin
*/
const TVA = 0.2;
echo "Entrer  le prix HT d'un article: ";
$HT =trim(fgets(STDIN));
echo "Enter le nombre d'articles: ";
$NA = trim(fgets(STDIN));
$TTC=$NA*$HT*(1+TVA);
echo " Le prix total : ".$TTC;
?>
