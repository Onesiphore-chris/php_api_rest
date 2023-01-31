<?php

    
    class Database{
        // proprieter de connection a la base de donnee 
    private $host = "localhost";
    private $dbname = "php_api_rest";
    private $username = "root";
    private $password = "";
        


    // connexion a la base de donnee

            public function getConnexion()
            {

            $dbb = null;

            try {
                $dbb = new PDO("mysql:host=$this->host;dbname=$this->dbname;charset=utf8", $this->username,$this->password,
                [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
                ]
            );
            } catch (\PDOException $e) {
                echo"Erreur de connexion :" .$e->getMessage();

            }
            return $dbb;
        }

     }

?>