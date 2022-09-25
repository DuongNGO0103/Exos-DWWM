<?php
/*
Début

Variable : 

valeurTemp <- 0;

Déclaration du tableau :
tableau1 <- array(1, 2, 3, 4, 5, 6);



Faire une boucle For pour inverser tableau.

Pour i allant de 0 a la moitié du tableau, pas 1
    
    valeurTemp = tableau1[i];
    tableau1[i] = tableau1[taille tableau-(i+1))];
    tableau1[(taille-(i+1))] = valeurTemp;

Fin Pour

tableau1[( taile tableau1)-1)] = valeurTemp;


Faire une boucle For dans une bouble For pour Afficher le tableau.

Pour i allant de 0 au taille du tableau, pas 1
    Afficher tableau[i]
Fin Pour


Fin

*/ 



$tableau1 = array(1, 2, 3, 4, 5, 6);


$valeurTemp = 0;


for($i = 0; $i < (count($tableau1)/2); $i++){  
    
        $valeurTemp = $tableau1[$i];
        $tableau1[$i] = $tableau1[(count($tableau1)-($i+1))];
        $tableau1[(count($tableau1)-($i+1))] = $valeurTemp;
        
    


}

foreach ($tableau1 as $value) {
    echo $value." | ";
}




?>
