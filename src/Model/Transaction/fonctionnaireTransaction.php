<?php
    require('../Model/Entity/fonctionnaire.php');

    class fonctionnaireTransaction extends fonctionnaire {

        public function add(){
            $conn= new connexion();
            $nom= $this->getNom();
            $pass= $this->getPassword();
            $commune= $this->getCommune();
            
            $sql= $conn->pdo->query("INSERT INTO fonctionnaire(nom,pass,id_commune) VALUES('$nom','$pass','$commune')");
            
        header('Location:AdminController.php');
        }

        public function findAll() {
            $conn= new connexion();
            $sql= $conn->pdo->query("SELECT * FROM fonctionnaire");
            $fonc= $sql->fetchAll();
        return $fonc;
        }

        public function findRegion($id_commune) {
            $conn= new connexion();
            $sql= $conn->pdo->query("SELECT id_region FROM commune WHERE id=$id_commune");
            $idRegion= $sql->fetch();
            $idReg=$idRegion['id_region'];
            $sql2= $conn->pdo->query("SELECT nom FROM region WHERE id=$idReg");
            $region= $sql2->fetch();
            echo $region['nom'];
        }

        public function findNomCommune($id) {
            $conn= new connexion();
            $sql= $conn->pdo->query("SELECT nom FROM commune WHERE id=$id");
            $commune= $sql->fetch();
            echo $commune['nom'];
        }

        public function update() {
            $conn= new connexion();
            $id=$_GET['idF'];
            $nom=$this->getNom();
            $sql= $conn->pdo->query("UPDATE fonctionnaire SET nom='$nom' WHERE id=$id");
        header('Location:AdminController.php');
        }
    }