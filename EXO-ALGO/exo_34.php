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
//affichage des éléments du taleau

$som=0;
echo "la somme des valeurs d'un tableau: ";
for ($i = 0; $i <9; $i++) {
        $som=$som+$tab[$i];
        echo $som;
}