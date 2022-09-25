<?php
/* debut
Ecrire ("saisir a: ");
Lire a;
Ecrire("saisir b: ");
Lire b;
Ecrire("saisir c: ");
Lire c;
d= b*b - 4*a*c
si d > 0 alors 
ecrire "il y a deux solutions X1 et X2";
x1= (-b - sqrt(d))/2*a;
x2 = (-b + sqrt(d))/2*a;
ecrire "x1= :", x1
ecrire " x2= :", x2
sinonsi d = 0 alors; 
ecrire"il y a une solution double X1"; 
x1 = -b/2*a; 
ecire "x1= ", x1"
sinon 
ecrire "pas de solution";
finsi
fin
*/

$a= readline('saisir nombre A:');
$b= readline('saisir nombre B:');
$c= readline('saisir nombre C:');
$d=($b*$b) - (4*$a*$c);

if ($d > 0) {
    
    $x1= (-$b - sqrt($d))/(2*$a);
    $x2 =(-$b + sqrt($d))/(2*$a);
    echo "x1 = ".$x1;
    echo PHP_EOL;
    echo "x2 = ".$x2;
}
elseif ($d==0) {
    $x1=-$b/2*$a;
    echo "x1 = ".$x1;
}
else {
    echo" d<0 pas de solution";
}