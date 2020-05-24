<?php

    class copieTransaction {

        public function findUser(){
            $conn= new connexion();
            $user= $_GET['id'];

            $sql=$conn->pdo->query("SELECT * FROM user WHERE id=$user");
            $us= $sql->fetch();

        return $us;
        }

        public function envoyer() {
            $conn= new connexion();
            if(isset($_GET['b1'])) {
                $signature= $_GET['signature'];
                $user=$_GET['id'];
                $demande=$_GET['demande'];

                $sql=$conn->pdo->query("INSERT INTO signatures(signe,demande,id_user) VALUES('$signature','$demande','$user')");

                $sql2=$conn->pdo->query("UPDATE demande SET reponse=1 WHERE id=$demande");
            header('Location:listeDemUFController.php');
            }
            
        }

    }