
<?php





//function prenant en parametre 2 tableau simple (lise des places,liste des stagiaires) melange aleatoirement 
//puis renvoie un tableau
function genererPlacement(array $places, array $listeStag):array{

    shuffle($listeStag);
    for ($i=0; $i < sizeof($places); $i++) { 
        
        $tabPlacement[$places[$i]] = $listeStag[$i];
    }
    return $tabPlacement;
};    


//prend le parametre le tableau associatif melangé et le sauvegarde dans un fichier CSV sur le disque dur
//le nom du fichier doit etre sous le format 'save_datetime'.csv
function sauvegarderPlacement(array $tabPlacement):void{
    

    date_default_timezone_set("Europe/Paris");
    $saveDate = fopen('..\ctrl\save\save_datetime'.date('d-m-Y\TH-i-s').'.csv', 'wt');

    foreach ($tabPlacement as $places => $listeStag) {
        fputcsv($saveDate,array($places." ; ".$listeStag));
    }
        fclose($saveDate);
};  







?>



    
    








