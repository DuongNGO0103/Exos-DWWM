<?php
/* debut
//creation d'un tableau vide de 9 d'indice:
Pour i= 0 jusqu'à 8 faire; 
Ecrire"entrer la valeur d'indice:",i;
Lire tableau [i];
Ecrire "la valeur de:",i,"est",tableau[i];
finpour
fin

*/
// création d'un tableau vide:
$tab= array();
//saisir les éléments:  
for ($i = 0; $i <9; $i++) {
$tab[$i]=readline('saisir votre valeur :'); 
}
//affichage des éléments du taleau
        for ($i = 0; $i <9; $i++) {
    //à chaque tour on affiche la valeur de $i
        echo $tab[$i]. ' ';
}
