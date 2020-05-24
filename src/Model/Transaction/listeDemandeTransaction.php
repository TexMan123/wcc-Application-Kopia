<?php

class listeDemande {

    public function findUser(){
        $conn= new connexion();
        $user= $_SESSION['user'];

        $sql=$conn->pdo->query("SELECT * FROM user WHERE id=$user");
        $us= $sql->fetch();

    return $us;
    }

    public function findAllDemande() {
        $conn= new connexion();
        $user= $_SESSION['user'];
        $sql= $conn->pdo->query("SELECT * FROM demande WHERE id_user=$user");
        $demande= $sql->fetchAll();
    return $demande;
    }


}