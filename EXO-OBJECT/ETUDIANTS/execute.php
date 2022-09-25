<?php
/*include('./etudiants.class.php');*/
include('./filieres.class.php');

// creation des objets étudiant
    $etudiant1 = new Etudiant('Rashid','Mohamed','1995/01/02');
    $etudiant2 = new Etudiant('Yves','Chakib','1992/04/02');
    $etudiant3 = new Etudiant('Martin','Manal','2011/03/02');
    $etudiant4 = new Etudiant('Jacques','Meriem','2000/11/02');
    $etudiant5 = new Etudiant('Rami','Mouad','2013/01/02');

    $info = array($etudiant1,$etudiant2);
    $tech = array($etudiant3);
    $genie = array($etudiant4,$etudiant5);

    $filieres = array(
    $filiere1 = new Filiere('Info','Informatique',$info),
    $filiere2 = new Filiere('Tech','Techno de l\'info et de communication', $tech),
    $filiere3 = new Filiere('Génie','Génie civil',$genie)
    );

    echo "Liste des etudiants par filière : \n";
    echo $filiere1;
    echo PHP_EOL;
    echo $filiere2;
    echo PHP_EOL;
    echo $filiere3;

 



 




 
?>