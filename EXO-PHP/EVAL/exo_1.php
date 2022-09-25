<?php



$nb1 = readline("Entrer un nombre ");
$i = 1;

$nombre_aléatoire = rand(0,1000);
    do {
        echo $nb1 * $nombre_aléatoire;
    } while ($nb1 < $nombre_aléatoire);


?>