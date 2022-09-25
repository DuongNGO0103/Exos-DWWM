<?php
session_start();

include('../models/fonctions.php');



$places = array('Place_1', 
'Place_2', 
'Place_3',
'Place_4',
'Place_5','Place_6','Place_7','Place_8','Place_9','Place_10','Place_11','Place_12','Place_13','Place_14','Place_15','Place_16');



$listeStag = array(
"Janello Morgan",
"Ngo Mbenock Wilfried",
"Mansouri Karim",
"Yigitoglu Romy-robyn",
"Muong Panharith",
"FLEURY Jean-Pierre",
"Bhewa Assia",
"Salhi Rayan",
"Mehhat Mohir",
"NZIENGUI ATEBA Fidel",
"Cordoba Bonvin David", 
"NGO Thi Thuy Duong",
"Merroune Mehdi",
"Chtioui Siham",
"Camara Aïssé", 
"Debaer Samuel" );


$tableauAssociatif = genererPlacement($places, $listeStag);

sauvegarderPlacement($tableauAssociatif);

$_SESSION['tableauAssociatif'] = $tableauAssociatif;
header('Location: ../views/placement.php');





?>