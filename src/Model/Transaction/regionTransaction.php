<?php
   
    class regionTransaction {

        public function findAll() {
            $conn= new connexion();
            $sql= $conn->pdo->query("SELECT * FROM region");
            $regionAll= $sql->fetchAll();    
        return $regionAll;
        }

    }
    