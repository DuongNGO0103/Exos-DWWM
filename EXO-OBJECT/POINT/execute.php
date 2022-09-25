<?php
include('../POINT/point.class.php');
/*$monPoint = new Point(10,7);
echo $monPoint -> getAbcisse();
$monPoint-> setAbcisse(5);
echo PHP_EOL ;
echo $monPoint -> getAbcisse();

//$monPoint-> setOrdonnee(9);

//print_r($monPoint);*/

$monPoint = new Point(1,2);
echo $monPoint -> getAbcisse();
echo PHP_EOL ;
echo $monPoint-> getOrdonnee();
echo PHP_EOL ;
echo "La norme du point " .$monPoint -> getAbcisse().",".$monPoint-> getOrdonnee(). " est : ".$monPoint-> norme();
?>