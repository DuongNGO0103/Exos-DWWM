<?php
/* debut
Ecrire ("entrer votre age");
Lire age;
Ecrire(Entrer votre sex");
Lire sex;
si sex=homme 
    si age >20 alors 
    Ecrire ("vous devez payer les impot")
    sinon Ecrire ("vous ne devez pas payer les impot")
si sex= Femme 
    si age >18 && age<20, alors
     Ecrire ("vous devez payer les impot")
     sinon Ecrire ("vous ne devez pas payer les impot")

*/
echo "entrer votre age ";
$age = trim (fgets(STDIN));
echo "entrer 0 si vous êtes homme et 1 si vous êtes femme)";
$sex = trim(fgets(STDIN));
if (($sex = 0 && $age >= 20)||($sex = 1 && ($age >= 18 && $age < 35))){
        echo "vous devez payer les impots";
    } else  {
        echo "vous devez pas payer les impots";
    } 
    