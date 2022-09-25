<?php
/* debut
Ecrire ("entrer le premier chiffre");
Lire nb1;
Ecrire("entrer le deuxieme chiffre");
Lire nb2;
moyenne = (nb1 + nb2)/2;
Ecrire"le moyennen est:", moyenne
*/
echo "entrer le premier nombre ";
$nb1 = trim (fgets(STDIN));
echo "entrer le deuxieme nombre ";
$nb2 = trim(fgets(STDIN));
$moyenne = ($nb1+$nb2)/2;
echo "le moyenne est:".$moyenne;
