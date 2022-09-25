<?php
include('../RECTANGLE/rectangle.class.php');
//objet 1
$monRectangle = new Rectangle($x,$y);
$monRectangle -> setLongeur(3);
$monRectangle-> setLargeur(4);

echo"La longeur du rectangle " .$monRectangle-> getLongeur();
echo PHP_EOL;
echo "La largeur du rectangle " .$monRectangle-> getLargeur();
echo PHP_EOL;
echo "Le périmétre est " .$monRectangle-> perimetre();
echo PHP_EOL;
echo "La surface est " .$monRectangle-> air();
echo PHP_EOL;
$monRectangle->AfficherRectangle();

?>