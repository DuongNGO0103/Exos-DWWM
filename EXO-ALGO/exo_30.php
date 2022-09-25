<?php
/* debut
ecrire "entrer votre a1: ";
lire a1;
ecrire "entrer votre a2: ";
lire a2;
(a1 xuat hien a2 lan)
pour i =1 à a2; 
somme = somme + a1; 
Ecrire " ",somme;
finfour
   fin 

*/
$num1 = readline('saisir votre numbre 1: ');
$num2= readline('saisir votre numbre 2: ');
for($i=1; $i<=$num2; $i++){
$res=$res+$num1;
}
echo 'resultat= '.$res;