<?php
/* debut
Ecrire "entrer un nombre de valeurs";
Lire nbr;
Pour i= 0 jusqu'à nbr faire; 
Ecrire"entrer la valeur d'indice:",i;
Lire tableau [i];
Ecrire "la valeur de:",i,"est",tableau[i];
finpour
fin

*/
echo "entrez A: ";
$a=trim(fgets(STDIN));
// création d'un tableau vide:
$tab= array();
//saisir les éléments:  
for ($i = 0; $i <$a; $i++) {
$tab[$i]=readline('saisir votre valeur :'); 
}
//affichage des éléments du taleau
        for ($i = 0; $i <$a; $i++) {
            echo $tab[$i]. ' ';
            }
//afficage des nombre négatif:
echo PHP_EOL;
echo "les nombres positifs:";
        for ($i = 0; $i <$a; $i++) {
                if ($tab[$i]>0) {
        echo $tab[$i].' ';
            }
        }
        echo PHP_EOL;
echo "les nombres negatif:";
        for ($i = 0; $i <$a; $i++) {
                if ($tab[$i]<0) {
                echo $tab[$i].' ';
                    }
                }
        
    

            
