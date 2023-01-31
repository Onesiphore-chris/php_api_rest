<?php
    class Etudiant{
        // Gestions des tables de la base de donne 
        private $table = "etudiants";
        private $connexion = null;

        // Les proprieter le objet edutiant

        public $id;
        public $prenom;
        public $age;
        public $nom;
        public $niveau_id;
        public $niveau_nom;
        public $created_at;


        public function __construct($db)
        {
           if($this->connexion == null){

            $this->connexion = $db;
           }
        }
       
        //Lecture des Etudiants

        public function readAll(){
            //on ecrit la requete
            $sql = "SELECT * FROM ";

             //execute la requette 
            $req = $this->connexion->query($sql);

                // retourne le resultat
            return $req;
        }
    }

    ?>