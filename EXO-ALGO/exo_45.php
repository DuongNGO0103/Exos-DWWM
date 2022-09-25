<?php
/*
Début

Variable : 

i = 0;
tableau1 = array(1, 2, 3, 4, 5, 6, 7, 8);
position = 5;

Déclaration du tableau1 :

tableau1 = array("D", "E", "C", "A", "L", "A", "G", "E");





Faire une boucle For pour Rajouter une case à droite et tout décaler à droite

Pour i allant de 0 a taille du tableau, pas 1
    
    tableau1[TailleTableau1 -i] = tableau1[TailleTableau1 -i -1];

Fin Pour




Faire une boucle For pour Aller jusqu'a la position demandée et tout décaler à gauche.

Pour i allant de 0 a la position du tableau, pas 1
    tableau1[i] = tableau1[(i+1)];
Fin Pour

Remplacer la position demandée par la valeur demandée

tableau1[position -1] = 10;



Faire une boucle For dans une bouble For pour Afficher le tableau.

Pour i allant de 0 au taille du tableau, pas 1
    Afficher tableau[i]
Fin Pour


Fin

*/ 


$i = 0;
$tableau1 = array(1, 2, 3, 4, 5, 6, 7, 8);

$position = 7;
//Rajouter une case à droite et tout décaler à droite
for($i = 0; $i < count($tableau1); $i++){  
    $tableau1[count($tableau1) -$i] = $tableau1[count($tableau1)- $i -1];
}

//Aller jusqu'a la position demandée et tout décaler à gauche
for($i = 0; $i < $position; $i++){  
    $tableau1[$i] = $tableau1[($i+1)];
}

//Remplacer la position demandée par la valeur demandée
$tableau1[$position -1] = 3;

for($i = 0; $i < count($tableau1); $i++){
    echo $tableau1[$i]." | ";
}

?>
