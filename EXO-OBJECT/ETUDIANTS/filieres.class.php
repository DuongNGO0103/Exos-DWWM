<?php
include('./etudiants.class.php');
class Filiere{
   
    private int $id ;
    public static int $nb = 0;
    private string $code ;
    private  string $libelle ;
    private array $tab;

    public function __construct($code,$libelle,$tab)
    {
        
        self::$nb++;
        $this->id = self::$nb;
        $this->code = $code;
        $this->libelle = $libelle;
        $this->tab = $tab;
    }

    public function __toString()
{
        echo "Filière : ". $this->libelle . "\n";
    foreach ( $this->tab   as $value) {

        echo  $value ;
        echo PHP_EOL;
    }
return "";

    
}


    /**
     * Get the value of tab
     */ 
    public function getTab()
    {
        return $this->tab;
    }

    /**
     * Set the value of tab
     *
     * @return  self
     */ 
    public function setTab($tab)
    {
        $this->tab = $tab;

        return $this;
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of code
     */ 
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set the value of code
     *
     * @return  self
     */ 
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get the value of libelle
     */ 
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set the value of libelle
     *
     * @return  self
     */ 
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }
}
?>