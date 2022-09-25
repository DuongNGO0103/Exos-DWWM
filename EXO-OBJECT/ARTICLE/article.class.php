<?php
class Article {

    private $ref;
    private $designation;
    private $prixHT;
    public static $tva = 20;
/*static est une variable de class et non d'instance*/
/* tous les objects qui découleNT de LA class article seront impacté par la tva*/
/* un attribut static est un attribut qui appartient à la class tous les objects héritent de cette variable*/
    public function __construct($x, $y, $z){
        $this-> ref = $x;
        $this-> designation = $y;
        $this-> prixHT = $z;
    }

    public function calculerPrixTTC(){
       $result = ($this->prixHT + ($this->PrixHT*Article::$tva/100));
       return $result;
    }

    public function afficherArticle(){
         echo $this -> ref;
         echo PHP_EOL;
         echo $this -> designation;
         echo PHP_EOL;
         echo $this -> PrixHT;
         echo PHP_EOL;
        
    }


    /**
     * Get the value of ref
     */ 
    public function getRef()
    {
        return $this->ref;
    }

    /**
     * Set the value of ref
     *
     * @return  self
     */ 
    public function setRef($ref)
    {
        $this->ref = $ref;

        return $this;
    }

    /**
     * Get the value of designation
     */ 
    public function getDesignation()
    {
        return $this->designation;
    }

    /**
     * Set the value of designation
     *
     * @return  self
     */ 
    public function setDesignation($designation)
    {
        $this->designation = $designation;

        return $this;
    }

    /**
     * Get the value of prixHT
     */ 
    public function getPrixHT()
    {
        return $this->prixHT;
    }

    /**
     * Set the value of prixHT
     *
     * @return  self
     */ 
    public function setPrixHT($prixHT)
    {
        $this->prixHT = $prixHT;

        return $this;
    }

    /**
     * Get the value of TVA
     */ 
    public function getTVA()
    {
        return self::$tva;
    }

    /**
     * Set the value of TVA
     *
     * @return  self
     */ 
    public function setTVA($TVA)
    {
        $this->TVA = $TVA;

        return $this;
    }
}
?>