<?php
include('./client.class.php');

class Compte{
    //ATTRIBUTS
    private Client $client;
    private int $solde =0;
    private int $code;
    //Attribut static initialisé à 1 qui nous permettra d'attribuer les numéro de compte 
    //à chaque nouvelle Objet créer
    public static int $nombreCpt = 0;
    
    //METHODES
    public function __construct($cni, $nom, $prenom, String $tel, $solde){
        $this->client = new Client($cni, $nom, $prenom, $tel);

        $this->solde = $solde ;
        
        self::$nombreCpt++;
        $this->code = self::$nombreCpt;
    }
    public function crediter($somme)
    {
         $this->solde += $somme;
        
    }
        // SOMME DEBITER SUR LE COMPTE DE FIDEL
        // SOMME CREDITER SUR LE COMPTE D'AISSE
    public function crediterCpt($somme, Compte $compte)
    {
        $this->solde -=$somme;
        $compte->setSolde($somme += $compte->getSolde());
    }

    public function debiter($somme){
        $this->solde -= $somme ;
    }
    public function debiterCpt($somme,Compte $compte){
        $this->solde +=$somme;
        $compte->setSolde($somme -= $compte-> getSolde());
        
    }

    public function afficherResume(){

        echo "********\n";
        echo "Numéro de compte : " .$this->code. "\n";
        echo "Solde de compte : " .$this->solde. "\n";
        echo $this->client->afficher();

    }

    



    /**
     * Get the value of client
     */ 
    public function getClient()
    {
        return $this->client;
    }

    /**
     * Set the value of client
     *
     * @return  self
     */ 
    public function setClient($client)
    {
        $this->client = $client;

        return $this;
    }

    /**
     * Get the value of solde
     */ 
    public function getSolde()
    {
        return $this->solde;
    }

    /**
     * Set the value of solde
     *
     * @return  self
     */ 
    public function setSolde($solde)
    {
        $this->solde = $solde;

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
}
?>