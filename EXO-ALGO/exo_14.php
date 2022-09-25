<?php
/* debut
ecrire ("entrer un numero 1: ");
lire nbr1; 
ecrire ("entrer un numero 2: ");
lire nbr2; 
si ((nbr1>0 et nbr1 >0)ou(nbr1<0 et nbr<0))  alors 
ecrire ("le produit est positif")
sinon
ecrire ("le produit est negatif" ) 
finsi
fin
*/
echo "Entrer  le premier nombre: ";
$nbr1 = trim(fgets(STDIN));
echo "Entrer  le deuxieme nombre: ";
$nbr2 = trim(fgets(STDIN));

if (($nbr1> 0 && $nbr2>0)||($nbr1< 0 && $nbr2<0)){
 echo"le produit est positif";   
} else {
    echo "le produit est negatif";
} 

   