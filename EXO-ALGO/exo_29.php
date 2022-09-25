<?php
/* debut
ecrire "entrer votre n: ";
lire n;
somme=0
pour i =1 à n; 
somme = somme + (i*i*i) 
Ecrire " ",somme;
finfour
   fin 

*/

$som=0;
$n=(readline("Entrez votre nombre: "));

for($i=1; $i<=$n; $i++) {
    $som=$som+($i*$i*$i);
}
echo 'la somme est: '.$som;
