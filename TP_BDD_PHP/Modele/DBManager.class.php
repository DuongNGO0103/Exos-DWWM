<?php

	class DBManager
    {   private $bdd;

        //constructeur qui initialise la connxion à la BDD
        public function __construct()
        {
            //tao mot bien bdd, va bien nay se tien hanh goi data tu PDO
           $this->bdd = new PDO('mysql:host=localhost;dbname=emploi;charset=utf8mb4', 'root', '');
        }
        //mot methode de goi danh sach tu DBB
        //Methode qui renvoie la liste des employés: etape1: appeler ListeEmploye
	    public function selectListeEmploye() : array
        {
            //lay gia tri cua bdd THONG QUA SELECT * FROM 
            $stmt= $this->bdd->prepare("SELECT * FROM `emp`; ");
            $stmt->execute();
            
            $listEmploi = $stmt->fetchAll();
            return $listEmploi;
        }

   
        //methode qui ajoute un employé
        public function insertEmploye($nom, $prenom, $emploi,$sup, $embauche, $sal, $comm, $noserv) : void {
            $sql = "INSERT INTO emp (nom, prenom, emploi,sup, embauche, sal, comm, noserv) VALUES (?,?,?,?,?,?,?,?)";
            $stmt= $this->bdd->prepare($sql);
            $stmt->execute([$nom, $prenom, $emploi,$sup, $embauche, $sal, $comm, $noserv]);
         
        }

        //methode qui supprime un employe par son noemp
        public function supprEmploye($noemp) : void {
            $sql = "DELETE FROM emp WHERE noemp=?";
            $stmt= $this->bdd->prepare($sql);
            $stmt->execute([$noemp]);
        }

        //methode qui mets à jour le salaire d'un amployé
        public function updateSalaireEmploye($noemp, $sal) : void {
            $sql = "UPDATE emp SET sal=? WHERE noemp=?";
            $stmt= $this->bdd->prepare($sql);
            $stmt->execute([$sal,$noemp]);
        }

    }
