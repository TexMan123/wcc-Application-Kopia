<?php
    require('config.php');
    class connexion extends config {
        public $pdo;
        public function connexion() {
            try{
                $this->pdo=new PDO("mysql:host=$this->hostname;dbname=$this->dbname",$this->username,$this->mdp);
             }catch(PDOException $e) { echo "Erreur dans la connexion à la base de données"; }
        }

       
    }