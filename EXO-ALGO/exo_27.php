<?php
/* debut
Ecrire ("saisir note d'oral: ");
Lire note_o;
Ecrire("saisir note d'ecrit: ");
Lire note_e;
la moyenne= (note_e*2 +note_o)/3
if (la moyenne >=10) alors ecrire ("vous êtes validé")
sinon ecrire ("vous êtes pas palidé")
fin

*/

$note_o = readline('saisir note d\'oral: ');
$note_e= readline ('saisir note d\'ecrit: ');
$moyenne= (($note_e*2)+$note_o)/3;
if ($moyenne >= 10) {
    echo "votre moyenne est: " .$moyenne; 
    echo PHP_EOL;
    echo"vous etes validé";
}
else {
    echo "votre moyenne est: " .$moyenne; 
    echo PHP_EOL;
    echo"vous etes pas validé";
}
