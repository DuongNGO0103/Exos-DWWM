
<?php
/* debut
ecrire ("entrer un nombre de départ ");
lire nbr; 
fac = 1;
pour i = 1; i<= nbr, i ++
fac= fac*i:
Ecrire("factoriel des entiers: ",fac)
*/
echo "entrer un nombre de départ: ";
$nbr = trim (fgets(STDIN));
$fac = 1; 
for($i=1; $i<=$nbr; $i++){
    $fac = $fac * $i;
}
echo "factoriel des entiers:  ".$fac; // luu y: de tinh duoc tong so cuoi cung, de ngoai vong lap; de ra thu tu lan luot thi de trong vong lap