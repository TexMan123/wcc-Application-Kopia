<?php
    require_once('../Model/Entity/user.php');

class userTransaction extends user{

    public function identificationUser() {
        $conn= new connexion();
        $id=$this->getId();
        $sql=$conn->pdo->query("SELECT id FROM user WHERE id='$id'");
        if($res= $sql->fetch()) {
            session_start(); 
            $_SESSION['user']= $id;
           header('Location:aproposUserController.php');
        } else {"FAUX"; }
    }

    public function addUser() {
        $conn= new connexion();
        $nom=$this->getNom();
        $prenom=$this->getPrenom();
        $sexe=$this->getSexe();
        $dateN=$this->getDateN();
        $lieuN=$this->getLieuN();
        $heureN=$this->getHeureNais();
        $pere=$this->getPere();
        $lieuNP=$this->getLieuNP();
        $dateNP=$this->getDateNP();
        $mere=$this->getMere();
        $lieuNM=$this->getLieuNM();
        $dateNM=$this->getDateNM();
        $commune=$this->getCommune();
        $createdAt= "2020-05-22";
        $createdTime=date('H:i');

        $sql= $conn->pdo->query("INSERT INTO user(nom,prenom,sexe,pere,lieuNaisP,dateNP,mere,lieuNaisM,dateNM,DateN,lieuNais,heure,id_commune,createdAt,createdTime) VALUES('$nom','$prenom','$sexe','$pere','$lieuNP','$dateNP','$mere','$lieuNM','$dateNM','$dateN','$lieuN','$heureN','$commune','$createdAt','$createdTime')");
    header('Location:userController.php');
        
    }
    public function findAllUser() {
        $conn=new connexion();
        $sql= $conn->pdo->query("SELECT * FROM user");
        $user=$sql->fetchAll();
    return $user;
    }

    public function findCommune() {
        $conn= new connexion();
        $idFonc= $_SESSION['fonctionnaire'];
        $sql=$conn->pdo->query("SELECT id_commune FROM fonctionnaire WHERE id=$idFonc");
        $com= $sql->fetch();
        $idCom= $com['id_commune'];
        $sql2= $conn->pdo->query("SELECT nom FROM commune WHERE id=$idCom");
        $commune= $sql2->fetch();
        
        return $commune;
    }


    public function findUser() {
        $conn= new connexion();
        $idFonc= $_SESSION['fonctionnaire'];
        $sql=$conn->pdo->query("SELECT id_commune FROM fonctionnaire WHERE id=$idFonc");
        $com= $sql->fetch();
        $idCom= $com['id_commune'];
        $sql2= $conn->pdo->query("SELECT * FROM user WHERE id_commune=$idCom");
        $user= $sql2->fetchAll();
        
        return $user;
    }
    
    public function findAllDemande($id) {
        $conn= new connexion();
        $sql= $conn->pdo->query("SELECT * FROM demande WHERE id_user=$id");
        $demande= $sql->fetchAll();
    return $demande;
    }

}