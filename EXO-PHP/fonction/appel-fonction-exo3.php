<?php

/*

créer une variable nommée `$liste` de type array qui contiendra les éléments `'artichaut'`, `'broccoli'` et `'carotte'`
appeler la fonction `implode` en lui passant la chaîne de caractères `', '` comme premier paramètre puis la variable `$liste` comme deuxième paramètre
stocker le résultat de la fonction dans une variable nommée `$legumes`
affichager la variable `$legumes` dans la console

si besoin, référez-vous à la documentation sur la fonction `implode` :

PHP: implode - Manual
http://php.net/manual/fr/function.implode.php
// ddaa
bieens cac element trong array thanh mot chuoi. 
*/
$liste =array ('brocoli','artichaut','carotte');
$legumes=implode("|",$liste );
// output: brocoli|artichaut|carotte
echo $legumes;