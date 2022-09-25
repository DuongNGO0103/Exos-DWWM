<?php
/* debut 
ecrire "entrer votre longeur de ligne";
lire longeur;
pour i =1 à longeur; 
    pour j=1 à i;
    som = som+ 1.
    Ecrire i=i+1;
    finpour
finfour
   fin 

*/
$a=(readline("Entrez votre nombre: "));
for($i=1; $i<=$a; $i++) {
    for($j=1; $j<=$i; $j++){
    echo $j;' ';
}
    echo PHP_EOL;

}