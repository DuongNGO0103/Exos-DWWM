<?php
/*
Début

Variable : 

plusGrand <- 0;

Remplissage du tableau1 :

tableauMulti = [
    [1, 3, 9, 27, 81, 12, 12, 3],
    [1, 3, 9, 27, 81, 12, 12, 3],
    [1, 3, 9, 27, 81, 12, 12, 3],
    [1, 3, 9, 27, 81, 12, 12, 3],
    [1, 3, 9, 27, 81, 12, 12, 3],
    [1, 3, 9, 27, 81, 12, 12, 3],
    [1, 3, 9, 27, 15000, 12, 12, 3],
    [1, 3, 9, 27, 81, 12, 12, 3],
    [1, 3, 9, 27, 81, 12, 12, 3],
    [1, 3, 9, 27, 81, 12, 12, 3],
    [1, 3, 9, 27, 81, 12, 12, 3],
    [1, 3, 9, 27, 81, 12, 12, 3],

];



Faire une boucle For dans une bouble For pour Afficher l'élément le plus grand du tableau3.

Pour i allant de 0 au nombre de colonne, pas 1
    Pour j allant de 0 au nombre de ligne, pas 1
        if (tableauMulti[i][j] > plusGrand) {
            plusGrand = tableauMulti[i][j];
            
        }
    Fin Pour
Fin Pour

Fin

*/ 



$tableauMulti = [
    [1, 3, 9, 27, 81, 12, 12, 3],
    [1, 3, 9, 27, 81, 12, 12, 3],
    [1, 3, 9, 27, 81, 12, 12, 3],
    [1, 3, 9, 27, 81, 12, 12, 3],
    [1, 3, 9, 27, 81, 12, 12, 3],
    [1, 3, 9, 27, 81, 12, 12, 3],
    [1, 3, 9, 27, 15000, 12, 12, 3],
    [1, 3, 9, 27, 81, 12, 12, 3],
    [1, 3, 9, 27, 81, 12, 12, 3],
    [1, 3, 9, 27, 81, 12, 12, 3],
    [1, 3, 9, 27, 81, 12, 12, 3],
    [1, 3, 9, 27, 81, 12, 12, 3],

];

$plusGrand = 0;

for($i = 0; $i < 12; $i++){
    for($j = 0; $j < 8; $j++){
        if ($tableauMulti[$i][$j] > $plusGrand) {
            $plusGrand = $tableauMulti[$i][$j];
            
        }
    }
}

echo $plusGrand;

?>
