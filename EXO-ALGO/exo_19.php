<?php
/* debut
ecrire ("entrer un nombre de départ ");
lire nbr; 
pour i = 1; i<= 10, i ++
Ecrire("la valeur de N est: ",i)
*/
echo "entrer le nombre du départ: ";
$nbr = trim (fgets(STDIN));
$i = 0; 
for($i=1; $i<=10; $i++){
    $k = $nbr + $i;
    ;
    echo "le nombre suivant: ".$k; 
    echo PHP_EOL;
}

