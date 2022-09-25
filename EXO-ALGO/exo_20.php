<?php
/* debut
ecrire ("entrer un nombre de départ ");
lire nbr; 
som = 0;
pour i = 1; i<= nbr, i ++
som= som +i:
Ecrire("la somme des entiers: ",som)
*/
echo "entrer un nombre de départ: ";
$nbr = trim (fgets(STDIN));
$som = 0; 
for($i=1; $i<=$nbr; $i++){
    $som = $som + $i;
}
echo "la somme des entiers  ".$som; // luu y: de tinh duoc tong so cuoi cung, de ngoai vong lap; de ra thu tu lan luot thi de trong vong lap