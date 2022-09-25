
<?php
/* debut
ecrire ("entrer A: ");
lire a; 
ecrire ("entrer B: ");
lire b; 
c <= a; 
a <= b;
b <=c;
ecrire ("A :",a, "B :" , b ) 
fin
*/

echo "entrez A: ";
$a=trim(fgets(STDIN));
echo" entrer B:";
$b=trim(fgets(STDIN)); 
$c=$a;
$a=$b;
$b=$c;

echo "le resultat est a : ".$a."\n le second resultat est b: ".$b; 

?>