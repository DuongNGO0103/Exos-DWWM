<?php

/*

écrire une fonction nommée `ouiNon` qui :

- prend un paramètre de type booléen
- renvoit la chaîne de caractères `'oui'` quand le paramètre a la valeur `true`
- renvoit la chaîne de caractères `'non'` quand le paramètre a la valeur `false`

appeler cette fonction en lui passant un paramètre ayant la valeur `true` et afficher le résultat de la fonction dans la console
appeler cette fonction en lui passant un paramètre ayant la valeur `false` et afficher le résultat de la fonction dans la console

*/
function ouiNon(bool $bool):string {
    if  ($bool===true) {
        return'OUI';
    } else {
        return 'NON';
    }
   
}
echo ouiNon(true);
echo PHP_EOL;
echo ouiNon(false);

