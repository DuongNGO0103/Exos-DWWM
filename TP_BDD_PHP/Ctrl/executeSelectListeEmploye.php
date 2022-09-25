<?php
// B4 tao ra SESSION START DE SHARE DU LIEU TU BACK DEN THANG VIEW
//démarrer le session afin de partager les donées du back au front
session_start();
//importer un ficher: DBManager
include_once "../Modele/DBManager.class.php";
//object de BDD
//da lay duoc du lieu tu $bd

$db = new DBManager();

//appeller la fonction - la liste employe MOI NHAT NHO VAO "SELECT * FROM `emp`; "

$listeEmploye = $db->selectListeEmploye();
//stocker $listeEmploye dans table Session 
//tien hanh stocker danh sach nay vao session 

$_SESSION['listeEmploye']=$listeEmploye;
//huong session den afficherEmploye;php
//redirection vers views: 
header('location: ../view/afficherEmploye.php');