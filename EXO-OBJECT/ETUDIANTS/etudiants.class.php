<?php
class Etudiant{
    private  string $nom;
    private  string $prenom;
    private  $dateNaissance;
    private  int $id;
    public static int $nb = 1;

public function __construct($nom,$prenom,$dateNaissance)
{
    $this->nom = $nom;
    $this->prenom = $prenom;
    $this->dateNaissance = $dateNaissance;
    self::$nb++;
    $this->id = self::$nb;
}

public function __toString()
{
    return "Je suis l'étudiant " .$this->nom. " ". $this->prenom. "ma date de naissance est : ".$this->dateNaissance; 
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
     * Get the value of dateNaissance
     */ 
    public function getDateNaissance()
    {
        return $this->dateNaissance;
    }

    /**
     * Set the value of dateNaissance
     *
     * @return  self
     */ 
    public function setDateNaissance($dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;

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
     * Get the value of nb
     */ 
    public function getNb()
    {
        return $this->nb;
    }

    /**
     * Set the value of nb
     *
     * @return  self
     */ 
    public function setNb($nb)
    {
        $this->nb = $nb;

        return $this;
    }
}
?>