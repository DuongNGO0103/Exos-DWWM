<?php
/* debut
ecrire ("entrer votre age: ");
lire age; 

si (age> 6 et age <7) alors
ecrire ("votre catégorie est Poussin")
sinon si (age> 8 et age <9) alors
ecrire ("votre catégorie est Pupille")
sinon si (age> 10 et age <11) alors
ecrire ("votre catégorie est Minime")
sinon si (age > 12) alors
ecrire ("votre catégorie est Cadet)
finsi
finsi
finsi
fin
*/
echo "Entrer  votre age: ";
$age = trim(fgets(STDIN));
if($age>= 6 && $age<=7) {
    echo"votre catégorie est Poussin"; 
} elseif($age>= 8 && $age<=9){
    echo"votre catégorie est Pupille";
}elseif($age>= 10 && $age<=11){
    echo"votre catégorie est Minime";
}elseif($age>= 12) {
    echo"votre catégorie est Cadet";
}
    ?>