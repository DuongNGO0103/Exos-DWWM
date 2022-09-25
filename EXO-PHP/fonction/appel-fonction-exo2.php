<?php

/*

créer une variable nommée `$url` et lui affecter la valeur `'http://php.net/manual/fr/function.parse-url.php'`
appeler la fonction `parse_url` en lui passant la variable `$url` comme paramètre
stocker le résultat de la fonction dans une variable nommée `$resultat`
affichager la variable `$resultat` en utilisant la fonction `var_dump`
parse_url: phan tich mot URL va tra ve thanh phan cua no. 
su dung var_dump de ra ket qua 
*/
$url='http://php.net/manual/fr/function.parse-url.php';  
parse_url($url);
$resultat=parse_url($url);
//var_dump($resultat);
echo PHP_EOL;
echo $resultat;