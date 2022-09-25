<?php
session_start();
include ('../modele/fonction_tp.php');

// liste des places
$places = 
[   'Place_1',
    'Place_2',
    'Place_3',
    'Place_4',
    'Place_5',
    'Place_6',
    'Place_7',
    'Place_8',
    'Place_9',
    'Place_10',
    'Place_11',
    'Place_12',
    'Place_13',
    'Place_14',
    'Place_15',
    'Place_16',
];




$listeStag  = file($_FILES["file"]["tmp_name"]);

$tabPlacement = genererPlacement($places,$listeStag);

sauvegarderPlacement($tabPlacement);

 $_SESSION['tableau'] = $tabPlacement;
 

header('Location: ../views/placement.php');
?>






