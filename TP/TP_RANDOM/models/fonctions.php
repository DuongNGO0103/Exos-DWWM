<?php



function genererPlacement(array $places, array $listeStag):array {
   
    shuffle($listeStag);
    $tableauAssociatif = array_combine($places, $listeStag);
    
    
    return $tableauAssociatif ;
    

 }





 



 function sauvegarderPlacement(array $tableauAssociatif) :void {
      
   $date = date("Y_m_d_H_i_s");

   $filename = '../models/save/save_'.$date.'.csv';

   $file = fopen($filename, 'w');

     //Vérification si le fichier existe ou non 
     if ($file === false) {
      die('Error opening the file ' . $filename);}


       //Récupération des Clés => Valeurs puis les écrits dans le fichiers csv
    foreach ($tableauAssociatif as $key => $value) {
      $tableauAssociatif = array($key,$value);
      fputcsv($file,$tableauAssociatif,"; ");
  }
  
  // fermeture du fichier
  fclose($file);

   



} 









?>