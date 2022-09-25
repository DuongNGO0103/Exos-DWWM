<?php

class Livre{

    private $titre;
    private $auteur;
    private $prix;

    public function __construct($x,$y,$z){
    
        $this-> titre = $x;
        $this-> auteur = $y;
        $this-> prix = $z;
    } 

    public function Afficher(){
        echo "Donner le titre : " .$this-> titre;
        echo PHP_EOL;
        echo "Donner l'auteur : " .$this-> auteur;
        echo PHP_EOL;
        echo "Donner le prix " .$this-> prix;
    }



    /**
     * Get the value of titre
     */ 
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set the value of titre
     *
     * @return  self
     */ 
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get the value of auteur
     */ 
    public function getAuteur()
    {
        return $this->auteur;
    }

    /**
     * Set the value of auteur
     *
     * @return  self
     */ 
    public function setAuteur($auteur)
    {
        $this->auteur = $auteur;

        return $this;
    }

    /**
     * Get the value of prix
     */ 
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set the value of prix
     *
     * @return  self
     */ 
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }
}


?>