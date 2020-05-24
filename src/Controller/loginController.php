<?php
    require('../Model/Transaction/loginTransaction.php');
    require('../Model/Transaction/userTransaction.php');
    
    if(isset($_GET['b2'])) { 
        $login= new loginTransaction();
        $login->setNom($_GET['nom']);
        $login->setPassword($_GET['password']);
        $login->identificationAdmin();     
    }
    if(isset($_GET['b1'])) {
       $user= new userTransaction();
       $user->setId($_GET['numero']);
       $user->identificationUser();
    }

    $title="Fanamarian-tena";
    ob_start();
    require('../View/login/login.html.php');
    $content=ob_get_clean();
    require('../View/base.html.php');
    