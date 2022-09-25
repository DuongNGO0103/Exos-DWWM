<?php

    class Chambre{
        private $etat;

        public function __construct($etat)
        {
            $this->etat = $etat;
        }
        public function etatChambre(){
           return $this->getEtat();
        }


        /**
         * Get the value of etat
         */ 
        public function getEtat()
        {
                return $this->etat;
        }

        /**
         * Set the value of etat
         *
         * @return  self
         */ 
        public function setEtat($etat)
        {
                $this->etat = $etat;

                return $this;
        }
    }
?>
