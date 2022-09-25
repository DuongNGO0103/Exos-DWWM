<?php
include('./batiment.class.php');
class Maison extends Batiment {
private $nbPieces;

public function __construct($adresse,$superficie,$nbPieces)
{
    $this->nbPieces = $nbPieces;
    parent::__construct($adresse);
    $this->superficie = $superficie;

    
    
}

public function __toString()
{
    return parent::__toString(). " Le surperficie est " .$this->superficie. " est le nombre pièces est ". $this->nbPieces;
}



/**
 * Get the value of nbPieces
 */ 
public function getNbPieces()
{
return $this->nbPieces;
}

/**
 * Set the value of nbPieces
 *
 * @return  self
 */ 
public function setNbPieces($nbPieces)
{
$this->nbPieces = $nbPieces;

return $this;
}
}
?>