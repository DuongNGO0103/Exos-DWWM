<?php
    include("hotel.php");
    
    //crée les 20 chambres 
    for ($i=1; $i <= 20 ; $i++) {
        $etat = rand()&1; 
        $numero =  $i;
        $listeChambre[$i] = new Chambre($etat);
    } 
    
    //crée l'objet Hotel puis on affiche le menu
    $hotel = new Hotel($listeChambre);    
    $hotel->affichage();
    
    $choix = strToUpper(fgets(STDIN));
    
    while ($choix != 'Q') {
        switch ($choix) {
            case 'A':
                echo $hotel->etatHotel();
                break;
            case 'B':
                $hotel->chambreReserve($etat);
                break;
            case 'C':
                $hotel->chambreLibre($etat);
                break;
            case 'D':
                $hotel->NbPrChambreLibre();
                break;
            case 'E':
                $hotel->NbDrChambreLibre();
                break;
            case 'F':
                $hotel->reserver();
                break;
            case 'G':
                $hotel->liberer();
                break;
            
            default:
                echo "Veuillez saisir un choix valide";
                echo PHP_EOL;
                $choix = strToUpper(fgets(STDIN));
                break;
            }
    }
?>
