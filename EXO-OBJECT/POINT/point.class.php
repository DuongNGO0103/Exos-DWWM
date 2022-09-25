<?php
class Point {

    private $abcisse;
    private $ordonnee;

    public function __construct($x,$y){
        $this-> abcisse = $x;
        $this-> ordonnee = $y;
    }

    /* methode */
    public function norme():string{
        $result = sqrt(($this-> abcisse **2 ) + ($this-> ordonnee**2));
        return $result;
        
    }
    

    /**
     * Get the value of abcisse
     */ 
    public function getAbcisse()
    {
        return $this->abcisse;
    }

    /**
     * Set the value of abcisse
     *
     * @return  self
     */ 
    public function setAbcisse($abcisse)
    {
        $this->abcisse = $abcisse;

        return $this;
    }

    /**
     * Get the value of ordonnee
     */ 
    public function getOrdonnee()
    {
        return $this->ordonnee;
    }

    /**
     * Set the value of ordonnee
     *
     * @return  self
     */ 
    public function setOrdonnee($ordonnee)
    {
        $this->ordonnee = $ordonnee;

        return $this;
    }

    
}





?>