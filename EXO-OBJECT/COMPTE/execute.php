<?php
include('./compte.class.php');
echo "Compte 1 : \n";
$cni = readline('Donner Le CNI : ');
$nom = readline('Donner le Nom : ');
$prenom = readline('Donner le prénom : ');
$tel = readline('Donner le numéro de téléphone: ');
$solde = readline('Donner le montant à déposer : ');
echo PHP_EOL ;
$compte1_fidel = new Compte($cni,$nom,$prenom,$tel,$solde);
echo $compte1_fidel->afficherResume();
echo "\n";

echo "Compte 2 : \n";
$cni = readline('Donner Le CNI : ');
$nom = readline('Donner le Nom : ');
$prenom = readline('Donner le prénom : ');
$tel = readline('Donner le numéro de téléphone: ');
$solde = readline('Donner le montant à déposer : ');
echo PHP_EOL ;
$compteAisse = new Compte($cni,$nom,$prenom,$tel,$solde);
echo $compteAisse->afficherResume();


echo $compte1_fidel->crediterCpt(2000,$compteAisse);
echo $compteAisse->afficherResume();
echo $compte1_fidel->afficherResume();
echo "Le nombre de compte crées est de : " .Compte::$nombreCpt;










?>