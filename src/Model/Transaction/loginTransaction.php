<?php
    require('../Model/Entity/admin.php');
    require('../../config/database.php');
    
    class loginTransaction extends admin {

        public function identificationAdmin(){
            $connex= new connexion();
            $nom=$this->getNom();
            $password=$this->getPassword();
            $sql= $connex->pdo->query("SELECT pass FROM admins WHERE nom='$nom'");
            $res= $sql->fetch();
            if($res['pass'] == $password) {
                
                header('Location:AdminController.php');
            }
            else{
                $sql2= $connex->pdo->query("SELECT pass FROM fonctionnaire WHERE nom='$nom'");
                $res2= $sql2->fetch();
                if(password_verify($password, $res2['pass'])) {
                    $sql3= $connex->pdo->query("SELECT id FROM fonctionnaire WHERE pass='".$res2['pass']."'");
                    $id= $sql3->fetch();
                    session_start();
                    $_SESSION['fonctionnaire']= $id['id'];
                    
                    header('Location:userController.php');
                } else {
                    echo "no";
                }
                
            }
        }

    }