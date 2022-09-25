<?php
class Employe {
    private $matricule;
    private $nom;
    private $prenom;
    private $dateNaissance;
    private $dateEmbauche;
    private $salaire;

   

public function __construct($matricule,$nom,$prenom,$dateNaissance,$dateEmbauche,$salaire)
{
    $this->nom = $nom;
    $this->prenom = $prenom;
    $this->dateNaissance = $dateNaissance;
    $this->dateEmbauche = $dateEmbauche;
    $this->salaire =$salaire;
    $this->matricule = $matricule;;
}

public function age(){

    $this-> dateToday = date("Y-m-d");
    $this-> age = date_diff(date_create($this->dateNaissance), date_create($this->dateToday));
    return $this->age->format('%y'). " ans \n";
    
}

public function anciennete():int{

    $this-> dateToday = date("Y-m-d");
    $this-> anciennete = date_diff(date_create($this->dateEmbauche), date_create($this->dateToday));
    return $this->anciennete->format('%y');
}

public function AugmentationDuSalaire(){

    if ($this->anciennete() < 5) {
       $this->salaire = (1.02) * ($this->salaire);
        return "Salaire " .$this->salaire. "\n";
    } elseif ($this->anciennete() < 10 ){
        $this->salaire = (1.05) * ($this->salaire);
        return "Salaire " .$this->salaire. "\n";
    } else {
        $this->salaire = (1.10) * ($this->salaire);
        return "Salaire " .$this->salaire. "\n";
    }
    
}

public function afficherEmploye(){

    echo "Matricule : " .$this->matricule. "\n";
    echo "Nom Complet : " .strtoupper($this->nom). " ". ucfirst($this->prenom). "\n";
    echo "Age : " .$this->age(). "\n";
    echo "Ancienne : " .$this->anciennete(). "\n";
    echo "Salaire : " .$this->AugmentationDuSalaire(). "\n";
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
     * Get the value of dateEmbauche
     */ 
    public function getDateEmbauche()
    {
        return $this->dateEmbauche;
    }

    /**
     * Set the value of dateEmbauche
     *
     * @return  self
     */ 
    public function setDateEmbauche($dateEmbauche)
    {
        $this->dateEmbauche = $dateEmbauche;

        return $this;
    }

    /**
     * Get the value of salaire
     */ 
    public function getSalaire()
    {
        return $this->salaire;
    }

    /**
     * Set the value of salaire
     *
     * @return  self
     */ 
    public function setSalaire($salaire)
    {
        $this->salaire = $salaire;

        return $this;
    }
}
?>