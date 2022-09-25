<?php
include('../CERCLE/cercle.class.php');
$p= new Point(2,3);
$monCercle = new Cercle(3,1,2) ;
$monCercle-> appartient($p);
echo PHP_EOL;
$monCercle-> afficher();
echo PHP_EOL;
echo $monCercle-> perimetre();
echo PHP_EOL;
echo $monCercle-> getsurface();



?>