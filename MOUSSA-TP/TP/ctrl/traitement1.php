<?php 
session_start();
include "../modele/functions.php";
// liste des places
$places = array ("Place_1"
,"Place_2"
,"Place_3"
,"Place_4"
,"Place_5"
,"Place_6"
,"Place_7"
,"Place_8"
,"Place_9"
,"Place_10"
,"Place_11"
,"Place_12"
,"Place_13"
,"Place_14"
,"Place_15"
,"Place_16");

//liste des stagiaires
$listeStag=$_SESSION["tabPlacement"];

$tabPlacement =(genererPlacement($places, $listeStag));
sauvegarderPlacement($tabPlacement);//appeler la fonction pour que generer .csv
//on place  le tableau mélangé dán la session pour l'enovyéa la vue

$_SESSION['tabPlacement']=$tabPlacement; // demarrer une nouvelle session: le tableau associatif
//modifier le placement.php pour afficher le contenu de tabPlacement
header('Location:../views/placement.php'); //l'endroit pour afficher le tableau en front

