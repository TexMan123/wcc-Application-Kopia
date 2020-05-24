<?php
    require('../Model/Entity/demande.php');

    class demandeTransaction extends demande{

        public function findMaxDate(){
            $conn= new connexion();
            $sql= $conn->pdo->query("SELECT MAX(createdAt) as dateM FROM demande WHERE id_user='".$_SESSION['user']."'");
            $res= $sql->fetch();
            $dateMx=date('Y-m-d', strtotime($res['dateM']));
            $dateMax= strtotime($dateMx); 
            $dateInstant= strtotime(date('Y-m-d'));
            $calcul=ceil(abs($dateInstant - $dateMax) / 86400);
            
            return $calcul;
        }

        public function demande() {
            $conn= new connexion();
            $nombres= $this->getNombres();
            $createdAt= $this->getCreatedAt();
            $reponse= $this->getReponse();
            $user= $this->getUser();

            $sql= $conn->pdo->query("INSERT INTO demande(nombres,createdAt,reponse,id_user) VALUES('$nombres','$createdAt','$reponse','$user')");
        header('Location:aproposUserController.php');
        }
    }