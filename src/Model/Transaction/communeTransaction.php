<?php

    class communeTransaction {

        public function findAll() {
            $conn= new connexion();
            $sql= $conn->pdo->query("SELECT * FROM commune");
            $communeAll= $sql->fetchAll();    
        return $communeAll;
        }

    }