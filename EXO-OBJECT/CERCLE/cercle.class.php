<?php
require_once('../POINT/point.class.php');
class Cercle{

    private int $rayon;
    private  Point $centre;


    public function __construct($rayon,$abscisse,$ordonne){
        $this-> rayon = $rayon;
        $this-> centre = new Point ($abscisse,$ordonne);
    }

    public function perimetre():float{
        $peri = 2 * M_PI * $this->rayon;
        return $peri;
    }

    public function getsurface():float{
        $aire = $this->rayon * $this->rayon * M_PI;
        return $aire ;
    }

    public function appartient(Point $p){
        $p1 = ($p->getAbcisse() * $p->getAbcisse()) + ($p->getOrdonnee() * $p->getOrdonnee());
        if ($p1 === M_PI) {
            echo "Le point appartient au cercle";
        } else {
            echo "Le point n'appartient pas au cercle";
        }
    }

    public function afficher(){
       echo "CERCLE (" .$this->centre->getAbcisse().",".$this->centre->getOrdonnee().", ".$this->rayon.")";
        
    }
    

    

    /**
     * Get the value of rayon
     */ 
    public function getRayon()
    {
        return $this->rayon;
    }

    /**
     * Set the value of rayon
     *
     * @return  self
     */ 
    public function setRayon($rayon)
    {
        $this->rayon = $rayon;

        return $this;
    }

    /**
     * Get the value of centre
     */ 
    public function getCentre()
    {
        return $this->centre;
    }

    /**
     * Set the value of centre
     *
     * @return  self
     */ 
    public function setCentre($centre)
    {
        $this->centre = $centre;

        return $this;
    }
}

?>