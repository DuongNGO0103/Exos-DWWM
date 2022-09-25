<?php
include('../LIVRE/livre.class.php');


$livre1 = new Livre('Programmer en c ','Claude Delannoy','350');
PHP_EOL;
echo $livre1-> Afficher();
echo PHP_EOL;
echo "Le titre est " .$livre1-> getTitre();
echo PHP_EOL;
echo "L'auteur"



?>