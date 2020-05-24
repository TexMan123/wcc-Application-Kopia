<?php

    class aproposUserTransaction {

        public function findAll(){
            $conn= new connexion();
            $sql=$conn->pdo->query("SELECT * FROM user WHERE id='".$_SESSION['user']."'");
            $res=$sql->fetch();
        return $res;
        }



    }