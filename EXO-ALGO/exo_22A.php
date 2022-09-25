<?php
/* debut
max= 0; 
pour i = 1 jusqu'à 20 faire ;
Ecrire("enter le nombre: "i)
lire A; 
si A> max alors 
max=A
finsi
finpour
ecrire"le plus grand nombre,"max
*/
$max=0; 
$i=1;
while ($i<=5):
    echo "entrer le nombre ".$i. " :";
    $nbr = trim (fgets(STDIN));
    $i++;
    echo PHP_EOL;
endwhile;
if ($nbr>$max) {
    $max=$nbr;
}
    echo "le plus grand nom est: ".$max;
