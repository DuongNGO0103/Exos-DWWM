<?php

//prend en parametre 2 tableau simple (liste des place, liste des stagiaires) mélange aléatoirement puis renvoie un tableau associatif
function genererPlacement(array $places, array $listeStag):array{

//retourn le tableau mélangé   
shuffle($listeStag);
$tabPlacement = array_combine($places,$listeStag); // assigne à la variable $tabPlacement la combinaisons des tableaux $places et $listeStage
//return $tabPlacement;
return ($tabPlacement);
}

//prend en parametre le tableau associatif mélangé et le sauvegarde dans un fichier CSV sur le disque dur dans ./save
//le nom du fichier doit etre sous le format "save_'datetime'.csv"


function sauvegarderPlacement(array$tabPlacement):void{

   // Instantiate a DateTime with microseconds.
$d = new DateTime();
// Output the date with microseconds.
$dateJ = $d->format('d-m-Y\TH-i-s');
// le nom du nouveau fichier
$nomFichier = './save/save_'.$dateJ.'.csv';

foreach ($tabPlacement as $key => $value) { //

    $line = $key.';'.$value."\n";
    file_put_contents($nomFichier, $line,FILE_APPEND);
}

}



?>