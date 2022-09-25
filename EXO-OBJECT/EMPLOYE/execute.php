<?php
include('./employe.class.php');
$matricule = readline('Entrez votre immatricule : ');
$nom = readline('Entrez votre nom : ');
$prenom = readline('Entrez votre prenom : ');
$dateNaissance = readline('Entrez votre date de naissance sous ce format jj-MM-annee : ');
$dateEmbauche = readline('Entrez votre date d\'embauche sous ce format jj-MM-annee : ');
$salaire = readline('Entrez votre salaire : ');

$employe1 = new Employe($matricule,$nom,$prenom,$dateNaissance,$dateEmbauche,$salaire);
echo $employe1->afficherEmploye();



?>