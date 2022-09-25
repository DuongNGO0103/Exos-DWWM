<?php

/*

écrire une fonction nommée `soustraction` qui :

- prend deux paramètres de type nombre entier
- renvoit le résultat de la soustraction des deux paramètres

appeler cette fonction en lui passant les paramètres ayant la valeur `3` et `2`
afficher le résultat dans la console

*/
function soustraction($x,$y):int {
    $soutt=$x-$y;
    return $soutt;
}
echo '3-2='.soustraction(3,2);

