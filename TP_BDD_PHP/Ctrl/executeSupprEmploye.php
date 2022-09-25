<?php

include_once "../Modele/DBManager.class.php";

$db = new DBManager();
$deleteEmployee = $db->supprEmploye($_POST['noemp']);
//redirection vers views: 
header('location: ../Ctrl/executeSelectListeEmploye.php');