<?php


class Rectangle {
    /*attributs*/
    private $longeur;
    private $largeur;

    /*methode*/
    public function __construct($x,$y){
        $this-> longeur = $x;
        $this-> largeur = $y;
    }

    
    public function perimetre():float{
        $result = ($this-> largeur + $this-> longeur)*2;
        return $result;
        
        

    }

    public function air():float{
        $result = $this-> longeur * $this-> largeur ;
        return $result;
    }

    public function EstCarre():void{
        if ($this->largeur !== $this->longeur) {
            echo"d'un rectangle";
        }else{
            echo "d'un carré";
        }
    }

    public function AfficherRectangle():void{
        echo "Longeur : " .$this-> longeur.  
        "- Largeur :" .$this-> largeur. 
        "- Périmetre :" .$this-> perimetre(). 
        " - Aire: " .$this-> air(). 
        "Il s'agit " .$this-> EstCarre() ;
    }


    /**
     * Get the value of longeur
     */ 
    public function getLongeur()
    {
        return $this->longeur;
    }

    /**
     * Set the value of longeur
     *
     * @return  self
     */ 
    public function setLongeur($longeur)
    {
        $this->longeur = $longeur;

        return $this;
    }

    /**
     * Get the value of largeur
     */ 
    public function getLargeur()
    {
        return $this->largeur;
    }

    /**
     * Set the value of largeur
     *
     * @return  self
     */ 
    public function setLargeur($largeur)
    {
        $this->largeur = $largeur;

        return $this;
    }
}

?>