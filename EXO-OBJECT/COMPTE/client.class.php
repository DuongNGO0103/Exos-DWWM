<?php

class Client {
    private $cni;
    private $nom;
    private $prenom;
    private $tel;

    public function __construct($cni,$nom,$prenom,$tel){
        $this->cni = $cni;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->tel = $tel;
    }

    public function afficher()  {
        echo "CNI:. $this->cni\n";
        echo "Nom :$this->nom\n";
        echo "Prenom : $this->prenom \n";
        echo "Tel : $this->tel\n";
    
    }



    /**
     * Get the value of cni
     */ 
    public function getCni()
    {
        return $this->cni;
    }

    /**
     * Set the value of cni
     *
     * @return  self
     */ 
    public function setCni($cni)
    {
        $this->cni = $cni;

        return $this;
    }

    /**
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of prenom
     */ 
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set the value of prenom
     *
     * @return  self
     */ 
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get the value of tel
     */ 
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Set the value of tel
     *
     * @return  self
     */ 
    public function setTel($tel)
    {
        $this->tel = $tel;

        return $this;
    }
}



?>