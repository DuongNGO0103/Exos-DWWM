<?php
/* debut
max= 0; 
pour i = 1 jusqu'à 20 faire ;
Ecrire("enter le nombre: "i)0
lire A; 
si A> max alors 
max=A
position=i-1;
finsi
finpour
ecrire"le plus grand nombre,"max,"dans le position: ",position 

*/
$max=0; 
$position=0;
$i=1;

echo "entrer le nombre ";
$nbr = trim (fgets(STDIN));
while ($nbr!=0){
    echo "entrer le nombre  ";
    $nbr = trim (fgets(STDIN));
    $i++;
    echo PHP_EOL;
if ($nbr>$max) {
    $max=$nbr;
    $position=$i-1;
}
};
echo "le plus grand nom est: ".$max,"dans le position: ".$position;