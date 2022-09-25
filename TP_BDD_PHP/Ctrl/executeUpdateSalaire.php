<?php

include_once "../Modele/DBManager.class.php";

$db = new DBManager();
$updateEmployee = $db->updateSalaireEmploye($_POST['noemp'],$_POST['sal']);
header('location: ../Ctrl/executeSelectListeEmploye.php');