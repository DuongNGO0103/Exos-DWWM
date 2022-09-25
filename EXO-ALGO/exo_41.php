<?php
/*
Début

Variable : 

$valeurTemp = 0;
$valeurTemp = $tableau1[0];

Déclaration du tableau1 :

$tableau1 = array("D", "E", "C", "A", "L", "A", "G", "E");





Faire une boucle For pour faire un décalage à gauche.

Pour i allant de 0 a taille du tableau, pas 1
    
    tableau1[i] = tableau1[(i+1)];

Fin Pour

tableau1[( taile tableau1)-1)] = valeurTemp;


Faire une boucle For dans une bouble For pour Afficher le tableau.

Pour i allant de 0 au taille du tableau, pas 1
    Afficher tableau[i]
Fin Pour


Fin

*/ 



$tableau1 = array("D", "E", "C", "A", "L", "A", "G", "E");


$valeurTemp = 0;
$valeurTemp = $tableau1[0];

for($i = 0; $i < count($tableau1); $i++){  
    $tableau1[$i] = $tableau1[($i+1)];
}

$tableau1[(count($tableau1)-1)] = $valeurTemp;


for($i = 0; $i < count($tableau1); $i++){
    echo $tableau1[$i]." | ";
}

?>
