<?php
/* debut 
pour i =1 à 5; 
    pour j=1 à i;
    Ecrire ("O");
    finpour
finfour
   fin 

*/

for($i=1; $i<=5; $i++) {
    for($j=1; $j<=$i; $j++){
    echo "O";
}
    echo "X";
    echo PHP_EOL;

}