<?php
include_once "../Modele/DBManager.class.php";

$db = new DBManager();

$insertEmployee = $db->insertEmploye($_POST['nom'], $_POST['prenom'], $_POST['emploi'],$_POST['sup'], $_POST['embauche'], $_POST['sal'], $_POST['comm'], $_POST['noserv']);
// sau khi da co data tren tu $db,  nho insert, 
// (no se cap nhat vao BDD ADMIN MY SQL)
//  VI THE TA PHAI DI DEN  executeSelectionListeEmpoye . 
// VA DE CHO CHAYJ LAI DS MOI VA TU DO NO SE AFFICHER LAI DS EMPLOYEE: 
//redirection vers views: 
header('location: ../Ctrl/executeSelectListeEmploye.php');