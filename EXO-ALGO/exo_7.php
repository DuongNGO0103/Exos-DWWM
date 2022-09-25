<?php
/* debut
ecrire ("entrer A: ");
lire a; 
ecrire ("entrer B: ");
lire b; 
b1 <= b; 
b <= a;
c1 <=c;
c <= b1;
a <=c1;
ecrit ("A :",a, "B :" , b, "C: ",c) 
fin
*/
echo "Entrer A: ";
$a=trim(fgets(STDIN));
echo "Entrer B: ";
$b=trim(fgets(STDIN));
echo "Entrer C: ";
$c=trim(fgets(STDIN));
$b1=$b;
$b=$a;
$c1=$c;
$c=$b1;
$a=$c1;
echo "A= ".$a."\n B= ".$b."\n C= ".$c;
?>