<?php
    include './chambre.php';

    class Hotel{
        //Attributs
        private $listeChambre;
        
        //Methodes
        public function __construct($listeChambre)
        {
            $this->listeChambre = $listeChambre;
        }
        public function affichage():void
        {
            echo" 
            A- Afficher l’état de l’hôtel
            B- Afficher le nombre de chambres réservées
            C- Afficher le nombre de chambres libres
            D- Afficher le numéro de la première chambre vide
            E- Afficher le numéro de la dernière chambre vide
            F- Réserver une chambre
            G- Libérer une chambre
            Q- Quitter
            ";
            echo PHP_EOL; 
        }
        public function etatHotel():string{
            return "Chambre n°:".$this->listeChambre." Libre:".$this->listeChambre->etat."\n";
        }
        public function chambreReserve($etat){
            if($etat = 1){
                $etat = $etat + 1;
            }
            echo $etat." Chambres réservées";
        }
        public function chambreLibre($etat){
            if($etat = 0){
                $etat = $etat + 1;
            }
            echo $etat." Chambres libres";
        }
        public function NbPrChambreLibre(){
            echo "test";
        }
        public function NbDrChambreLibre(){
            echo "test";
        }
        public function reserver(){
            echo "test";
            
        }
        public function liberer(){
            echo "test";

        }
        
        
        /**
         * Get the value of listeChambre
         */ 
        public function getListeChambre()
        {
                return $this->listeChambre;
        }

        /**
         * Set the value of listeChambre
         *
         * @return  self
         */ 
        public function setListeChambre($listeChambre)
        {
                $this->listeChambre = $listeChambre;

                return $this;
        }
    }

?>
